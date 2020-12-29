<?php
/**
 * Created by PhpStorm.
 * User: Ayham
 * Date: 12/26/2020
 * Time: 5:03 PM
 */

//echo \frontend\widgets\MiniAbout::widget(['view' => $this]);
// killer carousel
//echo \frontend\widgets\MainAppCarousel::widget(['view' => $this,
//'items' => $homePageDTO->getLatestProducts()]);
echo \frontend\widgets\MainAppCarousel::widget(['view' => $this,
    'items' => [1,2,3,4,5,6,7,8]]);