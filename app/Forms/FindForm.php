<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class FindForm extends Form
{
    public function buildForm()
    {
        $this->add('name','text',[
            'label' => false,
            'attr' => ['class' =>'form-control col-md-8','placeholder' => 'insert url']
        ]);
        $this->add('submit','submit',[
            'label' => 'find',
            'attr' => ['class' =>'btn btn-primary col-md-4']
        ]);
    }
}
