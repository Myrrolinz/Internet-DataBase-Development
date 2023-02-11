<?php
/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,20230131
 * 框架生成
 */

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
        'css/comment.css',
        'public/css/style_1.css',
    ];
    public $js = [

        'app.js',
        'public/js/owl.carousel.min.js',
        'public/js/jquery.sticky.js',
        'public/js/jquery.tabs.min.js',
        'public/js/parallax.min.js',        
        'public/js/jquery.nice-select.min.js',
        'public/js/jquery.ajaxchimp.min.js',
        'public/js/jquery.magnific-popup.min.js',
        'public/js/main.js',
        'public/js/main2.js',
        'public/js/jquery.waypoints.min.js',
        'public/js/jquery.stellar.min.js',
        'public/js/modernizr-3.5.0.min.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
