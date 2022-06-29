<?php
/**
 * Created by FesVPN.
 * @project mobileshop
 * @author  Pham Hai
 * @email   mitto.hai.7356@gmail.com
 * @date    7/12/2020
 * @time    11:56 PM
 */

namespace frontend\widgets;
use common\models\Category;
use yii\base\Widget;

class ListCategoriesWidgets extends Widget {
	public function  init() {
		// TODO: Change the auto generated stub
		parent::init();
	}

	public function run() {
		$categories = Category::find()->all();
		return $this->render('listcategories',['models'=>$categories]);
	}
}
