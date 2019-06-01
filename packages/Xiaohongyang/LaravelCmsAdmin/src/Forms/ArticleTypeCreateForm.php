<?php

namespace Xiaohongyang\LaravelCmsAdmin\Forms;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;
use Xiaohongyang\LaravelCmsAdmin\Model\ArticleType;
use Xiaohongyang\LaravelCmsAdmin\Service\ArticleTypeService;

class ArticleTypeCreateForm extends BaseForm
{


    public function buildForm()
    {
        $this
            ->add('id', Field::HIDDEN)
            ->add('title', Field::TEXT, [
                'rules' => 'required'
            ])
            ->add('desc', Field::TEXTAREA)
            ->add('publish', Field::CHECKBOX);
        $this->add('submit', 'submit');
    }

}
