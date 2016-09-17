<?php

namespace app\models;

use dektrium\user\models\RegistrationForm as BaseRegistrationForm;

class RegistrationForm extends BaseRegistrationForm{
    
    public function rules(){
        $rules = parent::rules();
        $rules[] = ['username', 'string', 'min' => 4, 'max' => 200];
        return $rules;       
    }
}

