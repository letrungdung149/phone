<?php
/**
 * Created by Navatech.
 * @project mobileshop
 * @author  Phuong
 * @email   notteen[at]gmail.com
 * @date    11/12/2020
 * @time    9:46 AM
 */

namespace frontend\controllers;
use yii\web\Controller;

class ShoppingguideController extends Controller {
   public function actionIndex(){
   	 return $this->render('index');
   }
}
