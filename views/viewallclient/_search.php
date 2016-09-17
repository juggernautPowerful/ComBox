<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ViewAllClientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="view-all-client-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_client') ?>

    <?= $form->field($model, 'surnameClient') ?>

    <?= $form->field($model, 'nameClient') ?>

    <?= $form->field($model, 'partnameClient') ?>

    <?= $form->field($model, 'legal_address') ?>

    <?php // echo $form->field($model, 'BIC') ?>

    <?php // echo $form->field($model, 'bank') ?>

    <?php // echo $form->field($model, 'checking_account') ?>

    <?php // echo $form->field($model, 'correspondent_account') ?>

    <?php // echo $form->field($model, 'emailClient') ?>

    <?php // echo $form->field($model, 'phoneClient') ?>

    <?php // echo $form->field($model, 'ip') ?>

    <?php // echo $form->field($model, 'login') ?>

    <?php // echo $form->field($model, 'statucActive') ?>

    <?php // echo $form->field($model, 'mailing_index') ?>

    <?php // echo $form->field($model, 'streetMailing') ?>

    <?php // echo $form->field($model, 'houseMailing') ?>

    <?php // echo $form->field($model, 'buildingMailing') ?>

    <?php // echo $form->field($model, 'officeMailing') ?>

    <?php // echo $form->field($model, 'nameReason') ?>

    <?php // echo $form->field($model, 'data_reason') ?>

    <?php // echo $form->field($model, 'nameClass') ?>

    <?php // echo $form->field($model, 'nameAdministrative') ?>

    <?php // echo $form->field($model, 'patrnameAdministrative') ?>

    <?php // echo $form->field($model, 'surnameAdministrative') ?>

    <?php // echo $form->field($model, 'positionAdministrative') ?>

    <?php // echo $form->field($model, 'phoneAdministrative') ?>

    <?php // echo $form->field($model, 'emailAdministrative') ?>

    <?php // echo $form->field($model, 'nameFinancial') ?>

    <?php // echo $form->field($model, 'patrnameFinancial') ?>

    <?php // echo $form->field($model, 'surnameFinancial') ?>

    <?php // echo $form->field($model, 'positionFinancial') ?>

    <?php // echo $form->field($model, 'phoneFinancial') ?>

    <?php // echo $form->field($model, 'emailFinancial') ?>

    <?php // echo $form->field($model, 'nameTechnical') ?>

    <?php // echo $form->field($model, 'patrnameTechnical') ?>

    <?php // echo $form->field($model, 'surnameTechnical') ?>

    <?php // echo $form->field($model, 'positionTechnical') ?>

    <?php // echo $form->field($model, 'phoneTechnical') ?>

    <?php // echo $form->field($model, 'emailTechnical') ?>

    <?php // echo $form->field($model, 'nameTypeClient') ?>

    <?php // echo $form->field($model, 'organizatoinResident') ?>

    <?php // echo $form->field($model, 'TINResident') ?>

    <?php // echo $form->field($model, 'CRAT') ?>

    <?php // echo $form->field($model, 'PSRN') ?>

    <?php // echo $form->field($model, 'NCSE') ?>

    <?php // echo $form->field($model, 'NCEO') ?>

    <?php // echo $form->field($model, 'TIN_Individual_entrepreneur') ?>

    <?php // echo $form->field($model, 'organizationNonResident') ?>

    <?php // echo $form->field($model, 'nameCountry') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
