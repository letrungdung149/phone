<?php

namespace common\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "rating".
 *
 * @property int      $id
 * @property int|null $product_id
 * @property int|null $user_id
 * @property int      $score
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Product  $product
 * @property User     $user
 */
class Rating extends ActiveRecord {

	/**
	 * {@inheritdoc}
	 */
	public static function tableName() {
		return 'rating';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules() {
		return [
			[
				[
					'product_id',
					'user_id',
					'score',
					'created_at',
					'updated_at',
				],
				'integer',
			],
			[
				['product_id'],
				'exist',
				'skipOnError'     => true,
				'targetClass'     => Product::class,
				'targetAttribute' => ['product_id' => 'id'],
			],
			[
				['user_id'],
				'exist',
				'skipOnError'     => true,
				'targetClass'     => User::class,
				'targetAttribute' => ['user_id' => 'id'],
			],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels() {
		return [
			'id'         => 'ID',
			'product_id' => 'Product ID',
			'user_id'    => 'User ID',
			'score'      => 'Score',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		];
	}

	/**
	 * Gets query for [[Product]].
	 *
	 * @return ActiveQuery
	 */
	public function getProduct() {
		return $this->hasOne(Product::class, ['id' => 'product_id']);
	}

	/**
	 * Gets query for [[User]].
	 *
	 * @return ActiveQuery
	 */
	public function getUser() {
		return $this->hasOne(User::class, ['id' => 'user_id']);
	}
}
