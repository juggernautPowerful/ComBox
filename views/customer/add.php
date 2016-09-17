<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\Clients */

$this->title = 'Добавление клиента';

?>
<div class="page-title">
   <h3><?= Html::encode($this->title) ?></h3>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 ">
        <div class="panel panel-default">
            <div class="panel-heading">
                 <?php // Yii::$app->session->getFlash('success');?>
                <?php
//                    foreach (Yii::$app->session->getAllFlashes() as $key => $message) {
//                    echo '<div class="alert alert-' . $key . '">' . $message . '</div>';
//                    }
                ?>
            </div>
            <div class="panel-body"> 
                <div class="col-sm-4 col-md-3">
                
                    <?php 
                        $params = [
                            'prompt' => 'Выберите тип клиента',
                            'class'=>'form-control selectpicker show-menu-arrow', 'id'=>'id_type',
                            'data-style'=>'btn-success'
                           // 'data-live-search'=>'true',
                        ];
                        //Pjax::begin();
                        $form_typeclients = ActiveForm::begin([                          
                            'id' => $model->formName(),
                            'options' => ['class' => 'form-horizontal'],
                        ]); 
                    ?>
                    
                    <?= $form_typeclients->field($model, 'id_type')->dropDownList($items,$params)->label(false, ['style'=>'display:none']) ?>

                    <?php ActiveForm::end(); ?>

            </div>
                <div class="col-sm-8 col-md-6" id="client" style="clear: left;float: left;">
                    
                    
                <!--?php Pjax::end(); ?-->
                </div>
            </div>
        </div>
    </div>
</div>

<?php

$script = <<< JS
jQuery('select#id_type').change(function(){

      var id = jQuery(this).val();
      var adress = $('form#{$model->formName()}').attr('action');

      jQuery.post(
        adress,
        {id:id, type_action:'type_client'},
        function(data){
            console.log('ok');
            $('#client').html('').html(data);
        }    
   );
   });        
JS;
$this->registerJs($script);
?>

