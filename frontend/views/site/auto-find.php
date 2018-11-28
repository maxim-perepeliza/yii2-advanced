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

<div class="gtco-section">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2 class="cursive-font primary-color">Только сегодня и только сейчас</h2>
                <p>для Вас доступны следующие модели автомобилей</p>
            </div>
        </div>
        <div class="row">
            <?php foreach($adverts as $advert): ?>
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
                    <a href="/site/advert?id=<?= $advert->id ?>" class="btn btn-primary detail">Подробнее</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2 class="cursive-font">Мы предоставляем</h2>
					<p></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-write"></i>
						</span>
						<h3>Cтраховка авто</h3>
						<p>Путешествуйте спокойно и безопасно – мы берем все риски на себя, ведь весь парк авто, который мы предлагаем, полностью застрахован.</p>
					</div>
				</div>     
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-signal"></i>
						</span>
						<h3>Помощь в дороге</h3>
						<p>Закончился запас топлива? Нужно поменять колесо или зарядить аккумулятор? Дайте нам знать и наши специалисты приедут и помогут вам.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-headphone"></i>
						</span>
						<h3>Консьерж-сервис</h3>
						<p>Круглосуточная поддержка с любыми вопросами, будь то бронирование отелей или поиск лучших туров и товаров.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-rss"></i>
						</span>
						<h3>Wi-Fi интернет</h3>
						<p>Оставайтесь на связи и будьте в курсе всего происходящего со скоростным Wi-Fi интернетом.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-location-pin"></i>
						</span>
						<h3>GPS - навигатор</h3>
						<p>Не теряйтесь и экономьте время с помощью GPS-навигатора, который подскажет Вам оптимальный маршрут.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-home"></i>
						</span>
						<h3>Детское кресло</h3>
						<p>Путешествуете с детьми? Обезопасьте своих малышей с помощью комфортного детского кресла.</p>
					</div>
				</div>

			</div>
		</div>
	</div>

<div class="gtco-cover gtco-cover-sm" style="background-image: url('/themes/savory/images/img_bg_1.jpg')"  data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="gtco-container text-center">
        <div class="display-t">
            <div class="display-tc">
                <h1>&ldquo; Первый раз на Украине взял авто на прокат, спасибо за отличный сервис! &rdquo;</h1>
                <p>&mdash; Иванов Степан, 2018-09-20</p>
            </div>	
        </div>
    </div>
</div>

<div id="gtco-counter" class="gtco-section">
    <div class="gtco-container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                <h2 class="cursive-font primary-color">Факты, что убеждают</h2>
                <p></p>
            </div>
        </div>

        <div class="row">

            <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                <div class="feature-center">
                    <span class="counter js-counter" data-from="0" data-to="4" data-speed="5000" data-refresh-interval="50">1</span>
                    <span class="counter-label">Средний рейтинг отзывов</span>

                </div>
            </div>
            <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                <div class="feature-center">
                    <span class="counter js-counter" data-from="0" data-to="43" data-speed="5000" data-refresh-interval="50">1</span>
                    <span class="counter-label">Автопарк</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                <div class="feature-center">
                    <span class="counter js-counter" data-from="0" data-to="32" data-speed="5000" data-refresh-interval="50">1</span>
                    <span class="counter-label">Сдано в аренду сегодня</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                <div class="feature-center">
                    <span class="counter js-counter" data-from="0" data-to="1985" data-speed="5000" data-refresh-interval="50">1</span>
                    <span class="counter-label">Все пользовались</span>

                </div>
            </div>

        </div>
    </div>
</div>



<div id="gtco-subscribe">
    <div class="gtco-container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2 class="cursive-font">Подписаться</h2>
                <p>Узнавайте первым о новинках</p>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2">
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
            </div>
        </div>
    </div>
</div>

