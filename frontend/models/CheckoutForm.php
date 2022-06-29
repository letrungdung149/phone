<?php
/**
 * Created by FesVPN.
 * @project mobileshop
 * @author  Pham Hai
 * @email   mitto.hai.7356@gmail.com
 * @date    8/12/2020
 * @time    4:00 PM
 */

namespace frontend\models;
use common\models\BillInfo;
use common\models\Bill;
use common\models\BillDetail;
use yii\base\Model;
class CheckoutForm extends Model {
	public $id;
	public $bill_id;
	public $first_name;
	public $last_name;
	public $email;
	public $company_name;
	public $phone;
	public $address;
	public $city;
	public $country;
	public $postcode;
	public function rules()
	{
		return [
			[['bill_id', 'first_name', 'last_name', 'email',], 'required'],
			[['bill_id', 'created_at', 'updated_at'], 'integer'],
			[['first_name', 'last_name', 'company_name', 'email', 'phone', 'address', 'city', 'country', 'postcode'], 'string', 'max' => 255],
			['email','email'],
/*			[['bill_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bill::className(), 'targetAttribute' => ['bill_id' => 'id']],*/
		];
	}

	public function checkOut($bill_id){
		$bill = Bill::findOne(['id'=>$bill_id]);
		$bill->updateAttributes([
			'status'=>'pending'
		]);
		$billInfor = new BillInfo();
		$billInfor->bill_id = $bill->id;
		$billInfor->first_name = $this->first_name;
		$billInfor->last_name = $this->last_name;
		$billInfor->email = $this->email;
		$billInfor->company_name = $this->company_name;
		$billInfor->phone = $this->phone;
		$billInfor->address = $this->address;
		$billInfor->city = $this->city;
		$billInfor->country = $this->country;
		$billInfor->postcode = $this->postcode;
		if(!$billInfor->save()){
			echo '<pre>';
			print_r($billInfor->errors);
			die;
		}
		//TODO create biill infor
		return true;
	}

}
