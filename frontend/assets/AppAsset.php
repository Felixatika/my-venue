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
     'css/custom.css',
        'css/searchresult.css',
    ];
    public $js = [
        'css/carousel.js',
         'js/map.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap4\BootstrapAsset'
    ];
}
