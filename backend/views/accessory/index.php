<?php

use common\models\Accessory;
use common\models\Category;
use kartik\grid\DataColumn;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AccessorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title                   = 'Accessories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accessory-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel'  => $searchModel,
		'panel'        => [
			'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-list"></i> LIST ACCESSORIES</h3>',
			'type'    => 'success',
			'before'  => Html::a('<i class="glyphicon glyphicon-plus"></i> Create Category', ['create'], ['class' => 'btn btn-success']),
			/*'after'   => Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),*/
		],
		'columns'      => [
			['class' => 'yii\grid\SerialColumn'],
			//'id',
			[
				'attribute' => 'image',
				'format'    => 'html',
				'filter'    => false,
				'value'     => function(Accessory $data) {
					return Html::img($data->image, ['width' => '70px']);
				},
			],
			'name',
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
				'value'               => function(Accessory $data) {
					return Category::findOne(['id' => $data->category_id])->name;
				},
			],
			[
				'attribute' => 'price',
				'filter'    => false,
				'value'     => function(Accessory $data) {
					return number_format($data->price, 0, '.', ',');
				},
			],
			[
				'attribute' => 'quanlity',
				'filter'    => false,
			],
			//'color',
			//'status:ntext',
			//'slug',
			//'description:ntext',
			[
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
			//'updated_at',
			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
