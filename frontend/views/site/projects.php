<?php
/**
 * Created by PhpStorm.
 * User: Ayham
 * Date: 12/28/2020
 * Time: 4:16 PM
 */
$this->title = Yii::t('frontend', 'Projects');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="education-container">
    <h2 class="title">
        <div class="titleContainer"><strong><i class="fa fa-tasks"></i> <?php echo "Projects I worked On" ?></strong>
        </div>
    </h2>

    <hr style="    max-width: 50%;">
    <br>
    <div class="mainRow">
        <div class="imageContainer">
            <?php
            $logoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/cob_login.svg');
            ?>
            <img src="<?= $logoURL ?>" class="img-circle eduImage exalt" width="100%"/>

        </div>

        <div class="infoContainer">
            <h3>CoB - Connected Businesses </h3>

            <h6><p><strong>#freelancing #full-stack #cross_platform</strong></p></h6>
            <h4><p style="    text-align: justify;"><strong>CoB </strong>– is a networking platform for businesses that
                    provides you with the best contacts, links, leads and information required to nourish and support
                    your learning and evolving career.</p></h4>
            <br>
            <p style="    text-align: justify;">I worked on developing every part of this great startup, including:
            <ul>
                <li>Designing and managing its <em>mySql Database</em></li>
                <li>Building the backend, control panel and the Rest-full APIs using <em>php yii2 framework</em></li>
                <li>Building the CoB application (Web, Android, iOS ) using <em>ionic framework - Angular</em></li>
                <li>Integrating third-parties and tools such as <em>WebEx APIs</em>, <em>A-Trigger</em>,<em>Firebase
                        realtime database </em>, and others!
                </li>
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
            $logoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/qwilt_logo.svg');
            ?>
            <img src="<?= $logoURL ?>" class="img-circle eduImage exalt" width="100%"/>

        </div>


        <div class="infoContainer">
            <h3>Qwilt - Transparent Caching and Video Delivery Platform </h3>

            <h6><p><strong>#freelancing #front-end</strong></p></h6>

            <h4><p style="    text-align: justify;"><strong>Qwilt</strong> - is a company that solves the online problem
                    for network operators with a transparent caching solution that increases network capacity and
                    improves subscriber quality of experience.</p></h4>
            <br>
            <p style="    text-align: justify;">I worked on building the client web side application for Qwilt users,
                the
                application retrieves huge statistics data and displays it as readable charts and tables. We used
                <em>JavaScript, HTML, CSS, JQuery, AJAX, high-charts and jGrid</em>.</p>


        </div>

    </div>
    <br>
    <hr style="    max-width: 50%;">
    <br>
    <div class="mainRow">
        <div class="imageContainer">
            <?php
            $logoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/shabbik_icon.png');
            ?>
            <img src="<?= $logoURL ?>" class=" eduImage" width="100%"/>

        </div>


        <div class="infoContainer">
            <h3>Shabbik Game</h3>

            <h6><p><strong>#puzzle #android #multiplayer</strong></p></h6>

            <h4><p style="    text-align: justify;"><strong>Shabbik </strong> - is an entertainment, educational Arabic
                    Android game, the game allows users to challenge each other by finding as much as possible of the
                    words inside a grid of letters. The game won the Mobily Developers Award 2014 as one of the best
                    five apps.</p></h4>
            <br>
            <p style="    text-align: justify;">I worked on this game with two other friends on our free time, We used
                native Android (java) language, integrated with mySQL database and REST-full web services.</p>


        </div>

    </div>

    <br>
    <hr style="    max-width: 50%;">
    <br>
    <div class="mainRow">
        <div class="imageContainer">
            <?php
            $logoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/mendeleev_icon.png');
            ?>
            <img src="<?= $logoURL ?>" class=" eduImage" width="100%"/>

        </div>


        <div class="infoContainer">
            <h3>Mendeleev Game</h3>

            <h6><p><strong>#educational #android </strong></p></h6>

            <h4><p style="    text-align: justify;"><strong>Mendeleev </strong> - is a casual educational 2D Android
                    game. The game aims to help high school students in learning some fundamentals basics of the
                    chemistry subject.</p></h4>
            <br>
            <p style="    text-align: justify;">I developed it in three weeks (working three hours per day) to join a
                local competition for building educational video games.<br>
                This little lovely game was designed, developed and published by me alone. Starting from thinking of an
                educational game idea, to skeching some drawings, to reading some chemistry documents, to designing the
                characters and images in photoshop, to development and beyond that.<br>
                I build it with Native Android, using java and android studio.
            </p>


        </div>

    </div>

    <br>
    <hr style="    max-width: 50%;">
    <br>
    <div class="mainRow">
        <div class="imageContainer">
            <?php
            $logoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/thesis_slide.png');
            ?>
            <img src="<?= $logoURL ?>" class=" eduImage exalt" width="100%"/>

        </div>


        <div class="infoContainer">
            <h3>An Experimental Study On Multiplayer Mobile Games For In-Game Voice Communication Feature</h3>

            <h6><p><strong>#master_thesis #voice_communication #usability #WebRTC </strong></p></h6>


            <br>
            <p style="    text-align: justify;">In my Master thesis project, I implemented a multiplayer mobile game
                that contains a voice communication feature, then I used it to explore the usability of the voice
                communication feature in multiplayer mobile games.<br>
                The purpose of exploring the usability of the voice communication feature was to find out:
            <ul>
                <li>The importance of voice communication feature.</li>
                <li>The level of acceptance by different gamers for this feature.</li>
                <li>The possible usability issues that might encounter players when using the voice communication
                    feature.
                </li>
                <li>The best practices and guidelines for implementing a usable voice communication feature.
                </li>
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
            $logoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/slide.png');
            ?>
            <img src="<?= $logoURL ?>" class=" eduImage exalt" width="100%"/>

        </div>


        <div class="infoContainer">
            <h3>SEND Implementation for Android Platform</h3>

            <h6><p><strong>#graduation_project #android_kernel #IPv6 #security</strong></p></h6>
            <h6><p><strong></strong></p></h6>

            <br>
            <p style="    text-align: justify;">I worked on implementing the IPv6 Secure Neighbor Discovery (SEND)
                mechanism on Android platform in my bachelors graduation project.<br> We build an Android Application
                that changes some of the kernel settings to allow capturing IPv6 packets to check and modify them to
                accomplish the security features descried in SEND.
            </p>


        </div>

    </div>
    <br>
    <br>
</div>
