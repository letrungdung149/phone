<?php
/**
 * Created by FesVPN.
 * @project mobieshop.demo
 * @author  Pham Hai
 * @email   mitto.hai.7356@gmail.com
 * @date    24/11/2020
 * @time    10:04 PM
 */

namespace common\helper;

use console\models\Accessory;
use common\models\Item;
use console\models\Phone;
use console\models\Category;
use yii\base\ErrorException;

class CrawHtmlHepler {

	/**
	 * @param $url
	 *
	 * @return array
	 */
	public static function crawIphone($url) {
		$items               = [];
		$htmlDom             = SimpleDomHtml::file_get_html($url);
		$htmlProductContains = $htmlDom->find('div[class="products-container"] ul li');
		foreach ($htmlProductContains as $htmlProductContain) {
			$item         = new Phone();
			$name         = $htmlProductContain->find('div[class="lt-product-group-info"] a h3', 0)->innertext();
			$index        = strpos($name, '<span>');
			$name_Product = $index ? trim(substr($name, 0, $index)) : $name;
			$item->name   = $name_Product;
			echo $item->name . PHP_EOL;
			$img         = $htmlProductContain->find('div[class="lt-product-group-image"] a img', 0);
			$item->image = $img->getAttribute('data-src');
			echo $item->image . PHP_EOL;
			$str_Slug   = $htmlProductContain->find('div[class="lt-product-group-image"] a', 0)->href;
			$arr_Slug   = explode('/', $str_Slug);
			$item->slug = explode('.', $arr_Slug[count($arr_Slug) - 1])[0];
			echo $item->slug . PHP_EOL;
			$domPrice    = $htmlProductContain->find('div[class="lt-product-group-info"] div[class="price-box"] p[class="special-price"] span', 0);
			$price       = $domPrice ? $domPrice->innertext() : - 1;
			$item->price = trim(substr($price, 0, 10));
			echo $item->price . PHP_EOL;
			$link_detail = $htmlProductContain->find('div[class="lt-product-group-info"] a', 0)->href;
			echo $link_detail . PHP_EOL;
			$htmlDomProductDetail = SimpleDomHtml::file_get_html($link_detail);
			$htmlDescription      = $htmlDomProductDetail->find('div[id="blog-content"]', 0);
			$item->description    = $htmlDescription ? $htmlDescription->innertext() : 'not set';
			echo $item->description . PHP_EOL;
			$trMemmoryProducts = $htmlDomProductDetail->find('table[id="tskt"] tr');
			foreach ($trMemmoryProducts as $trMemmoryProduct) {
				if ($trMemmoryProduct->find('td', 0)->innertext() == 'Bộ nhớ trong') {
					$strMemory    = $trMemmoryProduct->find('td', 1)->innertext();
					$arrMemory    = explode(" ", $strMemory);
					$item->memory = $arrMemory[0] . "GB";
				}
			}
			echo PHP_EOL . PHP_EOL;
			$items[] = $item;
		}
		return $items;
	}

	/**
	 * @param $url
	 *
	 * @return array
	 */
	public static function crawCategory($url) {
		$categoris = [];
		$htmlDom   = SimpleDomHtml::file_get_html($url);
		$arrUl     = $htmlDom->find('ul[class="box-list-menu box-menu__child"]', 0);
		$menuItems = $arrUl->find('li');
		for ($i = 8; $i < 16; $i ++) {
			$category       = new Category();
			$category->name = $menuItems[$i]->find('a span', 0)->innertext() . PHP_EOL;
			$category->url  = $menuItems[$i]->find('a', 0)->href;
			$categoris[]    = $category;
		}
		/** @var Category $category */
		foreach ($categoris as $category) {
			$category->created_at = time();
			$category->updated_at = time();
			$exitCategory         = Category::findOne(['name' => $category->name]);
			if ($exitCategory == null) {
				if ($category->save()) {
					echo 'add_done_category_id =' . $category->getPrimaryKey() . PHP_EOL;
				}
			} else {
				echo 'category da ton tai' . PHP_EOL;
			}
		}
		echo 'done_category' . PHP_EOL;
		return $categoris;
	}

	/**
	 * @param array $categoris
	 */
	public static function crawPhoneByCategory(array $categoris) {
		/** @var Category $category */
		/** @var Category $categoris */
		foreach ($categoris as $category) {
			echo $category->url . PHP_EOL;
			$category_id = Category::findOne(['name' => $category->name])->id;
			$phones      = self::crawPhone($category->url);
			/** @var Phone $phone */
			foreach ($phones as $phone) {
				$phone->category_id = $category_id;
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

	/**
	 * @param $url
	 *
	 * @return array
	 */
	public static function crawPhone($url) {
		$items               = [];
		$htmlDom             = SimpleDomHtml::file_get_html($url);
		$htmlProductContains = $htmlDom->find('div[class="products-container"] ul li');
		foreach ($htmlProductContains as $htmlProductContain) {
			if (strpos($htmlProductContain->class, "pro-short")) {
				echo '1' . PHP_EOL;
				$item         = new Phone();
				$name         = $htmlProductContain->find('div[class="lt-product-group-info"] a h3', 0)->innertext();
				$index        = strpos($name, '<span>');
				$name_Product = $index ? trim(substr($name, 0, $index)) : $name;
				$item->name   = $name_Product;
				echo $item->name . PHP_EOL;
				$img         = $htmlProductContain->find('div[class="lt-product-group-image"] a img', 0);
				$item->image = $img->getAttribute('data-src');
				echo $item->image . PHP_EOL;
				$str_Slug   = $htmlProductContain->find('div[class="lt-product-group-image"] a', 0)->href;
				$arr_Slug   = explode('/', $str_Slug);
				$item->slug = explode('.', $arr_Slug[count($arr_Slug) - 1])[0];
				echo $item->slug . PHP_EOL;
				$domPrice    = $htmlProductContain->find('div[class="lt-product-group-info"] div[class="price-box"] p[class="special-price"] span', 0);
				$price       = $domPrice ? $domPrice->innertext() : - 1;
				$item->price = trim(substr($price, 0, 10));
				echo $item->price . PHP_EOL;
				$link_detail          = $htmlProductContain->find('div[class="lt-product-group-info"] a', 0)->href;
				$htmlDomProductDetail = SimpleDomHtml::file_get_html($link_detail);
				$htmlDescription      = $htmlDomProductDetail->find('div[class="blog-content"]', 0);
				$item->description    = 'not set';
				$item->description    = $htmlDescription ? $htmlDescription->innertext() : 'not set';
				echo $item->description . PHP_EOL;
				$trMemmoryProducts = $htmlDomProductDetail->find('table[id="tskt"] tr');
				foreach ($trMemmoryProducts as $trMemmoryProduct) {
					if ($trMemmoryProduct->find('td', 0)->innertext() == 'Bộ nhớ trong') {
						$strMemory    = $trMemmoryProduct->find('td', 1)->innertext();
						$arrMemory    = explode(" ", $strMemory);
						$item->memory = intval($arrMemory[0]) < 16 ? "16GB" : $arrMemory[0] . "GB";
					}
				}
				echo $item->memory;
				$items[] = $item;
			}
			echo PHP_EOL . PHP_EOL;
		}
		return $items;
	}

	public static function crawAccestoryByCatogory(array $categories) {
		/** @var Category $category */
		foreach ($categories as $category) {
			$htmlDom              = SimpleDomHtml::file_get_html($category->url);
			$name_Category        = $htmlDom->find('div[class="currently left"] ul[class="inline"] li a', 0)->innertext();
			$name_Category        = explode(" ", trim($name_Category))[3];
			/*$category->name       = $name_Category;*/
			$category->name       = explode("<",$name_Category)[0];
			$category->created_at = time();
			$category->updated_at = time();
			$existCategory = Category::findOne(['name'=>$category->name ]);
			if($existCategory == null){
				if ($category->save()) {
					echo 'add_done_category_id = ' . $category->getPrimaryKey() . PHP_EOL;
				} else {
					echo '<pre>';
					print_r($category->errors);
					die;
				}
			}else{
				echo 'category is exist'.PHP_EOL;
			}
			$accessories = self::crawAccessory($category->url);
			/** @var Accessory $accessory */
			foreach ($accessories as $accessory) {
				$accessory->category_id = $existCategory?$existCategory->id:$category->getPrimaryKey();
				$accessory->quanlity    = 5;
				$accessory->color       = "xanh";
				$accessory->status      = "còn hàng";
				$accessory->description = "not set";
				if ($accessory->save()) {
					echo 'add_done_accessory_id = ' . $accessory->getPrimaryKey() . PHP_EOL;
				} else {
					echo '<pre>';
					print_r($accessory);
					print_r($accessory->errors);
					die;
				}
			}
		}
	}

	/**
	 * @param $url
	 *
	 * @return array
	 */
	public static function crawCategoryAcesstory($url) {
		$categories = [];
		$htmlDom    = SimpleDomHtml::file_get_html('https://cellphones.com.vn/phu-kien.html');
		$ulMenus    = $htmlDom->find('ul[class="list-unstyled mb-0 d-flex flex-wrap"]', 1);
		$liMenus    = $ulMenus->find('li');
		foreach ($liMenus as $liMenu) {
			$category      = new Category();
			$category->url = $liMenu->find('a', 0)->href;
			$categories[]  = $category;
		}
		return $categories;
	}

	public static function crawAccessory($url) {
		$accessories = [];
		$htmlDom     = SimpleDomHtml::file_get_html($url);
		$ulContents  = $htmlDom->find('ul[class="list-unstyled mt-2"]', 0);
		$liContents  = $ulContents->find('li[class="product"]');
		foreach ($liContents as $liContent) {
			$accessory       = new Accessory();
			file_put_contents('a.txt',$liContent);
			/*file_put_contents('a.txt',$liContent->find('div[class="product__box-info"] a h3', 0));*/
			$accessory->name = $liContent->find('div[class="product__box-info"] a h3', 0)->innertext();
			echo $accessory->name . PHP_EOL;

			$link_Accessory = $liContent->find('div[class="product__box-info"] a', 0)->href;
			$arr_link_Accessory =explode("/",$link_Accessory);
			$link_Accessory =  explode(".",$arr_link_Accessory[count($arr_link_Accessory)-1])[0];
			$accessory->slug = $link_Accessory;
			echo $accessory->slug.PHP_EOL;

			$img_Accessory    = $liContent->find('div[class="product__box-image"] a img', 0)->getAttribute('data-src');
			$accessory->image = $img_Accessory == null ? 'not set' : $img_Accessory;
			echo $accessory->image . PHP_EOL;
			$specialPrice = $liContent->find('div[class="product__box-price"] p[class="special-price"]', 0);
			if ($specialPrice == null) {
				$accessory->price = trim(substr($liContent->find('div[class="product__box-price"] p[class="no-price"]', 0)->innertext(), 0, 10));
			} else {
				$accessory->price = trim(substr($specialPrice->innertext(), 0, 10));
			}
			$arrPrices        = explode(".", $accessory->price);
			$accessory->price = '';
			foreach ($arrPrices as $arrPrice) {
				$accessory->price .= $arrPrice;
			}
			$accessory->price = intval($accessory->price);
			echo PHP_EOL . "---" . PHP_EOL;
			$accessories[] = $accessory;
		}
		return $accessories;
	}
}
