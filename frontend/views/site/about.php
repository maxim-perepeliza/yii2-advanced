<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

//$this->title = 'About';
//$this->params['breadcrumbs'][] = $this->title;
?>
<?php /* ?>
  <div class="site-about">
  <h1><?= Html::encode($this->title) ?></h1>
  <p>
  This is the About page. You may modify the following file to customize its content:
  </p>
  <code><?= __FILE__ ?></code>
  </div>
  <?php */ ?>
<?php $form = ActiveForm::begin(['id' => 'subscribe-form', 'options' => ['class' => 'form-inline']]); ?>
<div class="col-md-12 col-sm-12">
    <?= $form->field($subscribeForm, 'email')->input('email', ['autofocus' => false, 'placeholder' => 'Ваш e-mail'])->label('') ?>
</div>
<div class="col-md-12 col-sm-12">
    <div class="form-group">
        <?= Html::submitButton('Подписаться', ['class' => 'btn btn-default btn-block btn-primary', 'name' => 'subscribe-button']) ?>
    </div>
</div>
<?php if (isset($status) && isset($response)): ?>
    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <span class="response-subscribe  <?= $status ?>"><?= $response ?></span>
        </div>
    </div>
<?php endif; ?>
<?php ActiveForm::end(); ?>