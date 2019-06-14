<?php

namespace Xiaohongyang\LaravelCmsAdmin\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Kris\LaravelFormBuilder\FormBuilder;
use Mockery\Generator\Method;
use Xiaohongyang\LaravelCmsAdmin\Breadcrumb;
use Xiaohongyang\LaravelCmsAdmin\DataTable\ArticleTypeDataTable;
use Xiaohongyang\LaravelCmsAdmin\Forms\ArticleCreateForm;
use Xiaohongyang\LaravelCmsAdmin\Forms\ArticleTypeCreateForm;
use Xiaohongyang\LaravelCmsAdmin\Forms\ArticleTypeEditForm;
use Xiaohongyang\LaravelCmsAdmin\Forms\BaseForm;
use Xiaohongyang\LaravelCmsAdmin\Model\ArticleType;
use Xiaohongyang\LaravelCmsAdmin\Service\ArticleTypeService;
use Yajra\DataTables\DataTables;

/**
 * Created by PhpStorm.
 * User: xiaohongyang 258082291@qq.com
 * Date: 2019/5/29
 * Time: 11:16
 */
class ArticleTypeController extends BaseController
{

    /**
     * @var ArticleTypeService
     */
    protected $service;

    public function __construct()
    {
        $this->service = new ArticleTypeService(new ArticleType());
    }


    /**
     * 列表页
     * @user : xiaohongyang 258082291@qq.com
     */
    public function index(Request $request){

        $page = $request->get("page",1);

        $this->service->setQueryRelation(['hasManyArticle']);
        $this->service->setOrderBy("updated_at desc");
        $paginator = $this->service->getPageList($page, $this->pageAmount);

        $breadcrumb = [

            new Breadcrumb('类别管理', \route("article_type.index")),
            new Breadcrumb('类别列表')
        ];
        $this->setBreadcrumb($breadcrumb);

        return $this->view(['paginator' => $paginator]);
    }

    /**
     * 列表页，含搜索功能
     * @user : xiaohongyang 258082291@qq.com
     * @param Request $request
     * @param \Yajra\DataTables\Facades\DataTables $dataTables
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function search(Request $request, \Yajra\DataTables\Facades\DataTables $dataTables){

        $query = $this->service->getPrevPageListQuery();
        $a = new ArticleTypeDataTable();

        return $a->eloquent($query)
            ->addColumn("action", function(ArticleType $model){

                $action = [
                    [
                        'action_name' => 'detail',
                        'route' =>\route("article_type.detail",['id' => $model->id]),
                        'attribute' => [
                            'class' => 'btn btn-xs btn-primary',
                        ],
                        'text' => '查看'
                    ],[
                        'action_name' => 'edit',
                        'route' => 'javascript:void(0)',
                        'attribute' => [
                            'class' => 'btn btn-xs btn-primary btn-modal-frame',
                            'data-href' => \route("article_type.edit", ['id' => $model->id]),
                            'data-title' => "类别编辑"

                        ],
                        'text' => '编辑'
                    ],[
                        'action_name' => 'delete',
                        'route' => 'javascript:void(0)',
                        'attribute' => [
                            'class' => 'btn btn-xs btn-primary btn-delete',
                            'data-href' => \route("article_type.delete", ['id' => $model->id]),
                            'data-obj-name' => $model->title
                        ],
                        'text' => '删除'
                    ],
                ];
                    return $this->view(['model' => $model, 'action' => $action], "layout.datatable_action");;
            })
                /*"
                    <button class='btn btn-primary btn-xs'><span class='fa fa-plug'></span>创建</button>
                    <a href='". route("article_type.edit",['id' => 3    ]) ."' class='btn btn-success btn-xs'><span class='fa fa-pencil'></span>编辑</a>      
                ")*/
            //->addColumn("action",   function($item){ return $item->title; })
            ->make(true);
            /*->addColumn('title', function (User $user) {
                return $user->posts->map(function ($post) {
                    return str_limit($post->title, 30, '...');
                })->implode('<br>');
            })
            ->make(true);*/

    }


    /**
     * @user : xiaohongyang 258082291@qq.com
     * @param Request $request
     * @param FormBuilder $formBuilder
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function create(Request $request,FormBuilder $formBuilder){

        $breadcrumb = [

            new Breadcrumb('类别管理', \route("article_type.index")),
            new Breadcrumb('类别列表')
        ];
        $this->setBreadcrumb($breadcrumb);

        /**
         * @var $form BaseForm
         */
        $form = $formBuilder->create(ArticleTypeCreateForm::class, [
            'method' => 'POST',
            //'url' => route('song.store')
        ]);

        if($request->isMethod(Request::METHOD_POST)){

            if (!$form->isValid()){
                return redirect()->back()->withErrors($form->getErrors())->withInput();
            } else if(!$form->create($request->post())){
                return redirect()->back()->withErrors($form->getService()->getError())->withInput();
            } else {

                $request->session()->flash("message", "添加成功");
                //点击确定后回调js
                $request->session()->flash("modal_ok_callback",
                    "   
                  //1.刷新datatables数据  
                  $('.hidden-btn-trigger-datatable-ajax-reload',window.top.document).trigger('click');
                  //2.关闭当前弹出frame窗口
                  $('body',document.parent).xhy.modal.hide('frame');
              ");
                return $this->view([], "component.success");
                //添加成功跳转到列表页
                return redirect()->to(URL::route("article_type.index"));
            }
        }
        return $this->view( ['form'=>$form] );
    }


    public function edit(Request $request, FormBuilder $formBuilder){


        $id = $request->get('id');
        $model = $this->service->getModel()->newQuery()->find($id);
        $form = $formBuilder->create(ArticleTypeCreateForm::class, [
            'method' => 'POST',
            'model' => $model
        ]);

        if($request->isMethod(Request::METHOD_POST)){
            $this->service->setModel($model);
            $rs = $this->service->update($request->post());
            if($rs){

                $request->session()->flash("message", "编辑成功");
                //点击确定后回调js
                $request->session()->flash("modal_ok_callback",
                "   
                  //1.刷新datatables数据
                  $('.hidden-btn-trigger-datatable-ajax-reload',window.top.document).trigger('click');
                  //2.关闭当前弹出frame窗口
                  $('body',document.parent).xhy.modal.hide('frame');
              ");
                return $this->view([], "component.success");
            }
        }
        return $this->view(['form' => $form]);
    }

    public function delete(Request $request){

        $rs = $this->service->delByPrimaryKey($request->get('id'));
        if(!$rs){

            return $this->json_result(0,$this->service->getError()?:"删除失败");
        } else{

            return $this->json_result(1,"success");
        }
    }

    public function detail(Request $request, FormBuilder $formBuilder){
        $model = $this->service->getByPrimaryId($request->get('id'));

        $form = $formBuilder->create(ArticleTypeCreateForm::class, [
            'method' => 'POST',
            'model' => $model
        ]);
        return $this->view(['model' => $model, 'form'=>$form]);
    }
}