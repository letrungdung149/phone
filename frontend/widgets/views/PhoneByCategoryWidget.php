<?php
/**
 * Created by FesVPN.
 * @project mobileshop
 * @author  Pham Hai
 * @email   mitto.hai.7356@gmail.com
 * @date    5/12/2020
 * @time    9:01 AM
 *
 */

/** @var Product[] $models */

use common\helper\MobileHelper;
use common\models\Product;
use yii\helpers\Url;

?>

<div class="col-md-12 best-deals">
	<?php foreach ($models as $xiaomi) { ?>
		<div class="col-md-3 col-sm-4 mt-30">
			<div class="product" data-id="<?= $xiaomi->id ?>">
				<div class="product-img">
					<a href="<?= Url::toRoute([
						'product/detail',
						'id' => $xiaomi->id,
//						'name' => $model->name,
					]) ?>" class="product-href">
						<img src="<?= $xiaomi->image ?>" alt="" class="img-responsive img-overlay">
						<img src="<?= $xiaomi->image ?>" alt="" class="img-responsive">
					</a>
					<?php if ($xiaomi->sale) { ?>
						<div class="offer-discount">-<?= $xiaomi->sale ?>%</div>
					<?php } ?>
					<?php if ($xiaomi->trend > 0) { ?>
						<div class="offer-discount new">hot</div>
					<?php } ?>
				</div>
				<div class="product-body">
					<p class="overflow-text">
						<a href="<?= Url::toRoute([
							'product/detail',
							'id' => $xiaomi->id,
//							'name' => $model->name,
						]) ?>"><?= $xiaomi->name ?></a>
					</p>
					<h4><?= number_format(MobileHelper::getPriceSale($xiaomi->price, $xiaomi->sale)) . " VNĐ" ?></h4>
					<div class="product-hover">
						<div class="add-cart-hover"><h6>Add to cart</h6>
							<i class="flaticon-3-signs" aria-hidden="true"></i></div>
					</div>
				</div>

			</div>
		</div>
	<?php } ?>
	<div class="clearfix"></div>
</div>


