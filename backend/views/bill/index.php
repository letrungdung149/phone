<?php

use common\models\Bill;
use common\models\User;
use kartik\grid\ActionColumn;
use kartik\grid\DataColumn;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\daterange\DateRangePicker;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\BillSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title                   = 'Bills';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bill-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel'  => $searchModel,
		'columns'      => [
			['class' => 'yii\grid\SerialColumn'],
			[
				'attribute' => 'user_id',
				'value'     => function(Bill $data) {
					$user = User::findOne(['id' => $data->user_id]);
					return $user->username;
				},
			],
			'total_amount',
			[
				'attribute' => 'status',
				'label'     => 'Status',
				'filter'    => [
					'pending'   => 'Pending',
					'completed' => 'Completed',
				],
			],
			[
				'class'               => DataColumn::class,
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
				'class'    => ActionColumn::class,
				'template' => '{view}{delete}',
				'buttons'  => [
					'create' => function($url, $model) {
					},
				],
			],
		],
		'pjax'         => true,
		'pjaxSettings' => [
			'neverTimeout' => true,
		],
		'responsive'   => true,
		'hover'        => true,
		'panel'        => [
			'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-list"></i> LIST BILL</h3>',
			'type'    => 'success',
			'after'   => Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
			'footer'  => false,
		],
	]); ?>
</div>
