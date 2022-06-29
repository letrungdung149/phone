<?php

use common\models\Category;
use common\models\Product;
use kartik\grid\DataColumn;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title                   = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel'  => $searchModel,
		'columns'      => [
			['class' => 'yii\grid\SerialColumn'],
			[
				'attribute' => 'type',
				'filter'    => Product::TYPE,
				'value'     => function(Product $data) {
					return Product::TYPE[$data->type];
				},
			],
			[
				'class'               => DataColumn::class,
				'attribute'           => 'category_id',
				'filter'              => ArrayHelper::map(Category::find()->all(), 'id', 'name'),
				'filterType'          => GridView::FILTER_SELECT2,
				'filterWidgetOptions' => [
					'pluginOptions' => ['allowClear' => true],
				],
				'filterInputOptions'  => ['placeholder' => 'Any Type'],
				'format'              => 'html',
				'value'               => function(Product $data) {
					return $data->category->name;
				},
			],
			'name',
			[
				'attribute'      => 'price',
				'value'          => function(Product $data) {
					return number_format($data->price) . ' đ';
				},
				'contentOptions' => ['class' => 'text-right'],
			],
			[
				'attribute' => 'image',
				'filter'    => false,
				'format'    => 'html',
				'value'     => function($data) {
					return Html::img($data['image'], [
						'width'  => '100px',
						'height' => '100px',
					]);
				},
			],
			[
				'attribute'      => 'quantity',
				'contentOptions' => ['class' => 'text-center'],
			],
			[
				'attribute' => 'status',
				'filter'    => Product::STATUS,
				'value'     => function(Product $data) {
					return Product::STATUS[$data->status];
				},
			],
			[
				'class'               => DataColumn::class,
				'attribute'           => 'created_at',
				'filterType'          => GridView::FILTER_DATE_RANGE,
				'format'              => [
					'date',
					'php:Y-m-d H:i:s',
				],
				'filterWidgetOptions' => [
					'readonly'      => 'readonly',
					'convertFormat' => true,
					'pluginOptions' => [
						'locale'    => ['format' => 'Y-m-d'],
						'autoclose' => true,
					],
					'pluginEvents'  => [
						"cancel.daterangepicker" => 'function(ev,picker){$(this).val("").trigger("change");}',
					],
				],
			],
			['class' => 'yii\grid\ActionColumn'],
		],
		'pjax'         => true,
		'pjaxSettings' => [
			'neverTimeout' => true,
		],
		'responsive'   => true,
		'hover'        => true,
		'panel'        => [
			'type'   => 'success',
			'before' => Html::a('<i class="glyphicon glyphicon-plus"></i> Create Product', ['create'], ['class' => 'btn btn-success']),
			'after'  => Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
			'footer' => false,
		],
	]); ?>

</div>
