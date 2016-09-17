<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Pjax;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model_contacts_admin app\models\Clients */
/* @var $form yii\widgets\ActiveForm */
?>
    <?php 

    $form = ActiveForm::begin([
        'id' => $model_contacts_admin->formName(),
        'enableAjaxValidation' => true,
        'validationUrl' => Url::toRoute('customer/validation'),
        'options' => ['class' => 'form-horizontal'],
    ]); ?>

    <h2> Административный контакт</h2>
    <?= $form->field($model_contacts_admin, 'name', ['inputOptions' => ['autofocus' => 'autofocus','class' => 'input-field form-control', 'placeholder'=>'имя контактного лица', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model_contacts_admin, 'patrname', ['inputOptions' => [ 'class' => 'input-field form-control', 'placeholder'=>'отчество контактного лица', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput() ?>

    <?= $form->field($model_contacts_admin, 'surname', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'фамилия контактного лица', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model_contacts_admin, 'position', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'должнсть контактного лица', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model_contacts_admin, 'phone', ['inputOptions' => [ 'class' => 'input-field form-control', 'placeholder'=>'телефон контактного лица', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput() ?>

    <?= $form->field($model_contacts_admin, 'email', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'email контактного лица', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

    <h2> Техниеский контакт</h2>

    <?= $form->field($model_contact_tech, 'name', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'имя контактного лица', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model_contact_tech, 'patrname', ['inputOptions' => [ 'class' => 'input-field form-control', 'placeholder'=>'отчество контактного лица', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput() ?>

    <?= $form->field($model_contact_tech, 'surname', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'фамилия контактного лица', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model_contact_tech, 'position', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'должнсть контактного лица', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model_contact_tech, 'phone', ['inputOptions' => [ 'class' => 'input-field form-control', 'placeholder'=>'телефон контактного лица', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput() ?>

    <?= $form->field($model_contact_tech, 'email', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'email контактного лица', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

    <h2> Финансовый контакт</h2>
    <?= $form->field($model_contact_finance, 'name', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'имя контактного лица', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model_contact_finance, 'patrname', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'отчество контактного лица', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput() ?>

    <?= $form->field($model_contact_finance, 'surname', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'фамилия контактного лица', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model_contact_finance, 'position', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'должнсть контактного лица', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model_contact_finance, 'phone', ['inputOptions' => [ 'class' => 'input-field form-control', 'placeholder'=>'телефон контактного лица', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput() ?>

    <?= $form->field($model_contact_finance, 'email', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'email контактного лица', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(' сохранить ', ['class' => 'btn btn-success pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>
<?php
 $scriptus = <<< JS
 $(document).ready(function () {       
   var adress = $('form#{$model_contacts_admin->formName()}').attr('action');
   \$('form#{$model_contacts_admin->formName()}').on('beforeSubmit',  function (e) {
        
        var form = $(this);
        $.ajax({
            url: adress,
            type: "POST",
            data: form.serialize(),
            success: function (result) {
                console.log(result);  
                    $('#ClientType').remove();
                    $('#ClientContactAdministrative').remove();
                    $('#client').html('').html(result);
            },
            error: function(xhr, status, error){console.log('server error'),$('.error').html(error.message); }
        });
        return false;
    });
   });
JS;
$this->registerJs($scriptus)
?>