<?php
/**
 * Created by Navatech.
 * @project mobileshop
 * @author  Phuong
 * @email   notteen[at]gmail.com
 * @date    10/12/2020
 * @time    2:09 PM
 */

namespace frontend\controllers;
use frontend\models\ContactForm;
use Yii;
use yii\web\Controller;

class ContactController extends Controller {
	public function actionContact() {
		$model = new ContactForm();
		if ($model->load(Yii::$app->request->post()) && $model->sendEmail(Yii::$app->params['adminEmail'])) {
			Yii::$app->session->setFlash('contactFormSubmitted');
			return $this->refresh();
		}
		return $this->render('contact', [
			'model' => $model,
		]);
	}
}
