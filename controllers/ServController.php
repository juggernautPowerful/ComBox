<?php

namespace app\controllers;

class ServController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
