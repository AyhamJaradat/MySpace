<?php
/**
 * Created by PhpStorm.
 * User: Ayham
 * Date: 12/27/2020
 * Time: 5:17 PM
 */

namespace frontend\assets;


use yii\web\AssetBundle;

class SiteAsset extends AssetBundle
{
    public $basePath    = '@webroot';
    public $baseUrl     = '@web';

    public $css = [
        'css/site.css',
    ];

    /**
     * @var array
     */
    public $js = [

    ];
}