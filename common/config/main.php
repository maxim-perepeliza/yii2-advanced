<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
	    'enablePrettyUrl' => true,
	    'showScriptName' => false,
	    'rules' => [
		'' => 'site/index',                                
		'<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
	    ],
	],
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\DbMessageSource',
                    //'forceTranslation' => true,
//                    'basePath' => '@common/messages',
                    'sourceLanguage' => 'ru',
                ]
            ],
        ],
    ],
];
