<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
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
	<title>Контакты</title>
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
						<li class="active"><a href="/contact">Контакты</a></li>
						<li class="btn-cta"><a href="/about"><span>О нас</span></a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_bg_3.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">

					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<?php /*?><span class="intro-text-small">Rent just with <a href="http://gettemplates.co" target="_blank">GetTemplates.co</a></span><?php*/ ?>
							<span class="intro-text-small">Аренда - это просто с </span>
							<h1 class="cursive-font">BeryAvto!</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 animate-box">
                                            <?= $content ?>
                                        </div>
                                        <div class="col-md-5 col-md-push-1 animate-box">

                                                <div class="gtco-contact-info">
                                                        <h3>Контактная информация</h3>
                                                        <ul>
                                                                <li class="address">пер. Электроинструментальный 6а, <br> Харьков, Украина</li>
                                                                <li class="phone"><a href="tel://380960705812">+ 38 (050) 537 - 47 - 54</a></li>
                                                                <li class="email"><a href="mailto:maximus.perepel96@gmail.com">aliona.didenko@gmail.com</a></li>
                                                                <li class="url"><a href="http://orenda-avto.webcoder-dev.com">orenda-avto.webcoder-dev.com</a></li>
                                                        </ul>
                                                </div>


                                        </div>
				</div>
			</div>
                        <div class="row">
                            <div id="map_contact" style="height: 400px !important;" class="col-md-12">
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
				</div>
				<div class="col-md-12 text-center copyright">
					<p><small class="block">&copy; 2018 Free HTML5. All Rights Reserved.</small> 
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

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlz7f8qQwqDy9wl8IRIZ58NiYgXTrqBTk&language=ua"></script>
        <script>
            var locations = [
                    {
                        lng: 36.294989,
                        lat: 50.0405461,
                        address: 'Электроинструментальный 6а, Харків, Україна. Да, аренда авто тут!'
                    }    
            ];
            var map = new google.maps.Map(document.getElementById('map_contact'), {
                zoom: 17,
                center: {lat: 50.0403958, lng: 36.2944559}
            }); 
            console.log(locations);
            locations.forEach(function(element) {
                var office = element;
                var marker = new google.maps.Marker({
                  position: {lat:  parseFloat(office.lat), lng: parseFloat(office.lng)},
                  map: map,
                  title: office.address
                });
              });
        </script>
	</body>
</html>
