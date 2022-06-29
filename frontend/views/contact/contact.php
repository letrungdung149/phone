<?php

/**
 * Created by Navatech.
 * @project Default (Template) Project
 * @author  Phuong
 * @email   notteen[at]gmail.com
 * @date    10/12/2020
 * @time    2:09 PM
 */

/* @var $this \yii\web\View */

use kartik\form\ActiveForm;
use yii\helpers\Html;
$this->title = 'Contact | GrabyShop';
?>
<!doctype html>
<html lang="en">

<body>

<div class="contact-page"><!--page wrap-->

	<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
	<div class="container-fluid header-main">
		<div class="container text-center">

			<h2>Contact Us</h2>
			<div class="link-sec">
				<a href="#">Home</a> <i class="fa fa-angle-right"></i> <a href="#">Contact us</a>
			</div>

		</div>
	</div>

	<!--main-->
	<div class="container contact-main padd-80">

		<div class="col-md-6 contact-left">

			<div class="contact-info">
				<h3>Get in touch with Us <i class="flaticon-1-send pull-right"></i></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porttitor egestas orci, vitae ullamcorper risus consectetur id. </p>
			</div>
			<div class="row">
				<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

				<?= /** @var \frontend\controllers\ContactController $model */
				$form->field($model, 'name')->textInput(['autofocus' => true]) ?>
				<?= $form->field($model, 'email') ?>
				<?= $form->field($model, 'subject') ?>
				<?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
				<div class="form-group">
					<?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
				</div>

				<?php ActiveForm::end(); ?>
			</div>
		</div>
		<div class="col-md-6 contact-right">

			<div class="contact-info">
				<h3>About Information</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscin Vestibulum portti egestas orci, vitae ullamcorper risus consectetur id. Donec at velit vestibulum, rutrum massa quis, porttitor lorem. Donec et ultricies arcu.Donec et ultricies arcu. In odio augue, hendrerit nec nisl ac, rhoncus gravida mauris. Quisque consectetur ligula eu urna dignissim.</p>
			</div>

			<div class="contact-info">

				<h3>Contact Informations</h3>
				<div class="contact">
					<i class="flaticon-placeholder-1"></i>
					<p>Hahnenmoos strasse 20C, 3715  Adelboden, Switzerland</p>
				</div>
				<div class="clearfix"></div>
				<div class="contact">
					<i class="flaticon-headphones"></i>
					<p class="phone-no">+01 (9876) 543 210 | +01 (9876) 543 212</p>
				</div>
				<div class="clearfix"></div>
				<div class="contact">
					<i class="flaticon-message"></i>
					<p>contact@grabyshop.com</p>
				</div>
				<div class="clearfix"></div>
				<div class="contact">
					<i class="fa fa-clock-o"></i>
					<p>Monday - Friday 9am to 5pm<br> Saturday - 9am to 2pm<br> Sunday - Closed</p>
				</div>
				<div class="clearfix"></div>
				<div class="follow-us">
					<h2>Follow us</h2>
					<div class="follow">
						<a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="#" ><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					</div>
				</div>

			</div>

		</div>

		<div class="clearfix"></div>

	</div>

	<!--Map-->
</div><!--/page wrap-->

<!--js-->
<script src="js/ajax.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--custom-->
<script src="js/custom.js"></script>
<script language=JavaScript>

	$(document).keydown(function (event) {
		if (event.keyCode == 123) { // Prevent F12
			return false;
		} else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I
			return false;
		}
	});

	$(document).on("contextmenu", function (e) {
		e.preventDefault();
	});

</script>
</body>

<!-- Mirrored from themes.invints.com/HTML-Template/Graby-shop/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 10:24:02 GMT -->
</html>
