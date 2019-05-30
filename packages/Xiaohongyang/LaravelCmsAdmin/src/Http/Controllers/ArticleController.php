<?php

namespace Xiaohongyang\LaravelCmsAdmin\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Xiaohongyang\LaravelCmsAdmin\Model\Article;
use Xiaohongyang\LaravelCmsAdmin\Model\ArticleType;
use Xiaohongyang\LaravelCmsAdmin\Service\ArticleService;
use Xiaohongyang\LaravelCmsAdmin\Service\ArticleTypeService;

/**
 * Created by PhpStorm.
 * User: xiaohongyang 258082291@qq.com
 * Date: 2019/5/29
 * Time: 11:16
 */
class ArticleController extends BaseController
{

    /**
     * @var ArticleService
     */
    protected $service;

    public function __construct()
    {
        $this->service = new ArticleService(new Article());
    }


    /**
     * 列表页
     * @user : xiaohongyang 258082291@qq.com
     */
    public function index(Request $request){

        $page = $request->get("page",1);
        $amount = 10;
        $data = $this->service->getPageList($page, 10);
        $this->view();
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

    public function create(){

        $this->view();
    }

    public function update(){

        $this->view();
    }

    public function delete(){

    }
}