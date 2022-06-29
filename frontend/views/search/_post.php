<!-- Product -->
<?php /** @var \backend\controllers\PhoneController $model */

use common\models\Phone;
use common\models\Product;
use yii\helpers\Url;

?>
<br>
<div class="col-md-12 product-list-detail popular-product product mt-30">
	<div class="product-list-img">
		<a href="#"><img src="<?= $model->image ?>" alt="" class="img-responsive"/></a>
		<div class="product-list-labal">-25%</div>
		<div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
	</div>
	<div class="list product-body">
		<h2><a href="<?= Url::toRoute([
				'product/detail',
				'id'   => $model->id,
				'name' => $model->name,
			]) ?>"><?= $model->name ?></a></h2>
		<span class="stock"><i class="fa fa-check-circle"></i><?= $model->status ?></span>
		<div class="icon">
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<h6>(12 reviews)</h6>
		</div>
		<h4><?= number_format(Product::getPriceSale($model->price, $model->sale)) . " VNĐ" ?></h4>
		<h5><?= number_format($model->price) . " VNĐ" ?></h5>
		<div class="product-hover">
			<div class="add-cart-hover"><a href="#" data-id="<?= $model->id ?>"><h6>Add to cart</h6>
					<i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
			<div class="quick-view">
				<a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div>
<!-- product -->
