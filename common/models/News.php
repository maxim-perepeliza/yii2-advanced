<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $date_create_utc
 * @property string $date_modified
 * @property string $date_happend
 * @property int $deleted
 * @property int $author_id
 *
 * @property User $author
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['description'], 'string'],
            [['date_create_utc', 'date_modified', 'date_happend'], 'safe'],
            [['deleted', 'author_id'], 'integer'],
            [['title'], 'string', 'max' => 36],
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
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'date_create_utc' => Yii::t('app', 'Date Create Utc'),
            'date_modified' => Yii::t('app', 'Date Modified'),
            'date_happend' => Yii::t('app', 'Date Happend'),
            'deleted' => Yii::t('app', 'Deleted'),
            'author_id' => Yii::t('app', 'Author ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }
}
