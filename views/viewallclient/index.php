<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ViewAllClientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'View All Clients';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="view-all-client-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create View All Client', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_client',
            'surnameClient',
            'nameClient',
            'partnameClient',
            'legal_address',
            // 'BIC',
            // 'bank',
            // 'checking_account',
            // 'correspondent_account',
            // 'emailClient:email',
            // 'phoneClient',
            // 'ip',
            // 'login',
            // 'statucActive',
            // 'mailing_index',
            // 'streetMailing',
            // 'houseMailing:email',
            // 'buildingMailing',
            // 'officeMailing:email',
            // 'nameReason',
            // 'data_reason',
            // 'nameClass',
            // 'nameAdministrative',
            // 'patrnameAdministrative',
            // 'surnameAdministrative',
            // 'positionAdministrative',
            // 'phoneAdministrative',
            // 'emailAdministrative:email',
            // 'nameFinancial',
            // 'patrnameFinancial',
            // 'surnameFinancial',
            // 'positionFinancial',
            // 'phoneFinancial',
            // 'emailFinancial:email',
            // 'nameTechnical',
            // 'patrnameTechnical',
            // 'surnameTechnical',
            // 'positionTechnical',
            // 'phoneTechnical',
            // 'emailTechnical:email',
            // 'nameTypeClient',
            // 'organizatoinResident',
            // 'TINResident',
            // 'CRAT',
            // 'PSRN',
            // 'NCSE',
            // 'NCEO',
            // 'TIN_Individual_entrepreneur',
            // 'organizationNonResident',
            // 'nameCountry',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
