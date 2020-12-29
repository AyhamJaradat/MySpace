<?php
/**
 * Created by PhpStorm.
 * User: Ayham
 * Date: 12/28/2020
 * Time: 2:17 AM
 */
$url = Yii::$app->urlManager->createUrl(['site/career']);
?>
<?php echo \yii\helpers\Html::beginTag('div', $containerOptions); ?>
    <div class="main-app-card transition  working-card">

        <div class="caption">
            <!--            Title-->
            <h4 class="card-title">
                <p >
                    <strong>   <i class="fa fa-briefcase"></i>  <?php echo "Working History" ?></strong>
                </p>
            </h4>
            <!--            Personal info -->
            <div class="info-row">
                <i class="fa fa-hand-o-right"></i>
                <span>
                   <strong><?= "Software Engineer" ?></strong>
                </span>
            </div>
            <div class="info-row paddingLeft">
                <i class="fa fa-building"></i>
                <span>
                    <?= "Exalt-Tech Company" ?>
                </span>
            </div>
            <div class="info-row paddingLeft">
                <i class="fa fa-calendar"></i>
                <span>
                    <?= "2/2014 - now" ?>
                </span>
            </div>
            <div class="info-row " style="    margin-top: 8px;">
                <i class="fa fa-hand-o-right"></i>
                <span>
                   <strong><?= "Teacher Assistant" ?></strong>
                </span>
            </div>
            <div class="info-row paddingLeft">
                <i class="fa fa-building"></i>
                <span>
                    <?= "Birzeit University" ?>
                </span>
            </div>
            <div class="info-row paddingLeft">
                <i class="fa fa-calendar"></i>
                <span>
                    <?= "2/2015 - 9/2015" ?>
                </span>
            </div>
            <div class="info-row " style="    margin-top: 8px;">
                <i class="fa fa-hand-o-right"></i>
                <span>
                   <strong><?= "Android Developer" ?></strong>
                </span>
            </div>
            <div class="info-row paddingLeft">
                <i class="fa fa-building"></i>
                <span>
                    <?= "Infinity_IT" ?>
                </span>
            </div>
            <div class="info-row paddingLeft">
                <i class="fa fa-calendar"></i>
                <span>
                    <?= "1/2013 - 12/2013" ?>
                </span>
            </div>



        </div>
        <div class="button-group">
            <button type="button" data-toggle="tooltip" title="<?php echo "See Details"; ?>">
                <a href="<?php echo $url; ?>"><i class="fa fa-eye"></i></a>
                <a href="<?php echo $url; ?>"><span
                        class=""><?php echo "See Details"; ?></span></a>
            </button>




        </div>
    </div>
<?php echo \yii\helpers\Html::endTag('div');
