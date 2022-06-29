<?php
/**
 * Created by FES VPN.
 * @project mobileshop-fesdev-net
 * @author  Le Phuong
 * @email   phuong17889[at]gmail.com
 * @date    12/7/2020
 * @time    5:43 PM
 * @var \common\models\Product $model
 */

use common\models\Product;
use yii\helpers\Url;

?>
<div class="col-md-12 product-list-detail popular-product product mt-30">
	<div class="product-list-img">
		<a href="<?= Url::toRoute([
			'product/detail',
			'id' => $model->id,
			'name'=>$model->name
		]) ?>"><img src="<?= $model->image ?>" alt="" class="img-responsive"/></a>
	</div>
	<div class="list product-body">
		<h2><a href="<?= Url::toRoute([
				'product/detail',
				'id' => $model->id,
				'name'=>$model->name
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
		<h4><?= number_format(\common\helper\MobileHelper::getPriceSale($model->price, $model->sale)) . " VNĐ" ?></h4>
		<?php if($model->sale > 0) { ?>
		<h5><del class="text-muted"><?= number_format($model->price) . " VNĐ" ?></del></h5>
		<?php } ?>
		<div class="product-hover">
			<div class="add-cart-hover"><a href="#" data-id="<?= $model->id ?>"><h6>Add to cart</h6>
					<i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
		</div>
	</div>
</div>
