<?php

namespace console\controllers;

use common\helper\CrawHtmlHepler;
use common\models\ProductRelate;
use console\models\Accessory;
use console\models\Category;
use common\models\Item;
use console\models\Phone;

class ItemController extends \yii\console\Controller {

	public function actionIphone() {
		$category = Category::findOne(['name' => 'iphone']);
		if ($category == null) {
			$category             = new Category();
			$category->name       = 'Apple';
			$category->updated_at = time();
			$category->created_at = time();
			if ($category->save()) {
				echo 'done_category' . PHP_EOL;
			} else {
				echo $category->errors . PHP_EOL;
			}
		}
		$urls   = [];
		$urls[] = 'https://cellphones.com.vn/mobile/apple.html';
		$urls[] = 'https://cellphones.com.vn/mobile/apple.html?p=2';
		foreach ($urls as $url) {
			/** @var Phone $phones */
			$phones = CrawHtmlHepler::crawIphone($url);
			if ($phones) {
				/** @var Phone $phone */
				foreach ($phones as $phone) {
					$phone->category_id = $category->getPrimaryKey();
					$arrPrices          = explode(".", $phone->price);
					$phone->price       = '';
					foreach ($arrPrices as $arrPrice) {
						$phone->price .= $arrPrice;
					}
					$phone->price      = intval($phone->price);
					$phone->quanlity   = 1;
					$phone->color      = "đen";
					$phone->status     = "còn hàng";
					$phone->created_at = time();
					$phone->updated_at = time();
					if ($phone->save()) {

						echo 'done_iphone-> id =' . $phone->getPrimaryKey() . PHP_EOL;
						/** @var Item $item */
						$item               = new Item();
						$item->product_id   = $phone->getPrimaryKey();
						$item->product_type = 'phone';
						$item->save();
						echo 'done_item ->id =' . $item->getPrimaryKey();
					} else {
						echo '<pre>';
						print_r($phone->errors);
						die;
					}
				}
			}
		}
		echo 'done' . PHP_EOL;

	}

	public function actionCrawPhone() {
		$this->actionIphone();
		$categoris = CrawHtmlHepler::crawCategory("https://cellphones.com.vn/");
		CrawHtmlHepler::crawPhoneByCategory($categoris);
	}

	public function actionCrawItem(){
		$this->actionCrawPhone();
		$this->actionCrawAccessory();
		echo "==================> CRAW DATA DONE".PHP_EOL;
	}

	public function actionCrawAccessory() {
		$categoris = CrawHtmlHepler::crawCategoryAcesstory('https://cellphones.com.vn/phu-kien.html');
		$newCategories = [];
		for($i=0;$i<15;$i++){
			$newCategories[] = $categoris[$i];
		}
		CrawHtmlHepler::crawAccestoryByCatogory($newCategories);

	}

	public function actionTest(){
		$accessory  = CrawHtmlHepler::crawAccessory('https://cellphones.com.vn/phu-kien.html?phone_accessory_brands=1027');
	}


	public function actionCreateBill(){
		for ($i=0;$i<10;$i++){
			$bill = new Bill();
			$bill->user_id = 2;
			$bill->sub_total = 1000;
			$bill->grand_total = 200;
			$bill->status = "còn hàng";
			sleep(1);
			if($bill->save()){
				echo 'done!'.PHP_EOL;
			}else{
				echo '<pre>';
				print_r($bill->errors);
				die;
			}
		}

	}

	public function actionCreateBillDetail(){
		for ($i=0;$i<30;$i++){
			$billDetail = new BillDetail();
			$billDetail->bill_id = rand(14,22);
			$billDetail->item_id = rand(1,12);
			$billDetail->price = 12312312;
			$billDetail->amount = 3333;
			if($billDetail->save()){
				echo 'done'.PHP_EOL;
			}else{
				echo '<pre>';
				print_r($billDetail->errors);
				die;
			}
		}
	}

	public function actionGetItem(){
		$itemes = [];
		$phones = Phone::find()->all();
		foreach ($phones as $phone){
			$item = new Item();
			$item->product_id = $phone->id;
			$item->product_type = 0;
			$itemes[] = $item;
		}

		echo count($itemes).PHP_EOL;

		$accessories = Accessory::find()->all();
		foreach ($accessories as $accessory){
			$item = new  Item();
			$item->product_id = $accessory->id;
			$item->product_type = 1;
			$itemes[] = $item;
		}
		foreach ($itemes as $item){
			if(!$item->save()){
				echo '<pre>';
				print_r($item->errors);
				die;
			}
		}
	}
}
