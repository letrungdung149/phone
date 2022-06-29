<?php
/* @var $this yii\web\View */

use common\models\User;
use kartik\grid\ActionColumn;
use kartik\grid\DataColumn;
use kartik\grid\GridView;
use yii\helpers\Html;
/* @var $searchModel common\models\search\BillSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModelUser common\models\search\BillSearch */
/* @var $dataProviderUser yii\data\ActiveDataProvider */
$this->title = 'My Yii Application';
?>
<div class="site-index">

	<div class="body-content">

		<div class="row">
			<div class="col-md-12">
				<?= GridView::widget([
					'dataProvider' => $dataProviderUser,
					'filterModel' => $searchModelUser,
					'columns' => [
						['class' => 'yii\grid\SerialColumn'],

						'id',
						'username',
						'role',
						'email:email',
/*						'password_hash',*/
						//'flags',
						//'auth_key',
						//'unconfirmed_email:email',
						//'registration_ip',
						//'confirmed_at',
						//'last_login_at',
						//'blocked_at',
						//'created_at',
						//'updated_at',

						/*['class' => 'yii\grid\ActionColumn'],*/
					],
					'pjax'         => true,
					'pjaxSettings' => [
						'neverTimeout' => true,
					],
					'responsive'   => true,
					'hover'        => true,
					'panel'        => [
						'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-list"></i> USER</h3>',
						'type'    => 'success',
						'after'   => Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
						'footer'  => false,
					],
				]); ?>
				<?= GridView::widget([
					'dataProvider' => $dataProvider,
					'filterModel'  => $searchModel,
					'columns'      => [
							'id',
						['class' => 'yii\grid\SerialColumn'],
						[
							'attribute' => 'user_id',
							'value'     => function($data) {
								$user = User::findOne(['id' => $data->user_id]);
								return $user->username;
							},
						],
						'total_quantity',
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
		</div>

	</div>
</div>
