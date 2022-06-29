<?php
/**
 * Created by FesVPN.
 * @project mobileshop
 * @author  Pham Hai
 * @email   mitto.hai.7356@gmail.com
 * @date    8/12/2020
 * @time    3:21 PM
 */
/** @var \frontend\models\CheckoutForm $model */

/** @var \common\models\BillDetail $billDetails */

use common\models\Item;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Checkout your bills | GrabyShop';
?>

<div class="container" style="padding: 0px" >
	<div class="container-fluid header-main checkout-bg">
		<div class="container text-center">

			<h2>Check out</h2>
			<div class="link-sec">
				<a href="#">Home</a> <i class="fa fa-angle-right"></i> <a href="#">Check out</a>
			</div>

		</div>
	</div>
	<div class="container product-table padd-80">
		<?php $form = ActiveForm::begin() ?>
		<div class="col-md-6">
			<div class="row checkout">
				<div class="col-md-12"><h2>Billing Details</h2></div>
				<div class="col-md-6"><?= $form->field($model, 'first_name')->textInput() ?></div>
				<div class="col-md-6"><?= $form->field($model, 'last_name')->textInput() ?></div>
				<div class="col-md-6"><?= $form->field($model, 'company_name')->textInput() ?></div>
				<div class="col-md-6"><?= $form->field($model, 'email')->textInput() ?></div>
				<div class="col-md-6"><?= $form->field($model, 'phone')->textInput() ?></div>
				<div class="col-md-6"><?= $form->field($model, 'country')->textInput() ?></div>
				<div class="col-md-6"><?= $form->field($model, 'address')->textInput(['placeholder' => 'Street Address']) ?></div>
				<div class="col-md-6"><?= $form->field($model, 'city')->textInput() ?></div>
				<div class="col-md-6"><?= $form->field($model, 'postcode')->textInput() ?></div>
			</div>
		</div>
		<div class="col-md-6">

			<div class="col-md-12 checkout"><h2>Your order</h2></div>

			<div class="col-md-12 element-table">
				<div class="row">
					<table>
						<tbody>
						<tr>
							<th>Product</th>
							<th class="text-center">Quanity</th>
							<th class="text-right">Total</th>
						</tr>
						<?php /** @var \common\models\BillDetail $billDetail */
						$tortal = 0;
						foreach ($billDetails as $billDetail) {
							$tortal += intval($billDetail->amount);
							?>
							<tr>
								<td><?= $billDetail->product->name ?></td>
								<td class="text-center">x<?=$billDetail->quantity?></td>
								<td class="text-right"><?= number_format($billDetail->amount) ?> VNĐ</td>
							</tr>
						<?php } ?>
						<tr>
							<td class="text-uppercase"><b>Subtotal</b></td>
							<td></td>
							<td class="text-right">$9220.00</td>
						</tr>
						<tr>
							<td class="text-uppercase"><b>Shipping</b></td>
							<td></td>
							<td class="shipping text-right">Free shipping</td>
						</tr>
						<tr>
							<td class="text-uppercase"><b>Total</b></td>
							<td></td>
							<td class="total text-right"><?=number_format($tortal)?> VNĐ</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-12 pay-faq">
				<h2>Payment mathod</h2>
				<div class="accordion check-faq mt-20 accordion-close" id="section4"><label>Direct bank transfer</label><span></span>
				</div>
				<div class="accordian-body" style="display: none;">
					<div class="faq">
						<span class="payment-box"></span>
						<p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
					</div>
				</div>
				<div class="accordion check-faq accordion-close" id="section5">
					<label>Create an account?</label><span></span></div>
				<div class="accordian-body" style="display: none;">
					<div class="faq">
						<span class="payment-box"></span>
						<p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
					</div>
				</div>
				<div class="accordion check-faq accordion-open" id="section6"><label>PayPal</label>
					<img src="img/inner-page/check-out-payment.png" alt="">
					<a href="https://www.paypal.com/gb/webapps/mpp/paypal-popup">
						<h4 class="content-subhead">What is PayPal?</h4></a><span></span></div>
				<div class="accordian-body" style="display: block;">
					<div class="faq">
						<span class="payment-box"></span>
						<p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account..</p>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-12 text-center">
					<button type="submit" class="coupon btn-bg">Place order</button></div>
				<div class="clearfix"></div>
			</div>
		</div>
		<?php ActiveForm::end() ?>
		<div class="clearfix"></div>
	</div>
</div>
