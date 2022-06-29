<?php

use common\models\Accessory;
use common\models\Category;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;


/* @var $this yii\web\View */
/* @var $model common\models\Phone */
/* @var $form yii\widgets\ActiveForm */
$categories     = Category::find()->all();
$category_names = [];
foreach ($categories as $category) {
	$category_names[$category->id] = $category->name;
}

$accessories = Accessory::find()->all();
$accessory_names = [];
foreach ($accessories as $accessory) {
	$accessory_names[$accessory->id] = $accessory->name;
}
?>

<div class="phone-form">

	<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'category_id')->dropDownList($category_names) ?>

	<?= $form->field($model, 'price')->textInput() ?>

	<?= $form->field($model, 'quanlity')->textInput() ?>

	<?= $form->field($model, 'color')->dropDownList([
		'đen'   => 'Đen',
		'đỏ'    => 'Đỏ',
		'trắng' => 'Trắng',
		'xám'   => 'Xám',
	], ['prompt' => '']) ?>

	<?= $form->field($model, 'memory')->dropDownList([
		'16GB'  => '16GB',
		'64GB'  => '64GB',
		'128GB' => '128GB',
		'256GB' => '256GB',
	], ['prompt' => '']) ?>

	<?= $form->field($model, 'status')->dropDownList([
		'còn hàng' => 'Còn hàng',
		'hết hàng' => 'Hết hàng',
	], ['prompt' => '']) ?>

	<?=$form->field($model,'accessories_id')->dropDownList($accessory_names,['multiple' => true])?>

	<?php
	if(isset($model->image)) {
		echo $form->field($model, 'image_tmp')->fileInput();
		echo Html::img($model->image);
	}
	else {
		echo $form->field($model, 'image_tmp')->fileInput();
	}
	?>

	<?= $form->field($model, 'description')->widget(TinyMce::className(), [
		'options'       => ['rows' => 6],
		'language'      => 'es',
		'clientOptions' => [
			'plugins' => [
				"advlist autolink lists link charmap print preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime media table contextmenu paste",
			],
			'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		],
	]); ?>
	<div class="form-group">
		<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
