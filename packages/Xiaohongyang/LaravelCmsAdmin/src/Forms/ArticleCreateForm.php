<?php

namespace Xiaohongyang\LaravelCmsAdmin\Forms;

use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class ArticleCreateForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', Field::TEXT, [
                'rules' => 'required'
            ])
            ->add('lyrics', Field::TEXTAREA)
            ->add('publish', Field::CHECKBOX);
        $this->add('submit', 'submit');
    }


}
