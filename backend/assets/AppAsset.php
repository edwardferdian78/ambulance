<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/sb-admin-2.min.css',
        'css/site.css'
    ];
    public $js = [
        'js/sb-admin-2.min.js',
        // 'js/demo/chart-area-demo.js',
        // 'js/demo/chart-pie-demo.js'
    ];
    public $vendor = [
        'vendor/fontawesome-free/css/all.min.css',
        'vendor/jquery/jquery.min.js',
        'vendor/bootstrap/js/bootstrap.bundle.min.js',
        'vendor/jquery-easing/jquery.easing.min.js',
        'vendor/chart.js/Chart.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
