<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'name'=>'Оснащение ',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'modules' => [
        'gridview' => [ 'class' => '\kartik\grid\Module' ],
        'user' => [
            'class' => 'dektrium\user\Module',
            // Admin users: see config/params.php
            'admins' => $params['userAdmins'],
            'enableConfirmation' => false,
            'enablePasswordRecovery' => false,
            'modelMap' => ['RegistrationForm' => 'app\models\RegistrationForm', 'LoginForm' => 'app\models\LoginForm'],
            'controllerMap' => [
                'admin' => [
                  'class' => 'dektrium\user\controllers\AdminController',
                  'layout' => '@app/views/layouts/leftPane.php',
                ],
                'security' => [
                  'class' => 'dektrium\user\controllers\SecurityController',
                  'layout' => '@app/views/layouts/loginWrap',
                ],
                ],            
            ],
        
        'admin' => [
            'class' => 'mdm\admin\Module',
            'layout' => '@app/views/layouts/leftPane.php',
            ],
        ],
    'components' => [
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@dektrium/user/views/security' => '@app/views/user/security',
//                     '@mdm/admin/views' => '@app/views/administrator/mdm'
                ],
            ],
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager'
        ],
        'request' => [
            'cookieValidationKey' => 'fthulopERF465Dffk',
//            'enableCsrfValidation' => false
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
//        'user' => [
//            'identityClass' => 'dektrium\user\models\User',
//            'enableAutoLogin' => true,
//        ],
        'user' => [
            'identityClass' => 'dektrium\user\models\User',
            'loginUrl' => ['/'],
        ],
//         'user' => [
//            'identityClass' => 'mdm\admin\models\User',
//            'loginUrl' => ['admin/user/login'],
//        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => require(__DIR__ . '/db.php'),
//        
//        'urlManager' => [
////            'enablePrettyUrl' => true,
////            'showScriptName' => false,
//            'rules' => [
////                'login'=>`site/index`,
//            ],
//        ],
       
        'assetManager' => [
        'bundles' => [
//                'yii\web\JqueryAsset' => [
//                    'js'=>[]
//                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'js'=>[]
                ]
                ,
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => []
                ]
            ],
        ],
    ],
    'as beforeRequest' => [
        'class' => 'yii\filters\AccessControl',
        'rules' => [
                [
                        'allow' => true,
                        'actions' => ['login', 'forgot'],
                ],
                [
                        'allow' => true,
                        'roles' => ['@'],
                ],

        ],
        'denyCallback' => function () {
//            if($this->action->id == 'forgot')
//                        return Yii::$app->response->redirect(['whatever/whatever']);
//                  else
                return Yii::$app->response->redirect(['user/security/login']);
        },
    ],
    'params' => $params,
   
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs'=>  [$_SERVER['REMOTE_ADDR'], '127.0.0.1', '192.168.1.34','::1'],
    ];
}

return $config;
