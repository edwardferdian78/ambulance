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
        'css/linearicons.css',
        'css/font-awesome.min.css',
        'css/magnific-popup.css',
        'css/nice-select.css',
        'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',
        'css/bootstrap.css',
        'css/main.css',
        'css/site.css'
    ];
    public $js = [
        'js/vendor/jquery-2.2.4.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js',
        'js/vendor/bootstrap.min.js',
        'js/jquery.ajaxchimp.min.js',
        'js/jquery.nice-select.min.js',
        'js/jquery.sticky.js',
        'js/parallax.min.js',
        'https://code.jquery.com/ui/1.12.1/jquery-ui.js',
        'js/jquery.magnific-popup.min.js',
        'js/waypoints.min.js',
        'js/jquery.counterup.min.js',
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
