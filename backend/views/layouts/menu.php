<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;
AppAsset::register($this);
?>




      <?php
    NavBar::begin([
        //'brandLabel' => Yii::$app->name,
       'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
   
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Profile', 'url' => ['/profile/index']],
        ['label' => 'Skill', 'url' => ['/skill/index']],
        ['label' => 'Education', 'url' => ['/education/index']],
        ['label' => 'ChartTemplate', 'url' => ['/charttemplate/index']],
        ['label' => 'JobHistory', 'url' => ['/jobhistory/index']],
        ['label' => 'Layout', 'url' => ['/themes/index']],
        ['label' => 'Test', 'url' => ['/site/hoho']],
        ['label' => 'Test2', 'url' => ['/site/test2']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
   

  <!-- Content Wrapper. Contains page content -->
  
         
    <!-- /.content-header -->