<?php

namespace common\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "bill".
 *
 * @property int          $id
 * @property int          $user_id
 * @property int          $total_quantity
 * @property float        $total_amount
 * @property string       $status
 * @property int          $created_at
 * @property int          $updated_at
 *
 * @property User         $user
 * @property BillDetail[] $billDetails
 */
class Bill extends ActiveRecord {

	const  STATUS_DRAFT     = 'draft';

	const  STATUS_PENDING   = 'pending';

	const  STATUS_COMPLETED = 'completed';

	/**
	 * {@inheritdoc}
	 */
	public static function tableName() {
		return 'bill';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules() {
		return [
			[
				[
					'user_id',
					'status',
				],
				'required',
			],
			[
				[
					'id',
					'user_id',
					'created_at',
					'updated_at',
				],
				'integer',
			],
			[
				[
					'total_amount',
					'total_quantity',
				],
				'number',
			],
			[
				['status'],
				'string',
			],
			[
				['id'],
				'unique',
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

	public function behaviors() {
		// TODO: Change the auto generated stub
		return ['timestamp' => ['class' => TimestampBehavior::class]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels() {
		return [
			'id'         => 'ID',
			'user_id'    => 'User Name',
			'status'     => 'Status',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		];
	}

	/**
	 * Gets query for [[User]].
	 *
	 * @return ActiveQuery
	 */
	public function getUser() {
		return $this->hasOne(User::class, ['id' => 'user_id']);
	}

	/**
	 * Gets query for [[BillDetails]].
	 *
	 * @return ActiveQuery
	 */
	public function getBillDetails() {
		return $this->hasMany(BillDetail::class, ['bill_id' => 'id']);
	}

	public $get_quantity;

	public function afterFind() {
		$this->updateTotal();
		$this->get_quantity = BillDetail::find()->where(['bill_id' => $this->id])->sum('quantity');
		parent::afterFind();
	}

	/**
	 *
	 * Update total, run after update cart
	 */
	public function updateTotal() {
		$total = 0;
		foreach ($this->billDetails as $billDetail) {
			$total += $billDetail->amount;
		}
		$this->updateAttributes([
			'total_amount'   => $total,
			'total_quantity' => $this->getBillDetails()->count(),
		]);
	}

	public function getTotalItem(Bill $bill) {
		$billDetail = BillDetail::find()->where(['bill_id' => $bill->id])->all();
		return count($billDetail);
	}
}
