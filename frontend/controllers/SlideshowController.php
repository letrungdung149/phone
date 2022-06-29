<?php
/**
 * Created by Navatech.
 * @project mobileshop
 * @author  Phuong
 * @email   notteen[at]gmail.com
 * @date    22/12/2020
 * @time    2:39 PM
 */

namespace frontend\controllers;
use yii\web\Controller;

class SlideshowController extends Controller {
    public function actionIndex(){
    	return $this->render('index');
}
}
