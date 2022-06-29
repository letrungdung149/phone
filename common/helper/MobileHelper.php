<?php
/**
 * Created by FesVPN.
 * @project mobileshop
 * @author  Pham Hai
 * @email   mitto.hai.7356@gmail.com
 * @date    16/12/2020
 * @time    3:08 PM
 */

namespace common\helper;
class MobileHelper {
	public static function getPriceSale($price,$sale){
		return $price - $price*($sale/100);
	}
}
