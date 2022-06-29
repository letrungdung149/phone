<?php

namespace common\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "bii_infor".
 *
 * @property int         $id
 * @property int         $bill_id
 * @property string      $first_name
 * @property string      $last_name
 * @property string|null $company_name
 * @property string      $email
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $city
 * @property string|null $country
 * @property string|null $postcode
 * @property int         $created_at
 * @property int         $updated_at
 *
 * @property Bill        $bill
 */
class BillInfo extends ActiveRecord {

	/**
	 * {@inheritdoc}
	 */
	public static function tableName() {
		return 'bill_info';
	}

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
					'first_name',
					'last_name',
					'email',
				],
				'required',
			],
			[
				[
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
				'string',
				'max' => 255,
			],
			[
				['bill_id'],
				'exist',
				'skipOnError'     => true,
				'targetClass'     => Bill::class,
				'targetAttribute' => ['bill_id' => 'id'],
			],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels() {
		return [
			'id'           => 'ID',
			'bill_id'      => 'Bill ID',
			'first_name'   => 'First Name',
			'last_name'    => 'Last Name',
			'company_name' => 'Company Name',
			'email'        => 'Email',
			'phone'        => 'Phone',
			'address'      => 'Address',
			'city'         => 'City',
			'country'      => 'Country',
			'postcode'     => 'Postcode',
			'created_at'   => 'Created At',
			'updated_at'   => 'Updated At',
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
}
