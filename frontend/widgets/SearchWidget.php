<?php
/**
 * Created by Navatech.
 * @project clone-phimmoi
 * @author  Phuong
 * @email   notteen[at]gmail.com
 * @date    9/11/2020
 * @time    10:20 AM
 */

namespace frontend\widgets;

use frontend\models\SearchForm;
use yii\base\Widget;
use yii\helpers\Html;

class SearchWidget extends Widget
{
	public $message;

	public function init()
	{
		parent::init();
	}

	public function run()
	{
		$searchForm = new SearchForm();
		return $this->render('SearchWidget',['searchForm'=>$searchForm]);
	}
}
