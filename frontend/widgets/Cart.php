<?php
/**
 * Created by FES VPN.
 * @project mobileshop-fesdev-net
 * @author  Le Phuong
 * @email   phuong17889[at]gmail.com
 * @date    12/7/2020
 * @time    11:02 AM
 */

namespace frontend\widgets;

use common\models\Bill;
use yii\base\Widget;

class Cart extends Widget {

	public function run() {
		$bill = null;
		if (!\Yii::$app->user->isGuest) {
			$user = \Yii::$app->user->getIdentity();
			$bill = Bill::find()->andWhere([
				'user_id' => $user->id,
				'status'  => Bill::STATUS_DRAFT,
			])->one();
		}
		if ($bill === null) {
			$bill               = new  Bill();
			$bill->total_amount  = 0;
			$bill->total_quantity = 0;
		}
		return $this->render('cart', ['bill' => $bill]);
	}
}
