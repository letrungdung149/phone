<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
$this->title                   = $model->name;
$this->params['breadcrumbs'][] = [
	'label' => 'Categories',
	'url'   => ['index'],
];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="category-view" style="width: 400px">

	<h1><?= Html::encode($this->title) ?></h1>
	<?= DetailView::widget([
		'model'      => $model,
		'attributes' => [
			'id',
			'name',
			[
				'attribute' => 'created_at',
				'format'    => 'datetime',
			],
			[
				'attribute' => 'updated_at',
				'format'    => 'datetime',
			],
		],
	]) ?>

</div>
<div class="col-lg-6">
	<table class="table table-striped table-bordered detail-view" style="width: 1125px">
		<thead>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>image</th>
			<th>price</th>
			<th>quantity</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($model->products as $product) { ?>
			<tr>
				<td><?= $product->id ?></td>
				<td><?= $product->name ?></td>
				<td><img src="<?= $product->image ?>" alt="" style="height: 100%"></td>
				<td><?= number_format($product->price) ?></td>
				<td><?= $product->quantity ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
