<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

use yii\bootstrap\ActiveForm;
?>
<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Информация для клиентов</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="/themes/savory/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/themes/savory/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="/themes/savory/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/themes/savory/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/themes/savory/css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="/themes/savory/css/bootstrap-datetimepicker.min.css">



	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="/themes/savory/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/themes/savory/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="/themes/savory/css/style.css">

	<!-- Modernizr JS -->
	<script src="/themes/savory/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="<?= Yii::$app->getHomeUrl(); ?>">BeryAvto <em></em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="/site/auto-list">Каталог</a></li>
						<li class="has-dropdown">
							<a href="#">Сервис</a>
							<ul class="dropdown">
								<li><a href="/site/auto-find">Поиск авто</a></li>
							</ul>
						</li>
						<li><a href="/contact">Контакты</a></li>
						<li class="btn-cta active"><a href="/about"><span>О нас</span></a></li>
					</ul>		
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(/themes/savory/images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					

					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Наш сайт <a href="#" target="_blank">BeryAvto</a></span>
							<h1 class="cursive-font">Давайте ездить вместе!</h1>	
						</div>
						
					</div>
							
					
				</div>
			</div>
		</div>
	</header>

	
	
	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2 class="cursive-font">Мы предоставляем</h2>
					<p></p>
				</div>
			</div>
			<div class="row fix-bootstrap">
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


	<div class="gtco-cover gtco-cover-sm" style="background-image: url(/themes/savory/images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>&ldquo; Первый раз на Украине взял авто на прокат, спасибо за отличный сервис!  &rdquo;</h1>
                <p>&mdash; Иванов Степан, 2018-09-20</p>
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
                                    <?=
                                        $content
                                    ?>	
				</div>
			</div>
		</div>
	</div>

	<footer id="gtco-footer" role="contentinfo" style="background-image: url('/themes/savory/images/img_bg_1.jpg')" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">
				<div class="col-md-12 text-center">
                                        <div class="gtco-widget">
						<ul class="gtco-quick-contact">
							<li><a href="/site/info-for-customers"><i class="icon-info"></i>Информация для клиентов</a></li>
							<li><a href="/site/public-offert"><i class="icon-file"></i>Договор публичной оферты</a></li>
						</ul>
					</div>
					<div class="gtco-widget">
						<h3>Связаться</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +380505478956</a></li>
							<li><a href="#"><i class="icon-mail2"></i> aliona.didenko@gmail.com</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
					<div class="gtco-widget">
						<h3>Мы в соцсетях</h3>
						<ul class="gtco-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</div>
                                        <div class="gtco-widget">
                                                    <h3>Оплачивайте с помощью</h3>
                                                    <ul class="gtco-social-icons">
                                                        <image src="/themes/savory/images/Visa.png" />
                                                        <image src="/themes/savory/images/Mastercard.png" />
                                                    </ul>
                                        </div>
				</div>
				<div class="col-md-12 text-center copyright">
					<p><small class="block">&copy; <?= date('Y') ?> Free HTML5. All Rights Reserved.</small> 
						<small class="block"> <a href="http://gettemplates.co/" target="_blank"></a> <a href="http://unsplash.com/" target="_blank"></a></small></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="/themes/savory/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/themes/savory/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/themes/savory/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/themes/savory/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="/themes/savory/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="/themes/savory/js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="/themes/savory/js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="/themes/savory/js/jquery.magnific-popup.min.js"></script>
	<script src="/themes/savory/js/magnific-popup-options.js"></script>
	
	<script src="/themes/savory/js/moment.min.js"></script>
	<script src="/themes/savory/js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="/themes/savory/js/main.js"></script>

	</body>
</html>