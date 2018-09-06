<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "files".
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $date_create_utc
 * @property string $date_create
 * @property string $path_upload
 * @property string $description
 * @property string $caption
 * @property int $deleted
 *
 * @property AttachmentsObjects[] $attachmentsObjects
 * @property CarGallery[] $carGalleries
 * @property SpecialServices[] $specialServices
 */
class Files extends \yii\db\ActiveRecord
{
    public $file;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'files';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'caption'], 'required'],
            [['date_create_utc', 'date_create'], 'safe'],
            [['description', 'caption'], 'string'],
            [['deleted'], 'integer'],
            [['file'], 'file'],
            [['name'], 'string', 'max' => 36],
            [['type'], 'string', 'max' => 15],
            [['path_upload'], 'string', 'max' => 50],
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
            'type' => Yii::t('app', 'Type'),
            'date_create_utc' => Yii::t('app', 'Date Create Utc'),
            'date_create' => Yii::t('app', 'Date Create'),
            'path_upload' => Yii::t('app', 'Path Upload'),
            'description' => Yii::t('app', 'Description'),
            'caption' => Yii::t('app', 'Caption'),
            'deleted' => Yii::t('app', 'Deleted'),
            'file' => Yii::t('app', 'File Source'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttachmentsObjects()
    {
        return $this->hasMany(AttachmentsObjects::className(), ['file_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarGalleries()
    {
        return $this->hasMany(CarGallery::className(), ['file_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpecialServices()
    {
        return $this->hasMany(SpecialServices::className(), ['image_id' => 'id']);
    }
}
