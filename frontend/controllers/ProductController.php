<?php
/**
 * Created by Fes.
 * @project mobileshop
 * @author  Minh
 * @email   nguyentuanminhhd197@gmail.com
 * @date    12/18/20
 * @time    17:14
 * @phone   0345525586
 */

namespace frontend\controllers;

use common\models\Category;
use common\models\Product;
use common\models\RatingModel;
use common\models\search\ProductSearch;
use yii\web\Controller;

class ProductController extends Controller {

	/**
	 * @return string
	 */
	public function actionIndex($type = 'phone') {
		$categories = Category::find()->alias('c')->select([
			'c.name',
			'c.id',
			'p_count' => 'count(p.id)',
		])->leftJoin(['p' => 'product'], 'p.category_id = c.id')->andWhere(['p.type' => $type])->groupBy('c.name')->all();
		$params     = \Yii::$app->request->queryParams;
		if (isset($params['sort'])) {
			$sort = $params['sort'];
		} else {
			$sort = null;
		}
		$searchModel       = new ProductSearch();
		$searchModel->type = $type;
		$dataProvider      = $searchModel->search($params);
		return $this->render('index', [
			'type'         => $type,
			'searchModel'  => $searchModel,
			'dataProvider' => $dataProvider,
			'params'       => $params,
			'sort'         => $sort,
			'categories'   => $categories,
		]);
	}

	/**
	 * @param $id
	 *
	 * @return string
	 */
	public function actionDetail($name, $id) {
		$product         = Product::findOne($id);
		$relate_products = Product::find()->limit(4)->where(['category_id' => $product->category_id])->all();
		$rating          = RatingModel::find()->where(['product_id' => $id])->one();
		if ($rating === null) {
			$rating        = new RatingModel();
			$rating->score = 5;
		}
		return $this->render('detail', [
			'product'         => $product,
			'rating'          => $rating,
			'relate_products' => $relate_products,
		]);
	}
}
