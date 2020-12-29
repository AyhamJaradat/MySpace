<?php
/**
 * Created by PhpStorm.
 * User: Ayham
 * Date: 12/27/2020
 * Time: 12:29 AM
 */
?>
<?php echo \yii\helpers\Html::beginTag('div', $containerOptions); ?>
    <div class="main-app-card transition personal-info-card">

        <div class="caption">
<!--            Title-->
            <h4 class="card-title">
                <p >
                  <strong>   <i class="fa fa-id-badge"></i>  <?php echo "Personal Information" ?></strong>
                </p>
            </h4>
<!--            Personal info -->
            <div class="info-row">
                <i class="fa fa-user"></i>
                <span>
                   <strong><?= "Ayham Jaradat" ?></strong>
                </span>
            </div>
            <div class="info-row">
                <i class="fa fa-globe"></i>
                <span>
                    <?= "Palestinian" ?>
                </span>
            </div>
            <div class="info-row">
                <i class="fa fa-birthday-cake"></i>
                <span>
                    <?= "1991-03-26" ?>
                </span>
            </div>
            <div class="info-row">
                <i class="fa fa-map-marker"></i>
                <span>
                    <?= "Turkey, İzmir." ?>
                </span>
            </div>
            <div class="info-row mobile">
                <a href="tel:+90-5523414108">
                <i class="fa fa-mobile"></i>
                <span>
                    <?= "+90-5523414108" ?>
                </span>
                </a>
            </div>
            <div class="info-row">
                <a href="mailto:meajaradat@gmail.com" target="_blank">
                <i class="fa fa-envelope"></i>
                <span>
                    <?= "meajaradat@gmail.com" ?>
                </span>
                </a>
            </div>


        </div>

    </div>
<?php echo \yii\helpers\Html::endTag('div');
