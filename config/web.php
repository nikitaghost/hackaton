<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'language' => 'ru-RU',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],


    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'fdsf4234jksfd2341',
            'baseUrl'=> '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.near-you.store',
                'username' => 'noreply@near-you.store',
                'password' => '2mNK3Arv5387',
                'port' => '25',
//                'encryption' => 'ssl',
            ],
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
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'index'=>'site/index',
                'delivery-and-payment'=>'site/delivery-and-payment',
                'signup'=>'user/signup',
                'signin'=>'user/signin',
                'logout'=>'user/logout',
                'cart'=>'orders/cart',

                'me'=>'user/account',
                'user/order/<id:\d+>'=>'user/single-order',
                'orders-admin/order/<id:\d+>'=>'orders-admin/single-order',
                'email-verification/<id:\d+>/<key:\w+>'=>'user/email-verification',

                'product/<url:\w+>'=>'products/product/',
                // категория/брэнд/сортировка/количество/страница/ценаОт/ценаДо/Поиск
                'catalog/<category:\w+>/<brand:\w+>/<sort:\w+>/<count:\w+>/<page:\w+>/<priceFrom:\w+>/<priceTo:\w+>/<search:\w+>/'=>'products/ajax-catalog/',
                'pagination/<category:\w+>/<brand:\w+>/<count:\w+>/<priceFrom:\w+>/<priceTo:\w+>/<search:\w+>/'=>'products/ajax-catalog-count/',
                'max-price/<category:\w+>/<brand:\w+>'=>'products/ajax-catalog-max/',
                'products/<category:\w+>'=>'products/',
                'products/<category:\w+>/<brand:\w+>'=>'products/',
                'products/<category:\w+>/<brand:\w+>/<page:\d+>'=>'products/',

                'payment/<id:\d+>'=>'payment/',
                'payresult/'=>'payment/result',

                'order-registration'=>'orders/order-registration/',
                'cancel-order/<id:\d+>'=>'orders/cancel-order',

                'products-admin/product/<url:\w+>'=>'products-admin/edit-product/',
                'products-admin/delete-product/<url:\w+>'=>'products-admin/delete-product/',
                'products-admin/recover-product/<url:\w+>'=>'products-admin/recover-product/',

                'category-admin/edit-category/<url:\w+>'=>'category-admin/edit-category/',
                'category-admin/delete-category/<url:\w+>'=>'category-admin/delete-category/',

            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
//        'allowedIPs' => ['*', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
//       'allowedIPs' => ['*', '::1'],
    ];
}

return $config;
