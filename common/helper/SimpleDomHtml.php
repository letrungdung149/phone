<?php
/**
 * Created by FesVPN.
 * @project mobieshop.demo
 * @author  Pham Hai
 * @email   mitto.hai.7356@gmail.com
 * @date    24/11/2020
 * @time    2:01 PM
 */

namespace common\helper;
use navatech\simplehtmldom\simple_html_dom;
use navatech\simplehtmldom\SimpleHTMLDom;
use Yii;

class SimpleDomHtml extends \navatech\simplehtmldom\SimpleHTMLDom {

	public static function file_get_html($url, $use_include_path = false, $context = null, $offset = - 1, $lowercase = true, $forceTagsClosed = true, $target_charset = DEFAULT_TARGET_CHARSET, $stripRN = true, $defaultBRText = DEFAULT_BR_TEXT, $defaultSpanText = DEFAULT_SPAN_TEXT) {
		$dom      = new simple_html_dom(null, $lowercase, $forceTagsClosed, $target_charset, $stripRN, $defaultBRText, $defaultSpanText);
		$header   = self::get_web_page($url);
		$contents = $header['content'];
		if (empty($contents) || strlen($contents) > MAX_FILE_SIZE || $header['http_code'] !== 200) {
			return false;
		}
		$dom->load($contents, $lowercase, $stripRN);
		return $dom;
	}

	/**
	 * @param $url
	 *
	 * @return mixed
	 */
	public static function get_web_page($url) {
		$cookie     = Yii::getAlias('@runtime/giftcard.txt');
		$user_agent = 'Mozilla/5.0 (Windows NT 6.1; rv:8.0) Gecko/20100101 Firefox/8.0';
		$options    = [
			CURLOPT_CUSTOMREQUEST  => "GET",
			CURLOPT_USERAGENT      => 'Mozilla/5.0 (Windows NT 6.1; rv:8.0) Gecko/20100101 Firefox/8.0',
			CURLOPT_COOKIEFILE     => $cookie,
			CURLOPT_COOKIEJAR      => $cookie,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING       => "",
			CURLOPT_AUTOREFERER    => true,
			CURLOPT_CONNECTTIMEOUT => 120,
			CURLOPT_TIMEOUT        => 120,
			CURLOPT_MAXREDIRS      => 10,
			CURLOPT_SSL_VERIFYHOST => false,
			CURLOPT_SSL_VERIFYPEER => false,
		];
		$ch         = curl_init($url);
		curl_setopt_array($ch, $options);
		$content = curl_exec($ch);
		$err     = curl_errno($ch);
		$errmsg  = curl_error($ch);
		$header  = curl_getinfo($ch);
		curl_close($ch);
		$header['errno']   = $err;
		$header['errmsg']  = $errmsg;
		$header['content'] = $content;
		return $header;
	}
}
