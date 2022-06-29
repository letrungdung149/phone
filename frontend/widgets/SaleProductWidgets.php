<?php
/**
 * Created by FesVPN.
 * @project mobileshop
 * @author  Pham Hai
 * @email   mitto.hai.7356@gmail.com
 * @date    7/12/2020
 * @time    10:07 PM
 */

namespace frontend\widgets;

use common\models\BillDetail;
use common\models\Product;
use yii\base\Widget;
use yii\db\Expression;
use yii\helpers\ArrayHelper;

class SaleProductWidgets extends Widget {

	public $type;

	const TYPE_SALE    = 0;

	const TYPE_TREND   = 1;

	const TYPE_POPULAR = 2;

	public function init() {
		// TODO: Change the auto generated stub
		parent::init();
	}

	public function run() {
		$itemProducts = [];
		switch ($this->type) {
			case self::TYPE_SALE:
				$itemProducts = Product::find()->andWhere(['sale' => 1])->limit(8)->all();
				break;
			case self::TYPE_TREND:
				$itemProducts = Product::find()->andWhere(['trend' => 1])->limit(8)->all();
				break;
			case self::TYPE_POPULAR:
			default:
				$billDetails  = BillDetail::find()->select(['product_id'])->groupBy('product_id')->orderBy(['count(product_id)' => SORT_DESC])->limit(8)->all();
				$itemProducts = Product::find()->andWhere(['id' => ArrayHelper::map($billDetails, 'product_id', 'product_id')])->limit(8)->all();
				break;
		}
		if (count($itemProducts) < 8) {
			for ($i = count($itemProducts) + 1; $i <= 8; $i ++) {
				$itemProducts[$i] = Product::find()->orderBy(new Expression('rand()'))->one();
			}
		}
		return $this->render('saleproduct', [
			'models' => $itemProducts,
			'type'   => $this->type,
		]);
	}
}
