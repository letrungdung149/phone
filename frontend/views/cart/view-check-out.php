<?php

/**
 * Created by FesVPN.
 * @project Default (Template) Project
 * @author  Pham Hai
 * @email   mitto.hai.7356@gmail.com
 * @date    17/12/2020
 * @time    11:51 AM
 */

/* @var $this \yii\web\View */
/* @var $bill \common\models\Bill|null */
/* @var $billdetails BillDetail[] */
/** @var \common\models\BillInfo $billinfor */

use common\models\BillDetail;

?>

<div class="container product-table padd-80">
	<div class="col-md-6">
		<form>
			<div class="row checkout">
				<div class="col-md-12"><h2>Billing Details</h2></div>
				<div class="col-md-6"><h3>First Name *</h3><input type="text" value="<?= $billinfor->first_name?>" disabled></div>
				<div class="col-md-6"><h3>Last Name *</h3><input type="text" value="<?= $billinfor->last_name?>" disabled></div>
				<div class="col-md-12"><h3>Company Name </h3><input type="text" value="<?= $billinfor->company_name?>" disabled></div>
				<div class="col-md-6"><h3>Email Address *</h3><input type="email" value="<?= $billinfor->email?>" disabled></div>
				<div class="col-md-6"><h3>Phone *</h3><input type="tel" value="<?= $billinfor->phone?>" disabled></div>
				<div class="col-md-6"><h3>Country *</h3><input type="tel" value="<?= $billinfor->country?>" disabled></div>
				<div class="col-md-12"><h3>Address *</h3><input type="text" value="<?= $billinfor->address?>" disabled></div>
				<div class="col-md-12"><h3>Town / City *</h3><input type="text" value="<?= $billinfor->city?>" disabled></div>
				<div class="col-md-6"><h3>Postcode *</h3><input type="tel" value="<?= $billinfor->postcode?>" disabled></div>
			</div>
		</form>

	</div>

	<div class="col-md-6">

		<div class="col-md-12 checkout"><h2>Your order</h2></div>

		<div class="col-md-12 element-table">
			<div class="row">
				<table>
					<tbody><tr>
						<th>Product</th>
						<th class="text-center">Quanity</th>
						<th class="text-right">Total</th>
					</tr>
					<?php
					$tortal = 0;
					/** @var BillDetail $billDetail */
					foreach ($billdetails as $billDetail){
						$tortal += $billDetail->amount;
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
		</div>

	</div>

	<div class="clearfix"></div>

</div>
