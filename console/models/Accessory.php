<?php
/**
 * Created by FesVPN.
 * @project mobieshop.demo
 * @author  Pham Hai
 * @email   mitto.hai.7356@gmail.com
 * @date    26/11/2020
 * @time    6:20 PM
 */

namespace console\models;

use common\models\Category;
use yii\behaviors\TimestampBehavior;

class Accessory extends \common\models\Accessory {
	public function behaviors()
	{
		return [
			TimestampBehavior::className(),
		];
	}
	public function rules() {
		return [
			[
				[
					'name',
					'category_id',
					'price',
					'quanlity',
					'color',
					'image',
					'status',
					'description',
				],
				'required',
			],
			[
				[
					'category_id',
					'quanlity',
					'created_at',
					'updated_at',
				],
				'integer',
			],
			[
				['price'],
				'number',
			],
			[
				[
					'color',
					'status',
					'description',
					'image',
				],
				'string',
			],
			[
				[
					'name',
					'slug',
				],
				'string',
				'max' => 255,
			],
			[
				['category_id'],
				'exist',
				'skipOnError' => true,
				'targetClass' => Category::className(),
				'targetAttribute' => ['category_id' => 'id'],
			],
		];
	}
}
