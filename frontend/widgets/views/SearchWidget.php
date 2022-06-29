<?php
/**
 * Created by Navatech.
 * @project Default (Template) Project
 * @author  Phuong
 * @email   notteen[at]gmail.com
 * @date    5/12/2020
 * @time    8:23 AM
 */
/* @var $this \yii\web\View */

use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin([
	'action' => Url::to(['/search/index']),
	'method' => 'GET',
]) ?>
<?= /** @var \frontend\models\SearchForm $searchForm */
$form->field($searchForm, 'keyword')->textInput(['class'       => 'round search-round',
                                                 'placeholder' => 'Search by product name',
])->label(false) ?>
<!--<input type="text" name="search" placeholder="Search by product name">-->

<div class="round search-round"><a href="#">
		<button type="submit" class="flaticon-search"></button>
	</a></div>

<?php ActiveForm::end() ?>
