<?php
/**
 * Created by Navatech.
 * @project mobileshop
 * @author  Phuong
 * @email   notteen[at]gmail.com
 * @date    4/12/2020
 * @time    5:10 PM
 */

namespace frontend\controllers;

use frontend\models\SearchForm;
use yii\web\Controller;

class SearchController extends Controller {

	public function actionIndex() {
		$searchForm = new SearchForm();
		if ($searchForm->load(\Yii::$app->request->queryParams)) {
			$dataProvider = $searchForm->search(5);
//			$dataProvider->pagination = 10;
			/*			echo '<pre>';
						print_r($dataProvider);
						die;*/
			return $this->render('index', [
				'dataProvider' => $dataProvider
			]);
		}
		/*		if ($searchForm->load(\Yii::$app->request->queryParams) && ($dataProvider = $searchForm->search())) {
					return $this->render('index', ['dataProvider' => $dataProvider]);
				} else {
					return $this->redirect(['site/index']);
				}*/
	}
}
