<?php
/**
 * Created by FES VPN.
 * @project mobileshop-fesdev-net
 * @author  Le Phuong
 * @email   phuong17889[at]gmail.com
 * @date    12/4/2020
 * @time    10:33 AM
 */

namespace frontend\controllers;

use common\models\Bill;
use common\models\BillDetail;
use common\models\Comment;
use common\models\Product;
use common\models\RatingModel;
use dektrium\user\models\LoginForm;
use dektrium\user\models\RegistrationForm;
use frontend\widgets\Cart;
use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\Json;
use yii\rest\Controller;

class AjaxController extends Controller {

	public function actionStars() {
		if (!Yii::$app->user->isGuest) {
			$model = RatingModel::findOne([
				'user_id'    => Yii::$app->user->identity->id,
				'product_id' => $_POST['product_id'],
			]);
			if ($model === null) {
				$model             = new RatingModel();
				$model->score      = $_POST['score'];
				$model->product_id = $_POST['product_id'];
				$model->user_id    = Yii::$app->user->identity->id;
				$model->created_at = time();
				$model->updated_at = time();
				if ($model->save()) {
					echo Json::encode([
						'result'  => true,
						'message' => "Rate successful",
					]);
					die;
				} else {
					echo '<pre>';
					print_r($model->errors);
					die;
				}
			} else {
				echo Json::encode([
					'result'  => false,
					'message' => 'Already rating',
				]);
				die;
			}
		}
		echo Json::encode([
			'result' => false,
			'You are not logged user',
		]);
		die;
	}

	/**
	 * @return string
	 */
	public function actionComment() {
		$comment             = new Comment();
		$comment->user_id    = Yii::$app->user->identity->id;
		$comment->item_id    = $_POST['item_id'];
		$comment->content    = $_POST['content'];
		$comment->created_at = time();
		$comment->updated_at = time();
		if (!$comment->save()) {
			return 'not ok';
		}
		return 'ok';
	}

	public function actionLogin() {
		/** @var LoginForm $model */
		$model = Yii::createObject(LoginForm::className());
		if ($model->load(\Yii::$app->getRequest()->post()) && $model->login()) {
			return ['error' => 0];
		} else {
			return ['error' => 1];
		}
	}

	/**
	 * @return array
	 * @throws InvalidConfigException
	 */
	public function actionRegister() {
		/** @var RegistrationForm $model */
		$model = Yii::createObject(RegistrationForm::className());
		if ($model->load(Yii::$app->getRequest()->post()) && $model->register()) {
			return [
				'error'   => 0,
				'message' => 'Your account has been created and a message with further instructions has been sent to your email',
			];
		} else {
			return [
				'error'   => 1,
				'message' => current($model->firstErrors),
			];
		}
	}

	/**
	 * @param     $id
	 * @param int $type
	 * $type = 0 Xoá từ widget cart
	 * $type = 1 Xoá từ car/view-all
	 * $type = 2 Xoá tất cả giỏ hàng từ car/view-all
	 *
	 * @return array|string[]
	 * @throws \Exception
	 */
	public function actionRemoveToCart($id = null, $type = 0) {
		if ($id != null) {
			$bill = Bill::findOne([
				'user_id' => Yii::$app->user->identity->id,
				'status'  => 'draft',
			]);
			if ($type == 0) {

				BillDetail::deleteAll([
					'bill_id'    => $bill->id,
					'product_id' => $id,
				]);
				return [
					'error'   => 0,
					'html'    => Cart::widget(),
					'message' => 'OK',
				];
			} elseif ($type == 1) {
				BillDetail::deleteAll([
					'product_id' => $id,
					'bill_id'    => $bill->id,
				]);
				return [
					'type' => '1',
				];
			}
		} else {
			BillDetail::deleteAll();
			return [
				'error'   => 0,
				'html'    => '',
				'message' => 'OK',
			];
		}
	}

	public function actionCheckCart() {
		$bill        = Bill::findOne([
			'user_id' => Yii::$app->user->identity->id,
			'status'  => 'draft',
		]);
		$billDetails = BillDetail::find()->where(['bill_id' => $bill->id])->all();
		if (count($billDetails) > 0) {
			return [
				'error'   => 0,
				'message' => 'OK',
			];
		} else {
			return [
				'error'   => 1,
				'message' => 'OK',
			];
		}
	}

	public function actionAddToCart($id, $quantity = 1) {
		$model = Product::findOne(['id' => $id]);
		if (!Yii::$app->user->isGuest) {
			$user = Yii::$app->user->identity;
			$bill = Bill::findOne([
				'user_id' => $user->id,
				'status'  => Bill::STATUS_DRAFT,
			]);
			if ($bill === null) {
				$bill                 = new Bill();
				$bill->user_id        = $user->id;
				$bill->total_quantity = 0;
				$bill->total_amount   = 0;
				$bill->status         = Bill::STATUS_DRAFT;
				$bill->save();
			}
			$billDetail = BillDetail::findOne([
				'bill_id'    => $bill->id,
				'product_id' => $model->id,
			]);
			if ($billDetail !== null) {
				$new_quantity = $billDetail->quantity + $quantity;
				$new_amount   = $new_quantity * $billDetail->price;
				$billDetail->updateAttributes([
					'quantity' => $new_quantity,
					'amount'   => $new_amount,
				]);
				$bill->updateTotal();
			} else {
				$billDetail             = new BillDetail();
				$billDetail->quantity   = $quantity;
				$billDetail->price      = $model->price;
				$billDetail->amount     = $model->price;
				$billDetail->bill_id    = $bill->id;
				$billDetail->product_id = $model->id;
				$billDetail->save();
				$bill->updateTotal();
			}
			return [
				'error'   => 0,
				'html'    => Cart::widget(),
				'message' => 'OK',
			];
		} else {
			return [
				'error'   => 1,
				'message' => 'You are not login',
			];
		}
	}
}
