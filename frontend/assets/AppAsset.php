<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/custom_site.css',
        
        'zKingMan/css/zerogrid.css',
	'zKingMan/css/style.css',
	'zKingMan/css/lightbox.css',
	'zKingMan/css/menu.css',
	'zKingMan/font-awesome/css/font-awesome.min.css',
	'zKingMan/owl-carousel/owl.carousel.css',
        
    ];
    public $js = [
        'zKingMan/js/jquery1111.min.js',
        'zKingMan/js/script.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
