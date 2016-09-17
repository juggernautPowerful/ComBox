<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ViewAllClient */

$this->title = 'Create View All Client';
$this->params['breadcrumbs'][] = ['label' => 'View All Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="view-all-client-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
