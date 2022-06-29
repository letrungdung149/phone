<?php
/**
 * Created by FesVPN.
 * @project mobileshop
 * @author  Pham Hai
 * @email   mitto.hai.7356@gmail.com
 * @date    7/12/2020
 * @time    10:17 PM
 */

use common\helper\MobileHelper;
use common\models\Product;
use yii\helpers\Url;

?>
<?php /** @var Product $models */
/** @var int $type */
/** @var Product[] $models */
foreach ($models as $model) { ?>
	<div class="col-md-3 col-sm-4 mt-30">
		<div class="product" data-id="<?= $model->id ?>">
			<div class="product-img">
				<a href="<?= Url::toRoute([
					'product/detail',
					'id'   => $model->id,
					'name' => $model->name,
				]) ?>" class="product-href">
					<img src="<?= $model->image ?>" alt="" class="img-responsive img-overlay">
					<img src="<?= $model->image ?>" alt="" class="img-responsive">
				</a>
				<?php if ($model->sale > 0) { ?>
					<div class="offer-discount">-<?= $model->sale ?>%</div>
				<?php } ?>
				<?php if ($model->trend) { ?>
					<div class="offer-discount new">hot</div>
				<?php } ?>
			</div>
			<div class="product-body">
				<p class="overflow-text">
					<a href="<?= Url::toRoute([
						'product/detail',
						'id'   => $model->id,
						'name' => $model->name,
					]) ?>"><?= $model->name ?></a>
				</p>
				<h4><?= number_format(MobileHelper::getPriceSale($model->price, $model->sale)) ?> VNĐ</h4>
				<div class="product-hover">
					<div class="add-cart-hover"><h6>Add to cart</h6>
						<i class="flaticon-3-signs" aria-hidden="true"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
<div class="clearfix"></div>

