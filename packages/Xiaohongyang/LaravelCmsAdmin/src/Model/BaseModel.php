<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang 258082291@qq.com
 * Date: 2019/5/29
 * Time: 18:33
 */

namespace Xiaohongyang\LaravelCmsAdmin\Model;


use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Facades\Validator;

class BaseModel extends Model
{

    public $error;

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param mixed $error
     */
    public function setError($error)
    {
        $this->error = $error;
    }


    /***
     * 添加数据验证规则
     * @var array
     */
    protected $insertDataRule = [];

    /**
     * 获取添加数据验证规则
     * @return array
     */
    public function getInsertDataRule()
    {
        return $this->insertDataRule;
    }

    /**
     * 设置添加数据验证规则
     * @param array $insertDataRule
     */
    public function setInsertDataRule($insertDataRule)
    {
        $this->insertDataRule = $insertDataRule;
    }

    /**
     * 添加数据验证规则
     * @user : xiaohongyang 258082291@qq.com
     */
    public function insertDataValid(){

        $validator = Validator::make($this->toArray(), $this->getInsertDataRule());
        $result = false;
        if($validator->fails()){
            $this->setError($validator->errors()->getMessages());
        } else {
            $result = true;
        }
        return $result;
    }

    /**
     * 主键字段
     * @user : xiaohongyang 258082291@qq.com
     * @return string
     */
    public function getPrimaryKey(){
        return $this->primaryKey;
    }

}