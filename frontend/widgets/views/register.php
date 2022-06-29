<?php
/**
 * Created by FES VPN.
 * @project Default (Template) Project
 * @author  Le Phuong
 * @email   phuong17889[at]gmail.com
 * @date    12/4/2020
 * @time    10:01 AM
 */
/* @var $this \yii\web\View */

/**@var RegistrationForm $model */

use dektrium\user\models\RegistrationForm;
use yii\widgets\ActiveForm;

$this->registerJs('
$(document).on("click", "#register-form .button a", function() {
	var th   = $(this);
	var form = th.closest("form");
	$.ajax({
		type:"post",
		cache:false,
		url:"' . \yii\helpers\Url::to(["/ajax/register"]) . '",
		dataType:"json",
		data:form.serializeArray(),
		success:function(response){
			if(response.error === 0){
				alert(response.message);
				window.location.href="/";
			} else {
				alert(response.message);
			}
		}
	})
})');
?>
<!-- Modal -->
<div class="modal fade" id="myModal-register" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<?php $form = ActiveForm::begin([
					'id'                     => 'register-form',
					'enableClientValidation' => false,
				]) ?>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span></button>
				<div class="col-sm-5 modal-img">
					<img src="/img/index/modal-bg.jpg" class="img-responsive" alt="">
					<h2>Sign In</h2>
					<p>Sign up our Website and receive up to $100 coupon for first shopping</p>
					<div class="modal-img-text">
						<a href="#"><img src="/img/index/login-logo.png" alt="" class="img-responsive"></a></div>
				</div>
				<div class="col-sm-7 modal-text">

					<div class="form-sec">

						<div class="tab-content">
							<?= $form->field($model, 'email', [
								'template'     => '{label}{input}{error}',
								'options'      => [
									'class' => 'input-row',
								],
								'inputOptions' => ['class' => ''],
							]); ?>
							<?= $form->field($model, 'username', [
								'template'     => '{label}{input}{error}',
								'options'      => [
									'class' => 'input-row',
								],
								'inputOptions' => ['class' => ''],
							]); ?>
							<?= $form->field($model, 'password', [
								'template'     => '{label}{input}{error}',
								'options'      => [
									'class' => 'input-row',
								],
								'inputOptions' => ['class' => ''],
							])->passwordInput(); ?>
							<div class="clearfix"></div>
							<div class="privacy-sec">
								<input id="4" type="checkbox"><label for="4">Remember me</label>
							</div>
							<div class="clearfix"></div>
							<div class="button">
								<a href="#">Get started</a>
							</div>
							<div class="modal-acc">
								<p>Already have an account?
									<a data-toggle="modal" id="reg-m" data-target="#myModal-login" href="#">Log In</a>
								</p>
							</div>

						</div>

					</div>

				</div>

				<div class="clearfix"></div>
				<?php ActiveForm::end() ?>

			</div>
		</div>
	</div>
</div>
