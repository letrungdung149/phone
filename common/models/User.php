<?php

namespace common\models;
/**
 * This is the model class for table "user".
 *
 * @property string   $role
 *
 * @property Bill[]   $bills
 * @property Rating[] $ratings
 */
class User extends \dektrium\user\models\User {

	/**
	 * {@inheritdoc}
	 */
	public function rules() {
		$parent   = parent::rules();
		$parent[] = [
			['role'],
			'string',
		];
		return $parent;
	}
}
