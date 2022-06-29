<?php

use yii\web\JqueryAsset;

$params = array_merge(require __DIR__ . '/../../common/config/params.php', require __DIR__ . '/../../common/config/params-local.php', require __DIR__ . '/params.php', require __DIR__ . '/params-local.php');
return [
	'id'                  => 'app-frontend',
	'basePath'            => dirname(__DIR__),
	'bootstrap'           => ['log'],
	'controllerNamespace' => 'frontend\controllers',
	'components'          => [
		'assetManager' => [
			'bundles' => [
				JqueryAsset::class => [
					'sourcePath' => null,
					'basePath'   => '@webroot',
					'baseUrl'    => '@web',
					'js'         => ['js/ajax.js'],
				],
			],
		],
		'request'      => [
			'csrfParam' => '_csrf-frontend',
		],
		'user'         => [
			'identityClass'   => 'dektrium\user\models\User',
			'enableAutoLogin' => true,
			'identityCookie'  => [
				'name'     => '_identity-frontend',
				'httpOnly' => true,
			],
		],
		'session'      => [
			// this is the name of the session cookie used for login on the frontend
			'name' => 'advanced-frontend',
		],
		'log'          => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets'    => [
				[
					'class'  => 'yii\log\FileTarget',
					'levels' => [
						'error',
						'warning',
					],
				],
			],
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
		'urlManager'   => [
			'enablePrettyUrl' => true,
			'showScriptName'  => false,
			'suffix' => '.html',
			'rules'           => [
				'product/<type>' => 'product/index',
				'<name>.<id>'    => 'product/detail',
			],
		],
	],
	'modules'             => [
		'user' => [
			'class'         => 'dektrium\user\Module',
			'controllerMap' => [
				'settings' => \frontend\controllers\SettingsController::className(),
			],
		],
	],
	'params'              => $params,
];
