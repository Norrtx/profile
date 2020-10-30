<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\Profile;
use common\models\Skill;
use common\models\User;
use common\models\Education;
use common\models\Themes;
use common\models\Jobhistory;
use common\models\Charttemplate;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
Yii ::$app->db->open();
$id = Yii::$app->request->get('id');
$profile=profile::find()->where(['user_id' => $id])->one();
$skillModel=Skill::find()->where(['user_id' => $id])->all();
$educationModel=Education::find()->where(['user_id' => $id])->all();
$themesModel=Themes::find()->where(['user_id' => $id])->one();
$jobhistoryModel=Jobhistory::find()->where(['user_id' => $id])->all();
$charttemplateModel=Charttemplate::find()->where(['user_id' => $id])->one();
$path = Url::to(["/uploads"]) ."/". str_pad($id, 5, '0', STR_PAD_LEFT) . "/";
if($id != null) {
 ?>
<div class="site-index">    
<!doctype html>
<html lang="en">
    <head>
        <title>Desmond Resume Template</title>
        <meta name="description" content="">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- Google Font: Lato -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="c-preloader  js-preloader">
            <div class="c-preloader__spinner  t-preloader__spinner"></div>
        </div>
        <div class="c-main-container  js-main-container">
            <!-- ################################ -->
            <!-- ############ HEADER ############ -->
            <!-- ################################ -->            
            <section class="o-section o-section--header  t-section  t-section--header">
                <div class="c-header">
                    <div class="o-section__header-bg  t-section__header"></div>
                    <div class="o-section__content-bg  t-section__content"></div>
                    <div class="o-container">
                        <div class="o-section__container">
                            <header class="o-section__header  c-header__header  t-section__header">
                                <div class="c-header__inner-header">
                                    <div class="c-header__avatar">
                                        <div class="a-header  c-avatar">
                                            <img class="circle" src="<?=$path.$profile->pro_img?>" alt="" align="center">
                                        </div><!-- /c-avatar -->
                                    </div><!-- /c-header-avatar -->
                                </div><!-- /c-header__inner-header -->
                            </header><!-- /o-section__header -->
                            <div class="o-section__content  c-header__content  t-section__content">
                                <div class="c-header__inner-content">
                                    <div class="c-header__top">
                                        <div class="c-header__brand">
                                            <div class="c-brand">
                                                <h1 class="c-brand__title  t-title">
                                                    <span class="c-brand__sizer">
                                                        <span class="a-header  c-brand__first-word  t-title__first-word">
                                                            <?= $profile->nameEN?>
                                                        </span>
                                                        <span class="a-header  c-brand__second-word  t-title__second-word">
                                                            <?= $profile->nameTH?>
                                                        </span>
                                                    </span>
                                                </h1>
                                                <h2 class="a-header  c-brand__sub-title  t-sub-title">
                                                    <span class="c-brand__sizer">
                                                        Web Developer &amp; Front-end Expert
                                                    </span>
                                                </h2>
                                            </div><!-- /c-brand -->
                                        </div><!-- /c-header__brand -->
                                        <ul class="c-header__social-buttons  c-social-buttons">                                           
                                            <li class="a-header">
                                                <a href="https://www.facebook.com/RuvenThemes/" target="_blank" class="c-social-button  t-social-button">
                                                    <i class="fab  fa-lg  fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="a-header">
                                                <a href="https://dribbble.com/" target="_blank" class="c-social-button  t-social-button">
                                                    <i class="fab  fa-lg  fa-dribbble"></i>
                                                </a>
                                            </li>
                                            <li class="a-header">
                                                <a href="https://twitter.com/_Ruven" target="_blank" class="c-social-button  t-social-button">
                                                    <i class="fab  fa-lg  fa-twitter"></i>
                                                </a>
                                            </li>
                                        </ul><!-- /c-header__social-buttons -->
                                    </div><!-- /c-header__top -->
                                    <div class="c-header__contact">
                                        <hr class="a-header  c-header__contact-divider" />
                                        <div class="o-grid">
                                            <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                                <div class="a-header  o-content">
                                                    <div class="o-content__body">
                                                        <h4>Location</h4>
                                                        <address>
                                                            Portland, OR
                                                        </address>
                                                    </div>
                                                </div><!-- /o-content -->
                                            </div><!-- /o-grid__col -->
                                            <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                                <div class="a-header  o-content">
                                                    <div class="o-content__body">
                                                        <h4>Phone</h4>
                                                        <p>
                                                            534.456.886
                                                        </p>
                                                    </div>
                                                </div><!-- /o-content -->
                                            </div><!-- /o-grid__col -->
                                            <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                                <div class="a-header  o-content">
                                                    <div class="o-content__body">
                                                        <a href="#" target="_blank" class="t-link-container">
                                                            <h4>Web</h4>
                                                            <p>
                                                                <span class="t-link-container__item--blended">
                                                                    ruventhemes.com
                                                                </span>
                                                            </p>
                                                        </a><!-- /o-link-container -->
                                                    </div>
                                                </div><!-- /o-content -->
                                            </div><!-- /o-grid__col -->
                                            <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                                <div class="a-header  o-content">
                                                    <div class="o-content__body">
                                                        <a href="#" target="_blank" class="t-link-container">
                                                            <h4>Email</h4>
                                                            <p>
                                                                <span class="t-link-container__item--blended">
                                                                    hello@example.com
                                                                </span>
                                                            </p>
                                                        </a><!-- /o-link-container -->
                                                    </div>
                                                </div><!-- /o-content -->
                                            </div><!-- /o-grid__col -->
                                        </div><!-- /o-grid -->
                                    </div><!-- /c-header__contact -->
                                </div><!-- /c-header__inner-content -->
                            </div><!-- /o-section__content -->
                        </div><!-- /o-section__container -->
                    </div><!-- /o-container -->
                </div><!-- /c-header -->
            </section><!-- /o-section -->
            <!-- ################################ -->
            <!-- ########### PROFILES ########### -->
            <!-- ################################ -->               
          <section class="o-section  t-section  ">
                <div class="o-section__header-bg  t-section__header"></div>
                <div class="o-section__content-bg  t-section__content"></div>
                <div class="o-container">
                    <div class="o-section__container">
                        <header class="o-section__header  t-section__header">
                            <div class="o-content">
                                <h2 class="o-section__heading">
                                PROFILES
                                </h2>                            
                            </div>
                        </header><!-- /o-section__header -->
                        <div class="o-section__content  t-section__content  ">                          
                            <div class="o-grid">
                                <div class="o-grid__col-md-4  o-grid__col-sm-6">
                                    <div class="o-content">
                                        <hr class="c-deco-line  t-primary-color-line" />
                                        <div class="o-content__body">
                                            <h3>Unicorn Developer Award 2016</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, justo eget porttitor mauris sit amet felis. Neque id cursus faucibus.
                                            </p>
                                        </div>
                                    </div><!-- /o-content -->
                                </div><!-- /o-grid__col -->
                                <div class="o-grid__col-md-4  o-grid__col-sm-6">
                                    <div class="o-content">
                                        <hr class="c-deco-line  t-primary-color-line" />
                                        <div class="o-content__body">
                                            <h3>Website of the Year Award 2015</h3>
                                            <p>
                                                Praesent dapibus dolor sit amet, justo eget porttitor mauris sit amet. Neque id cursus faucibus.
                                            </p>
                                        </div>
                                    </div><!-- /o-content -->
                                </div><!-- /o-grid__col -->
                                <div class="o-grid__col-md-4  o-grid__col-sm-6">
                                    <div class="o-content">
                                        <hr class="c-deco-line  t-primary-color-line" />
                                        <div class="o-content__body">
                                            <h3>1st Place at CSShacker Conference</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, justo eget porttitor mauris sit amet felis. Neque id cursus faucibus.
                                            </p>
                                        </div>
                                    </div><!-- /o-content -->
                                </div><!-- /o-grid__col -->
                            </div><!-- /o-grid -->
                        </div><!-- /o-section__content -->
                    </div><!-- /o-section__container -->
                </div><!-- /o-container -->
            </section><!-- /o-section -->
            <!-- ################################ -->
            <!-- ############ INTRO ############# -->
            <!-- ################################ -->           
            <section class="o-section  t-section  ">
                <div class="o-section__header-bg  t-section__header"></div>
                <div class="o-section__content-bg  t-section__content"></div>
                <div class="o-container">
                    <div class="o-section__container">
                        <header class="o-section__header  t-section__header">
                            <div class="o-content">
                                <h2 class="o-section__heading">
                                    Intro
                                </h2>                               
                            </div>
                        </header><!-- /o-section__header -->
                        <div class="o-section__content  t-section__content  ">                            
                            <div class="o-content">
                                <div class="c-intro">
                                    <div class="o-content__body">
                                        <p>
                                        <?= $profile->description?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /o-section__content -->
                    </div><!-- /o-section__container -->
                </div><!-- /o-container -->
            </section><!-- /o-section -->
            <!-- ################################ -->
            <!-- ############ SKILLS ############ -->
            <!-- ################################ -->            
            <section class="o-section  t-section  ">
                <div class="o-section__header-bg  t-section__header"></div>
                <div class="o-section__content-bg  t-section__content"></div>
                <div class="o-container">
                    <div class="o-section__container">
                       <header class="o-section__header  t-section__header">
                            <div class="o-content">
                                <h2 class="o-section__heading">
                                    Skills
                                </h2>                              
                            </div>
                        </header><!-- /o-section__header -->
                        <div class="o-section__content  t-section__content  ">                           
                            <div class="o-grid">
                                <?php foreach ($skillModel as $key => $skill) { ?>
                                     <div class="o-grid__col-sm-6">
                                        <div class="o-content">
                                            <div class="o-media  o-media--block">
                                                <div class="o-media__figure">
                                           
                                                <div class="c-number  t-primary-color">
                                                <?= $skill->score ?><small>%</small>
                                                </div>
                                            </div>
                                                    <div class="o-media__body">
                                                <h3><?= $skill->name ?></h3>
                                                    </div>
                                        </div>
                                            <div class="c-progress-bar  o-content__body  t-border-color-bg  u-mt-text">
                                                 <div class="a-progress-bar  c-progress-bar__filler  t-primary-bg in-view" data-percent="<?= $skill->score ?>" style="width: <?= $skill->score ?>%;"></div>
                                            </div>
                                        </div>
                                     </div><!-- /o-grid__col -->
                                <?php } ?>          
                            </div><!-- /o-grid -->
                        </div><!-- /o-section__content -->
                    </div><!-- /o-section__container -->
                </div><!-- /o-container -->
            </section><!-- /o-section -->
            <!-- ################################ -->
            <!-- ########## EXPERIENCE ########## -->
            <!-- ################################ -->           
            <section class="o-section  t-section  ">
                <div class="o-section__header-bg  t-section__header"></div>
                <div class="o-section__content-bg  t-section__content"></div>
                <div class="o-container">
                    <div class="o-section__container">
                        <header class="o-section__header  t-section__header">
                            <div class="o-content">
                                <h2 class="o-section__heading">
                                    Experience
                                </h2>
                            </div>
                        </header><!-- /o-section__header -->
                        <div class="o-section__content  t-section__content  u-pb-0">                          
                            <div class="a-experience-timeline  c-timeline  t-border-color">
                            <?php foreach ($jobhistoryModel as $key => $jobhistory) { ?>
                                <div class="c-timeline__item">
                                    <div class="c-timeline__point  t-timeline__point  t-primary-bg"></div>
                                    <div class="o-content">
                                        <div class="o-grid">
                                            <div class="o-grid__col-md-5">                                           
                                                    <div class="c-work__timeframe">
                                                        <?= $jobhistory->date_from ?> &ndash; <?= $jobhistory->date_to ?>
                                                    </div>
                                                    <h3 class="c-work__heading">
                                                        <?= $jobhistory->company_name?>
                                                    </h3>
                                                     <h4 class="c-work__title">
                                                        <?= $jobhistory->position?>
                                                    </h4>                                                                                              
                                            </div>
                                            <div class="o-grid__col-md-7">
                                                <p>
                                                
                                                </p>
                                            </div>
                                        </div><!-- /o-grid -->
                                    </div><!-- /o-content -->
                                </div><!-- /c-timeline__item -->
                             <?php } ?>                                         
                            </div><!-- /c-timeline -->
                        </div><!-- /o-section__content -->
                    </div><!-- /o-section__container -->
                </div><!-- /o-container -->
            </section><!-- /o-section -->
            <!-- ################################ -->
            <!-- ########### EDUCATION ########## -->
            <!-- ################################ -->          
            <section class="o-section  t-section  ">
                <div class="o-section__header-bg  t-section__header"></div>
                <div class="o-section__content-bg  t-section__content"></div>
                <div class="o-container">
                    <div class="o-section__container">
                        <header class="o-section__header  t-section__header">
                            <div class="o-content">
                                <h2 class="o-section__heading">
                                    Education
                                </h2>                              
                            </div>
                        </header><!-- /o-section__header -->
                        <div class="o-section__content  t-section__content  u-pt-0">                         
                            <div class="o-content">
                                <div class="a-education-timeline  c-timeline  t-border-color  o-section__full-top-space">
                                    <div class="c-timeline__end  t-border-color"></div>
                                 <?php foreach ($educationModel as $key => $education) { ?>
                                    <div class="c-timeline__item">
                                        <div class="c-timeline__point  t-timeline__point  t-primary-bg"></div>
                                        <div class="o-content">
                                            <div class="o-grid">
                                                <div class="o-grid__col-md-5">
                                                    <div class="c-work__timeframe">
                                                        <?= $education->date_from ?> &ndash;  <?= $education->date_to ?>
                                                    </div>
                                                    <h3 class="c-work__heading">
                                                         <?= $education->school_name ?>
                                                    </h3>
                                                    <h4 class="c-work__title">
                                                         <?= $education->faculty ?>
                                                    </h4>
                                                    <div class="c-work__location">
                                                        GPA : <?= $education->gpa ?>
                                                    </div>
                                                </div>
                                                <div class="o-grid__col-md-7">
                                                    <p>
                                                      
                                                    </p>
                                                </div>
                                            </div><!-- /o-grid -->
                                        </div><!-- /o-content -->
                                    </div><!-- /c-timeline__item -->
                                    <?php } ?>                                   
                                </div><!-- /c-timeline -->
                            </div><!-- /o-content -->
                        </div><!-- /o-section__content -->
                    </div><!-- /o-section__container -->
                </div><!-- /o-container -->
            </section><!-- /o-section -->
            <!-- ################################ -->
            <!-- ############ HEADER ############ -->
            <!-- ################################ -->           
            <section class="o-section  t-section  ">
                <div class="o-section__header-bg  t-section__header"></div>
                <div class="o-section__content-bg  t-section__content"></div>
                <div class="o-container">
                    <div class="o-section__container">
                        <header class="o-section__header  t-section__header">
                            <div class="o-content">
                                <h2 class="o-section__heading">
                                    Awards
                                </h2>
                                <div class="o-content__body  o-section__description">
                                    Happy times!
                                </div>
                            </div>
                        </header><!-- /o-section__header -->
                        <div class="o-section__content  t-section__content  ">                          
                            <div class="o-grid">
                                <div class="o-grid__col-md-4  o-grid__col-sm-6">
                                    <div class="o-content">
                                        <hr class="c-deco-line  t-primary-color-line" />
                                        <div class="o-content__body">
                                            <h3>Unicorn Developer Award 2016</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, justo eget porttitor mauris sit amet felis. Neque id cursus faucibus.
                                            </p>
                                        </div>
                                    </div><!-- /o-content -->
                                </div><!-- /o-grid__col -->
                                <div class="o-grid__col-md-4  o-grid__col-sm-6">
                                    <div class="o-content">
                                        <hr class="c-deco-line  t-primary-color-line" />
                                        <div class="o-content__body">
                                            <h3>Website of the Year Award 2015</h3>
                                            <p>
                                                Praesent dapibus dolor sit amet, justo eget porttitor mauris sit amet. Neque id cursus faucibus.
                                            </p>
                                        </div>
                                    </div><!-- /o-content -->
                                </div><!-- /o-grid__col -->
                                <div class="o-grid__col-md-4  o-grid__col-sm-6">
                                    <div class="o-content">
                                        <hr class="c-deco-line  t-primary-color-line" />
                                        <div class="o-content__body">
                                            <h3>1st Place at CSShacker Conference</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, justo eget porttitor mauris sit amet felis. Neque id cursus faucibus.
                                            </p>
                                        </div>
                                    </div><!-- /o-content -->
                                </div><!-- /o-grid__col -->
                            </div><!-- /o-grid -->
                        </div><!-- /o-section__content -->
                    </div><!-- /o-section__container -->
                </div><!-- /o-container -->
            </section><!-- /o-section -->         
            <!-- ################################ -->
            <!-- ############ FOOTER ############ -->
            <!-- ################################ -->          
            <section class="o-section  t-section  o-section--footer">
                <div class="o-section__header-bg  t-section__header"></div>
                <div class="o-section__content-bg  t-section__content"></div>
                <div class="o-container">
                    <div class="o-section__container">
                        <header class="o-section__header  t-section__header">
                            <div class="o-content">
                                <h2 class="o-section__heading">
                                    Contact
                                </h2>
                            </div>
                        </header><!-- /o-section__header -->
                        <div class="o-section__content  t-section__content  ">                         
                                <div class="c-footer__contact">
                                    <div class="o-grid">

                                    <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                         <div class="o-content">
                                            <div class="o-content__body">
                                                <a href="#" target="_blank" class="t-link-container">
                                                    <h4>Email</h4>
                                                    <p>
                                                        <span class="t-link-container__item--blended">
                                                            hello@example.com
                                                        </span>
                                                    </p>
                                                </a><!-- /o-link-container -->
                                            </div>
                                        </div><!-- /o-content -->
                                    </div><!-- /o-grid__col -->
                                    <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                        <div class="o-content">
                                            <div class="o-content__body">
                                                <h4>Phone</h4>
                                                <p>
                                                    534.456.886
                                                </p>
                                            </div>
                                        </div><!-- /o-content -->
                                    </div><!-- /o-grid__col -->
                                    <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                        <div class="o-content">
                                            <div class="o-content__body">
                                                <a href="#" target="_blank" class="t-link-container">
                                                    <h4>Web</h4>
                                                    <p>
                                                        <span class="t-link-container__item--blended">
                                                            ruventhemes.com
                                                        </span>
                                                    </p>
                                                </a><!-- /o-link-container -->
                                            </div>
                                        </div><!-- /o-content -->
                                    </div><!-- /o-grid__col -->
                                    <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                       <div class="o-content">
                                            <div class="o-content__body">
                                                <h4>Location</h4>
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d1921.1034369964689!2d
                                                    <?= $profile->longitude ?>!3d<?= $profile->latitude ?>!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d
                                                    <?= $profile->latitude ?>!2d <?= $profile->longitude ?>!5e0!3m2!1sen!2sth!4v1576553184899!5m2!1sen!2sth"
                                                    width="" height="" frameborder="0" style="border:0;" allowfullscreen="">
                                                </iframe>                                          
                                            </div>
                                       </div><!-- /o-grid__col -->
                                    </div><!-- /o-grid -->
                               </div><!-- /o-section__content -->
                        </div><!-- /o-section__container -->
                    </div><!-- /o-container -->
            </section><!-- /o-section -->
        </div><!-- /c-main-container -->
    </body>
</html>
</div>
<?php } ?>