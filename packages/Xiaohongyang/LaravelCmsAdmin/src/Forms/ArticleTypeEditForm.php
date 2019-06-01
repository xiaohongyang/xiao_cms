<?php

namespace Xiaohongyang\LaravelCmsAdmin\Forms;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;
use Xiaohongyang\LaravelCmsAdmin\Model\ArticleType;
use Xiaohongyang\LaravelCmsAdmin\Service\ArticleTypeService;

class ArticleTypeEditForm extends Form
{

    /**
     * @var ArticleTypeService;
     */
    protected $service;

    /**
     * @return ArticleTypeService
     */
    public function getService(): ArticleTypeService
    {
        if(empty($this->service)){
            $this->service = new ArticleTypeService(new ArticleType());
        }
        return $this->service;
    }

    /**
     * @param ArticleTypeService $service
     */
    public function setService(ArticleTypeService $service)
    {
        $this->service = $service;
    }


    public function buildForm()
    {
        $this
            ->add('title', Field::TEXT, [
                'rules' => 'required'
            ])
            ->add('desc', Field::TEXTAREA)
            ->add('publish', Field::CHECKBOX);
        $this->add('submit', 'submit');
    }

    public function save($postData){

        $rs = $this->getService()->create($postData);
        return $rs;
    }

}
