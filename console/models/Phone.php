<?php
/**
 * Created by FesVPN.
 * @project mobieshop.demo
 * @author  Pham Hai
 * @email   mitto.hai.7356@gmail.com
 * @date    26/11/2020
 * @time    6:12 PM
 */

namespace console\models;
use common\models\Category;

class Phone extends \common\models\Phone {
	public function rules()
	{
		return [
			[['name', 'category_id', 'price', 'quanlity', 'color', 'status', 'image', 'created_at', 'updated_at'], 'required'],
			[['category_id', 'quanlity', 'created_at', 'updated_at'], 'integer'],
			[['price'], 'number'],
			[['color', 'memory', 'status', 'image', 'description'], 'string'],
			[['name', 'slug'], 'string', 'max' => 255],
			[['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
		];
	}
}
