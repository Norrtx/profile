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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Trimatrix Lab">
    <meta name="description" content="">
    <meta name="keywords" content="">
 
</head>
<body>
    <style type="text/css">
        body { background: #f5f5f5; }
    </style>
<!--==========================================
                   ABOUT
===========================================--> 
<div id="about" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12"align="center">
                   <img class="circle2" src="<?=$path.$profile->pro_img?>" alt="" >
            </div><!-- /c-avatar -->
                <h1 class="c-brand__title  t-title">
                    <span class="c-brand__sizer">
                          <span class="a-header  c-brand__first-word  tt-title__first-word">
                            Ronnaphom Natanom
                            </span>
                    <span class="a-header  c-brand__second-word  t-title__second-word">
                          รณภูมิ นาถนอม
                    </span>
                   
                </h1>
                <h2 class="a-header  c-brand__sub-title  t-sub-title">
                    <span class="c-brand__sizer">
                         Web Developer &amp; Front-end Expert
                    </span>
                </h2>
            <div class="col-md-12">
                <!-- DETAILS -->
                    <div class="container">
                         <!-- SECTION TITLE -->
                        <div class="section-title">
                             <h4 class=" tt-title__first-word text-uppercase text-center">Describe</h4>
                        </div> 
                    </div> 
                <div id="about-card" class="card">
                        <div class="card-content">
                        <!-- ABOUT PARAGRAPH -->
                        <p>
                            Hello! I’m John Doe. Senior Web Developer with over 13 years of experience
                            specializing in front end development. Experienced with all stages of the
                            development cycle for dynamic web projects.Having an in-depth knowledge
                            including advanced HTML5, CSS, CSS3, SASS, LESS, JSON, XML, Java, JavaScript,
                            JQuery, Angular JS. Strong background in management and leadership.
                        </p>
                    </div>
                </div>
             </div>
        </div>
     </div>
</div>

            <!-- ################################ -->
            <!-- ########### PROFILES ########### -->
            <!-- ################################ -->       
            <div class="col-md-12">  
                <div class="container">
                    <!-- SECTION TITLE -->
                    <div class="section-title">
                        <h4 class=" tt-title__first-word text-uppercase text-center">PROFILES</h4>
                    </div> 
                </div>            
                <section class="o-section  t-section  ">
                <div class="o-section__header-bg  tt-section__header"></div>
                <div class="o-section__content-bg  tt-section__content"></div>
                    <div class="o-container">
                        <div class="o-section__container">
                            <div class="tt-section__content  ">                           
                                <div class="o-grid">
                                    <div class="o-grid__col-md-4  o-grid__col-sm-6">
                                        <div class="o-content"><br>
                                            <div class="o-content__body"align="center">
                                                <h3>Unicorn Developer Award 2016</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, justo eget porttitor mauris sit amet felis. Neque id cursus faucibus.
                                                </p>
                                            </div>
                                        </div><!-- /o-content -->
                                    </div><!-- /o-grid__col -->

                                    <div class="o-grid__col-md-4  o-grid__col-sm-6">
                                        <div class="o-content"><br>
                                            <div class="o-content__body"align="center">
                                                <h3>Website of the Year Award 2015</h3>
                                                <p>
                                                    Praesent dapibus dolor sit amet, justo eget porttitor mauris sit amet. Neque id cursus faucibus.
                                                </p>
                                            </div>
                                        </div><!-- /o-content -->
                                    </div><!-- /o-grid__col -->

                                    <div class="o-grid__col-md-4  o-grid__col-sm-6">
                                        <div class="o-content"><br>
                                            <div class="o-content__body"align="center">
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
            </div> 
<!--==========================================
                   EDUCATION
===========================================-->
<div class="col-md-12">  
<section id="education" class="section">
<div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class=" tt-title__first-word text-uppercase text-center">Education</h4>
        </div>
        <div id="timeline-education">
            <!-- FIRST TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>P</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Preparatory Education</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Fedrick School</small>
                            </h6>
                            <h6>
                                <small>Jan 1997 - Mar 2000</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I completed my preparatory education from this prestigious institution.
                            I successful completed all the credits without any fallout and got A grade overall.
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-1">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- SECOND TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>H</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">High School</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>RedStreet College</small>
                            </h6>
                            <h6>
                                <small>Jan 2000 - Mar 2005</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I completed my high school degree from this prestigious institution.
                            I successful completed all the credits without any fallout and got A grade overall.
                        </p>
                    </div>
                </div>
            </div>
            <!-- THIRD TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>C</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Computer Science</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Down Street College</small>
                            </h6>
                            <h6>
                                <small>Jan 2006 - Mar 2008</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I completed my computer science degree from this prestigious institution.
                            I successful completed all the credits without any fallout and got A grade overall.
                        </p>

                    </div>
                </div>
            </div>
            <!-- FOURTH TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><i class="fa fa-graduation-cap"></i></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Software Engineering</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Oxford University</small>
                            </h6>
                            <h6>
                                <small>Jan 2009 - Mar 2010</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I completed this degree from this prestigious institution.
                            I successful completed all the credits without any fallout and got A grade overall.
                        </p>

                    </div>
                </div>
            </div>
            <!-- FIFTH TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>U</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">UI/UX Workshop</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>IT Next Academy</small>
                            </h6>
                            <h6>
                                <small>Jan 2010 - Mar 2011</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I completed this course from this prestigious institution.
                            I successful completed all the credits without any fallout and got A grade overall.
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-2">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- SIXTH TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><i class="fa fa-globe"></i></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Web Development</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Lipro University</small>
                            </h6>
                            <h6>
                                <small>Jan 2011 - Mar 2012</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I completed this course from this prestigious institution.
                            I successful completed all the credits without any fallout and got A grade overall.
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-3">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<!--==========================================
                   SKILLS
===========================================-->
<section id="skills" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class=" tt-title__first-word text-uppercase text-center">Skills</h4>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="skills-card" class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <!-- FIRST SKILL SECTION -->
                                <div class="skills-title">
                                    <h6 class="text-center">Professional</h6>
                                </div>
                                <!-- FIRST SKILL BAR -->
                                <div class="skillbar" data-percent="90%">
                                    <div class="skillbar-title"><span>HTML5</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">90%</div>
                                </div>
                                <!-- SECOND SKILL BAR  -->
                                <div class="skillbar" data-percent="90%">
                                    <div class="skillbar-title"><span>CSS3</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">90%</div>
                                </div>
                                <!-- THIRD SKILL BAR  -->
                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-title"><span>jQuery</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">70%</div>
                                </div>
                                <!-- FOURTH SKILL BAR  -->
                                <div class="skillbar" data-percent="68%">
                                    <div class="skillbar-title"><span>PHP</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">68%</div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <!-- SECOND SKILL SECTION -->
                                <div class="skills-title">
                                    <h6 class="text-center">Personal</h6>
                                </div>
                                <!-- FIRST SKILL BAR -->
                                <div class="skillbar" data-percent="80%">
                                    <div class="skillbar-title"><span>Communication</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">80%</div>
                                </div>
                                <!-- SECOND SKILL BAR  -->
                                <div class="skillbar" data-percent="60%">
                                    <div class="skillbar-title"><span>Teamwork</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">60%</div>
                                </div>
                                <!-- THIRD SKILL BAR  -->
                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-title"><span>Creativity</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">70%</div>
                                </div>
                                <!-- FOURTH SKILL BAR  -->
                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-title"><span>Dedication</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">70%</div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <!-- THIRD SKILL SECTION -->
                                <div class="skills-title">
                                    <h6 class="text-center">Software</h6>
                                </div>
                                <!-- FIRST SKILL BAR -->
                                <div class="skillbar" data-percent="80%">
                                    <div class="skillbar-title"><span>Adobe Illustrator</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">80%</div>
                                </div>
                                <!-- SECOND SKILL BAR  -->
                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-title"><span>Adobe InDesign</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">70%</div>
                                </div>
                                <!-- THIRD SKILL BAR  -->
                                <div class="skillbar" data-percent="60%">
                                    <div class="skillbar-title"><span>PHP Storm</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">60%</div>
                                </div>
                                <!-- FOURTH SKILL BAR  -->
                                <div class="skillbar" data-percent="80%">
                                    <div class="skillbar-title"><span>Dev Console</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">80%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==========================================
                   EXPERIENCE
===========================================-->
<section id="experience" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class=" tt-title__first-word text-uppercase text-center">Experience</h4>
        </div>
        <div id="timeline-experience">
            <!-- FIRST TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>D</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Designer</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>RulerSoft</small>
                            </h6>
                            <h6>
                                <small>Jan 2010 - Mar 2012</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I started my designing carrier here, spent tow years learning and working
                            in various designing aspects..
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-4">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- SECOND TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>F</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Frontend Developer</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Micro IT</small>
                            </h6>
                            <h6>
                                <small>Jan 2012 - Mar 2014</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I started my frontend carrier here, spent tow years learning and working
                            in various frontend aspects. I worked on about 40+ projects local and online.
                        </p>

                    </div>
                </div>
            </div>
            <!-- THIRD TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>U</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">UI/UX Expert</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Libra IT Solutions</small>
                            </h6>
                            <h6>
                                <small>Jan 2014 - Mar 2015</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I started my expertise carrier here, spent tow years learning and working
                            in various UX/UI aspects. I worked on about 70+ projects local and online.
                        </p>

                    </div>
                </div>
            </div>
            <!-- FOURTH TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>S</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Senior Developer</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>WebStyle Technologies</small>
                            </h6>
                            <h6>
                                <small>Jan 2016 - Continue..</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I recently joined here, currently working on various development
                            aspects. I already worked on about..
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-5">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==========================================
                  CONTACT
===========================================-->
<section id="contact" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class=" tt-title__first-word text-uppercase text-center">Contact</h4>
        </div>
        <div class="row">
            <div id="contact-card" class="col-md-6 col-sm-12 col-xs-12">
                <!-- CONTACT FORM -->
                <div class="card">
                    <div class="card-content">
                        <form id="contact-form" name="c-form">
                            <!-- NAME -->
                            <div class="input-field">
                                <input id="first_name" type="text" class="validate" name="first_name" required>
                                <label for="first_name">Name</label>
                            </div>
                            <!--SUBJECT-->
                            <div class="input-field">
                                <input id="sub" type="text" class="validate" name="sub">
                                <label for="sub">Subject</label>
                            </div>
                            <!--EMAIL-->
                            <div class="input-field">
                                <input id="email" type="email" class="validate" name="email" required>
                                <label for="email">Email</label>
                            </div>
                            <!--MESSAGE-->
                            <div class="input-field">
                                <textarea id="textarea1" class="materialize-textarea" name="message"
                                          required></textarea>
                                <label for="textarea1">Message</label>
                            </div>
                            <!-- SEND BUTTON -->
                            <div class="contact-send">
                                <button id="submit" name="contactSubmit" type="submit" value="Submit"
                                        class="btn waves-effect">Send
                                </button>
                            </div>
                        </form>
                    </div>                   
                    <!--FORM LOADER-->
                    <div id="form-loader" class="progress is-hidden">
                        <div class="indeterminate"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12"><br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d1921.1034369964689!2d
                <?= $profile->longitude ?>!3d<?= $profile->latitude ?>!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d
                <?= $profile->latitude ?>!2d <?= $profile->longitude ?>!5e0!3m2!1sen!2sth!4v1576553184899!5m2!1sen!2sth"
                width="450" height="350" frameborder="0" style=" box-shadow: 0 0 10px rgba(0, 10, 1, 1);" allowfullscreen="">
                </iframe>
                </div>
            </div>

        </div>
    </div>
</section>
</body>
</html>