<?php

namespace backend\controllers;

use backend\models\UserSearch;
use common\models\search\BillSearch;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller {

	/**
	 * {@inheritdoc}
	 */
	public function behaviors() {
		return [
			'access' => [
				'class' => AccessControl::className(),
				'rules' => [
					[
						'actions' => [
							'login',
							'error',
						],
						'allow'   => true,
					],
					[
						'actions' => [
							'logout',
							'index',
						],
						'allow'   => true,
						'roles'   => ['@'],
					],
				],
			],
			'verbs'  => [
				'class'   => VerbFilter::className(),
				'actions' => [/*'logout' => ['post'],*/
				],
			],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function actions() {
		return [
			'error' => [
				'class' => 'yii\web\ErrorAction',
			],
		];
	}

	/**
	 * Displays homepage.
	 *
	 * @return string
	 */
	public function actionIndex() {
		$searchModel  = new BillSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		$dataProvider->query->orderBy(['created_at' => SORT_DESC]);
		$dataProvider->query->limit(10);
		$dataProvider->pagination = false;
		$searchModelUser          = new UserSearch();
		$dataProviderUser         = $searchModelUser->search(Yii::$app->request->queryParams);
		$dataProviderUser->query->orderBy(['created_at' => SORT_DESC]);
		$dataProviderUser->query->limit(10);
		return $this->render('index', [
			'searchModel'      => $searchModel,
			'dataProvider'     => $dataProvider,
			'searchModelUser'  => $searchModelUser,
			'dataProviderUser' => $dataProviderUser,
		]);
	}
}
