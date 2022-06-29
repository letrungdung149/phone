<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * This is the model class for table "phone".
 *
 * @property int             $id
 * @property string          $name
 * @property int             $category_id
 * @property float           $price
 * @property int             $quantity
 * @property string          $color
 * @property string          $memory
 * @property string          $status
 * @property string          $image
 * @property string          $description
 * @property string          $type
 * @property string          $slug
 * @property int             $created_at
 * @property int             $updated_at
 * @property string          $trend
 * @property int             $sale
 * @property Category        $category
 * @property ProductRelate[] $productRelateSources
 * @property ProductRelate[] $productRelateTargets
 */
class Product extends ActiveRecord {

	public $product_relates_id;

	/** * @var UploadedFile  $image_tmp */
	public $image_tmp;

	public $spaces;

	const STATUS_IN_STOCK  = 'in_stock';

	const STATUS_OUT_STOCK = 'out_stock';

	const STATUS           = [
		self::STATUS_IN_STOCK  => 'In stock',
		self::STATUS_OUT_STOCK => 'Oou stock',
	];

	const TYPE             = [
		self::TYPE_ACCESSORY => 'Accessory',
		self::TYPE_PHONE     => 'Phone',
	];

	const TYPE_PHONE       = 'phone';

	const TYPE_ACCESSORY   = 'accessory';

	/**
	 * @return array
	 */
	public function behaviors() {
		return [
			TimestampBehavior::class,
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public static function tableName() {
		return 'product';
	}

	/**
	 * {@inheritdoc}
	 */
	/**
	 * @return array the validation rules.
	 */
	public function rules() {
		return [
			[
				[
					'name',
					'category_id',
					'price',
					'quantity',
					'color',
					'status',
					'description',
				],
				'required',
			],
			[
				[
					'id',
					'quantity',
					'created_at',
					'updated_at',
				],
				'integer',
			],
			[
				['price'],
				'safe',
			],
			[
				[
					'color',
					'memory',
					'status',
					'description',
					'slug',
				],
				'string',
			],
			[
				['name'],
				'string',
				'max' => 255,
			],
			[
				[
					'id',
					'image',
					'image_tmp',
					'description',
					'product_relates_id',
					'type',
					'trend',
					'sale',
				],
				'safe',
			],
			[
				['image_tmp'],
				'file',
				'skipOnEmpty' => !$this->isNewRecord,
				'extensions'  => 'png, jpg',
			],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels() {
		return [
			'id'                 => 'ID',
			'name'               => 'Name',
			'category_id'        => 'Category ID',
			'price'              => 'Price',
			'quantity'           => 'Quantity',
			'color'              => 'Color',
			'memory'             => 'Memory',
			'status'             => 'Status',
			'image'              => 'Image',
			'image_tmp'          => 'Image',
			'product_relates_id' => 'Product relates',
			'description'        => 'Description',
			'created_at'         => 'Created At',
			'updated_at'         => 'Updated At',
		];
	}

	/**
	 * Gets query for [[BillDetails]].
	 *
	 * @return \yii\db\ActiveQuery
	 */
	public function getBillDetails() {
		return $this->hasMany(BillDetail::className(), ['product_id' => 'id']);
	}

	/**
	 * Gets query for [[Category]].
	 *
	 * @return ActiveQuery
	 */
	public function getCategory() {
		return $this->hasOne(Category::class, ['id' => 'category_id']);
	}

	/**
	 * Gets query for [[PhoneAccessories]].
	 *
	 * @return ActiveQuery
	 */
	public function getProductRelateSources() {
		return $this->hasMany(ProductRelate::class, ['target_product_id' => 'id']);
	}

	/**
	 * Gets query for [[PhoneAccessories]].
	 *
	 * @return ActiveQuery
	 */
	public function getProductRelateTargets() {
		return $this->hasMany(ProductRelate::class, ['source_product_id' => 'id']);
	}

	/**
	 *upload
	 */
	public function upload() {
		$this->spaces = Spaces("UHFAFQDYWAV6BJLTHVMP", "r+MSQC+LhhvZZl5FSEw2Hpkckd2m1GKj5pFEVyKoSnA");
		$my_space = $this->spaces->space("mobileshopfesdevnet", "nyc3");
		if ($this->image_tmp != null) {
			$imgName = Yii::getAlias('@backend/web/images') . '/phoneIMG_' . $this->id . '.' . $this->image_tmp->getExtension();
			$this->image_tmp->saveAs($imgName);
			$a = $my_space->uploadFile($imgName, "img/". $this->id . "." . $this->image_tmp->getExtension(), "public");
			$this->updateAttributes(['image' => $a['ObjectURL']]);
		}
	}

	public function beforeSave($insert) {
		//		$this->price =
		return parent::beforeSave($insert);
	}

	/**
	 * @param bool  $insert
	 * @param array $changedAttributes
	 */
	public function afterSave($insert, $changedAttributes) {
		ProductRelate::deleteAll(['source_product_id' => $this->id]);
		foreach ($this->product_relates_id as $product_id) {
			$productRelate                    = new ProductRelate();
			$productRelate->source_product_id = $this->getPrimaryKey();
			$productRelate->target_product_id = $product_id;
			$productRelate->save();
		}
		parent::afterSave($insert, $changedAttributes);
	}

	/**
	 * @inheritDoc
	 */
	public function afterFind() {
		parent::afterFind();
		$this->image_tmp = $this->image;
		foreach ($this->productRelateTargets as $productRelateTarget) {
			$this->product_relates_id[] = $productRelateTarget->target_product_id;
		}
	}

	/**
	 * @param $price
	 * @param $sale
	 *
	 * @return float|int
	 */
	public static function getPriceSale($price, $sale) {
		if ($sale == 0) {
			return $price;
		}
		return $price - ($price * ($sale / 100));
	}
}
