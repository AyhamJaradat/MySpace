<?php
/**
 * Created by PhpStorm.
 * User: Ayham
 * Date: 12/26/2020
 * Time: 5:20 PM
 */

namespace frontend\assets;
use yii\web\AssetBundle;

class MainAppCarouselAsset extends AssetBundle
{
    public $basePath    = '@webroot';
    public $baseUrl     = '@web';

//    public $sourcePath = '@frontend/web/bundle';
    /**
     * @var array
     */
    public $css = [
        'css/carousel/mainappcarousel.css',
    ];

    /**
     * @var array
     */
    public $js = [
        'js/carousel/jquery1.9.1.js',
        'js/carousel/killercarousel1.js',
    ];

//    public $css = [
//        'css/killercarousel/latestprodcarousel.css',
//
//    ];
//    public $js = [
//        'js/killercarousel/jquery1.9.1.js',
//        'js/killercarousel/killercarousel1.js',
//
//    ];

    public $depends = [
//        'yii\web\YiiAsset' // no need because we added jquery1.9.1
//        'yii\bootstrap\BootstrapPluginAsset',
//        'usni\fontawesome\FontAwesomeAsset',
//        'dmstr\web\AdminLteAsset',
    ];
}