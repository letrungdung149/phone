<?php

namespace common\models\search;

use common\models\BillDetail;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * BillDetailSearch represents the model behind the search form of `common\models\BillDetail`.
 */
class BillDetailSearch extends BillDetail {

	/**
	 * {@inheritdoc}
	 */
	public function rules() {
		return [
			[
				[
					'id',
					'bill_id',
					'product_id',
					'quantity',
					'created_at',
					'updated_at',
				],
				'integer',
			],
			[
				[
					'price',
					'amount',
				],
				'number',
			],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function scenarios() {
		// bypass scenarios() implementation in the parent class
		return Model::scenarios();
	}

	/**
	 * Creates data provider instance with search query applied
	 *
	 * @param array $params
	 *
	 * @return ActiveDataProvider
	 */
	public function search($params) {
		$query = BillDetail::find();
		// add conditions that should always apply here
		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);
		$this->load($params);
		if (!$this->validate()) {
			// uncomment the following line if you do not want to return any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}
		// grid filtering conditions
		$query->andFilterWhere([
			'id'         => $this->id,
			'bill_id'    => $this->bill_id,
			'product_id' => $this->product_id,
			'price'      => $this->price,
			'quantity'   => $this->quantity,
			'amount'     => $this->amount,
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
		]);
		return $dataProvider;
	}
}
