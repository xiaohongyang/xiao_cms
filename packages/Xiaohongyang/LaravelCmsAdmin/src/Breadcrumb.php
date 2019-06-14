<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang 258082291@qq.com
 * Date: 2019/6/11
 * Time: 7:39
 */

namespace Xiaohongyang\LaravelCmsAdmin;


class Breadcrumb
{

    public $text;
    public $url;

    public function __construct($text, $url='javascript:void(0)')
    {
        $this->text = $text;
        $this->url = $url;
    }

}