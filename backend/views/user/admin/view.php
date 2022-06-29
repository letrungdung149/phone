<?php
/**
 * Created by Navatech.
 * @project mobileshop
 * @author  Phuong
 * @email   notteen[at]gmail.com
 * @date    4/12/2020
 * @time    8:58 AM
 */
/** @var \backend\controllers\BillController $bill */
/** @var \backend\controllers\BillController $bill_detail */

use dektrium\user\models\User;
use kartik\grid\ActionColumn;
use kartik\grid\DataColumn;
use kartik\grid\GridView;
use yii\helpers\Html;

?>
<div class="site-index">

	<div class="body-content">

		<div class="row">
			<div class="col-md-12">
				<?= /** @var \backend\controllers\user\AdminController $searchModel */
				/** @var \backend\controllers\user\AdminController $dataProvider */
				GridView::widget([
					'dataProvider' => $dataProvider,
					'filterModel'  => $searchModel,
					'columns'      => [
						['class' => 'yii\grid\SerialColumn'],
						'sub_total',
						'grand_total',
						[
							'attribute' => 'status',
							'label'     => 'Status',
							'filter'    => [
								'pending'   => 'Pending',
								'completed' => 'Completed',
								'draft'     => 'Draft'
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
						],
					],
					'pjax'         => true,
					'pjaxSettings' => [
						'neverTimeout' => true,
					],
					'responsive'   => true,
					'hover'        => true,
					'panel'        => [
						'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-list"></i> User History</h3>',
						'type'    => 'success',
						'footer'  => false,
					],
				]); ?>
			</div>
		</div>

	</div>
</div>
