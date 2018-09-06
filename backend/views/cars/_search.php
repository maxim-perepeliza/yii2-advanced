<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CarsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cars-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'mark') ?>

    <?= $form->field($model, 'date_release') ?>

    <?= $form->field($model, 'transmition') ?>

    <?= $form->field($model, 'count_doors') ?>

    <?php // echo $form->field($model, 'count_seats') ?>

    <?php // echo $form->field($model, 'body_type_id') ?>

    <?php // echo $form->field($model, 'engine_capacity') ?>

    <?php // echo $form->field($model, 'fuel_type') ?>

    <?php // echo $form->field($model, 'engine_power') ?>

    <?php // echo $form->field($model, 'fuel_consumption') ?>

    <?php // echo $form->field($model, 'conditioner_available') ?>

    <?php // echo $form->field($model, 'category_id') ?>

    <?php // echo $form->field($model, 'model_id') ?>

    <?php // echo $form->field($model, 'count_cars') ?>

    <?php // echo $form->field($model, 'amount_deposit') ?>

    <?php // echo $form->field($model, 'image_id') ?>

    <?php // echo $form->field($model, 'date_create') ?>

    <?php // echo $form->field($model, 'date_create_utc') ?>

    <?php // echo $form->field($model, 'deleted') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
