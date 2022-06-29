<?php

namespace backend\controllers;

use yii\db\Query;
use yii\helpers\Json;
use yii\web\Controller;

class AjaxController extends Controller {

	/**
	 * @return string
	 */
	public function actionIndex() {
		return $this->render('index');
	}

	/**
	 * hàm này sử dụng để lấy ra phone
	 *
	 * @param null $q
	 */
	public function actionGetProduct($q = null) {
		$phones = (new Query())->from('product')->where('name like :q', [':q' => "%" . $q . '%'])->limit(10)->all();
		echo Json::encode($phones);
		exit();
	}
}
