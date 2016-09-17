<?php

namespace app\controllers;
use Yii;

class AdministratorController extends \yii\web\Controller
{
    public $layout = "leftPane";
    
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function init() {

        parent::init();
    }
}
