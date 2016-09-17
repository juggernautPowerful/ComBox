<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ViewAllClient */

$this->title = $model->id_client;
$this->params['breadcrumbs'][] = ['label' => 'View All Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="view-all-client-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_client], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_client], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_client',
            'surnameClient',
            'nameClient',
            'partnameClient',
            'legal_address',
            'BIC',
            'bank',
            'checking_account',
            'correspondent_account',
            'emailClient:email',
            'phoneClient',
            'ip',
            'login',
            'statucActive',
            'mailing_index',
            'streetMailing',
            'houseMailing:email',
            'buildingMailing',
            'officeMailing:email',
            'nameReason',
            'data_reason',
            'nameClass',
            'nameAdministrative',
            'patrnameAdministrative',
            'surnameAdministrative',
            'positionAdministrative',
            'phoneAdministrative',
            'emailAdministrative:email',
            'nameFinancial',
            'patrnameFinancial',
            'surnameFinancial',
            'positionFinancial',
            'phoneFinancial',
            'emailFinancial:email',
            'nameTechnical',
            'patrnameTechnical',
            'surnameTechnical',
            'positionTechnical',
            'phoneTechnical',
            'emailTechnical:email',
            'nameTypeClient',
            'organizatoinResident',
            'TINResident',
            'CRAT',
            'PSRN',
            'NCSE',
            'NCEO',
            'TIN_Individual_entrepreneur',
            'organizationNonResident',
            'nameCountry',
        ],
    ]) ?>

</div>
