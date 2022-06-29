<?php

namespace frontend\controllers;

use common\models\Bill;
use common\models\BillDetail;
use common\models\BillInfo;
use common\models\search\BillSearch;
use dektrium\user\filters\AccessRule;
use frontend\models\CheckoutForm;
use Yii;
use yii\filters\AccessControl;

class CartController extends \yii\web\Controller {

	public function behaviors() {
		return [
			'access' => [
				'class' => AccessControl::className(),
				'ruleConfig' => [
					'class' => AccessRule::className(),
				],
				'rules' => [
					[
						'allow' => true,
						'roles' => ['@'],
					],
				],
			],
		];
	}

	public function actionIndex() {
		return $this->render('index');
	}

	public function actionCheckOut() {
		$bill = Bill::find()->andWhere([
			'user_id' => \Yii::$app->user->identity->id,
			'status'  => Bill::STATUS_DRAFT,
		])->one();

		$bill_detail = BillDetail::find()->where(['bill_id' => $bill->id])->all();
		$model = new CheckoutForm();
		if ($model->load(Yii::$app->request->post())) {
			if(!$bill){
				Yii::$app->session->setFlash('danger','Giỏ hàng rỗng.');
				return $this->render('check-out', [
					'model'       => $model,
					'billDetails' => $bill_detail,
				]);
			}
			if($model->checkOut($bill->id)){
				Yii::$app->session->setFlash('success','Đặt hàng thành công!');
				return $this->redirect(['site/index']);
			}
		}
		return $this->render('check-out', [
			'model'       => $model,
			'billDetails' => $bill_detail,
		]);
	}

	public function actionTrackOrder(){
		$searchModel  = new BillSearch();
		$searchModel->user_id = Yii::$app->user->identity->id;
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		return $this->render('track-order', [
			'searchModel'  => $searchModel,
			'dataProvider' => $dataProvider,
		]);


	/*	return $this->render('_post');*/
	}

	/**
	 * @param bill_id $id
	 */
	public function actionViewCheckOut($id){
		$bill = Bill::findOne(['id'=>$id]);
		$billDetails = $bill->billDetails;
		$billInfor = BillInfo::findOne(['bill_id'=>$bill->id]);
		return $this->render('view-check-out',[
			'bill'=>$bill,
			'billdetails' =>$billDetails,
			'billinfor'=>$billInfor,
		]);
	}

	public function actionViewAll($id = null){
		if($id != null){
			$bill = Bill::findOne($id);
		}else{
			$bill = Bill::findOne([
				'user_id'=>Yii::$app->user->identity->id,
				'status'=>'draft',
			]);
		}
		$billDetails = BillDetail::find()->where(['bill_id'=>$bill->id])->all();
		return $this->render('view-all', [
			'models'=>$billDetails,
			'bill'=>$bill
		]);
	}
}
