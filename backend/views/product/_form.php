<?php

use common\models\Category;
use common\models\Product;
use common\models\ProductRelate;
use dosamigos\tinymce\TinyMce;
use kartik\color\ColorInput;
use kartik\number\NumberControl;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
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
<div class="product-form">

	<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

	<div class="row">
		<div class="col-sm-6">
			<div class="row">
				<div class="col-sm-6">
					<?= $form->field($model, 'type')->dropDownList(Product::TYPE, ['prompt' => '']) ?>
				</div>
				<div class="col-sm-6">
					<?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(), 'id', 'name')) ?>
				</div>
			</div>
			<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
			<div class="row">
				<div class="col-sm-4">
					<?= $form->field($model, 'price')->widget(NumberControl::class, [
						'maskedInputOptions' => [
							'suffix' => ' đ',
						],
					]) ?>
				</div>
				<div class="col-sm-4">
					<?= $form->field($model, 'color')->widget(ColorInput::class) ?>
				</div>
				<div class="col-sm-4">
					<?= $form->field($model, 'memory')->dropDownList([
						'16GB'  => '16GB',
						'32GB'  => '32GB',
						'64GB'  => '64GB',
						'128GB' => '128GB',
						'256GB' => '256GB',
						'512GB' => '512GB',
					], ['prompt' => '']) ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<?= $form->field($model, 'quantity')->textInput() ?>
				</div>
				<div class="col-sm-6">
					<?= $form->field($model, 'status')->dropDownList(Product::STATUS, ['prompt' => '']) ?>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<?php
			if (isset($model->image)) {
				echo $form->field($model, 'image_tmp')->fileInput()->label(Html::img($model->image), ['class' => 'image-upload']);
			} else {
				echo $form->field($model, 'image_tmp')->fileInput()->label(Html::img('https://lh3.googleusercontent.com/proxy/uB-qs1Uq5KeK55-Gk1QTrWAO6WluuZz1m8saFSb-CMkhewxxfxYug96YQo-hxayIXT2WKG84fnbIhg21X4DMzT_aG-4IpKiSoDhG2F-xH_QFipDBIqcq3goW_9Y'), ['class' => 'image-upload']);
			}
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
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
		</div>
	</div>
	<?= $form->field($model, 'product_relates_id')->widget(Select2::classname(), [
		'name'          => 'kv-repo-template',
		'initValueText' => ArrayHelper::map($model->productRelateTargets, 'phone_id', function(ProductRelate $data) {
			return $data->sourceProduct->name;
		}),
		'options'       => [
			'placeholder' => 'Search for a phone ...',
			'multiple'    => true,
		],
		'pluginOptions' => [
			'allowClear'         => true,
			'minimumInputLength' => 3,
			'ajax'               => [
				'url'            => Url::to(['ajax/get-product']),
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
	<div class="form-group">
		<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
<script>

	function readURL(input) {
		if(input.files && input.files[0]) {
			var reader    = new FileReader();
			reader.onload = function(e) {
				$('.image-upload img').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#product-image_tmp").change(function() {
		readURL(this);
	});
</script>
