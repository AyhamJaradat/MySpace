<?php
/**
 * Created by PhpStorm.
 * User: Ayham
 * Date: 12/26/2020
 * Time: 6:24 PM
 */

namespace frontend\assets;


use yii\web\AssetBundle;

class MainAboutAsset extends AssetBundle
{

    public $basePath    = '@webroot';
    public $baseUrl     = '@web';

    public $css = [
        'css/widgets/mini_about.css',
    ];

    /**
     * @var array
     */
    public $js = [
        'js/widgets/general.js',
    ];

}