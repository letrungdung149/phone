<?php

namespace common\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "product_relate".
 *
 * @property int     $id
 * @property int     $source_product_id
 * @property int     $target_product_id
 *
 * @property Product $sourceProduct
 * @property Product $targetProduct
 */
class ProductRelate extends ActiveRecord {

	/**
	 * {@inheritdoc}
	 */
	public static function tableName() {
		return 'product_relate';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules() {
		return [
			[
				[
					'source_product_id',
					'target_product_id',
				],
				'required',
			],
			[
				[
					'source_product_id',
					'target_product_id',
				],
				'integer',
			],
			[
				['source_product_id'],
				'exist',
				'skipOnError'     => true,
				'targetClass'     => Product::class,
				'targetAttribute' => ['source_product_id' => 'id'],
			],
			[
				['target_product_id'],
				'exist',
				'skipOnError'     => true,
				'targetClass'     => Product::class,
				'targetAttribute' => ['target_product_id' => 'id'],
			],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels() {
		return [
			'id'                => 'ID',
			'source_product_id' => 'Source Product ID',
			'target_product_id' => 'Target Product ID',
		];
	}

	/**
	 * Gets query for [[SourceProduct]].
	 *
	 * @return ActiveQuery
	 */
	public function getSourceProduct() {
		return $this->hasOne(Product::class, ['id' => 'source_product_id']);
	}

	/**
	 * Gets query for [[SourceProduct]].
	 *
	 * @return ActiveQuery
	 */
	public function getTargetProduct() {
		return $this->hasOne(Product::class, ['id' => 'target_product_id']);
	}
}
