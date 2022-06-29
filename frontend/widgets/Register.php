<?php
/**
 * Created by FES VPN.
 * @project mobileshop-fesdev-net
 * @author  Le Phuong
 * @email   phuong17889[at]gmail.com
 * @date    12/4/2020
 * @time    10:01 AM
 */

namespace frontend\widgets;

use dektrium\user\models\RegistrationForm;
use dektrium\user\traits\AjaxValidationTrait;
use yii\base\ExitException;
use yii\base\InvalidConfigException;
use yii\base\Widget;

class Register extends Widget {

	use AjaxValidationTrait;

	/**
	 * @return string
	 * @throws ExitException
	 * @throws InvalidConfigException
	 */
	public function run() {
		/** @var RegistrationForm $model */
		$model = \Yii::createObject(RegistrationForm::className());
		$this->performAjaxValidation($model);
		return $this->render('register', ['model' => $model]);
	}
}
