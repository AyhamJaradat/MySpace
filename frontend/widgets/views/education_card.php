<?php
/**
 * Created by PhpStorm.
 * User: Ayham
 * Date: 12/27/2020
 * Time: 2:27 AM
 */
//$url = Yii::createUrl('/system/log/', ['id' => $model['id']]);
$url = Yii::$app->urlManager->createUrl(['site/education'])
?>
<?php echo \yii\helpers\Html::beginTag('div', $containerOptions); ?>
    <div class="main-app-card transition education-card">

        <div class="caption">
            <!--            Title-->
            <h4 class="card-title">
                <p >
                    <strong>   <i class="fa fa-graduation-cap"></i>  <?php echo "Education" ?></strong>
                </p>
            </h4>
            <!--            Personal info -->
            <div class="info-row">
                <i class="fa fa-hand-o-right"></i>
                <span>
                   <strong><?= "Master degree" ?></strong>
                </span>
            </div>
            <div class="info-row paddingLeft">
                <i class="fa fa-building"></i>
                <span>
                    <?= "Computer Engineering" ?>
                </span>
            </div>
            <div class="info-row paddingLeft">
                <i class="fa fa-university"></i>
                <span>
                    <?= "Ege University" ?>
                </span>
            </div>
            <div class="info-row paddingLeft">
                <i class="fa fa-calendar"></i>
                <span>
                    <?= "9/2016 - 6/2019" ?>
                </span>
            </div>
            <div class="info-row " style="    margin-top: 8px;">
                <i class="fa fa-hand-o-right"></i>
                <span>
                   <strong><?= "Bachelors degree" ?></strong>
                </span>
            </div>
            <div class="info-row paddingLeft">
                <i class="fa fa-building"></i>
                <span>
                    <?= "Computer Engineering" ?>
                </span>
            </div>
            <div class="info-row paddingLeft">
                <i class="fa fa-university"></i>
                <span>
                    <?= "Birzeit University" ?>
                </span>
            </div>
            <div class="info-row paddingLeft">
                <i class="fa fa-calendar"></i>
                <span>
                    <?= "9/2009 - 6/2014" ?>
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
