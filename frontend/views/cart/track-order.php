<?php
/**
 * Created by FesVPN.
 * @project mobileshop
 * @author  Pham Hai
 * @email   mitto.hai.7356@gmail.com
 * @date    9/12/2020
 * @time    11:17 AM
 */

use common\models\Bill;
use kartik\grid\ActionColumn;
use kartik\grid\DataColumn;
use kartik\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

/* @var $searchModel common\models\BillSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Track your orders | GrabyShop';
$arr_status  = array(
	'draft',
	'pending',
	'completed',
);
$sort_price = $_GET['sort'];
?>

<div class="container-fluid header-main">
	<div class="container text-center">
		<h2>Shopping Cart</h2>
		<div class="link-sec">
			<a href="#">Home</a> <i class="fa fa-angle-right"></i> <a href="#">Shopping Cart</a>
		</div>
	</div>
</div>
<div class="container cart-sec padd-80">

	<div id="msform">
		<!-- fieldsets -->
		<fieldset class="cart-tab">
			<div class="product-top-bar" style="margin-bottom: 20px;">
				<ul>
					<li><a href="#"><span>Short by :   </span></a></li>
					<li><a href="<?= Url::current(['sort' => $sort_price == 'total_amount'?'-total_amount':'total_amount']) ?>">Price
							<i class="<?=$sort_price == 'total_amount'?'glyphicon glyphicon-sort-by-order-alt':'glyphicon glyphicon-sort-by-order'?>"></i></i></a></li>
					<li><a href="#"><span>Trạng thái đơn :   </span></a></li>
					<li><select id="filter_status" class="form-control form-control-sm">
							<?php foreach ($arr_status as $arr_statu) {
								if (isset($_GET['status']) and $_GET['status'] == $arr_statu) {
									echo '<option value="' . $arr_statu . '" selected>' . $arr_statu . '</option>';
								} else {
									echo '<option value="' . $arr_statu . '">' . $arr_statu . '</option>';
								}
							} ?>
						</select>
					</li>
				</ul>
			</div>
			<div class="col-md-12 element-table">
				<div class="row">
					<?php \yii\widgets\Pjax::begin()?>
					<?= ListView::widget([
						'dataProvider' => $dataProvider,
						'itemView'     => '_post',
						'layout'       => '<div class="product-top-bar"><ul><li><a href="#" class="show-list">{summary}</a></li><li></ul></div><div class="clearfix"></div>{items}{pager}',
					]) ?>
				<?php \yii\widgets\Pjax::end()?>
				</div>
			</div>
			<div class="clearfix"></div>
		</fieldset>
	</div>
</div>
<?php
$draft     = Url::current(['status' => 'draft']);
$pending   = Url::current(['status' => 'pending']);
$completed = Url::current(['status' => 'completed']);
$this->registerJs(<<<JS
$(document).on('change','#filter_status',function(){
	if($(this).val()=='draft'){
		window.location.href = "$draft";
	}else if($(this).val() == 'pending'){
		window.location.href = "$pending";
	}else if($(this).val() == 'completed'){
		window.location.href = "$completed";
	}
});
JS
);
?>
