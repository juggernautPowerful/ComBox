<?php

namespace app\controllers;

use Yii;
use app\models\Client;
use app\models\ClientType;
use app\models\ClientClass;
use app\models\ClientCountryIndividualEntrepreneur;
use app\models\ClientDocType;
//use app\models\ClientIndividualEntrepreneur;
use app\models\ClientMailingAddress;
//use app\models\ClientNonResident;
use app\models\ClientReason;
//use app\models\ClientResident;
use app\models\ClientContactTechnical;
use app\models\ClientContactAdministrative;
use app\models\ClientContactFinancial;
use app\models\ClientSearch;


use  yii\web\Session;
use yii\web\NotFoundHttpException;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Json;
class CustomerController extends \yii\web\Controller
{
    public $layout = "leftPane";
    private $id_client;
      
//    public function actionIndex()
//    {
//        return $this->render('index');
//    }
       
    public function actionAdd() {

        $model_clients = new Client();
        $model_type_clients = new ClientType();
        $model_class = new ClientClass();
        $model_country = new ClientCountryIndividualEntrepreneur();
        $model_doc = new ClientDocType();
//        $model_mail_adress = new ClientMailingAddress();

        $model_reason = new ClientReason();

        
        $model_contacts_admin = new ClientContactAdministrative();
        $model_contact_tech = new ClientContactTechnical();
        $model_contact_finance = new ClientContactFinancial();
        
        $items_type_clients = ArrayHelper::map($model_type_clients->find()->all(), 'id_type', 'name');
        $items_model_class = ArrayHelper::map($model_class->find()->all(), 'id_class', 'name');
        $items_model_country = ArrayHelper::map($model_country->find()->all(), 'id_country', 'name');
        $items_model_doc = ArrayHelper::map($model_doc->find()->all(), 'id_doc', 'name');

         if (Yii::$app->request->isAjax && $model_contacts_admin->load(Yii::$app->request->post())) {
             
             if (
                     $model_contact_tech->load(Yii::$app->request->post()) ||
                     $model_contacts_admin->load(Yii::$app->request->post()) ||
                     $model_contact_finance->load(Yii::$app->request->post())        
                ){
                 
                 if (!empty(Yii::$app->session->get('id_client'))){
                    $model_contact_tech->client_id_client = Yii::$app->session->get('id_client');
                    $model_contacts_admin->client_id_client = Yii::$app->session->get('id_client');
                    $model_contact_finance->client_id_client = Yii::$app->session->get('id_client');

                    $model_contact_tech->save(false);
                    $model_contacts_admin->save(false);
                    $model_contact_finance->save(false);
                    Yii::$app->session->remove('id_client');
                    Yii::$app->session->remove('id_type');
                       return $this->renderPartial('client/_newborn');
                 }
                }  
         }
        
        if (Yii::$app->request->isAjax && $model_clients->load(Yii::$app->request->post())) {           
            
            if (
//                    $model_clients->load(Yii::$app->request->post()) &&
                       
                    $model_doc->load(Yii::$app->request->post()) && $model_mail_adress->load(Yii::$app->request->post()) &&
                    
                    $model_class->load(Yii::$app->request->post()) && $model_reason->load(Yii::$app->request->post())                           

                       && (Yii::$app->session->get('id_type') == 2 ? $model_country->load(Yii::$app->request->post()): $model_clients->load(Yii::$app->request->post()))   
                ){
                    ////$model_doc->save(false);
//echo '<pre>';
//var_dump($model_doc->id_doc);
//var_dump($model_doc);
//exit();
                    $model_reason->doc_type_id_doc = $model_doc->id_doc;
                    $model_reason->save(false);

                    $model_mail_adress->save(false);

                    $model_clients->mailing_address_id_address = $model_mail_adress->id_address;

                    ////$model_class->save(false);
                    if (is_null($model_class->id_class) || empty($model_class->id_class)){
                        $model_clients->class_id_class = 1;
                    } else
                        $model_clients->class_id_class = $model_class->id_class;
                    $model_clients->client_type_id_type = Yii::$app->session->get('id_type');
                    $model_clients->reason_id_reason = $model_reason->id_reason;
                    
                    
                    if (Yii::$app->session->get('id_type') == 2){
//                        $model_clients->TIN = -1;
                        $model_clients->CRAT = 'не заполняется';
                        $model_clients->PSRN = 'не заполняется';
                        $model_clients->organization = 'не заполняется';
                        $model_clients->individual_entrepreneur_id_country = $model_country->id_country;
                    } else {
                        $model_clients->individual_entrepreneur_id_country = 1;
                    }
                    
                    if (Yii::$app->session->get('id_type') == 3){
                        $model_clients->CRAT = 'не заполняется';
                        $model_clients->PSRN = 'не заполняется';
                    }
                    
                    $model_clients->save(false);

                    ////$model_country->save(false);

//                    $model_non_resident->client_type_id_type = Yii::$app->session->get('id_type');
//                    $model_non_resident->individual_entrepreneur_id_country = $model_country->id_country;
//                    $model_non_resident->client_id_client = $model_clients->id_client;
                    

//                    $model_ie->client_type_id_type = Yii::$app->session->get('id_type');
//                    $model_ie->client_id_client = $model_clients->id_client;
                    

//                    $model_resident->client_type_id_type = Yii::$app->session->get('id_type');
//                    $model_resident->client_id_client = $model_clients->id_client;
//                    Yii::$app->session->get('id_type') == 1 ? $model_resident->save(false) : (( Yii::$app->session->get('id_type') == 2) ? $model_non_resident->save(false) : $model_ie->save(false));

                
                    Yii::$app->session->remove('id_type');
                    $id_client = $model_clients->id_client;
                    Yii::$app->session->set('id_client', $id_client);
                    return $this->renderAjax('client/_contact', 
                        [
                            'model_contacts_admin' => $model_contacts_admin,
                            'model_contact_tech' => $model_contact_tech, 
                            'model_contact_finance' => $model_contact_finance   
                        ]    
                    );
            }
        }

        if (Yii::$app->request->post('type_action')=='type_client') {
            $id_type = (int)Yii::$app->request->post('id');
            Yii::$app->session->set('id_type', $id_type);
            if ($id_type !== 0){
                Yii::$app->session->setFlash('success', 'Теперь заполните данные клиента');
//Yii::$app->assetManager->bundles = [
//'yii\bootstrap\BootstrapPluginAsset' => false,
//'yii\bootstrap\BootstrapAsset' => false,
//'yii\web\JqueryAsset' => false,
// 'yii\widgets\ActiveFormAsset' => false,
//'yii\validators\ValidationAsset' => false,   
//    
//];
                         return $this->renderAjax('client/_client', 
                            [
                                'model_clients' => $model_clients, 'type_client' => $id_type,
                                'model_country' => $model_country, 'items_model_country' => $items_model_country,
                                'model_doc' => $model_doc, 'items_model_doc' => $items_model_doc,
//                                'model_mail_adress' => $model_mail_adress,
                                'model_reason' => $model_reason, 
                                'model_class' => $model_class, 'items_model_class' => $items_model_class     
                            ]                                   
                         );                      
                }                         
            } else if (!Yii::$app->request->isAjax){
                return $this->render('add', ['model' => $model_type_clients, 'items'=>$items_type_clients]);
        }        
    }

    public function actionValidation(){
        $model_clients = new Client();
        $model_contacts_admin = new ClientContactAdministrative();
        if (Yii::$app->request->isAjax && $model_clients->load(Yii::$app->request->post())) {
            
            Yii::$app->response->format = 'json';
            return \yii\bootstrap\ActiveForm::validate($model_clients);
        }
        
        if (Yii::$app->request->isAjax && $model_contacts_admin->load(Yii::$app->request->post())) {
            
            Yii::$app->response->format = 'json';
            return \yii\bootstrap\ActiveForm::validate($model_contacts_admin);
        }
    }

/**    
    public function actionAjax($type_action){
//        if (Yii::$app->request->post('type_action')=='type_client') {
             if ($id_type=='type_client') {
                return Yii::$app->response->redirect(Url::home());
        }          
    }
 * 
 */
    
    
      /**
     * Lists all Client models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ClientSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Client model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Client model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Client();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_client]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Client model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_client]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Client model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Client model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Client the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Client::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    

    
    
    
    
}
