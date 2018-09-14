<?php

$params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);

return [
    'sourceLanguage' => 'ru',
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => [
        'log',
        'languages'
    ],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'i18n' => [
            'translations' => [
                'app' => [
                    //'class' => 'yii\i18n\PhpMessageSource',
                    'class' => 'yii\i18n\DbMessageSource',
                    //'forceTranslation' => true,
//                    'basePath' => '@common/messages',
                    'sourceLanguage' => 'ru',
                ],
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
            'class' => 'common\components\Request'
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class' => 'common\components\UrlManager',
            'rules' => [
                'languages' => 'languages/default/index',
                '/' => 'site/index',
                '<action:(contact|login|logout|language|about|signup)>' => 'site/<action>',
            ],
        ],
    ],
    'params' => $params,
    'modules' => [
        'languages' => [
            'class' => 'common\modules\languages\Module',
            'languages' => [
                'English' => 'en',
                'Русский' => 'ru',
                'Українська' => 'uk',
            ],
            'default_language' => 'ru',
            'show_default' => false,
        ],
    ],
];
