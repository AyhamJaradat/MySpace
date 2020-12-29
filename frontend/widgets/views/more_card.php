<?php
/**
 * Created by PhpStorm.
 * User: Ayham
 * Date: 12/29/2020
 * Time: 1:24 AM
 */
?>
<?php echo \yii\helpers\Html::beginTag('div', $containerOptions); ?>
    <div class="main-app-card transition  working-card projects-card more-card">

        <div class="caption">
            <!--            Title-->
            <h4 class="card-title">
                <p>
                    <strong> <i class="fa fa-info-circle"></i> <?php echo "Want more ?" ?></strong>
                </p>
            </h4>
            <!--            Personal info -->
            <div class="info-row full ">
                <i class="fa fa-language"></i>
                <span>
                   <strong><?= "I speak" ?></strong>
                </span>
                <p class="lessPadding"><i class="fa fa-circle text-success"></i>Arabic <i class="fa fa-circle text-success"></i>English <i class="fa fa-circle text-success"></i>Turkish</p>
            </div>
            <div class="info-row full" >
                <i class="fa fa-heart"></i>
                <span>
                   <strong><?= "I love" ?></strong>
                </span>
                <p class="lessPadding"><i class="fa fa-circle text-success"></i>Algorithms <i class="fa fa-circle text-success"></i>Games <i class="fa fa-circle text-success"></i>Movies</p>
            </div>
            <div class="info-row full">
                <i class="fa fa-smile-o"></i>
                <span>
                   <strong><?= "I've been" ?></strong>
                </span>
                <p>Working-From-Home since 2015</p>
            </div>

            <div class="info-row full"  style="    border: unset;">
                <i class="fa fa-child"></i>
                <span>
                   <strong><?= "I learn fast" ?></strong>
                </span>
                <p>I learned how to walk when I was 12 months old !!</p>
            </div>







        </div>

    </div>
<?php echo \yii\helpers\Html::endTag('div');
