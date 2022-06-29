<?php

namespace common\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "bill_detail".
 *
 * @property int       $id
 * @property int       $bill_id
 * @property int       $product_id
 * @property float     $price
 * @property int       $quantity
 * @property float     $amount
 * @property int       $created_at
 * @property int       $updated_at
 *
 * @property Bill      $bill
 * @property-read void $chartData
 * @property Product   $product
 */
class BillDetail extends ActiveRecord {

	/**
	 * {@inheritdoc}
	 */
	public static function tableName() {
		return 'bill_detail';
	}

	/**
	 * @return array
	 */
	public function behaviors() {
		// TODO: Change the auto generated stub
		return ['timestamp' => ['class' => TimestampBehavior::class]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules() {
		return [
			[
				[
					'bill_id',
					'product_id',
					'price',
					'quantity',
					'amount',
				],
				'required',
			],
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
			[
				['id'],
				'unique',
			],
			[
				['bill_id'],
				'exist',
				'skipOnError'     => true,
				'targetClass'     => Bill::class,
				'targetAttribute' => ['bill_id' => 'id'],
			],
			[
				['product_id'],
				'exist',
				'skipOnError'     => true,
				'targetClass'     => Product::class,
				'targetAttribute' => ['product_id' => 'id'],
			],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels() {
		return [
			'id'         => 'ID',
			'bill_id'    => 'Bill ID',
			'product_id' => 'Product ID',
			'price'      => 'Price',
			'quantity'   => 'Quantity',
			'amount'     => 'Amount',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		];
	}

	/**
	 * Gets query for [[Bill]].
	 *
	 * @return ActiveQuery
	 */
	public function getBill() {
		return $this->hasOne(Bill::class, ['id' => 'bill_id']);
	}

	/**
	 * Gets query for [[Product]].
	 *
	 * @return ActiveQuery
	 */
	public function getProduct() {
		return $this->hasOne(Product::class, ['id' => 'product_id']);
	}

	public $get_data;

	public function getChartData() {
		$times = explode(' - ', ['BillDetail']['created_at']);
		for ($i = 0; $i < 30; $i ++) {
			$start_day      = strtotime(trim($times[0]) . ' 00:00:00');
			$end_day        = strtotime(trim($times[1]) . ' 23:59:59');
			$this->get_data = $this::find()->Where($start_day < 'created_at')->andWhere('created_at' < $end_day)->sum($this->quantity);
		}
		echo '<pre>';
		print_r($this->get_data);
		die;
	}
}
