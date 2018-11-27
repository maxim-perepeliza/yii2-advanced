<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * SubscribeForm is the model behind the subscribe form.
 */
class SubscribeForm extends Model
{
    public $email;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // email are required
            [['email'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'email' => 'E-mail address',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => 'New Subscriber'])
            ->setSubject('Subscribing in site BeryAvto')
            ->setTextBody('Thank you for subscribing us. We will respond to you as soon as possible.')
            ->send();
    }
}
