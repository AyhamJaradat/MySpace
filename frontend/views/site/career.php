<?php
/**
 * Created by PhpStorm.
 * User: Ayham
 * Date: 12/28/2020
 * Time: 12:12 PM
 */
$this->title = Yii::t('frontend', 'Working History');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="education-container">
    <h2 class="title">
        <div class="titleContainer"><strong><i class="fa fa-briefcase"></i> <?php echo "I've been Working" ?></strong>
        </div>
    </h2>

    <hr style="    max-width: 50%;">
    <br>
    <div class="mainRow">
        <div class="imageContainer">
            <?php
            $logoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/exalt_logo.svg');
            ?>
            <img src="<?= $logoURL ?>" class="img-circle eduImage exalt" width="100%"/>

        </div>

        <div class="infoContainer">
            <h3>Software Engineer </h3>

            <h6><p><strong>@ EXALT Technologies</strong></p></h6>
            <h6><p><strong>From 2/2014 to now</strong></p></h6>
            <h4><p><strong>Developing full-stack web and mobile applications</strong></p></h4>
            <br>
            <p style="    text-align: justify;">I worked on different projects using many programming languages
                including:
            <ul>
                <li><em>HTML, CSS, JavaScript, jQuery, and Ajax</em> for <strong>front-end</strong> applications.</li>
                <li><em>php, yii2 framework and rest-full APIs</em> for <strong>back-end</strong> applications..</li>
                <li><em>Android and Ionic framework</em> for <strong>mobile</strong> applications.</li>
            </ul>
            </p>


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
            <h3>Teacher Assistant in CS Department </h3>

            <h6><p><strong>@ Birzeit University</strong></p></h6>
            <h6><p><strong>From 2/2015 to 9/2015</strong></p></h6>
            <h4><p><strong>Teaching some courses and assisting professors in labs.</strong></p></h4>
            <br>
            <p style="    text-align: justify;">I had the chance to work in the academic field and taste the beauty of
                teaching fresh students some basic courses in <strong>Computer Science</strong></p>


        </div>

    </div>
    <br>
    <hr style="    max-width: 50%;">
    <br>
    <div class="mainRow">
        <div class="imageContainer">
            <?php
            $logoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/android_logo.png');
            ?>
            <img src="<?= $logoURL ?>" class="img-circle eduImage" width="100%"/>

        </div>


        <div class="infoContainer">
            <h3>Part-time Android Developer </h3>

            <h6><p><strong>@ Infinity IT</strong></p></h6>
            <h6><p><strong>From 1/2013 to 12/2013</strong></p></h6>
            <h4><p><strong>Developing Android mobile applications and games.</strong></p></h4>
            <br>
            <p style="    text-align: justify;">This was my first training and working opportunity that I got before
                graduation. I learned Android development and contributed in some applications.</p>


        </div>

    </div>

    <br>
    <hr style="    max-width: 50%;">
    <br>
    <div class="mainRow">
        <div class="imageContainer">
            <?php
            $logoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/asal_logo.png');
            ?>
            <img src="<?= $logoURL ?>" class="img-circle eduImage exalt" width="100%"/>

        </div>


        <div class="infoContainer">
            <h3>Internship</h3>

            <h6><p><strong>@ ASAL Technologies</strong></p></h6>
            <h6><p><strong>From 7/2013 to 9/2013</strong></p></h6>

            <br>
            <p style="    text-align: justify;">I trained for two months at an outsourcing company called ASAL on the
                following:
            <ul>
                <li>Object Oriented Programming (Java).</li>
                <li>Basic web concepts</li>
                <li>Rest web services</li>
                <li>CSS, JavaScript, jQuery</li>
                <li>JSP and Spring framework</li>
            </ul>
            </p>


        </div>

    </div>
    <br>
    <br>
</div>
