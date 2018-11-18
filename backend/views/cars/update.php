<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Cars */

$this->title = Yii::t('app', 'Update Cars: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cars-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelsBody' => $modelsBody,
        'categories' => $categoriesBody,
        'bodyTypes' => $bodyTypes
    ]) ?>

</div>
