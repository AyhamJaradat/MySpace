<?php
/**
 * Created by PhpStorm.
 * User: Ayham
 * Date: 3/7/2021
 * Time: 4:00 PM
 */

namespace frontend\assets;


use yii\web\AssetBundle;

class LightBoxAsset extends AssetBundle
{

    public $basePath    = '@webroot';
    public $baseUrl     = '@web';

    /**
     * @var array
     */
    public $css = [
        'css/lightbox2/lightbox.css',
    ];

    /**
     * @var array
     */
    public $js = [
        'js/lightbox2/lightbox-plus-jquery.js',
    ];
}