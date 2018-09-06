<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BodyTypes */

$this->title = Yii::t('app', 'Create Body Types');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Body Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="body-types-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
