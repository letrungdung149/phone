<?php
/**
 * Created by FES VPN.
 * @project Default (Template) Project
 * @author  Le Phuong
 * @email   phuong17889[at]gmail.com
 * @date    12/7/2020
 * @time    11:03 AM
 */
/* @var $this \yii\web\View */

/**@var \common\models\Bill $bill */

use common\models\Item;
use yii\helpers\Url;

?>
<!--begin cart-->
<div class="cart-mail">
	<a href="#"><i class="flaticon-shopping-cart"></i><span><?= $bill->total_quantity ?></span></a>
</div>
<p>
	<a href="#">My cart<span>$<?= number_format($bill->total_amount) ?> VNĐ</span></a>
</p>
<div class="cart-item-hover">
	<?php if (!$bill->isNewRecord && $bill->getBillDetails()->count() > 0): ?>
		<?php foreach ($bill->billDetails as $billDetail) : ?>
			<?php $item = $billDetail->product ?>
			<div class="cart-item-list" data-id="<?= $item->id?>">
				<img src="<?= $item->image ?>" alt="" style="max-width: 110px"/>
				<a href="#"><h3><?= $item->name ?></h3></a>
				<b><a href="#">X</a></b>
				<p><?= number_format($item->price) ?> VNĐ</p>
			</div>
		<?php endforeach; ?>
		<div class="border"></div>
		<div class="cart-total">
			<h6>Total Price</h6>
			<p>$<?= number_format($bill->total_amount) ?> VNĐ</p>
			<div class="clearfix"></div>
			<a href="<?=Url::to(['cart/view-all'])?>" class="cart-view">View all</a>
			<a href="<?= Url::to(['cart/check-out']) ?>" class="cart-checkout">Check out</a>
		</div>
	<?php else: ?>
	<div class="text-center">
		<span class="text-muted">Your cart is empty</span>
	</div>
	<?php endif ?>
</div>
<!--end cart-->
<?php
$url = Url::to(['ajax/check-cart']);
$url_view_all = Url::to(['cart/view-all']);
$this->registerJs(<<<JS
	$(document).on('click','.cart-total .cart-view',function(){
		$.ajax({
			type: "POST",
			url : "$url",
			dataType:"json",
			success:function (response){
				if(response.error == 1){
					alert('Giỏ hàng rỗng!');
				}else{
					window.location.href = "$url_view_all";
				}
			}
		});
	});
JS
)

?>
