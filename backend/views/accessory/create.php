<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Accessory */

$this->title = 'Create Accessory';
$this->params['breadcrumbs'][] = ['label' => 'Accessories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accessory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
