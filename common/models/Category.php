<?php

namespace common\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\db\Query;

/**
 * This is the model class for table "category".
 *
 * @property int       $id
 * @property string    $name
 * @property int       $created_at
 * @property int       $updated_at
 *
 * @property Product[] $products
 */
class Category extends ActiveRecord {

	public $p_count;

	public $getName;

	/**
	 * @return array
	 */
	public function behaviors() {
		return [
			TimestampBehavior::class,
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public static function tableName() {
		return 'category';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules() {
		return [
			[
				['name'],
				'required',
			],
			[
				['id'],
				'integer',
			],
			[
				['name'],
				'string',
				'max' => 255,
			],
			[
				['id'],
				'unique',
			],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels() {
		return [
			'id'         => 'ID',
			'name'       => 'Name',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		];
	}

	/**
	 * Gets query for [[Phones]].
	 *
	 * @return ActiveQuery
	 */
	public function getProducts() {
		return $this->hasMany(Product::class, ['category_id' => 'id']);
	}

	/**
	 * @param Category $category
	 *
	 * @return int
	 */
	public static function getCountItem(Category $category) {
		$count_Category_accessory = (new Query())->select([
			'count(id) as count',
			'category_id',
		])->from('accessory')->where('category_id = ' . $category->id)->groupBy('category_id')->one();
		$count_Category_phone     = (new Query())->select([
			'count(id) as count',
			'category_id',
		])->from('phone')->where('category_id = ' . $category->id)->groupBy('category_id')->one();
		return intval($count_Category_accessory['count']) + intval($count_Category_phone['count']);
	}
}
