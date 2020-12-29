<?php
/**
 * Created by PhpStorm.
 * User: Ayham
 * Date: 12/26/2020
 * Time: 5:17 PM
 */

namespace frontend\widgets;


use frontend\assets\MainAppCarouselAsset;

use Yii;

class MainAppCarousel extends \yii\bootstrap\Widget
{
    /*
   * Note : in the Ajax items example, you can see how to make the items not same size but based on image size.
   * other proporities are there
   * link: http://www.starplugins.com/killercarousel/examples/ajax-items
   *
   */
    /**
     * @var array items
     */
    public $items;


    private $listDescrLimit;
    private $allowWishList;
    private $allowCompare;
    private $showPricesTo;
//Product image width and weight
    private $productWidth;
    private $productHeight;

    private $isFixedSized = false;
    private $isShakeOnHover = false;

    /**
     * inheritdoc
     */
    public function init()
    {
        MainAppCarouselAsset::register($this->getView());
        $this->isFixedSized = env("IS_LATEST_PROD_CAROUSEL_FIXED",false);
        $this->isShakeOnHover = env("IS_SHAKE",false);
        $showNavigation = env("IS_SHOW_NANIGATION",false);
        $autoPlay = env("AUTO_PLAY_VALUE",0);
        $renderer3d = env("RENDER_3D_MODE","render3dFlow");
        $renderer2d = env("RENDER_2D_MODE","render2dFlow");
        $spacing3d = env("SPACING3D",120);
        $spacing2d = env("SPACING2D",120);
        $autoScall = 'autoScale: 75,';

        if($this->isFixedSized){
            $autoScall = '';
        }
//        $script = ' jQuery_1_9_1(function() {
//
//                jQuery_1_9_1(\'.kc-wrap\').KillerCarousel({
//                    // Default natural width of carousel.
//                    width: 800,
//                    // Item spacing in 3d (has CSS3 3d) mode.
//                    spacing3d: 120,
//                    // Item spacing in 2d (no CSS3 3d) mode.
//                    spacing2d: 120,
//                    showShadow: true,
//                    showReflection: false, // no need for reflection because we are not using the image as full space
//                    // Looping mode.
//                    infiniteLoop: true,
//                    // Scale at 75% of parent element.
//                    autoScale: 75
//                });
//           });
//          ';
        // perspectiveOrigin is great to change look and feel
        // example : perspectiveOrigin:'50% 100px',
        // default : perspectiveOrigin:'50% 0px',
        // play only with vertical value (the second one)

        //autoChangeDirection  for auto movements 0 to stop 1 go right, -1 go left
        //        autoChangeDelay : 4000   delay in ms
        $script = ' jQuery_1_9_1(function() {

                jQuery_1_9_1(\'.kc-wrap\').KillerCarousel({
                    // Default natural width of carousel.
                    width: 800,
                    // Item spacing in 3d (has CSS3 3d) mode.
                    spacing3d: '.$spacing3d.',// 120,
                    // Item spacing in 2d (no CSS3 3d) mode. 
                    spacing2d: '.$spacing2d.',//120,
                    showShadow: true,
                    showReflection: false, // no need for reflection because we are not using the image as full space
                    // Looping mode.
                    infiniteLoop: true,
                    autoChangeDirection: '.$autoPlay.',
                    perspectiveOrigin:\'50% 0px\',
                    navigationVerticalPos:\'bottom:5px\',
                    navigationHorizontalPos:\'right:15px\',
                    showNavigation:'.($showNavigation? 'true':'false').',
                    '.$autoScall.'
                    renderer3d: "'.$renderer3d.'",
                    renderer2d: "'.$renderer2d.',"
                });
           });
          ';

        $this->getView()->registerJs($script);

        $style = '  /* CSS for images inside item wrapper */
            .kc-item img {
               /* position:absolute;*/
                pointer-events: none;   /* Make images non-selectable. */
                /*width:100%;*/             /* Make images expand to wrapper size (used in 2d modes). */
               
            }';
        $this->getView()->registerCss($style);

//        $this->listDescrLimit     = UsniAdaptor::app()->storeManager->getSettingValue('list_description_limit');
//        $this->allowWishList      = UsniAdaptor::app()->storeManager->getSettingValue('allow_wishlist');
//        $this->allowCompare       = UsniAdaptor::app()->storeManager->getSettingValue('allow_compare_products');
//        $this->showPricesTo       = UsniAdaptor::app()->storeManager->getSettingValue('show_prices_to');
//        $this->productWidth       = UsniAdaptor::app()->storeManager->getImageSetting('product_list_image_width', 150);
//        $this->productHeight      = UsniAdaptor::app()->storeManager->getImageSetting('product_list_image_height', 150);


        if ($this->items === null) {
            // initialize items
        }


    }

    /**
     * inheritdoc
     */
    public function run()
    {
        // Put title and link
//        $html ='<a href="/site/default/latest-products" ><h3 class="mainLabel">' . Yii::t('products', 'Latest Products') .'</h3></a>';
        $html ='';
        $wrapClass = "kc-wrap";
        if( $this->isFixedSized){
            $wrapClass = "kc-wrap kc-fixed";
        }
        $html .='<div class = "'.$wrapClass.'">';

        $itemClass = "kc-item";
        if($this->isShakeOnHover){
            $itemClass = "kc-item kc-shake";
        }

        // Create Cards Content

        // Personal info
        $html .= '<div class="'.$itemClass.'">';
            $html .= $this->render('personal_info_card',[
                'containerOptions' => ['class' => 'product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12']
            ]);
        $html .= '</div>';



        // education
        $html .= '<div class="'.$itemClass.'">';
        $html .= $this->render('education_card',[
            'containerOptions' => ['class' => 'product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12']
        ]);
        $html .= '</div>';

        // Career /Working
        $html .= '<div class="'.$itemClass.'">';
        $html .= $this->render('working_card',[
            'containerOptions' => ['class' => 'product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12']
        ]);
        $html .= '</div>';

        // Projects
        $html .= '<div class="'.$itemClass.'">';
        $html .= $this->render('projects_card',[
            'containerOptions' => ['class' => 'product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12']
        ]);
        $html .= '</div>';

        // Experience
        $html .= '<div class="'.$itemClass.'">';
        $html .= $this->render('skills_card',[
            'containerOptions' => ['class' => 'product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12']
        ]);
        $html .= '</div>';

        // More
        $html .= '<div class="'.$itemClass.'">';
        $html .= $this->render('more_card',[
            'containerOptions' => ['class' => 'product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12']
        ]);
        $html .= '</div>';

        // Social Contant - last one
        $html .= '<div class="'.$itemClass.'">';
        $html .= $this->render('social_card',[
            'containerOptions' => ['class' => 'product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12']
        ]);
        $html .= '</div>';

//        foreach ($this->items as $product){
//            $html .= '<div class="'.$itemClass.'">';
//            $html .= '<div>Ayham Content</div>';
////            $html .= $this->render('@products/views/front/_productitem', [
////                'model' => $product,
////                'listDescrLimit' => $this->listDescrLimit,
////                'productWidth' => $this->productWidth,
////                'productHeight'=> $this->productHeight,
////                'allowWishList' => $this->allowWishList,
////                'allowCompare' => $this->allowCompare,
////                'showPricesTo' => $this->showPricesTo,
////                'containerOptions' => ['class' => 'product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12']
////            ]);
////            $html .= $image;
//            $html .= '</div>';
//        }

        $html.='</div>';
        return $html;
    }



}