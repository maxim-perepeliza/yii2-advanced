<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "advert".
 *
 * @property int $id
 * @property int $car_id
 * @property int $author_id
 * @property string $status
 * @property string $date_create
 * @property string $date_create_utc
 * @property string $date_modified
 * @property int $title
 * @property int $price_per_hour
 * @property int $deleted
 * @property string $description
 *
 * @property Cars $car
 * @property User $author
 * @property AdvertLocations[] $advertLocations
 * @property OrderItems[] $orderItems
 */
class Advert extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'advert';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['car_id', 'author_id', 'title', 'price_per_hour', 'deleted'], 'integer'],
            [['status', 'date_create', 'title', 'price_per_hour', 'description'], 'required'],
            [['date_create', 'date_create_utc', 'date_modified'], 'safe'],
            [['description'], 'string'],
            [['status'], 'string', 'max' => 15],
            [['car_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cars::className(), 'targetAttribute' => ['car_id' => 'id']],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'car_id' => Yii::t('app', 'Car ID'),
            'author_id' => Yii::t('app', 'Author ID'),
            'status' => Yii::t('app', 'Status'),
            'date_create' => Yii::t('app', 'Date Create'),
            'date_create_utc' => Yii::t('app', 'Date Create Utc'),
            'date_modified' => Yii::t('app', 'Date Modified'),
            'title' => Yii::t('app', 'Title'),
            'price_per_hour' => Yii::t('app', 'Price Per Hour'),
            'deleted' => Yii::t('app', 'Deleted'),
            'description' => Yii::t('app', 'Description'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCar()
    {
        return $this->hasOne(Cars::className(), ['id' => 'car_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdvertLocations()
    {
        return $this->hasMany(AdvertLocations::className(), ['advert_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItems::className(), ['average_id' => 'id']);
    }
}
