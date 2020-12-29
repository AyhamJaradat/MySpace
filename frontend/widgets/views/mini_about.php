<?php
/**
 * Created by PhpStorm.
 * User: Ayham
 * Date: 12/26/2020
 * Time: 6:23 PM
 */
use yii\helpers\Url;
$logoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/yii2-starter-kit.gif');
?>

<!-- Sidebar user panel -->
<div class="user-panel">
    <div class="pull-left image">
        <img src="<?= $image?>" class="img-circle" />
    </div>
    <div class="pull-left info">
        <p class="user-name"><?php echo Yii::t('backend', '{username}', ['username' => $name]) ?></p>
        <p>
<!--            <i class="fa fa-circle text-success"></i>-->
            <i class="fa fa-code text-success"></i>

            <?php echo $bio ?>
        </p>
    </div>
</div>

<!--<div class="user-panel">-->
<!--    <div class="pull-left image">-->
<!--        <img src="--><?//= $image ?><!--"-->
<!--             width="147" height="107" alt="CoB Logo" title="CoB" class="img-circle">-->
<!---->
<!--    </div>-->
<!--    <div class="pull-left info">-->
<!--        <p>--><?php //echo Yii::t('backend', 'Hello, I\'m {username}', ['username' => $name]) ?><!--</p>-->
<!--        <a href="--><?php //echo Url::to(['/sign-in/profile']) ?><!--">-->
<!--            <i class="fa fa-circle text-success"></i>-->
<!--            --><?php //echo $bio ?>
<!--        </a>-->
<!--    </div>-->
<!--</div>-->
