<?php
/**
 * Created by PhpStorm.
 * User: Ayham
 * Date: 12/27/2020
 * Time: 1:43 AM
 */
?>
<?php echo \yii\helpers\Html::beginTag('div', $containerOptions); ?>
    <div class="main-app-card transition personal-info-card social-card">

        <div class="caption">
            <!--            Title-->
            <h4 class="card-title">
                <p >
                    <strong>   <i class="fa fa-wifi"></i>  <?php echo "Find me" ?></strong>
                </p>
            </h4>
            <!--            Personal info -->
            <div class="info-row">
                <a href="https://www.facebook.com/ayham.jaradat/" target="_blank">
                <i class="fa fa-facebook-official"></i>
                <span>
                 <?="ayham.jaradat" ?>
                </span>
                </a>
            </div>
            <div class="info-row">
                <a href="https://wa.me/905523414108?text=Hi%20Ayham" target="_blank">
                <i class="fa fa-whatsapp text-success"></i>
                <span class="text-success">
                    <?="+90-5523414108" ?>
                </span>
                </a>
            </div>
            <div class="info-row">
                <a href="https://join.skype.com/invite/amlxMZgGjpaX" target="_blank">
                <i class="fa fa-skype"></i>
                <span>
                    <?= "ayham.jaradat1" ?>
                </span>
                </a>
            </div>
            <div class="info-row">
                <a href="https://github.com/AyhamJaradat" target="_blank">
                <i class="fa fa-github"></i>
                <span>
                    <?= "AyhamJaradat" ?>
                </span>
                </a>
            </div>
            <div class="info-row mobile">
                <a href="https://www.linkedin.com/in/ayham-jaradat/">
                    <i class="fa fa-linkedin-square"></i>
                    <span>
                    <?= "ayham-jaradat" ?>
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
