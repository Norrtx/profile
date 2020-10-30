<?php
 namespace app\themes\adminlte;
namespace backend\assets;
use yii\web\AssetBundile;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{  
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       'css/site.css',
      // 'css/adminlte.css',
       // 'css/layout.css',
        //'css/main.css',
    ];
    public $js = [
        //'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'
       
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

 