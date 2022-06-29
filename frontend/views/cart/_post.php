<?php
/**
 * Created by FesVPN.
 * @project Default (Template) Project
 * @author  Pham Hai
 * @email   mitto.hai.7356@gmail.com
 * @date    24/12/2020
 * @time    12:18 AM
 */
/* @var $this \yii\web\View
 * @var $model Bill
 */

use common\models\Bill;

if($model->status == Bill::STATUS_DRAFT){
	$class = "label label-warning";
}elseif ($model->status == Bill::STATUS_COMPLETED){
	$class = "label label-success";
}elsE{
	$class = "label label-primary";
}
?>
<fieldset class="cart-tab" style="background-color: #f5f5f5;padding: 20px; margin-bottom: 20px;">
	<div class="col-md-12 element-table">
		Trạng thái đơn hàng:<span class="<?=$class?>"><?=$model->status?></span>
		<span class="pull-right">Mã đơn hàng: <?=$model->id?></span>
		<hr>
		<div class="row">
			<table>
				<tbody>
				<?php /** @var \common\models\BillDetail $billDetail */
				foreach ($model->billDetails as $billDetail){?>
					<tr>
						<td class="width">
							<div class="image">
								<img src="<?=$billDetail->product->image?>" alt="" class="img-responsive">
								<p><?=$billDetail->product->name?></p>
								<h5><?=$billDetail->product->category->name?></h5>
							</div>
						</td>
						<td class="cart-price text-center"><?=number_format($billDetail->price)?> VNĐ</td>
						<td class="user text-center">
							<div id="field1" class="quantity">
								<span>x<?=$billDetail->quantity?></span>
							</div>
						</td>
						<td class="text-right"><?=number_format($billDetail->amount)?> VNĐ</td>
					</tr>
				<?php }?>

				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="pull-right" style="padding: 20px 0px"><i class="glyphicon glyphicon-shopping-cart"></i>Tổng số tiền: <?=number_format($model->total_amount)?> VNĐ</div>
			<div class="clearfix"></div>
			<div class="pull-left">
				Ngày tạo: <?=date("H:i:s d-m-Y ",$model->created_at)?>
			</div>
			<div class="pull-right">
				<a class="btn btn-info">Đã nhận đc hàng</a>
				<a href="<?=\yii\helpers\Url::to(['cart/view-all','id'=>$model->id])?>" class="btn btn-danger">Xem chi tiết đơn hàng</a>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</fieldset>
