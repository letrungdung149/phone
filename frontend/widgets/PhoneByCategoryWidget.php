<?php
/**
 * Created by FesVPN.
 * @project mobileshop
 * @author  Pham Hai
 * @email   mitto.hai.7356@gmail.com
 * @date    5/12/2020
 * @time    8:53 AM
 */

namespace frontend\widgets;

use common\models\Item;
use common\models\Phone;
use common\models\Product;
use yii\base\Widget;

class PhoneByCategoryWidget extends Widget {

	public $category_id = null;

	public function init() {
		parent::init();
	}

	public function run() {
		if ($this->category_id != null) {
			$item = Product::find()->where(['category_id' => $this->category_id])->limit(8)->orderBy(['created_at' => SORT_DESC])->all();
		} else {
			$item = Product::find()->where(['type' => 'accessory'])->limit(8)->all();
		}
		return $this->render('PhoneByCategoryWidget', [
			'models' => $item,
		]);
	}
}
