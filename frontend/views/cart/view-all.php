<?php

/**
 * Created by FesVPN.
 * @project Default (Template) Project
 * @author  Pham Hai
 * @email   mitto.hai.7356@gmail.com
 * @date    17/12/2020
 * @time    5:08 PM
 */

/* @var $this \yii\web\View */
/* @var $this \yii\web\View */
/** @var BillDetail $models */
/** @var BillDetail $model */
/** @var Bill $bill */

use common\models\Bill;
use common\models\BillDetail;
use yii\helpers\Url;
$this->title = 'View all orders | GrabyShop';
?>

<div class="container-fluid header-main">
	<div class="container text-center">
		<h2>Shopping Cart</h2>
		<div class="link-sec">
			<a href="#">Home</a> <i class="fa fa-angle-right"></i> <a href="#">Shopping Cart</a>
		</div>
	</div>
</div>
<div class="container cart-sec padd-80">
	<div id="msform">
		<!-- progressbar -->
		<ul id="progressbar" class="text-center">
			<?php
			if($bill->status == Bill::STATUS_DRAFT){
				echo '<li class="active">Payment</li>
					  <li>Pending</li>
			          <li>completer</li>';
			}elseif ($bill->status == Bill::STATUS_PENDING){
				echo '<li>Payment</li>
					  <li class="active">Pending</li>
			          <li>completer</li>';
			}else{
				echo '<li>Payment</li>
					  <li>Pending</li>
			          <li class="active">completer</li>';
			}
			?>
		</ul>
		<!-- fieldsets -->
		<fieldset class="cart-tab">
			<div class="col-md-12 element-table">
				<div class="row">
					<table>
						<thead>
						<tr>
							<th>Product</th>
							<th>Price</th>
							<th class="text-center">Quantity</th>
							<th class="text-center">Total</th>
							<th></th>
						</tr>
						</thead>
						<tbody>
						<?php
						$tortal = 0;
						foreach ($models as $model){
							$tortal += $model->amount;
							?>
							<tr data-id="<?=$model->product_id?>">
								<td class="width">
									<div class="image">
										<img src="<?=$model->product->image?>" alt="" class="img-responsive" style="max-width: 150px">
										<p><?= $model->product->name?></p>
										<h5><?=$model->product->category->name?></h5>
									</div>
								</td>
								<td class="cart-price"><?=number_format($model->price)?> VNĐ</td>
								<td class="text-center">
									<p>x<?=$model->quantity?></p>
								</td>
								<td class="text-center"><?=number_format($model->amount)?> VNĐ</td>
								<?php if($bill->status == Bill::STATUS_DRAFT){?>
								<td><a name="remove"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a></td>
								<?php } ?>
							</tr>
						<?php }?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="clearfix"></div>
			<?php if($bill->status == Bill::STATUS_DRAFT) {?>
			<div class="shp-cart-btn">
				<a href="#" class="cart-btn">Clear shopping cart</a>
			</div>
			<div class="promo-input">
				<i class="flaticon-percentage"></i>
				<input type="text" placeholder="Promo code">
				<a href="#" class="promo-i"><i class="flaticon-5-thin-right-arrow"></i></a>
			</div>
			<div class="pull-right">
				<a href="<?=Url::to(['site/index'])?>" class="shp-btn">Continue shopping</a>
			</div>
			<?php } ?>
			<div class="clearfix"></div>
			<div class="col-md-12 shp-checkout checkout pay-faq">
				<h2>Shopping cart Total</h2>
				<div class="element-table">
					<table class="text-uppercase">
						<tbody><tr>
							<td><b>Subtotal</b></td>
							<td class="text-right"><?=number_format($tortal)?> VNĐ</td>
						</tr>

						<tr>
							<td><b>Shipping</b></td>
							<td class="shipping text-right text-capitalize">Free shipping</td>
						</tr>

						<tr>
							<td><b>Total</b></td>
							<td class="total text-right"><?=number_format($tortal)?> VNĐ</td>
						</tr>
						</tbody></table>
				</div>
				<?php if($bill->status == Bill::STATUS_DRAFT){?>
				<a class="next shp-btn pull-right" href="<?=Url::to(['cart/check-out'])?>">Process to checkout</a>
				<?php }?>
			</div>
			<div class="clearfix"></div>
		</fieldset>
	</div>
</div>
<?php
$this->registerJs("
	$(document).on('click','a[name=remove]',function(){
	var id = $(this).closest('tr').attr('data-id');
		$.ajax({
			type: \"POST\",
			cache: false,
			url: '". Url::to(['/ajax/remove-to-cart']) . "&id='+id+'&type=1',
			dataType:\"json\",
			success:function(response){
				if(response.error === 1){
					alert(response.message);
				} else {
					location.reload();
				}
			}
		});
	});
	
	$(document).on('click','.shp-cart-btn a[class=cart-btn]',function(){
		  var r = confirm(\"Bạn muốn xoá tất cả giỏ hàng?\");
		  if (r == true) {
		    $.ajax({
				type: \"POST\",
				cache: false,
				url: '". Url::to(['/ajax/remove-to-cart'])."&type=2',
				dataType:\"json\",
				success:function(response){
					if(response.error === 1){
						alert(response.message);
					} else {
						location.reload();
					}
				}
			});
		  }
	});
	
");


?>
