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


<?php // var_dump($cars); die; ?>
<div class="gtco-section">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2 class="cursive-font primary-color">Popular Cars</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($adverts as $advert): ?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="<?= Yii::getAlias('@uploads') . '/' . $advert->car->file_path ?>" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="<?= Yii::getAlias('@uploads') . '/' . $advert->car->file_path ?>" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2><?= $advert->car->mark . ' ' . $advert->car->model->name ?></h2>
                            <p><?= $advert->description ?></p>
                            <p><span class="price cursive-font">$<?= $advert->price_per_hour ?></span></p>
                        </div>
                    </a>
                    <a href="" class="btn btn-primary detail">Подробнее</a>
                </div>
            <?php endforeach; ?>    
        </div>
    </div>
</div>
<div class="gtco-cover gtco-cover-sm" style="background-image: url(/themes/savory/images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="gtco-container text-center">
        <div class="display-t">
            <div class="display-tc">
                <h1>&ldquo; Their high quality of service makes me back over and over again!&rdquo;</h1>
                <p>&mdash; John Doe, CEO of XYZ Co.</p>
            </div>	
        </div>
    </div>
</div>
<div id="gtco-subscribe">
    <div class="gtco-container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2 class="cursive-font">Subscribe</h2>
                <p>Be the first to know about the new templates.</p>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2">
                <?php $form = ActiveForm::begin(['id' => 'subscribe-form', 'options' => ['class' => 'form-inline']]); ?>
                <div class="col-md-12 col-sm-12">
                    <?= $form->field($subscribeForm, 'email')->input('email', ['autofocus' => false, 'placeholder' => 'Your e-mail address'])->label('') ?>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <?= Html::submitButton('Subscribe', ['class' => 'btn btn-default btn-block btn-primary', 'name' => 'subscribe-button']) ?>
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
            </div>
        </div>
    </div>
</div>