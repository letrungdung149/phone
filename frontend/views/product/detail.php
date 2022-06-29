<?php
/**
 * Created by Fes.
 * @project mobileshop
 * @author  Minh
 * @email   nguyentuanminhhd197@gmail.com
 * @date    12/5/20
 * @time    11:16
 * @phone   0345525586
 * @var Product     $product
 * @var RatingModel $rating
 * @var Product[]   $relate_products
 */

use common\helper\MobileHelper;
use common\models\Product;
use common\models\RatingModel;
use kartik\widgets\StarRating;
use yii\helpers\Url;

$this->registerJs('
$(".add-cart-hover-custom a").on("click", function () {
var quantity = $("#quantity").val();
	var th =  $(this);
    var cart = $(".cart-mail");
    var parent = $(this).closest(".product-list-detail-custom");
    var imgtodrag = parent.find("img.img-responsive").eq(0);
    if (imgtodrag) {
        var imgclone = imgtodrag.clone()
            .offset({
            top: imgtodrag.offset().top,
            left: imgtodrag.offset().left
        }).css({
            "opacity": "0.5",
                "position": "absolute",
                "height": "150px",
                "width": "150px",
                "z-index": "100"
        }).appendTo($("body"))
            .animate({
            "top": cart.offset().top + 10,
                "left": cart.offset().left + 10,
                "width": 75,
                "height": 75
        }, 1000, "easeInOutExpo");
        
        imgclone.animate({
            "width": 0,
                "height": 0
        }, function () {
            $(this).detach()
        });
    }
	$.ajax({
		type: "POST",
		cache: false,
		url: "' . Url::to(['/ajax/add-to-cart-acc']) . '&id="+th.attr("data-id")+"&type=accessory&quantity="+quantity,
		dataType:"json",
		success:function(response){
			if(response.error === 1){
				alert(response.message);
			} else {
				$(".cart-item").html(response.html);
			}
		}
	});
});');
$this->title = $product->name . ' | GrabyShop';
?>

<div class="content">
	<div class="container product-information padd-80 product-list-detail-custom">

		<div class="col-md-5 col-lg-6 detail-left text-center">
			<ul id="image-gallery" class="gallery list-unstyled cS-hidden">
				<li data-thumb="img/detail/small-1.jpg">
					<img src="<?= $product->image ?>" class="img-responsive" alt=""/>
				</li>
			</ul>
		</div>

		<div class="col-md-7 col-lg-6 detail-right">
			<div class="detail-top">
				<h1><?= $product->name ?></h1>
				<div class="nui">
					<?php
					echo StarRating::widget([
						'id'            => 'product-rating',
						'name'          => 'rating',
						'value'         => $rating->score,
						'pluginOptions' => [
							'showClear'   => false,
							'showCaption' => false,
							'min'         => 0,
							'max'         => 5,
							'step'        => 1,
							'size'        => 'md',
							'language'    => 'en-US',
						],
						'pluginEvents'  => [
							'rating:change' => "function(event,value,caption){
			                     $.ajax({
			                        url:'" . Url::to(['ajax/stars']) . "',
			                        method:'post',
			                        data:{
			                          score:value, 
			                          product_id:" . $product->id . "
			                          
			                        },
			                        dataType:'json',
			                        success: function(data){
				                        if(data['result'] == false){
				                            alert(data['message']);
				                            $('#product-rating').rating('reset');
				                        }
			                        }
			                     });
			                 }",
						],
					]);
					?>
					<div class="clearfix"></div>
				</div>
				<div class="rate">
					<h2><?= number_format(MobileHelper::getPriceSale($product->price, $product->sale)) . " VNĐ" ?>
						<del><?= number_format($product->price) . " VNĐ" ?></del>
					</h2>
					<label class="offer-label" id="saleLabel">
						<?= "-" . $product->sale . "%" ?>
					</label>
					<span><i class="fa fa-check-circle">
						</i><?= " " . $product->status ?>
					</span>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="detail-btm">
				<div class="detail-row quantity-box">
					<p class="text-uppercase">Quantity</p>
					<div class="clearfix"></div>
					<div class="input--filled">
						<button type="button" class="sub"><i class="fa fa-minus" aria-hidden="true"></i></button>
						<input type="text" id="quantity" value="1" class="field">
						<button type="button" class="add"><i class="fa fa-plus" aria-hidden="true"></i></button>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 mt-20 add-cart-hover-custom">
						<a class="coupon" href="#" data-id="<?= $product->id ?>">Add to cart</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="detail-row"><p><span> SKU: </span>N/A</p></div>
				<div class="detail-row"><p><span>Categories: </span><?= $product->category->name ?></p></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="product-tab">
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="profile">
					<div class="border">
						<h2>Description</h2>
					</div>
					<div class="border">
						<?= $product->description ?>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-head">
			<h3>Related Products</h3>
		</div>
		<div class="row">
			<?php foreach ($relate_products as $relate_product) { ?>
				<div class="col-lg-3">
					<img src="<?= $relate_product->image ?>" alt="" style="width: 200px" height="200px">
					<div class="row">
						<div class="col-lg-6">
							<a href="<?= Url::toRoute([
								'product/detail',
								'id' => $relate_product->id,
								'name'=>$relate_product->name
							]) ?>" style="text-decoration: none;"><h5><?= $relate_product->name ?></h5></a>
							<h5><?= number_format(MobileHelper::getPriceSale($relate_product->price, $relate_product->sale)) . " VNĐ" ?></h5>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	<div class="slider-head">
		<h3>Related Products</h3>
	</div>

	<div class="tranding mt-30">
		<div class="owl-carousel special-offer" id="productdetail">

			<div class="thumbnail no-border no-padding">
				<div class="product">

					<div class="product-img">
						<a href="#" class="product-href"></a>
						<img src="img/product/camera.png" alt="" class="img-responsive img-overlay"/>
						<img src="img/product/refrigetor.png" alt="" class="img-responsive"/>
						<div class="offer-discount new">New</div>
						<div class="offer-discount">-15%</div>
						<div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
					</div>
					<div class="product-body">
						<p><a href="#">Samsung RFG23 Classic Style</a></p>
						<h4>595.50$</h4>
						<div class="product-hover">
							<div class="add-cart-hover"><a href="#"><h6>Add to cart</h6>
									<i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
							<div class="quick-view">
								<a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="thumbnail no-border no-padding">
				<div class="product">

					<div class="product-img">
						<a href="#" class="product-href"></a>
						<img src="img/product/laptop.png" alt="" class="img-responsive img-overlay"/>
						<img src="img/product/camera.png" alt="" class="img-responsive"/>
						<div class="offer-discount">-25%</div>
						<div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
					</div>
					<div class="product-body">
						<p><a href="#">Samsung RFG23 Classic Style</a></p>
						<h4>595.50$</h4>
						<div class="product-hover">
							<div class="add-cart-hover"><a href="#"><h6>Add to cart</h6>
									<i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
							<div class="quick-view">
								<a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="thumbnail no-border no-padding">
				<div class="product">

					<div class="product-img">
						<a href="#" class="product-href"></a>
						<img src="img/product/camera.png" alt="" class="img-responsive img-overlay"/>
						<img src="img/product/laptop.png" alt="" class="img-responsive"/>
						<div class="offer-discount">-25%</div>
						<div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
					</div>
					<div class="product-body">
						<p><a href="#">Samsung RFG23 Classic Style</a></p>
						<h4>595.50$</h4>
						<div class="product-hover">
							<div class="add-cart-hover"><a href="#"><h6>Add to cart</h6>
									<i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
							<div class="quick-view">
								<a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="thumbnail no-border no-padding">
				<div class="product">

					<div class="product-img">
						<a href="#" class="product-href"></a>
						<img src="img/index/best-seller-otg.jpg" alt="" class="img-responsive img-overlay"/>
						<img src="img/index/best-seller-tablet.jpg" alt="" class="img-responsive"/>
						<div class="offer-discount">-25%</div>
						<div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
					</div>
					<div class="product-body">
						<p><a href="#">Samsung RFG23 Classic Style</a></p>
						<h4>595.50$</h4>
						<div class="product-hover">
							<div class="add-cart-hover"><a href="#"><h6>Add to cart</h6>
									<i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
							<div class="quick-view">
								<a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="thumbnail no-border no-padding">
				<div class="product">

					<div class="product-img">
						<a href="#" class="product-href"></a>
						<img src="img/index/best-seller-tablet.jpg" alt="" class="img-responsive img-overlay"/>
						<img src="img/index/best-seller-otg.jpg" alt="" class="img-responsive"/>
						<div class="offer-discount new">New</div>
						<div class="sale-heart-hover"><a href="#"><i class="flaticon-heart"></i></a></div>
					</div>
					<div class="product-body">
						<p><a href="#">Apple iPad Tablet Space Grey</a></p>
						<h4>595.50$</h4>
						<div class="product-hover">
							<div class="add-cart-hover"><a href="#"><h6>Add to cart</h6>
									<i class="flaticon-3-signs" aria-hidden="true"></i></a></div>
							<div class="quick-view">
								<a href="#" data-toggle="modal" data-target="#quick-modal"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>

