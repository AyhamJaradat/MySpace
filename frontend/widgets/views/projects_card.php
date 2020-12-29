<?php
/**
 * Created by PhpStorm.
 * User: Ayham
 * Date: 12/28/2020
 * Time: 1:18 PM
 */
$url = Yii::$app->urlManager->createUrl(['site/projects']);
?>
<?php echo \yii\helpers\Html::beginTag('div', $containerOptions); ?>
    <div class="main-app-card transition  working-card projects-card">

        <div class="caption">
            <!--            Title-->
            <h4 class="card-title">
                <p>
                    <strong> <i class="fa fa-tasks"></i> <?php echo "Projects" ?></strong>
                </p>
            </h4>
            <!--            Personal info -->
            <div class="info-row full ">
                <i class="fa fa-hand-o-right"></i>
                <span>
                   <strong><?= "Qwilt, CoB" ?></strong>
                </span>
                <p>#freelancing #full-stack</p>
            </div>
            <div class="info-row full" >
                <i class="fa fa-hand-o-right"></i>
                <span>
                   <strong><?= "Shabbik, Mendeleev" ?></strong>
                </span>
                <p>#games #android</p>
            </div>
            <div class="info-row full">
                <i class="fa fa-hand-o-right"></i>
                <span>
                   <strong><?= "Master Thesis" ?></strong>
                </span>
                <p>#usability #voice #games</p>
            </div>

            <div class="info-row full" >
                <i class="fa fa-hand-o-right"></i>
                <span>
                   <strong><?= "Graduation Project" ?></strong>
                </span>
                <p>#SEND #android_kernel</p>
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

