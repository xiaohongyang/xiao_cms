<?php

namespace Xiaohongyang\LaravelCmsAdmin\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Xiaohongyang\LaravelCmsAdmin\Model\ArticleType;
use Xiaohongyang\LaravelCmsAdmin\Service\ArticleTypeService;

/**
 * Created by PhpStorm.
 * User: xiaohongyang 258082291@qq.com
 * Date: 2019/5/29
 * Time: 11:16
 */
class IndexController extends BaseController
{

    public function index(){

        $service = new ArticleTypeService();
        $service->setModel(new ArticleType());
        $service->setOrderBy("id desc");
        $con = DB::connection();
        $con->enableQueryLog();
        $paginate = $service->getPageList(1, 2);
        $rs = $paginate;
        print_r(DB::getQueryLog());


//        $service->setModel(new ArticleType());
//        $rs = $service->create(["title" => 'test2']);
        print_r($rs);




        //$service->setModel($type);

        //$rs = $service->update(['parent_id' => 99]);
//        print_r($rs);
//        print_r($service->getError());



        return $this->view();
    }
}