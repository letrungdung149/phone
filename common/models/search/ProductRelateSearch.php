<?php

namespace common\models\search;

use common\models\ProductRelate;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * ProductRelateSearch represents the model behind the search form of `common\models\ProductRelate`.
 */
class ProductRelateSearch extends ProductRelate {

	/**
	 * {@inheritdoc}
	 */
	public function rules() {
		return [
			[
				[
					'id',
					'source_product_id',
					'target_product_id',
				],
				'integer',
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
		$query = ProductRelate::find();
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
			'id'                => $this->id,
			'source_product_id' => $this->source_product_id,
			'target_product_id' => $this->target_product_id,
		]);
		return $dataProvider;
	}
}
