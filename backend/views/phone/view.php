<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $accessories \common\models\Accessory */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Phones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="phone-view">

	<h1><?= Html::encode($this->title) ?></h1>
	<div class="col-lg-6">
		<img src="<?=$model->image?>" alt="" style="width:100%">
	</div>
	<div class="col-lg-6" style="padding-top: 80px">
			<?= DetailView::widget([
				'model' => $model,
				'attributes' => [
					'id',
					'name',
					'category_id',
					'price',
					'quanlity',
					'color',
					'memory',
					'status',
					'created_at',
					'updated_at',
				],
			]) ?>
	</div>
	<div class="col-lg-12">
		<div class="text">
			<?= $model->description?>
		</div>
	</div>

	<div class="row">
		<div class="container">
			<h2>SẢN PHẨM LIÊN QUAN</h2>
			<div class="d-flex">
				<?php
				/** @var \common\models\Accessory $accessory */
				foreach ($accessories as $accessory){?>
					<a href="<?= \yii\helpers\Url::to(['accessory/view','id'=>$accessory->id])?>">
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="<?= $accessory->image ?>" alt="<?= $accessory->name ?>">
							</div>
							<div class="caption">
								<h4><?= $accessory->name ?></h4>
								<p><?= $accessory->price == - 1 ? 'Chưa cập nhập giá' : $accessory->price ?></p>
							</div>
						</div>
					</a>
				<?php } ?>
			</div>
		</div>
	</div>


</div>
