<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_client') ?>

    <?= $form->field($model, 'position') ?>

    <?= $form->field($model, 'surname') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'patrname') ?>

    <?php // echo $form->field($model, 'signer_surname') ?>

    <?php // echo $form->field($model, 'signer_name') ?>

    <?php // echo $form->field($model, 'signer_partname') ?>

    <?php // echo $form->field($model, 'legal_address') ?>

    <?php // echo $form->field($model, 'checking_account') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'class_id_class') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'ip') ?>

    <?php // echo $form->field($model, 'login') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'TIN') ?>

    <?php // echo $form->field($model, 'CRAT') ?>

    <?php // echo $form->field($model, 'PSRN') ?>

    <?php // echo $form->field($model, 'organization') ?>

    <?php // echo $form->field($model, 'individual_entrepreneur_id_country') ?>

    <?php // echo $form->field($model, 'client_type_id_type') ?>

    <?php // echo $form->field($model, 'client_doc_type_id_doc') ?>

    <?php // echo $form->field($model, 'client_nsi_bank_id') ?>

    <?php // echo $form->field($model, 'client_nsi_zipcode_id_index') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
