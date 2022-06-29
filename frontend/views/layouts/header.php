<?php
/**
 * Created by FesVPN.
 * @project mobileshop
 * @author  Pham Hai
 * @email   mitto.hai.7356@gmail.com
 * @date    3/12/2020
 * @time    3:06 PM
 */

use common\widgets\Alert;
use frontend\widgets\Cart;
use frontend\widgets\ListCategoriesWidgets;
use frontend\widgets\Login;
use frontend\widgets\Register;
use frontend\widgets\SearchWidget;
use yii\helpers\Url;

?>
<header class="border">
	<div class="container header-sec">
		<div class="col-md-5 header">
			<div class="header-left">
				<div class="top-bar-list phone">
					<i class="flaticon-phone-call"></i>
					<p>+01 (9876) 543 210</p>
				</div>
				<div class="top-bar-list">
					<i class="flaticon-e-mail-envelope"></i>
					<p>fesvpn@gmail.com</p>
				</div>
			</div>
		</div>
		<div class="col-md-7 col-sm-12 header">
			<div class="header-right">
				<div class="top-bar-list">
					<i class="fas fa-question"></i>
					<a href="<?= Url::to(['shoppingguide/index']) ?>"><p>Shopping guide</p></a>
				</div>
				<div class="top-bar-list">
					<i class="flaticon-delivery"></i>
					<a href="<?= Url::to(['cart/track-order']) ?>"><p>Track order</p></a>
				</div>
				<div class="top-bar-list">
					<i class="flaticon-login"></i>
					<?php if (Yii::$app->user->identity) { ?>
						<p><b><a href="<?= Url::to([
									'user/settings/profile',
									'user_id' => Yii::$app->user->identity->id,
								]) ?>"><?= Yii::$app->user->identity->username ?></a></b> /
							<b><a href="<?= Url::to(['/user/security/logout']) ?>" data-method="POST">Logout</a></b></p>
					<?php } else { ?>
						<p>
							<b><a href="#" data-toggle="modal" data-target="#myModal-register">Register</a></b> or
							<b><a href="#" data-toggle="modal" data-target="#myModal-login">Sign in</a></b>
						</p>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<?= Register::widget() ?>
	<?= Login::widget() ?>
</header>

<div class="container logo-bar">
	<div class="col-md-3 logo-name text-center">
		<a href="<?= Url::home() ?>"><img src="/img/index/logo.png" alt="" class="img-responsive"></a>
	</div>
	<div class="col-md-6 search">
		<?= SearchWidget::widget(); ?>
	</div>
	<div class="col-md-3 shopping-cart">
		<div class="icon-round">
			<a href="#"><i class="flaticon-refresh"></i></a>
			<a href="#"><i class="flaticon-heart"></i></a>
			<div class="cart-item">
				<?= Cart::widget() ?>
			</div>
		</div>

	</div>
	<div class="clearfix"></div>
</div>

<div class="container menu">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h3>Categories</h3>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="col-md-3">
				<div class="categories collapse navbar-collapse" id="bs-example-navbar-collapse-2">
					<ul>
						<li class="sub-menu">
							<a class="main-a" href="javascript:void(0)">CATEGORIES
								<i class="fa fa-angle-down"></i></a>
							<ul style="">
								<?= ListCategoriesWidgets::widget(); ?>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-left">
						<li>
							<a href="<?= Url::home() ?>">Home</a>
						<li>
							<a href="<?= Url::to([
								'product/index',
								'type' => 'phone',
							]) ?>">Phone</a>
						</li>
						<li>
							<a href="<?= Url::to([
								'product/index',
								'type' => 'accessory',
							]) ?>">Accessory</a>
						</li>
						<li>
							<a href="<?= Url::to(['contact/contact']) ?>">Contact</a>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!--/.col-md-9-->
		</div><!-- /.container-fluid -->
	</nav>
</div>
<br>
<?= Alert::widget(); ?>
