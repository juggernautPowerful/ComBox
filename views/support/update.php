<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Client */

$this->title = 'Редактирование клиента: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Клиент', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id_client]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>


    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
    <div class="col-sm-12 col-md-12 ">
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body"> 
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

            </div>
        </div>
    </div>
</div>
