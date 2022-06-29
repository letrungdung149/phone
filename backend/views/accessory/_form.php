<?php

use common\models\Phone;
use common\models\ProductRelate;
use dosamigos\tinymce\TinyMce;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\JsExpression;
use yii\web\View;
use yii\widgets\ActiveForm;
use common\models\Category;

/* @var $this yii\web\View */
/* @var $model common\models\Accessory */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$formatJs = <<< JS
        var formatPenerima = function (penerima) {
            if (penerima.loading) {
                return penerima.text;
            }
    var markup =
'<div class="row">' + 
    '<div class="col-sm-5">' +
        '<img src="' + penerima.image + '" class="img-rounded" style="width:30px" />' +
        '<b style="margin-left:5px">' + penerima.name + '</b>' + 
    '</div>' +
    '<div class="col-sm-3"><i class="fa fa-code-fork"></i> ' + penerima.price + '</div>' +
'</div>';
            return '<div style="overflow:hidden;">' + markup + '</div>';
        };
        var formatPenerimaSelection = function (penerima) {
            return penerima.name || penerima.text;
        }
JS;
// Register the formatting script
$this->registerJs($formatJs, View::POS_HEAD);
// script to parse the results into the format expected by Select2
$resultsJs = <<< JS
    function (data, params) {
        params.page = params.page || 1;
        return {
            // Change `data.items` to `data.results`.
            // `results` is the key that you have been selected on
            // `actionJsonlist`.
            results: data
        };
    }
JS;
?>

<div class="accessory-form">

	<?php $form = ActiveForm::begin(); ?>

	<!--  --><? /*= $form->field($model, 'id')->textInput() */ ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(), 'id', 'name'), ['prompt' => 'Chọn loại sản phẩm.']) ?>

	<?= $form->field($model, 'price')->textInput() ?>

	<?= $form->field($model, 'quanlity')->textInput() ?>

	<?= $form->field($model, 'slug')->textInput() ?>

	<?= $form->field($model, 'phone_accessory')->widget(Select2::classname(), [
		'name'          => 'kv-repo-template',
		'initValueText' => ArrayHelper::map($model->phoneAccessories, 'phone_id', function(ProductRelate $data){
			return $data->phone->name;
		}),
		'options'       => [
			'placeholder' => 'Search for a phone ...',
			'multiple'    => true,
		],
		'pluginOptions' => [
			'allowClear'         => true,

			'minimumInputLength' => 3,
			'ajax'               => [
				'url'            => \yii\helpers\Url::to(['ajax/get-phone']),
				'dataType'       => 'json',
				'delay'          => 250,
				'data'           => new JsExpression('function(params) { return {q:params.term};}'),
				'processResults' => new JsExpression($resultsJs),
				'cache'          => true,
			],
			'escapeMarkup'       => new JsExpression('function (markup) { return markup; }'),
			'templateResult'     => new JsExpression('formatPenerima'),
			'templateSelection'  => new JsExpression('formatPenerimaSelection'),
		],
	]); ?>

	<?= $form->field($model, 'color')->dropDownList([
		'xanh' => 'Xanh',
		'đỏ'   => 'Đỏ',
		'tím'  => 'Tím',
		'vàng' => 'Vàng',
	], ['prompt' => 'Chọn màu sản phẩm.']) ?>

	<!--  --><? /*= $form->field($model, 'image')->textInput(['maxlength' => true]) */ ?>
	<? /*= $form->field($model, 'image_tmp')->fileInput() */ ?>

	<?php
	if ($model->image) {
		echo $form->field($model, 'image_tmp')->fileInput();
		echo Html::img($model->image);
	} else {
		echo $form->field($model, 'image_tmp')->fileInput();
	}
	?>

	<?= $form->field($model, 'status')->dropDownList([
		'còn hàng' => 'Còn hàng',
		'hết hàng' => 'Hết hàng',
	], ['prompt' => 'Chọn trạng thái.']) ?>

	<?= $form->field($model, 'description')->widget(TinyMce::className(), [
		'options'       => ['rows' => 10],
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

	<?php $data = Phone::find()->select([
		'id',
		'name',
	])->all(); ?>

	<div class="form-group">
		<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>

<div>

</div>




