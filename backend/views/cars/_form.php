<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;
use mihaildev\ckeditor\CKEditor;
use backend\models\UploadForm;

/* @var $this yii\web\View */
/* @var $model common\models\Cars */
/* @var $form yii\widgets\ActiveForm */
$uploadForm = new UploadForm();
?>

<div class="cars-form">
   
    <?php $form = ActiveForm::begin(['id' => 'dynamic-form', 'options' => ['enctype' => 'multipart/form-data']]); ?>

     <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 1, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $modelsBody[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'name'
                ],
            ]); ?>
    
    <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($modelsBody as $i => $modelAddress): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left">Model</h3>
                        <div class="pull-right">
                            <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            if (! $modelAddress->isNewRecord) {
                                echo Html::activeHiddenInput($modelAddress, "[{$i}]id");
                            }
                        ?>
                        <?= $form->field($modelAddress, "[{$i}]name")->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
    
    
        <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 1, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $categories[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'name'
                ],
            ]); ?>
    
     <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($categories as $i => $category): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left">Category</h3>
                        <div class="pull-right">
                            <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            if (! $category->isNewRecord) {
                                echo Html::activeHiddenInput($category, "[{$i}]id");
                            }
                        ?>
                        <?= $form->field($category, "[{$i}]name")->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
    
      <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 1, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $bodyTypes[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'name'
                ],
            ]); ?>
    
     <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($bodyTypes as $i => $bodyType): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left">Body type</h3>
                        <div class="pull-right">
                            <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            if (! $bodyType->isNewRecord) {
                                echo Html::activeHiddenInput($bodyType, "[{$i}]id");
                            }
                        ?>
                        <?= $form->field($bodyType, "[{$i}]name")->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
    
    <?= $form->field($model, 'mark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_release')->textInput() ?>

    <?= $form->field($model, 'transmition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'count_doors')->textInput() ?>

    <?= $form->field($model, 'count_seats')->textInput() ?>

    <?= $form->field($model, 'body_type_id')->textInput() ?>

    <?= $form->field($model, 'engine_capacity')->textInput(['maxlength' => true])->label('Мощность двигателя') ?>

    <?= $form->field($model, 'fuel_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'engine_power')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fuel_consumption')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conditioner_available')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'model_id')->textInput() ?>

    <?= $form->field($model, 'count_cars')->textInput() ?>

    <?= $form->field($model, 'amount_deposit')->textInput() ?>

    <?php // $form->field($model, 'image_id')->textInput() ?>
    
    <?= $form->field($uploadForm, 'file')->fileInput() ?>

    <?= $form->field($model, 'date_create')->textInput() ?>

    <?= $form->field($model, 'date_create_utc')->textInput() ?>

    <?= $form->field($model, 'deleted')->textInput() ?>
    
    <?php /* $form->field($model, 'description')->widget(CKEditor::className(), ['editorOptions' => [
        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],]); */ ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
