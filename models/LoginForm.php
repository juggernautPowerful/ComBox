<?php

namespace app\models;

use dektrium\user\models\LoginForm as BaseLoginForm;

class LoginForm extends BaseLoginForm{
    
    public function rules(){
        $rules = parent::rules();
        $rules[] = ['login', 'string', 'min' => 5, 'max' => 200];
        return $rules;       
    }
}
