<?php

namespace app\controllers;

class SupportController extends \yii\web\Controller
{
    public $layout = "leftPane";
    public $menu = [
        ['label'=>'<i class="fa fa-user"></i><span class="sidebar-text">Клиенты</span>', 'url'=>'#'],
        ['label'=>'<i class="fa fa-users"></i><span class="sidebar-text">Все клиенты</span>', 'url'=>'#'],
        ['label'=>'<i class="fa fa-square"></i><span class="sidebar-text">Договоры</span>', 'url'=>'#'],
        ['label'=>'<i class="fa fa-plus-square"></i><span class="sidebar-text">Услуги</span>', 'url'=>'#'],
        ['label'=>'<i class="fa fa-plus-square"></i><span class="sidebar-text">Тарифные планы</span>', 'url'=>'#'],
        ['label'=>'<i class="fa fa-plus-square"></i><span class="sidebar-text">Ресурсы</span>', 'url'=>'#'],
        ['label'=>'<i class="fa fa-square"></i><span class="sidebar-text">Дополнительно</span>', 'url'=>'#'],
    ];
    
//    public function actionIndex()
//    {
//        return $this->render('index');
//    }

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
