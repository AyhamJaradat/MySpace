<?php
/**
 * Created by PhpStorm.
 * User: Ayham
 * Date: 12/28/2020
 * Time: 4:16 PM
 */

\frontend\assets\LightBoxAsset::register($this);
$this->title = Yii::t('frontend', 'Projects');
$this->params['breadcrumbs'][] = $this->title;

$viewIcon = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/view_icon.png');
$demoIcon = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/demo-icon.png');
$galleryIcon = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/photos-pictures-icon-9.png');
$githubIcon = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/github_icon.png');
$youtubeIcon = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/youtube_icon.png');
$playstoreIcon = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/play_store_icon.png');
$iosstoreIcon = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/store_icon.png');

// Cob Images
$cobImage1 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/cob/login.png');
$cobImage2 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/cob/business.png');
$cobImage3 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/cob/old_new_2.png');
$cobImage4 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/cob/cob_splash.png');
$cobImage5 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/cob/4.png');
$cobImage6 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/cob/create event2.png');
$cobImage7 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/cob/event details (2).png');
$cobImage8 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/cob/chats.png');
$cobImage9 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/cob/chat_edit_2.png');
$cobImage10 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/cob/attach files.png');

// Qwilt Images
$qwiltImage1 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/qwilt/chart with x markers events.png');
$qwiltImage2 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/qwilt/current implementation.png');
$qwiltImage3 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/qwilt/group tooltip.png');
$qwiltImage4 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/qwilt/hart with x markers.png');
$qwiltImage5 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/qwilt/image (3) (2).png');
$qwiltImage6 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/qwilt/right panel events.png');
$qwiltImage7 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/qwilt/two cps.png');

// Shabbik Images
$shabbikImage1 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/shabbik/1.png');
$shabbikImage2 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/shabbik/2.png');
$shabbikImage3 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/shabbik/3.png');
$shabbikImage4 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/shabbik/4.png');
$shabbikImage5 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/shabbik/5.png');
$shabbikImage6 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/shabbik/6.png');

// Mandeleev Images
$mandeleevImage1 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/mandeleev/icon4.png');
$mandeleevImage2 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/mandeleev/feature_image1.png');
$mandeleevImage3 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/mandeleev/screenshot1.jpeg');
$mandeleevImage4 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/mandeleev/screenshot2.jpeg');
$mandeleevImage5 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/mandeleev/screenshot3.jpeg');
$mandeleevImage6 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/mandeleev/screenshot4.jpeg');
$mandeleevImage7 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/mandeleev/screenshot5.jpeg');
$mandeleevImage8 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/mandeleev/screenshot6.jpeg');
$mandeleevImage9 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/mandeleev/screenshot7.jpeg');
$mandeleevImage10 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/mandeleev/screenshot8.jpeg');

// Dallas Images
$dallasImage1 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/dallas/1.png');
$dallasImage2 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/dallas/2.png');
$dallasImage3 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/dallas/3.png');
$dallasImage4 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/dallas/4.png');
$dallasImage5 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/dallas/5.png');
$dallasImage6 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/dallas/6.png');
$dallasImage7 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/dallas/7.png');
$dallasImage8 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/dallas/8.png');
$dallasImage9 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/dallas/9.png');
$dallasImage10 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/dallas/10.png');
$dallasImage11 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/dallas/11.png');
$dallasImage12 =Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/dallas/12.png');

?>
<div class="education-container">
    <h2 class="title">
        <div class="titleContainer"><strong><i class="fa fa-tasks"></i> <?php echo "Projects I worked On" ?></strong>
        </div>
    </h2>
    <div class="miniNote"> There is more on <a target="_blank" href="https://github.com/AyhamJaradat">my github</a>
    </div>
    <hr style="    max-width: 50%; margin-top: 10px;">
    <br>
    <div class="mainRow">
        <div class="imageContainer">
            <?php
            $logoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/cob_login.svg');
            ?>
            <a target="_blank" href="https://connectedbusinesses.app/frontend/">
                <img src="<?= $logoURL ?>" class="img-circle eduImage exalt" width="100%"/>
            </a>

        </div>

        <div class="infoContainer">
            <a target="_blank" href="https://connectedbusinesses.app/frontend/"
               style="text-decoration: none;color: unset;">
                <h3>CoB - Connected Businesses </h3>
            </a>

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
            <div class="smallIconsContainer">

                <a target="_blank" href="<?=$cobImage1?>" data-lightbox="cobImages" data-title="Cob- Login Page">
                    <img src="<?= $galleryIcon ?>" class="bounce smallIcon" width="100%"/>
                    <p class="smallIconCaption">Gallery</p>
                </a>
<!--                gallery images-->
                <a style="display:none" href="<?=$cobImage2?>" data-lightbox="cobImages" data-title="Cob- Create Business"></a>
                <a style="display:none" href="<?=$cobImage3?>" data-lightbox="cobImages" data-title="Cob- Main Page"></a>
                <a style="display:none" href="<?=$cobImage4?>" data-lightbox="cobImages" data-title="Cob- Side Menu"></a>
                <a style="display:none" href="<?=$cobImage5?>" data-lightbox="cobImages" data-title="Cob- Opportunity Details"></a>
                <a style="display:none" href="<?=$cobImage6?>" data-lightbox="cobImages" data-title="Cob- Create Event"></a>
                <a style="display:none" href="<?=$cobImage7?>" data-lightbox="cobImages" data-title="Cob- Event Details"></a>
                <a style="display:none" href="<?=$cobImage8?>" data-lightbox="cobImages" data-title="Cob- Recent Chats"></a>
                <a style="display:none" href="<?=$cobImage9?>" data-lightbox="cobImages" data-title="Cob- Chat Page"></a>
                <a style="display:none" href="<?=$cobImage10?>" data-lightbox="cobImages" data-title="Cob- Chat Page"></a>


                <a target="_blank" href="https://connectedbusinesses.app/web/#/sign-in">
                    <img src="<?= $viewIcon ?>" class="bounce bounce1 smallIcon" width="100%"/>
                    <p class="smallIconCaption">View</p>
                </a>

                <a target="_blank" href="https://www.youtube.com/watch?v=Dma7XEudVuc">
                    <img src="<?= $youtubeIcon ?>" class="bounce bounce2 smallIcon" width="100%"/>
                    <p class="smallIconCaption">Video</p>
                </a>
                <a target="_blank"
                   href="https://play.google.com/store/apps/details?id=timeToBuild.app.connectedbusinesses">
                    <img src="<?= $playstoreIcon ?>" class="bounce smallIcon" width="100%"/>
                    <p class="smallIconCaption">Play Store</p>

                </a>
                <a target="_blank" href="https://apps.apple.com/il/app/connected-businesses/id1437147238">
                    <img src="<?= $iosstoreIcon ?>" class="bounce bounce1 smallIcon" width="100%"/>
                    <p class="smallIconCaption">iOS Store</p>

                </a>
            </div>


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
            <a target="_blank" href="https://qwilt.com/">
                <img src="<?= $logoURL ?>" class="img-circle eduImage exalt" width="100%"/>
            </a>

        </div>


        <div class="infoContainer">
            <a target="_blank" href="https://qwilt.com/" style="text-decoration: none;color: unset;">
                <h3>Qwilt - Transparent Caching and Video Delivery Platform </h3>
            </a>

            <h6><p><strong>#freelancing #front-end</strong></p></h6>

            <h4><p style="    text-align: justify;"><strong>Qwilt</strong> - is a company that solves the online problem
                    for network operators with a transparent caching solution that increases network capacity and
                    improves subscriber quality of experience.</p></h4>
            <br>
            <p style="    text-align: justify;">I worked on building the client web side application for Qwilt users,
                the
                application retrieves huge statistics data and displays it as readable charts and tables. We used
                <em>JavaScript, HTML, CSS, JQuery, AJAX, high-charts and jGrid</em>.</p>

            <div class="smallIconsContainer">


                <a target="_blank" href="<?=$qwiltImage1?>" data-lightbox="quiltImages" data-title="Qwilt">
                    <img src="<?= $galleryIcon ?>" class="bounce smallIcon" width="100%"/>
                    <p class="smallIconCaption">Gallery</p>
                </a>
                <!--                gallery images-->
                <a style="display:none" href="<?=$qwiltImage2?>" data-lightbox="quiltImages" data-title="Qwilt"></a>
                <a style="display:none" href="<?=$qwiltImage3?>" data-lightbox="quiltImages" data-title="Qwilt"></a>
                <a style="display:none" href="<?=$qwiltImage4?>" data-lightbox="quiltImages" data-title="Qwilt"></a>
                <a style="display:none" href="<?=$qwiltImage5?>" data-lightbox="quiltImages" data-title="Qwilt"></a>
                <a style="display:none" href="<?=$qwiltImage6?>" data-lightbox="quiltImages" data-title="Qwilt"></a>
                <a style="display:none" href="<?=$qwiltImage7?>" data-lightbox="quiltImages" data-title="Qwilt"></a>

                <a target="_blank" href="https://qwilt.com/">
                    <img src="<?= $viewIcon ?>" class="bounce bounce2 smallIcon" width="100%"/>
                    <p class="smallIconCaption">View</p>
                </a>
            </div>


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

            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.palteam.shabbik&hl=en">
                <img src="<?= $logoURL ?>" class=" eduImage" width="100%"/>
            </a>

        </div>


        <div class="infoContainer">
            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.palteam.shabbik&hl=en"
               style="text-decoration: none;color: unset;">
                <h3>Shabbik Game</h3>
            </a>
            <h6><p><strong>#puzzle #android #multiplayer</strong></p></h6>

            <h4><p style="    text-align: justify;"><strong>Shabbik </strong> - is an entertainment, educational Arabic
                    Android game, the game allows users to challenge each other by finding as much as possible of the
                    words inside a grid of letters. The game won the Mobily Developers Award 2014 as one of the best
                    five apps.</p></h4>
            <br>
            <p style="    text-align: justify;">I worked on this game with two other friends on our free time, We used
                native Android (java) language, integrated with mySQL database and REST-full web services.</p>

            <div class="smallIconsContainer">

                <a target="_blank" href="<?=$shabbikImage1?>" data-lightbox="shabbikImages" data-title="Shabbik Game">
                    <img src="<?= $galleryIcon ?>" class="bounce smallIcon" width="100%"/>
                    <p class="smallIconCaption">Gallery</p>
                </a>
                <!--                gallery images-->
                <a style="display:none" href="<?=$shabbikImage2?>" data-lightbox="shabbikImages" data-title="Shabbik Game"></a>
                <a style="display:none" href="<?=$shabbikImage3?>" data-lightbox="shabbikImages" data-title="Shabbik Game"></a>
                <a style="display:none" href="<?=$shabbikImage4?>" data-lightbox="shabbikImages" data-title="Shabbik Game"></a>
                <a style="display:none" href="<?=$shabbikImage5?>" data-lightbox="shabbikImages" data-title="Shabbik Game"></a>
                <a style="display:none" href="<?=$shabbikImage6?>" data-lightbox="shabbikImages" data-title="Shabbik Game"></a>



                <a target="_blank" href="https://github.com/AyhamJaradat/ShabbikGame">
                    <img src="<?= $githubIcon ?>" class="bounce bounce2 smallIcon" width="100%"/>
                    <p class="smallIconCaption">GitHub</p>

                </a>
                <a target="_blank" href="https://www.youtube.com/watch?v=OJyDIhBQebw">
                    <img src="<?= $youtubeIcon ?>" class="bounce smallIcon" width="100%"/>
                    <p class="smallIconCaption">Video</p>

                </a>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.palteam.shabbik&hl=en">
                    <img src="<?= $playstoreIcon ?>" class="bounce bounce1 smallIcon" width="100%"/>
                    <p class="smallIconCaption">Play Store</p>

                </a>
            </div>


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
            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.mandeleev.game.mandeleev">
                <img src="<?= $logoURL ?>" class=" eduImage" width="100%"/>
            </a>

        </div>


        <div class="infoContainer">
            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.mandeleev.game.mandeleev"
               style="text-decoration: none;color: unset;">
                <h3>Mendeleev Game</h3>
            </a>
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
            <div class="smallIconsContainer">


                <a target="_blank" href="<?=$mandeleevImage1?>" data-lightbox="MendeleevImages" data-title="Mendeleev Game">
                    <img src="<?= $galleryIcon ?>" class="bounce bounce2 smallIcon" width="100%"/>
                    <p class="smallIconCaption">Gallery</p>
                </a>
                <!--                gallery images-->
                <a style="display:none" href="<?=$mandeleevImage2?>" data-lightbox="MendeleevImages" data-title="Mendeleev Game"></a>
                <a style="display:none" href="<?=$mandeleevImage3?>" data-lightbox="MendeleevImages" data-title="Mendeleev Game"></a>
                <a style="display:none" href="<?=$mandeleevImage4?>" data-lightbox="MendeleevImages" data-title="Mendeleev Game"></a>
                <a style="display:none" href="<?=$mandeleevImage5?>" data-lightbox="MendeleevImages" data-title="Mendeleev Game"></a>
                <a style="display:none" href="<?=$mandeleevImage6?>" data-lightbox="MendeleevImages" data-title="Mendeleev Game"></a>
                <a style="display:none" href="<?=$mandeleevImage7?>" data-lightbox="MendeleevImages" data-title="Mendeleev Game"></a>
                <a style="display:none" href="<?=$mandeleevImage8?>" data-lightbox="MendeleevImages" data-title="Mendeleev Game"></a>
                <a style="display:none" href="<?=$mandeleevImage9?>" data-lightbox="MendeleevImages" data-title="Mendeleev Game"></a>
                <a style="display:none" href="<?=$mandeleevImage10?>" data-lightbox="MendeleevImages" data-title="Mendeleev Game"></a>

                <a target="_blank" href="https://github.com/AyhamJaradat/MendeleevGame">
                    <img src="<?= $githubIcon ?>" class="bounce bounce1 smallIcon" width="100%"/>
                    <p class="smallIconCaption">GitHub</p>

                </a>
                <a target="_blank" href="https://www.youtube.com/watch?v=sk9gPEhIfBw">
                    <img src="<?= $youtubeIcon ?>" class="bounce smallIcon" width="100%"/>
                    <p class="smallIconCaption">Video</p>

                </a>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.mandeleev.game.mandeleev">
                    <img src="<?= $playstoreIcon ?>" class="bounce bounce1 smallIcon" width="100%"/>
                    <p class="smallIconCaption">Play Store</p>

                </a>
            </div>


        </div>

    </div>
    <!--    eCommerce-->

    <br>
    <hr style="    max-width: 50%;">
    <br>
    <div class="mainRow">
        <div class="imageContainer">
            <?php
            $logoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/ecomm_logo.png');
            ?>
            <a target="_blank" href="http://dallashome.16mb.com/">
                <img src="<?= $logoURL ?>" class=" eduImage" width="100%"/>
            </a>

        </div>


        <div class="infoContainer">
            <a target="_blank" href="http://dallashome.16mb.com/"
               style="text-decoration: none;color: unset;">
                <h3>eCommerce Platform - Shopping Cart</h3>
            </a>
            <h6><p><strong>#online_store #PHP_Yii2 #full_stack </strong></p></h6>

            <h4><p style="    text-align: justify;">
                    This is a swift, easy and extensible <strong>eCommerce platform </strong> that can be used to
                    create, scale and run multi-vendor online stores.
                    It's build on top of the open source shopping cart software called <a target="_blank"
                                                                                          href="https://whatacart.com/"
                                                                                          style="color: unset;">
                        "WhatACart".</a>
                </p></h4>
            <br>
            <p style="    text-align: justify;">
                WhatACart is developed on top of high performance Yii2 framework, and it is provided with good set of
                features on both back end and front end which would make it ready-made solution to develop an online
                store with speed.
                <br>
                Existing Features are: Multi Store, Multi Language, Tax Management, Multi Currency, Responsive design,
                Order Management, Catalog Management, Ratings and Review, Different Payment and Shipping Options.

            </p>
            <br>
            <p style="    text-align: justify;">
                I took the open source code, did many fixes and customizations, and added some new features:
            <ul>
                <li>Fixing the mailing issue by using PhPMailer instead of swiftmailer.</li>
                <li>Update and customize the base yiichimp framework to support missing countries and some new custom
                    features.
                </li>
                <li>Allow to select different formats of address filling forms.</li>
                <li>Integrate new Payment methods such as 2Checkout .</li>
                <li>Create new themes and add new attractive UI components, such as Card Carousel Views and time-line
                    posts.
                </li>
                <li>Allow admin to select and change Show Price Options, such as showing prices to logged in users only,
                    showing prices for specific products only, and hide prices and checkout from the system completely.
                </li>
                <li>Customize SlideShow component, allow admin to easily change the images, add title, subtitle and
                    redirect buttons on each Slide show.
                </li>
                <li>Integrate Social Media login functionalities.</li>
            </ul>
            </p>


            <div class="smallIconsContainer">
                <a target="_blank" href="http://dallashome.16mb.com/">
                    <img src="<?= $demoIcon ?>" class="bounce smallIcon" width="100%"/>
                    <p class="smallIconCaption">Demo</p>
                </a>

                <a target="_blank" href="<?=$dallasImage1?>" data-lightbox="dallasImages" data-title="eCommerce">
                    <img src="<?= $galleryIcon ?>" class="bounce bounce1 smallIcon" width="100%"/>
                    <p class="smallIconCaption">Gallery</p>
                </a>
                <!--                gallery images-->
                <a style="display:none" href="<?=$dallasImage2?>" data-lightbox="dallasImages" data-title="eCommerce"></a>
                <a style="display:none" href="<?=$dallasImage3?>" data-lightbox="dallasImages" data-title="eCommerce"></a>
                <a style="display:none" href="<?=$dallasImage4?>" data-lightbox="dallasImages" data-title="eCommerce"></a>
                <a style="display:none" href="<?=$dallasImage5?>" data-lightbox="dallasImages" data-title="eCommerce"></a>
                <a style="display:none" href="<?=$dallasImage6?>" data-lightbox="dallasImages" data-title="eCommerce"></a>
                <a style="display:none" href="<?=$dallasImage7?>" data-lightbox="dallasImages" data-title="eCommerce"></a>
                <a style="display:none" href="<?=$dallasImage8?>" data-lightbox="dallasImages" data-title="eCommerce"></a>
                <a style="display:none" href="<?=$dallasImage9?>" data-lightbox="dallasImages" data-title="eCommerce"></a>
                <a style="display:none" href="<?=$dallasImage10?>" data-lightbox="dallasImages" data-title="eCommerce"></a>
                <a style="display:none" href="<?=$dallasImage11?>" data-lightbox="dallasImages" data-title="eCommerce"></a>
                <a style="display:none" href="<?=$dallasImage12?>" data-lightbox="dallasImages" data-title="eCommerce"></a>

            </div>


        </div>

    </div>

    <br>
    <hr style="    max-width: 50%;">
    <br>
    <div class="mainRow">
        <div class="imageContainer">
            <?php
            $logoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/thesis_slide.png');
            $thsisPdfURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('pdf/thesisReady.pdf');
            ?>
            <a target="_blank" href="<?= $thsisPdfURL ?>">
                <img src="<?= $logoURL ?>" class=" eduImage exalt" width="100%"/>
            </a>

        </div>


        <div class="infoContainer">
            <a target="_blank" href="<?= $thsisPdfURL ?>" style="text-decoration: none;color: unset;">
                <h3>An Experimental Study On Multiplayer Mobile Games For In-Game Voice Communication Feature</h3>
            </a>

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

            <div class="smallIconsContainer">
                <a target="_blank" href="<?=$thsisPdfURL?>">
                    <img src="<?= $viewIcon ?>" class="bounce bounce2 smallIcon" width="100%"/>
                    <p class="smallIconCaption">View</p>
                </a>

            </div>


        </div>

    </div>

    <br>
    <hr style="    max-width: 50%;">
    <br>
    <div class="mainRow">
        <div class="imageContainer">
            <?php
            $logoURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('img/slide.png');
            $gradProjPdfURL = Yii::$app->urlManagerFrontend->createAbsoluteUrl('pdf/finalReportFinalPdf.pdf');
            ?>
            <a target="_blank" href="<?= $gradProjPdfURL ?>">
                <img src="<?= $logoURL ?>" class=" eduImage exalt" width="100%"/>
            </a>

        </div>


        <div class="infoContainer">
            <a target="_blank" href="<?= $gradProjPdfURL ?>" style="text-decoration: none;color: unset;">
                <h3>SEND Implementation for Android Platform</h3>
            </a>

            <h6><p><strong>#graduation_project #android_kernel #IPv6 #security</strong></p></h6>
            <h6><p><strong></strong></p></h6>

            <br>
            <p style="    text-align: justify;">I worked on implementing the IPv6 Secure Neighbor Discovery (SEND)
                mechanism on Android platform in my bachelors graduation project.<br> We build an Android Application
                that changes some of the kernel settings to allow capturing IPv6 packets to check and modify them to
                accomplish the security features descried in SEND.
            </p>

            <div class="smallIconsContainer">
                <a target="_blank" href="<?=$gradProjPdfURL?>">
                    <img src="<?= $viewIcon ?>" class="bounce bounce1 smallIcon" width="100%"/>
                    <p class="smallIconCaption">View</p>
                </a>

            </div>


        </div>

    </div>
    <br>
    <br>
</div>
