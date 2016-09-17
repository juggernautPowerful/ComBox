<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Client */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Клиент', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-view">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
         <?= Html::a('назад', ['/customer/index'], ['class'=>'btn btn-success']) ?>
        <?php echo  Html::a('Редактировать', ['update', 'id' => $model->id_client], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('Удалить', ['delete', 'id' => $model->id_client], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Уверены?',
                'method' => 'post',
            ],
        ]) 
        ?>
    </p>
<div class="row">
    <div class="col-sm-12 col-md-12 ">
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body"> 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id_client',
            'organization',
            'surname',
            'name',
            'patrname',
            
//            'reason_id_reason',
            'legal_address',
//            'individual_entrepreneur_id_country',
            'TIN',
            'CRAT',
            'PSRN',
            'BIC',
            'bank',
            'checking_account',
            'correspondent_account',
            //'mailing_address_id_address',
            'email:email',
            //'class_id_class',
            'comment',
            'phone',
            'ip',
            'login',
            'status',
            

            

//            'client_type_id_type',
        ],
    ]) ?>

            </div>
        </div>
    </div>
</div>              
                
                
</div>
