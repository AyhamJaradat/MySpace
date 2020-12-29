<?php
/**
 * Created by PhpStorm.
 * User: Ayham
 * Date: 12/28/2020
 * Time: 11:44 PM
 */
?>
<?php echo \yii\helpers\Html::beginTag('div', $containerOptions); ?>
    <div class="main-app-card transition personal-info-card">

        <div class="caption">
            <!--            Title-->
            <h4 class="card-title">
                <p >
                    <strong>   <i class="fa fa-file-code-o"></i>  <?php echo "Experience / Skills" ?></strong>
                </p>
            </h4>
            <!--            Personal info -->
            <div class="info-row fullIconic">
                <?php
                $phpLogoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/php-logo.svg');
                $yii2LogoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/yii2_logo.png');
                $restApiLogoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/rest-api.png');
                ?>
                <img src="<?= $phpLogoURL ?>" class="imgIcon" width="100%"/>
                <img src="<?= $yii2LogoURL ?>" class="imgIcon" width="100%"/>
                <img src="<?= $restApiLogoURL ?>" class="imgIcon" width="100%"/>
<!--                <i class="fa fa-user"></i>-->
<!--                <span>-->
<!--                   <strong>--><?//= "PHP, Yii2 framework, Rest-full APIs" ?><!--</strong>-->
<!--                </span>-->
            </div>
            <div class="info-row fullIconic">
                <?php
                $htmlJsCssURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/jsJtmlCssBootstap.jpg');
                $jQueryURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/jquery-logo.png');
                $sassLessURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/sass-less.png');
                ?>
                <img src="<?= $htmlJsCssURL ?>" class="imgIcon" width="100%"/>
                <img src="<?= $jQueryURL ?>" class="imgIcon" width="100%"/>
                <img src="<?= $sassLessURL ?>" class="imgIcon" width="100%"/>

            </div>
<!--            <div class="info-row fullIconic">-->
<!--                --><?php
//                $bootstrapURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/bootstrap.png');
//
//                ?>
<!--                <img src="--><?//= $bootstrapURL ?><!--" class="imgIcon" width="100%"/>-->
<!--                -->
<!--            </div>-->

            <div class="info-row fullIconic">
                <?php
                $ionicURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/ERTgRj5WsAIlilk.png');
                $angularURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/AngularJS-Shield.svg');
                $androidURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/android_logo.png');
                ?>
                <img src="<?= $ionicURL ?>" class="imgIcon" width="100%"/>
                <img src="<?= $angularURL ?>" class="imgIcon" width="100%"/>
                <img src="<?= $androidURL ?>" class="imgIcon" width="100%"/>

            </div>

            <div class="info-row fullIconic" style="    justify-content: center;    border-bottom: 0px;">
                <?php
                $javaURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/Java-Logo.png');
                ?>
                <img src="<?= $javaURL ?>" class="imgIcon" width="100%"/>
            </div>
        </div>

    </div>
<?php echo \yii\helpers\Html::endTag('div');
