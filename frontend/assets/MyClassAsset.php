<?php
namespace app\assets;
 
use yii\web\AssetBundle;
 
class MyClassAsset extends AssetBundle
{
    public $basePath = '@webroot'; //алиас каталога с файлами, который соответствует @web
    public $baseUrl = '@web';//Алиас пути к файлам
    public $css = [
	'https://fonts.googleapis.com/css?family=Lato:300,400,700',
        'https://fonts.googleapis.com/css?family=Kaushan+Script',
        'themes/savory/css/animate.css',
        'themes/savory/css/icomoon.css',
        'themes/savory/css/themify-icons.css',
        'themes/savory/css/bootstrap.css',
        'themes/savory/css/magnific-popup.css',
        'themes/savory/css/bootstrap-datetimepicker.min.css',
        'themes/savory/css/owl.carousel.min.css',
        'themes/savory/css/owl.theme.default.min.css',
        'themes/savory/css/style.css',
    ];
    public $js = [
        'themes/savory/js/modernizr-2.6.2.min.js',
        'themes/savory/js/jquery.min.js',
        'themes/savory/js/jquery.easing.1.3.js',
        'themes/savory/js/bootstrap.min.js',
        'themes/savory/js/jquery.waypoints.min.js',
        'themes/savory/js/owl.carousel.min.js',
        'themes/savory/js/jquery.countTo.js',
        'themes/savory/js/jquery.stellar.min.js',
        'themes/savory/js/jquery.magnific-popup.min.js',
        'themes/savory/js/magnific-popup-options.js',
        'themes/savory/js/moment.min.js',
        'themes/savory/js/bootstrap-datetimepicker.min.js',
        'themes/savory/js/main.js',
    ];
}