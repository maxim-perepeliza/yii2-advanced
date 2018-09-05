<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ModelsCar */

$this->title = Yii::t('app', 'Create Models Car');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Models Cars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="models-car-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
