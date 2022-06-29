<?php

use common\models\Category;
use common\models\search\ProductSearch;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;
use kartik\slider\Slider;

/**
 * @var ProductSearch      $searchModel
 * @var ActiveDataProvider $dataProvider
 * @var array              $params
 * @var string             $sort
 * @var Category[]         $categories
 * @var string             $type
 */
$this->registerJs('
$(".add-cart-hover a").on("click", function () {
	var th =  $(this);
    var cart = $(".cart-mail");
    var parent = $(this).closest(".product-list-detail");
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
		url: "' . Url::to(['/ajax/add-to-cart']) . '&id="+th.attr("data-id")+"&type=phone",
		dataType:"json",
		success:function(response){
			if(response.error === 1){
				alert(response.message);
			} else {
				$(".cart-item").html(response.html);
			}
		}
	});
});
$(document).on("change",".filter-category",function(){
	$(this).closest("form").submit();
});
');
?>
<!--header-->
<div class="container-fluid header-main">
	<div class="container text-center">

		<h2>Accessory List</h2>
		<div class="link-sec">
			<a href="#">Home</a> <i class="fa fa-angle-right"></i> <a href="#">Accessory List</a>
		</div>

	</div>
</div>

<!--product-list-->
<div class="container padd-80 product-list-sec">
	<div class="col-md-9 col-md-push-3 show-product">
		<div class="product-top-bar">
			<ul>
				<li><span>Short by</span></li>
				<li><a href="<?= Url::current(['sort' => '-price']) ?>">Price Desc</a></li>
				<li><a href="<?= Url::current(['sort' => 'price']) ?>">Price Asc</a></li>
				<li><a href="<?= Url::current(['sort' => 'name']) ?>">Name</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<!-- Product -->
		<?= ListView::widget([
			'itemView'     => '_item',
			'dataProvider' => $dataProvider,
		]) ?>
		<!-- product -->
		<div class="clearfix"></div>
	</div>

	<div class="col-md-3 col-md-pull-9 main-side-bar">
		<ul class="shop-size">
			<li class="sub-menu"><a class="main-a" href="javascript:void(0)">Brands
					<div class="icon-plus"><i class='fa flaticon-3-signs'></i></div>
				</a>
				<?php $brandForm = ActiveForm::begin([
					'method' => 'get',
					'action' => ArrayHelper::merge([
						'/product/index',
						'type' => $type,
					], $sort != null ? ['sort' => $sort] : []),
				]); ?>

				<ul>
					<?php foreach ($categories as $category) { ?>
						<li>
							<input <?= in_array($category->id, $searchModel->categories_id) ? 'checked' : '' ?> type="checkbox" id="ap<?= $category->id ?>" name="ProductSearch[categories_id][]" value="<?= $category->id ?>" class="filter-category"/><label for="ap<?= $category->id ?>"><?= $category->name ?>
								<span>(<?= $category->p_count ?>)</span></label>
						</li>
					<?php } ?>
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
						<?= \yii\helpers\Html::activeHiddenInput($searchModel,'min_value', ['id' => 'min']) ?>
						<?= \yii\helpers\Html::activeHiddenInput($searchModel,'max_value', ['id' => 'max']) ?>
						<?php
						echo '<b class="badge">' . $min_price . '</b> ' . Slider::widget([
								'name'          => 'price_value',
								'value'         => $searchModel->min_value . ',' . $searchModel->max_value,
								'sliderColor'   => Slider::TYPE_PRIMARY,
								'pluginOptions' => [
									'min'   => $min_price,
									'max'   => $max_price,
									'step'  => 50000,
									'range' => true,
								],
								'pluginEvents'  => [
									'change' => 'function(e){console.log(e.value);$("#min").val(e.value.newValue[0]);$("#max").val(e.value.newValue[1])}',
								],
							]) . ' <b class="badge">' . $max_price . '</b>';
						?>
						<button type="submit" class="btn-custom" name="priceFilter">Filter</button>
						<div class="clearfix"></div>
					</div>
				</ul>
			</li>
		</ul>
		<?php ActiveForm::end() ?>
	</div>
</div>
