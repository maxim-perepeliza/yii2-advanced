<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use app\assets\MyClassAsset;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
MyClassAsset::register($this);
?>
<h3>Связаться</h3>                       
<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
    <?= $form->field($model, 'name')->textInput(['autofocus' => false, 'placeholder' => 'Ваше имя']) ?>
    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Ваш e-mail']) ?>
    <?= $form->field($model, 'subject')->textInput(['placeholder' => 'Тема']) ?>
    <?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder' => 'Обращение']) ?>
    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
    ]) ?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
    </div>
<?php ActiveForm::end(); ?>