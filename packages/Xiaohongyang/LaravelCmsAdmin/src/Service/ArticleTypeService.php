<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang 258082291@qq.com
 * Date: 2019/5/29
 * Time: 18:23
 */

namespace Xiaohongyang\LaravelCmsAdmin\Service;


use Xiaohongyang\LaravelCmsAdmin\Model\ArticleType;

class ArticleTypeService extends BaseService
{
    /**
     * ArticleTypeService constructor.
     * @param ArticleType $model
     */
    public function __construct($model = null)
    {
        parent::__construct($model);
    }


    public function delByPrimaryKey($value){

        $rs = false;
        $this->setModel($this->getByPrimaryId($value));
        if(!$this->getModel()){
            $this->setError("数据不存在或已被删除");
        } else {
            $rs = $this->getModel()->delete();
        }
        return $rs;
    }


}