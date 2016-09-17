<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Pjax;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model_clients app\models\Clients */
/* @var $form yii\widgets\ActiveForm */
?>
    <?php 
    $params = [
        'prompt' => 'Выберите тип...'
    ];
    $params_class = [
        'prompt' => 'Выберите класс клиента',
        'class'=>'form-control selectpicker show-menu-arrow', 'id'=>'id_class',
        'data-style'=>'btn-default', 'tabindex' => '1'
    ]; 
    $params_country = [
        'prompt' => 'Выберите страну',
        'class'=>'form-control selectpicker', 'id'=>'id_country',
        'data-style'=>'btn-default', 'tabindex' => '1'
    ];
    
     $params_doc = [
        'prompt' => 'Вид документа',
        'class'=>'form-control ', 'id'=>'id_doc',
        'data-style'=>'btn-default',
         'tabindex' => '1'
    ];
    $form = ActiveForm::begin([
        'id' => $model_clients->formName(),
        'enableAjaxValidation' => true,
        'validationUrl' => Url::toRoute('customer/validation'),
        'options' => ['class' => 'form-horizontal'],
    ]); ?>
<div><?php  Yii::$app->session->getFlash('success');?></div>   
<div class="error"></div>
    <?php
//    echo '<pre>';
//    var_dump($type_client);
     switch ($type_client){
         case 1:
    ?>
            <?= $form->field($model_clients, 'organization', ['inputOptions' => ['autofocus' => 'autofocus','class' => 'input-field form-control', 'placeholder'=>'полное название организации клиента с формой собственности', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>
    
            <?= $form->field($model_clients, 'surname', ['inputOptions' => [ 'class' => 'input-field form-control', 'placeholder'=>'Фамилия руководителя', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput() ?>

            <?= $form->field($model_clients, 'name', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'Имя руководителя', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

            <?= $form->field($model_clients, 'patrname', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'Отчество руководителя', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

            <?= $form->field($model_doc, 'id_doc')->dropDownList($items_model_doc,$params_doc)->label(false, ['style'=>'display:none']) ?>

            <?php //$form->field($model_reason, 'data_reason', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'данные документа', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

            <?= $form->field($model_clients, 'legal_address', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'юридический адрес', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

            <?= $form->field($model_clients, 'TIN', ['inputOptions' => [ 'class' => 'input-field form-control', 'placeholder'=>'ИНН', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput() ?>

            <?= $form->field($model_clients, 'CRAT', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'КПП', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

            <?= $form->field($model_clients, 'PSRN', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'ОГРН', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?> 

    <?php         
             break;
         case 2:
    ?>
            <?= $form->field($model_clients, 'organization', ['inputOptions' => ['autofocus' => 'autofocus','class' => 'input-field form-control', 'placeholder'=>'полное название организации клиента с формой собственности', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>
    
            <?= $form->field($model_clients, 'surname', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'Фамилия руководителя', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput() ?>

            <?= $form->field($model_clients, 'name', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'Имя руководителя', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

            <?= $form->field($model_clients, 'patrname', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'отчество руководителя', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

            <?= $form->field($model_doc, 'id_doc')->dropDownList($items_model_doc,$params_doc)->label(false, ['style'=>'display:none']) ?>

            <?php //$form->field($model_reason, 'data_reason', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'данные документа', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

            <?= $form->field($model_clients, 'legal_address', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'юридический адрес', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>
          
            <?= $form->field($model_clients, 'TIN', ['inputOptions' => [ 'class' => 'input-field form-control', 'placeholder'=>'ИНН', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput() ?>

            <?= $form->field($model_country, 'id_country')->dropDownList($items_model_country,$params_country)->label(false, ['style'=>'display:none']) ?>
    <?php
             break;
         case 3:
    ?>
            <?= $form->field($model_clients, 'surname', ['inputOptions' => ['autofocus' => 'autofocus','class' => 'input-field form-control', 'placeholder'=>'Фамилия руководителя', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>
    
            <?= $form->field($model_clients, 'name', ['inputOptions' => [ 'class' => 'input-field form-control', 'placeholder'=>'Имя руководителя', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput() ?>

            <?= $form->field($model_clients, 'patrname', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'Отчество руководителя', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

            <?= $form->field($model_doc, 'id_doc')->dropDownList($items_model_doc,$params_doc)->label(false, ['style'=>'display:none']) ?>

            <?php //$form->field($model_reason, 'data_reason', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'данные документа', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

            <?= $form->field($model_clients, 'legal_address', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'адрес прописки', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

            <?= $form->field($model_clients, 'TIN', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'ИНН', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

    <?php
             break;
     }
    ?>

    <?= $form->field($model_clients, 'BIC', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'БИК', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model_clients, 'bank', ['inputOptions' => [ 'class' => 'input-field form-control', 'placeholder'=>'название банка', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput() ?>

    <?= $form->field($model_clients, 'checking_account', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'расчетный счет', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

    <?php  //$form->field($model_mail_adress, 'mailing_index', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'почтовый индекс', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model_mail_adress, 'street', ['inputOptions' => [ 'class' => 'input-field form-control', 'placeholder'=>'улица', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput() ?>
    
    <?php //$form->field($model_mail_adress, 'house', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'дом', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model_mail_adress, 'building', ['inputOptions' => [ 'class' => 'input-field form-control', 'placeholder'=>'корпус', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput() ?>

    <?php //$form->field($model_mail_adress, 'office', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'офис', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model_clients, 'email', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'электронный адрес доставки финансовой информации', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model_clients, 'correspondent_account', ['inputOptions' => [ 'class' => 'input-field form-control', 'placeholder'=>'корреспондентский счет', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput() ?>

    <?= $form->field($model_class, 'id_class')->dropDownList($items_model_class,$params_class)->label(false, ['style'=>'display:none']) ?>

    <?= $form->field($model_clients, 'comment', ['inputOptions' => ['class' => 'input-field form-control', 'placeholder'=>'дополнительная информация', 'tabindex' => '1']])->label(false, ['style'=>'display:none'])->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model_clients->isNewRecord ? ' далее >> ' : 'Обновить', ['class' => $model_clients->isNewRecord ? 'btn btn-success pull-right' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
<?php
//
//
//$path = Url::toRoute('/customer/ajax');
//
//$scripto = <<< JS
//var adress = $('form#{$model_clients->formName()}').attr('action');
//jQuery('form#{$model_clients->formName()}').on('beforeSubmit', function(e)
//{
//    var \$form = $(this); 
//    $.Post(
//        adress,
//        \$form.serialize()
//   )
//        .done(function(result){
//        if (result == 0){
//            $('#mesage').html('данные не сохранились');
//                } else {
//                    $('#ClientsTypies').remove();
//                    $('#Clients').remove();
//                    $('#client').html('').html(result);
//            }
//        }).fail(function(){console.log('server error')});
//    return false;
//});
//JS;
//$this->registerJs($scripto);

//$scripto = <<< JS
// $(document).ready(function () {       
//   var adress = $('form#{$model_clients->formName()}').attr('action');
//   $(document).on('submit', \$('form#{$model_clients->formName()}'), function (e) {
//        e.preventDefault();
//        var form = $(this);
//        $.ajax({
//            url: adress,
//            type: "POST",
//            data: form.serialize(),
//            success: function (result) {
//                console.log(result);  
//                    $('#ClientsTypies').remove();
//                    $('#Clients').remove();
//                    $('#client').html('').html(result);
//            }
//        });
//    });
//   });
//JS;
//$this->registerJs($scripto);



$scripto = <<< JS
 $(document).ready(function () {       
   var adress = $('form#{$model_clients->formName()}').attr('action');
   \$('form#{$model_clients->formName()}').on('beforeSubmit',  function (e) {
        
        var form = $(this);
        $.ajax({
            url: adress,
            type: "POST",
            data: form.serialize(),
            success: function (result) {
                console.log(result);  
                    $('#ClientType').find('button[data-id="id_type"]').prop("disabled",true);
                    \$('form#{$model_clients->formName()}').remove();
                    $('#client').html(result);
            },
            error: function(xhr, status, error){console.log('server error'),$('.error').html(xhr.responseText); }
        });
        return false;
    });
   });
JS;
$this->registerJs($scripto)
?>