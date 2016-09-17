<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Client */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patrname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'signer_surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'signer_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'signer_partname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'legal_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'checking_account')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'class_id_class')->textInput() ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ip')->textInput() ?>

    <?= $form->field($model, 'login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'TIN')->textInput() ?>

    <?= $form->field($model, 'CRAT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PSRN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organization')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'individual_entrepreneur_id_country')->textInput() ?>

    <?= $form->field($model, 'client_type_id_type')->textInput() ?>

    <?= $form->field($model, 'client_doc_type_id_doc')->textInput() ?>

    <?= $form->field($model, 'client_nsi_bank_id')->textInput() ?>

    <?= $form->field($model, 'client_nsi_zipcode_id_index')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
