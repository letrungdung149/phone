<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle {

	public $basePath  = '@webroot';

	public $baseUrl   = '@web';

	public $css       = [
		'https://fonts.googleapis.com/css?family=Karla:400,700',
		'fonts/font-awesome-4.7.0/css/font-awesome.min.css',
		'fonts/font/flaticon.css',
		'css/lightslider.css',
		'css/owl.carousel.min.css',
		'css/theme.css',
		'revolution/css/settings.css',
		'css/style-1.css',
		'css/style.css',
		'css/site.css',
		'css/custom.css',
	];
	public $js        = [
		'js/bootstrap.min.js',
		'js/owl.carousel.min.js',
		'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js',
		'revolution/js/jquery.themepunch.tools.min.js',
		'revolution/js/jquery.themepunch.revolution.min.js',
		'js/bootstrap.min.js',
		'js/owl.carousel.min.js',
		'js/theme.js',
		'js/countdown.js',
		'js/index.js',
		'js/lightslider.js',
		'js/custom.js',
		'js/jquery.flexisel.js',
		'revolution/js/extensions/revolution.extension.actions.min.js',
		'revolution/js/extensions/revolution.extension.carousel.min.js',
		'revolution/js/extensions/revolution.extension.kenburn.min.js',
		'revolution/js/extensions/revolution.extension.layeranimation.min.js',
		'revolution/js/extensions/revolution.extension.migration.min.js',
		'revolution/js/extensions/revolution.extension.navigation.min.js',
		'revolution/js/extensions/revolution.extension.parallax.min.js',
		'revolution/js/extensions/revolution.extension.slideanims.min.js',
		'revolution/js/extensions/revolution.extension.video.min.js',
		'revolution/js/rev-main.js',

	];

	public $depends   = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
	];
}
