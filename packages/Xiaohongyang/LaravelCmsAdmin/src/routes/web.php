<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang 258082291@qq.com
 * Date: 2019/5/29
 * Time: 11:10
 */

use \Illuminate\Support\Facades\Route;



Route::namespace('Xiaohongyang\LaravelCmsAdmin\Controllers')->group(function(){

    \Illuminate\Support\Facades\Route::prefix("admin")->middleware('web')->group(function(){

            Route::get("/", 'IndexController@index');
            Route::get("/article-type/index", 'ArticleTypeController@index')->name('article_type.index');
            Route::get("/article-type/search", 'ArticleTypeController@search')->name("article_type.search");;
            Route::get("/article-type/edit", 'ArticleTypeController@edit')->name("article_type.edit");;
            Route::get("/article-type/detail", 'ArticleTypeController@detail')->name("article_type.detail");
            Route::get("/article-type/delete", 'ArticleTypeController@delete')->name("article_type.delete");;
            Route::get("/article-type/create", 'ArticleTypeController@create')->name("article_type.create");
            Route::post("/article-type/create", 'ArticleTypeController@create')->name("article_type.create");


            Route::get("/article/index", 'ArticleController@index');
            Route::get("/article/search", 'ArticleController@search');
    });
}) ;