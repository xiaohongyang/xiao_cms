<?php

namespace Xiaohongyang\LaravelCmsAdmin\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Kris\LaravelFormBuilder\FormBuilder;
use Xiaohongyang\LaravelCmsAdmin\Forms\ArticleCreateForm;
use Xiaohongyang\LaravelCmsAdmin\Forms\ArticleTypeCreateForm;
use Xiaohongyang\LaravelCmsAdmin\Model\ArticleType;
use Xiaohongyang\LaravelCmsAdmin\Service\ArticleTypeService;

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

        DB::enableQueryLog();
        $paginator = $this->service->getPageList($page, $this->pageAmount);
        print_r(DB::getQueryLog());

        return $this->view(['paginator' => $paginator]);
    }


    public function search(Request $request){

        $page = $request->get("page",1);
        $amount = 10;
        $data = $this->service->getPageList($page, 10);

        $json_data = [
            'data' => $data->items(),
            'page' => [
                'current_page' => $data->currentPage(),
                'last_page' => $data->lastPage(),
                'next_page' => $data->nextPageUrl(),
                'prev_page' => $data->previousPageUrl(),
                'total' => $data->total()
            ]
        ];
        return response()->json($json_data);

    }


    public function create(Request $request,FormBuilder $formBuilder){


        $form = $formBuilder->create(ArticleTypeCreateForm::class, [
            'method' => 'POST',
            //'url' => route('song.store')
        ]);

        if($request->isMethod(Request::METHOD_POST)){

            if (!$form->isValid()){
                return redirect()->back()->withErrors($form->getErrors())->withInput();
            } else if(!$form->save($request->post())){
                return redirect()->back()->withErrors($form->getService()->getError())->withInput();
            } else {
                //添加成功跳转到列表页
                return redirect()->to(URL::route("article_type.index"));
            }
        }

        return $this->view( ['form'=>$form] );
    }



    public function update(){

        $this->view();
    }

    public function delete(){

    }
}