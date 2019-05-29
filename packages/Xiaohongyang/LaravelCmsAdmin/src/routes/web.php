<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang 258082291@qq.com
 * Date: 2019/5/29
 * Time: 11:10
 */

use \Illuminate\Support\Facades\Route;

Route::namespace('Xiaohongyang\LaravelCmsAdmin\Controllers')->group(function(){
    \Illuminate\Support\Facades\Route::prefix("admin")->group(function(){

        Route::get("/", 'IndexController@index');
        Route::get("/article-type", 'ArticleTypeController@index');
    });
}) ;