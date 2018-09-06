<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $name
 * @property string $date_create
 * @property string $date_create_utc
 * @property int $deleted
 *
 * @property Cars[] $cars
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'date_create'], 'required'],
            [['date_create', 'date_create_utc'], 'safe'],
            [['deleted'], 'integer'],
            [['name'], 'string', 'max' => 36],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'date_create' => Yii::t('app', 'Date Create'),
            'date_create_utc' => Yii::t('app', 'Date Create Utc'),
            'deleted' => Yii::t('app', 'Deleted'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Cars::className(), ['category_id' => 'id']);
    }
}
