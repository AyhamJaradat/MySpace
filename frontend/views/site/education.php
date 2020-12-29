<?php
/**
 * Created by PhpStorm.
 * User: Ayham
 * Date: 12/27/2020
 * Time: 3:05 PM
 */

use yii\helpers\Html;

$this->title = Yii::t('frontend', 'Education');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="education-container">
    <h2 class="title">
        <div class="titleContainer"><strong><i class="fa fa-graduation-cap"></i> <?php echo "My Education" ?></strong></div>
    </h2>

    <hr style="    max-width: 50%;">
    <br>
    <div class="mainRow">
        <div class="imageContainer">
            <?php
            $logoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/ege_logo.png');
            ?>
            <img src="<?= $logoURL ?>" class="img-circle eduImage" width="100%"/>

        </div>

        <div class="infoContainer">
            <h3>Master Degree in Computer Engineering </h3>

            <h6><p><strong>@ Ege University in İzmir - Turkey</strong></p></h6>
            <h6><p><strong>From 9/2016 To 6/2019</strong></p></h6>
            <h4><p><strong>CGPA 4.0 out of 4.0</strong></p></h4>
            <br>
            <p style="    text-align: justify;">During the master degree, I took advanced courses in Algorithms,
                Artificial Intelligence,
                Programming Paradigms, Agents, Graph Theory, Software Usability, Bioinformatics Algorithms and
                Object Oriented Programming. I also completed my thesis: <strong>"An Experimental Study On Multiplayer
                    Mobile Games For In-Game Voice Communication Feature"</strong>, which focused on the implementation
                and
                usability perspectives of the voice communication feature in mobile games.</p>


        </div>

    </div>
    <br>
    <hr style="    max-width: 50%;">
    <br>
    <div class="mainRow">
        <div class="imageContainer">
            <?php
            $logoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/birzeit_university_seal.png');
            ?>
            <img src="<?= $logoURL ?>" class="img-circle eduImage" width="100%"/>

        </div>


        <div class="infoContainer">
            <h3>Bachelors Degree in Computer Engineering </h3>

            <h6><p><strong>@ Birzeit University in Ramallah - Palestine</strong></p></h6>
            <h6><p><strong>From 9/2009 To 6/2014</strong></p></h6>
            <h4><p><strong>CGPA 86 out of 100</strong></p></h4>
            <br>
            <p style="    text-align: justify;">Throughout the five years of the bachelor's degree, I learned all the
                basics and foundations of Computer Engineering. I graduated as a qualified and ethically responsible
                engineer who is capable of life-long learning, adhering to the highest professional standards, and able
                to engage in engineering projects.</p>


        </div>

    </div>
    <br>
    <hr style="    max-width: 50%;">
    <br>
    <div class="mainRow">
        <div class="imageContainer">
            <?php
            $logoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/high_school.png');
            ?>
            <img src="<?= $logoURL ?>" class="img-circle eduImage" width="100%"/>

        </div>


        <div class="infoContainer">
            <h3>High School - Scientific Stream </h3>

            <h6><p><strong>@ Jenin Secondary School in Palestine</strong></p></h6>
            <h6><p><strong>From 9/2008 To 7/2009</strong></p></h6>
            <h4><p><strong>CGPA 98 out of 100</strong></p></h4>
            <br>
            <p style="    text-align: justify;">My successful educational journey started with the scientific stream of
                the General Secondary Examination (Tawjihi). This examination is used to certify students for secondary
                education and admit them to post-secondary institutions.</p>


        </div>

    </div>
    <br>
    <br>
</div>



