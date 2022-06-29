<?php
/**
 * Created by Navatech.
 * @project mobileshop
 * @author  Phuong
 * @email   notteen[at]gmail.com
 * @date    4/12/2020
 * @time    5:13 PM
 */

namespace frontend\models;

use common\models\Accessory;
use common\models\Phone;
use common\models\Product;
use common\models\ProductSearch;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class SearchForm extends Model {

	public $keyword;

	/**
	 * @return array|array[]
	 */
	public function rules() {
		// TODO: Change the auto generated stub
		return [
			[
				[
					'keyword'
				],
				'safe',
			],
		];
	}

	/**
	 * @return false
	 */
	public function search($pagetions= null) {
		if (!$this->validate()) {
			return false;
		}
		$query = Product::find();
		if ($this->keyword != '') {
			$query->andFilterWhere([
				'LIKE',
				'name',
				$this->keyword,
			]);
		}
		$dataProvider = new ActiveDataProvider([
			'query' => $query,
			'pagination' => [
				'pageSize' => $pagetions == null?20:$pagetions,
			],
		]);
		return $dataProvider;
	}
}
