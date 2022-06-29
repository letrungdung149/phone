<?php
/**
 * Created by Navatech.
 * @project Default (Template) Project
 * @author  Phuong
 * @email   notteen[at]gmail.com
 * @date    5/12/2020
 * @time    9:26 AM
 */
/* @var $this \yii\web\View */

/* @var $dataProvider false */

use yii\widgets\ListView;
use yii\widgets\Pjax;

$this->title = 'Search results | GrabyShop';

?>
<?php //echo \yii\grid\GridView::widget(['dataProvider' => $dataProvider])?>

<?php //foreach ($dataProvider->getModels() as $model) {
//	return $this->render('_post', ['model' => $model]);
//} ?>

<div class="container-fluid header-main">
	<div class="container text-center">

		<h2>Product List</h2>
		<div class="link-sec">
			<a href="#">Home</a> <i class="fa fa-angle-right"></i> <a href="#">Product List</a>
		</div>

	</div>
</div>

<!--product-list-->
<div class="container padd-80 product-list-sec">
	<div class="col-md-9 col-md-push-3 show-product">
		<h1>Kết Quả Tìm Kiếm Là:<?= $_GET['SearchForm']['keyword'] ?></h1>
		<?php Pjax::begin()?>
		<?php echo ListView::widget([
			'dataProvider' => $dataProvider,
			'itemView'     => '_post',
			'layout'       => '<div class="product-top-bar"><ul><li><a href="#" class="show-list">{summary}</a></li><li><a href="#"><span>Short by</span></a></li><li><a href="#">Price</a></li><li><a href="#">Name</a></li><li><a href="#">Date</a></li><li><a href="#">Popular</a></li></ul></div><div class="clearfix"></div>{items}{pager}',
		]) ?>
		<?php Pjax::end()?>
		<div class="clearfix"></div>
	</div>

	<div class="col-md-3 col-md-pull-9 main-side-bar">

		<ul>
			<li class="sub-menu"><a class="main-a" href="javascript:void(0)">CATEGORIES
					<div class="icon-plus"><i class='fa flaticon-3-signs'></i></div>
				</a>
				<ul>
					<li><a href="#">Cameras, Audio & Video <span>(8)</span></a></li>
					<li><a href="#">Mobile & Tablets <span>(15)</span></a></li>
					<li><a href="#">Watches & Eyewear<span>(3)</span></a></li>
					<li><a href="#">Movies, Music & Games<span>(3)</span></a></li>
					<li><a href="#">Computers & Accessories <span>(12)</span></a></li>
					<li><a href="#">TV & Audio <span>(5)</span></a></li>
					<li><a href="#">Deal of the Day <span>(8)</span></a></li>
					<li><a href="#">Top 100 Exclusive Offers <span>(4)</span></a></li>
					<li><a href="#">New Arrivals <span>(8)</span></a></li>
					<li><a href="#">Health & Beauty <span>(1)</span></a></li>
				</ul>
			</li>
		</ul>

		<ul>
			<li class="sub-menu"><a class="main-a" href="javascript:void(0)">Filter by price
					<div class="icon-plus"><i class='fa flaticon-3-signs'></i></div>
				</a>

				<ul>
					<div class="price-range">
						<div id="slider-range"></div>
						<div class="clearfix"></div>
						<div class="range-text">
							<h3>Price: <span>$1100 to $1850</span></h3>
							<button class="btn-custom">Filter</button>
						</div>
						<div class="clearfix"></div>
					</div>

					<!--
					-->
				</ul>

			</li>
		</ul>

		<ul class="shop-size">
			<li class="sub-menu"><a class="main-a" href="javascript:void(0)">Brands
					<div class="icon-plus"><i class='fa flaticon-3-signs'></i></div>
				</a>
				<ul>
					<li><input type="checkbox" id="ap"/><label for="ap"> Apple <span>(8)</span></label>
						<div class="clearfix"></div>
					</li>
					<li><input type="checkbox" id="de"/><label for="de"> Dell <span>(15)</span></label></li>
					<li><input type="checkbox" id="le"/><label for="le"> Lenovo<span>(3)</span></label></li>
					<li><input type="checkbox" id="pa"/><label for="pa"> Panasonic<span>(3)</span></label></li>
					<li><input type="checkbox" id="no"/><label for="no"> Nokia <span>(15)</span></label></li>
					<li><input type="checkbox" id="sa"/><label for="sa"> Samsung<span>(3)</span></label></li>
					<li><input type="checkbox" id="zi"/><label for="zi"> Ziox<span>(3)</span></label></li>
				</ul>

			</li>
		</ul>

		<ul class="shop-size">
			<li class="sub-menu"><a class="main-a" href="javascript:void(0)">Shop by color
					<div class="icon-plus"><i class='fa flaticon-3-signs'></i></div>
				</a>

				<ul>
					<li><input type="checkbox" id="br"/><label for="br"> Brown <span>(8)</span></label>
						<div class="clearfix"></div>
					</li>
					<li><input type="checkbox" id="wh"/><label for="wh"> White <span>(15)</span></label></li>
					<li><input type="checkbox" id="bl"/><label for="bl"> Black<span>(3)</span></label></li>
					<li><input type="checkbox" id="blu"/><label for="blu"> Blue<span>(3)</span></label></li>
					<li><input type="checkbox" id="ro"/><label for="ro"> Rosegold <span>(15)</span></label></li>
					<li><input type="checkbox" id="si"/><label for="si"> Silver<span>(3)</span></label></li>
					<li><input type="checkbox" id="pi"/><label for="pi"> Pink<span>(3)</span></label></li>
				</ul>

			</li>
		</ul>

		<ul class="shop-size">
			<li class="sub-menu"><a class="main-a" href="javascript:void(0)">Shop by Size
					<div class="icon-plus"><i class='fa flaticon-3-signs'></i></div>
				</a>

				<ul>
					<li><input type="checkbox" id="s"/> <label for="s">S <span>(8)</span></label>
						<div class="clearfix"></div>
					</li>
					<li><input type="checkbox" id="m"/><label for="m"> M <span>(15)</span></label></li>
					<li><input type="checkbox" id="l"/><label for="l"> L<span>(3)</span></label></li>
					<li><input type="checkbox" id="xl"/><label for="xl"> XL<span>(3)</span></label></li>
					<li><input id="xxl" type="checkbox"/><label for="xxl">XXL<span>(15)</span></label></li>
				</ul>

			</li>
		</ul>

	</div>

</div>
