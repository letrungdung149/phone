<?php

namespace common\models\search;

use common\models\Product;
use kartik\daterange\DateRangeBehavior;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * ProductSearch represents the model behind the search form of `common\models\Product`.
 */
class ProductSearch extends Product {

	public $createTimeStart;

	public $createTimeEnd;

	public $categories_id = [];

	public $price_value;

	public $min_value = 0;
	public $max_value = 1000000000;

	/**
	 * @var mixed|null
	 */

	/**
	 * @return array
	 */
	public function behaviors() {
		return [
			[
				'class'              => DateRangeBehavior::class,
				'attribute'          => 'created_at',
				'dateStartAttribute' => 'createTimeStart',
				'dateEndAttribute'   => 'createTimeEnd',
			],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules() {
		return [
			[
				[
					'id',
					'category_id',
					'quantity',
				],
				'integer',
			],
			[
				[
					'name',
					'color',
					'memory',
					'status',
					'image',
					'slug',
					'description',
					'type',
					'categories_id',
					'price_value',
					'min_value',
					'max_value',
				],
				'safe',
			],
			[
				['price'],
				'number',
			],
			[
				['created_at'],
				'match',
				'pattern' => '/^.+\s\-\s.+$/',
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
		$query = Product::find();
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
			'id'          => $this->id,
			'price'       => $this->price,
			'quantity'    => $this->quantity,
		]);
		$query->andFilterWhere([
			'>=',
			'created_at',
			$this->createTimeStart,
		])->andFilterWhere([
			'<',
			'created_at',
			$this->createTimeEnd,
		]);
		$query->andFilterWhere([
			'like',
			'name',
			$this->name,
		])->andFilterWhere([
			'like',
			'color',
			$this->color,
		])->andFilterWhere([
			'like',
			'memory',
			$this->memory,
		])->andFilterWhere([
			'like',
			'status',
			$this->status,
		])->andFilterWhere([
			'like',
			'image',
			$this->image,
		])->andFilterWhere([
			'like',
			'slug',
			$this->slug,
		])->andFilterWhere([
			'like',
			'description',
			$this->description,
		])->andFilterWhere([
			'like',
			'type',
			$this->type,
		]);
		if ($this->categories_id != '') {
			$query->andFilterWhere(['category_id' => $this->categories_id]);
		}
		return $dataProvider;
	}
}
