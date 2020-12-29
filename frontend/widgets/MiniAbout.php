<?php
/**
 * Created by PhpStorm.
 * User: Ayham
 * Date: 12/26/2020
 * Time: 6:13 PM
 */

namespace frontend\widgets;


use common\models\UserProfile;
use frontend\assets\MainAboutAsset;
use Yii;

class MiniAbout extends \yii\bootstrap\Widget
{


    public $name;
    public $image;
    public $bio;

    /**
     * inheritdoc
     */
    public function init()
    {
        $bundle =MainAboutAsset::register($this->getView());
        // get data and set it
        $userProfile =UserProfile::find()->one();
//        For specific user , use the next line
//        $userProfile =UserProfile::find()->where(['user_id'=>2])->one();
        $this->name   = $userProfile->getFullName();
        //TODO: Ayham. add bio to profile table so user can set this line from there
        $this->bio = "A non-social, heavy smoker Computer Engineer";
        // Because this site is made for one person, So we use the image of the first and only user

        $this->image = $userProfile->getAvatar(Yii::$app->getAssetManager()->getAssetUrl($bundle, 'img/anonymous.jpg'));
    }

    /**
     * inheritdoc
     */
    public function run()
    {


        return $this->render('mini_about', [
            'name'             => $this->name,
            'bio'              =>$this->bio,
            'image'             =>$this->image
        ]);

    }


}