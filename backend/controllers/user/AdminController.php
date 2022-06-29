<?php
/**
 * Created by Navatech.
 * @project mobileshop
 * @author  Phuong
 * @email   notteen[at]gmail.com
 * @date    4/12/2020
 * @time    8:51 AM
 */
namespace backend\controllers\user;
use common\models\BillSearch;
use dektrium\user\models\UserSearch;
use Yii;

class AdminController extends \dektrium\user\controllers\AdminController {
   public function actionIndex(){
	   $searchModel  = \Yii::createObject(UserSearch::className());
	   $dataProvider = $searchModel->search(\Yii::$app->request->get());
   	   return $this->render('index',[
   	   	'searchModel'=>$searchModel,
	    'dataProvider'=>$dataProvider
       ]);
   }
   public function actionView(){
	   $searchModel  = new BillSearch();
	   $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
	   $dataProvider->query->orderBy(['created_at'=>SORT_DESC]);
	   $dataProvider->query->limit(10);

	   return $this->render('view', [
		   'searchModel'  => $searchModel,
		   'dataProvider' => $dataProvider,
	   ]);
   }

}
