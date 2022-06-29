<?php

use common\models\Accessory;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Accessory */
/* @var $phones \common\models\Phone */
$this->title                   = $model->name;
$this->params['breadcrumbs'][] = [
	'label' => 'Accessories',
	'url'   => ['index'],
];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="accessory-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Update', [
			'update',
			'id' => $model->id,
		], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Delete', [
			'delete',
			'id' => $model->id,
		], [
			'class' => 'btn btn-danger',
			'data'  => [
				'confirm' => 'Are you sure you want to delete this item?',
				'method'  => 'post',
			],
		]) ?>
	</p>
	<div class="row" style="margin-top: 30px">
		<div class="col-lg-6">
			<img src="<?= $model->image ?>" alt="" style="width: 100%">
		</div>
		<div class="col-lg-6">
			<?= DetailView::widget([
				'model'      => $model,
				'attributes' => [
					'id',
					'name',
					[
						'attribute' => 'category_id',
						'value'     => function(Accessory $data) {
							return $data->category->name;
						},
					],
					[
						'attribute' => 'price',
						'value'     => function(Accessory $data) {
							return number_format($data->price) . " VNĐ";
						},
					],
					'quanlity',
					//'color',
					//'image',
					'status:ntext',
					'slug',
					//'description:ntext',
					//'created_at',
					//'updated_at',
				],
			]) ?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<?= str_replace('\"', "", $model->description) ?>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="container">
			<h2>SẢN PHẨM LIÊN QUAN</h2>
			<div class="d-flex">
				<?php /** @var \common\models\Phone $phone */
				foreach ($phones as $phone){?>
					<a href="<?= \yii\helpers\Url::to(['phone/view','id'=>$phone->id])?>">
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="<?= $phone->image ?>" alt="<?= $phone->name ?>">
							</div>
							<div class="caption">
								<h4><?= $phone->name ?></h4>
								<p><?= $phone->price == - 1 ? 'Chưa cập nhập giá' : $phone->price ?></p>
							</div>
						</div>
					</a>
				<?php } ?>
			</div>
		</div>
	</div>
