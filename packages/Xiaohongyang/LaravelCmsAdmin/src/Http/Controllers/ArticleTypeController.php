<?php

namespace Xiaohongyang\LaravelCmsAdmin\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $paginator = $this->service->getPageList($page, $this->pageAmount);


        return $this->view(['paginator' => $paginator]);
    }

    public function create(){

        $this->view();
    }

    public function update(){

        $this->view();
    }

    public function delete(){

    }
}