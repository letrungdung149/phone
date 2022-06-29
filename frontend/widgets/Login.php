<?php
/**
 * Created by FES VPN.
 * @project mobileshop-fesdev-net
 * @author  Le Phuong
 * @email   phuong17889[at]gmail.com
 * @date    12/4/2020
 * @time    10:02 AM
 */

namespace frontend\widgets;

use dektrium\user\models\LoginForm;
use dektrium\user\traits\AjaxValidationTrait;
use Yii;
use yii\base\ExitException;
use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\web\Response;

class Login extends Widget {

	use AjaxValidationTrait;

	/**
	 * @return string|Response
	 * @throws ExitException
	 * @throws InvalidConfigException
	 */
	public function run() {
		/** @var LoginForm $model */
		$model = Yii::createObject(LoginForm::className());
		$this->performAjaxValidation($model);
		return $this->render('login', ['model' => $model]);
	}
}
