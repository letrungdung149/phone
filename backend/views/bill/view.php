<?php

use kartik\switchinput\SwitchInput;
use yii\helpers\Html;
use yii\web\YiiAsset;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;
/** @var \backend\controllers\BillController $bill */
/* @var $this yii\web\View */
/* @var $model common\models\Bill */
/** @var TYPE_NAME $bill_detail */
$this->title                   = $model->id;
$this->params['breadcrumbs'][] = [
	'label' => 'Bills',
	'url'   => ['index'],
];
$this->params['breadcrumbs'][] = $this->title;
YiiAsset::register($this);
?>
<div class="bill-view" style="width: 400px">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'status')->dropDownList([
			'pending'   => 'Pending',
			'completed' => 'Completed',
		], ['prompt' => '']) ?>

		<?= Html::submitButton('Confirm', ['class' => 'btn btn-success']) ?>

		<?= Html::a('Delete', [
			'delete',
			'id' => $model->id,
		], [
			'class' => 'btn btn-danger',
			'data'  => [
				'confirm' => 'Are you sure you want to delete this item?',
				'method'  => 'post',
			],
		]) ?>
		<?php ActiveForm::end(); ?>
	</p>
	<?= DetailView::widget([
		'model'      => $model,
		'attributes' => [
			'id',
			'user_id',
			'sub_total',
			'grand_total',
			'status',
//			'created_at',
//			'updated_at',
		],
	]) ?>
</div>
<div id="printableArea">
    <table border="1px" style="width: 100%">
    <thead>
    <tr>
        <th>id</th>
        <th>price</th>
        <th>quantity</th>
        <th>amount</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($bill_detail as $bills){?>
        <tr>
            <td><?=$bills->id?></td>
            <td><?=$bills->price?></td>
            <td><?=$bills->quantity?></td>
            <td><?=$bills->amount?></td>
        </tr>
    <?php }?>
    </tbody>
    </table>
</div>

<input type="button" onclick="printDiv('printableArea')" value="Print" style="width: 100px"/>

<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
