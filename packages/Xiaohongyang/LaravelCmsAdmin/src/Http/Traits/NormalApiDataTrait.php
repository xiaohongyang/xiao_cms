<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang 258082291@qq.com
 * Date: 2017/12/28 0028
 * Time: 14:15
 */

namespace Xiaohongyang\LaravelCmsAdmin;


trait NormalApiDataTrait
{

    protected $code;
    protected $data;
    protected $error;


    #region ** set and get **
    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

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

    #endregion

}