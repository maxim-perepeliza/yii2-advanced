<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AdvertSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="advert-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'car_id') ?>

    <?= $form->field($model, 'author_id') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'date_create') ?>

    <?php // echo $form->field($model, 'date_create_utc') ?>

    <?php // echo $form->field($model, 'date_modified') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'price_per_hour') ?>

    <?php // echo $form->field($model, 'deleted') ?>

    <?php // echo $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
