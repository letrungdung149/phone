<?php

use common\models\Category;
use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\daterange\DateRangePicker;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title                   = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel'  => $searchModel,
		'columns'      => [
			['class' => 'yii\grid\SerialColumn'],
			'name',
			[
				'class'     => \kartik\grid\DataColumn::class,
				'attribute' => 'created_at',
				'filterType' => GridView::FILTER_DATE_RANGE,
				'format' =>  ['date', 'php:Y-m-d'],
				'filterWidgetOptions' => [
					'readonly' => 'readonly',
					'convertFormat' => true,
					'pluginOptions' => [
						'locale' => ['format' => 'Y-m-d'],
						'autoclose' => true,
					],
					'pluginEvents' => [
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
