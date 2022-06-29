<?php

namespace common\models\search;

use common\models\BillInfo;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * BillInfoSearch represents the model behind the search form of `common\models\BillInfo`.
 */
class BillInfoSearch extends BillInfo {

	/**
	 * {@inheritdoc}
	 */
	public function rules() {
		return [
			[
				[
					'id',
					'bill_id',
					'created_at',
					'updated_at',
				],
				'integer',
			],
			[
				[
					'first_name',
					'last_name',
					'company_name',
					'email',
					'phone',
					'address',
					'city',
					'country',
					'postcode',
				],
				'safe',
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
		$query = BillInfo::find();
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
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
		]);
		$query->andFilterWhere([
			'like',
			'first_name',
			$this->first_name,
		])->andFilterWhere([
			'like',
			'last_name',
			$this->last_name,
		])->andFilterWhere([
			'like',
			'company_name',
			$this->company_name,
		])->andFilterWhere([
			'like',
			'email',
			$this->email,
		])->andFilterWhere([
			'like',
			'phone',
			$this->phone,
		])->andFilterWhere([
			'like',
			'address',
			$this->address,
		])->andFilterWhere([
			'like',
			'city',
			$this->city,
		])->andFilterWhere([
			'like',
			'country',
			$this->country,
		])->andFilterWhere([
			'like',
			'postcode',
			$this->postcode,
		]);
		return $dataProvider;
	}
}
