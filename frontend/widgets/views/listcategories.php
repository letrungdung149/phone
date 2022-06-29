<?php
/**
 * Created by FesVPN.
 * @project mobileshop
 * @author  Pham Hai
 * @email   mitto.hai.7356@gmail.com
 * @date    7/12/2020
 * @time    11:57 PM
 */

use common\models\Category;
use yii\helpers\Html;

?>
<?php /** @var Category $model */
/** @var Category $models */
foreach ($models as $model) {
	echo Html::beginTag('li');
	echo Html::a($model->name, [
		'product/index',
		'PhoneSearch[categories_id][]' => $model->id,
	]);
	echo Html::tag('i', '', ['class' => 'fa fa-angle-right']);
	echo Html::endTag('li');
} ?>

