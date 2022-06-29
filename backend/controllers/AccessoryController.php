<?php

namespace backend\controllers;

use common\models\Phone;
use Yii;
use common\models\Accessory;
use common\models\AccessorySearch;
use yii\behaviors\TimestampBehavior;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * AccessoryController implements the CRUD actions for Accessory model.
 */
class AccessoryController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Accessory models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AccessorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Accessory model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
    	$accessory = Accessory::findOne(['id'=>$id]);
		$phones = [];
		foreach ($accessory->phone_accessory as $phone_id){
			$phone = Phone::findOne(['id'=>$phone_id]);
			$phones[] = $phone;
		}
        return $this->render('view', [
            'model' => $this->findModel($id),
	        'phones'=>$phones,
        ]);
    }

    /**
     * Creates a new Accessory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Accessory();

        if ($model->load(Yii::$app->request->post())) {
	        $model->image_tmp = UploadedFile::getInstance($model, 'image_tmp');
	        $model->image = $model->image_tmp->name;
            if($model->save()){
            	$model->upload();
	            return $this->redirect(['view', 'id' => $model->id]);
            }else{
            	echo '<pre>';
            	print_r($model->errors);
            	die;
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Accessory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
        	if($model->save()){
		        return $this->redirect(['view', 'id' => $model->id]);
	        }

        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Accessory model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Accessory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Accessory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Accessory::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
