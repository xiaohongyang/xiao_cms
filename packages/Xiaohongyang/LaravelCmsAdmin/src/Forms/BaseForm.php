<?php

namespace Xiaohongyang\LaravelCmsAdmin\Forms;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;
use Xiaohongyang\LaravelCmsAdmin\Model\ArticleType;
use Xiaohongyang\LaravelCmsAdmin\Service\BaseService;

class BaseForm extends Form
{

    /**
     * @var BaseService;
     */
    protected $service;

    /**
     * @return BaseService
     */
    public function getService(): BaseService
    {
        if(empty($this->service)){
            $this->service = new BaseService(new ArticleType());
        }
        return $this->service;
    }

    /**
     * @param BaseService $service
     */
    public function setService(BaseService $service)
    {
        $this->service = $service;
    }


    public function create($postData){

        $rs = $this->getService()->create($postData);
        return $rs;
    }

    public function update($postData){

        $rs = $this->getService()->update($postData);
        return $rs;
    }

}
