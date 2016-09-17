<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ViewAllClient */

$this->title = 'Update View All Client: ' . $model->id_client;
$this->params['breadcrumbs'][] = ['label' => 'View All Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_client, 'url' => ['view', 'id' => $model->id_client]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="view-all-client-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
