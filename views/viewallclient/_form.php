<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ViewAllClient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="view-all-client-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_client')->textInput() ?>

    <?= $form->field($model, 'surnameClient')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nameClient')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'partnameClient')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'legal_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BIC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'checking_account')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'correspondent_account')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emailClient')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phoneClient')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ip')->textInput() ?>

    <?= $form->field($model, 'login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'statucActive')->textInput() ?>

    <?= $form->field($model, 'mailing_index')->textInput() ?>

    <?= $form->field($model, 'streetMailing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'houseMailing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'buildingMailing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'officeMailing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nameReason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nameClass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nameAdministrative')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patrnameAdministrative')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surnameAdministrative')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'positionAdministrative')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phoneAdministrative')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emailAdministrative')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nameFinancial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patrnameFinancial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surnameFinancial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'positionFinancial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phoneFinancial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emailFinancial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nameTechnical')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patrnameTechnical')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surnameTechnical')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'positionTechnical')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phoneTechnical')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emailTechnical')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nameTypeClient')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organizatoinResident')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TINResident')->textInput() ?>

    <?= $form->field($model, 'CRAT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PSRN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NCSE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NCEO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TIN_Individual_entrepreneur')->textInput() ?>

    <?= $form->field($model, 'organizationNonResident')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nameCountry')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
