<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Cars */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cars-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_release')->textInput() ?>

    <?= $form->field($model, 'transmition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'count_doors')->textInput() ?>

    <?= $form->field($model, 'count_seats')->textInput() ?>

    <?= $form->field($model, 'body_type_id')->textInput() ?>

    <?= $form->field($model, 'engine_capacity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fuel_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'engine_power')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fuel_consumption')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conditioner_available')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'model_id')->textInput() ?>

    <?= $form->field($model, 'count_cars')->textInput() ?>

    <?= $form->field($model, 'amount_deposit')->textInput() ?>

    <?= $form->field($model, 'image_id')->textInput() ?>

    <?= $form->field($model, 'date_create')->textInput() ?>

    <?= $form->field($model, 'date_create_utc')->textInput() ?>

    <?= $form->field($model, 'deleted')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
