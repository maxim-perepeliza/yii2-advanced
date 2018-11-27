<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cars".
 *
 * @property int $id
 * @property string $mark
 * @property string $date_release
 * @property string $transmition
 * @property int $count_doors
 * @property int $count_seats
 * @property int $body_type_id
 * @property string $engine_capacity
 * @property string $fuel_type
 * @property string $engine_power
 * @property string $fuel_consumption
 * @property string $conditioner_available
 * @property int $category_id
 * @property int $model_id
 * @property int $count_cars
 * @property int $amount_deposit
 * @property int $image_id
 * @property string $date_create
 * @property string $date_create_utc
 * @property string $file_path
 * @property int $deleted
 *
 * @property Advert[] $adverts
 * @property CarGallery[] $carGalleries
 * @property BodyTypes $bodyType
 * @property ModelsCar $model
 * @property Categories $category
 * @property CarsAdditionalServices[] $carsAdditionalServices
 * @property PriceList[] $priceLists
 */
class Cars extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mark', 'transmition', 'count_doors', 'count_seats', 'body_type_id', 'engine_capacity', 'fuel_type', 'engine_power', 'fuel_consumption', 'conditioner_available', 'category_id', 'model_id', 'count_cars', 'amount_deposit', 'date_create'], 'required'],
            [['date_release', 'date_create', 'date_create_utc', 'image_id', 'file_path'], 'safe'],
            [['count_doors', 'count_seats', 'body_type_id', 'category_id', 'model_id', 'count_cars', 'amount_deposit', 'image_id', 'deleted'], 'integer'],
            [['mark'], 'string', 'max' => 30],
            [['transmition', 'fuel_type', 'fuel_consumption'], 'string', 'max' => 15],
            [['engine_capacity', 'engine_power', 'conditioner_available'], 'string', 'max' => 10],
            [['body_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => BodyTypes::className(), 'targetAttribute' => ['body_type_id' => 'id']],
            [['model_id'], 'exist', 'skipOnError' => true, 'targetClass' => ModelsCar::className(), 'targetAttribute' => ['model_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['file_path'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'mark' => Yii::t('app', 'Mark'),
            'date_release' => Yii::t('app', 'Date Release'),
            'transmition' => Yii::t('app', 'Transmition'),
            'count_doors' => Yii::t('app', 'Count Doors'),
            'count_seats' => Yii::t('app', 'Count Seats'),
            'body_type_id' => Yii::t('app', 'Body Type ID'),
            'engine_capacity' => Yii::t('app', 'Engine Capacity'),
            'fuel_type' => Yii::t('app', 'Fuel Type'),
            'engine_power' => Yii::t('app', 'Engine Power'),
            'fuel_consumption' => Yii::t('app', 'Fuel Consumption'),
            'conditioner_available' => Yii::t('app', 'Conditioner Available'),
            'category_id' => Yii::t('app', 'Category ID'),
            'model_id' => Yii::t('app', 'Model ID'),
            'count_cars' => Yii::t('app', 'Count Cars'),
            'amount_deposit' => Yii::t('app', 'Amount Deposit'),
            'image_id' => Yii::t('app', 'Image ID'),
            'date_create' => Yii::t('app', 'Date Create'),
            'date_create_utc' => Yii::t('app', 'Date Create Utc'),
            'deleted' => Yii::t('app', 'Deleted'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdverts()
    {
        return $this->hasMany(Advert::className(), ['car_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarGalleries()
    {
        return $this->hasMany(CarGallery::className(), ['car_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBodyType()
    {
        return $this->hasOne(BodyTypes::className(), ['id' => 'body_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModel()
    {
        return $this->hasOne(ModelsCar::className(), ['id' => 'model_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarsAdditionalServices()
    {
        return $this->hasMany(CarsAdditionalServices::className(), ['car_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceLists()
    {
        return $this->hasMany(PriceList::className(), ['car_id' => 'id']);
    }
}
