<?php

use common\models\Category;
use kartik\grid\DataColumn;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title                   = 'Phones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phone-index">
	<h1><?= Html::encode($this->title) ?></h1>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel'  => $searchModel,
		'columns'      => [
			['class' => 'yii\grid\SerialColumn'],
			'name',
			'category_id',
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
				'value'               => function(\common\models\Phone $data) {
					return Category::findOne(['id'=>$data->category_id])->name;
				},
			],
				[
/*					'format' => 'Currency',
					'filter' => '',*/
					'attribute' => 'price',
				],
			'quanlity',
			//'color',
			//'color',
			//'status',
			//			'image:ntext',
			[
				'attribute' => 'image',
				'format'    => 'html',
				'value'     => function($data) {
					return Html::img($data['image'], [
						'width'  => '100px',
						'height' => '100px',
					]);
				},
			],
			//'description:ntext',
			//'created_at',
			//'updated_at',
			[
				'class'               => \kartik\grid\DataColumn::class,
				'attribute'           => 'created_at',
				'filterType'          => GridView::FILTER_DATE_RANGE,
				'format'              => [
					'date',
					'php:Y-m-d',
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
			[
				'class' => \kartik\grid\ActionColumn::class,
			],
		],
		'pjax'         => true,
		'pjaxSettings' => [
			'neverTimeout' => true,
		],
		'responsive'   => true,
		'hover'        => true,
		'panel'        => [
			'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-list"></i> LIST CATEGORY</h3>',
			'type'    => 'success',
			'before'  => Html::a('<i class="glyphicon glyphicon-plus"></i> Create Category', ['create'], ['class' => 'btn btn-success']),
			'after'   => Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
			'footer'  => false,
		],
	]); ?>

</div>


