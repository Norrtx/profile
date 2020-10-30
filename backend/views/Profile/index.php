<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nameTH',
            'nameEN',
            'gender',
            'birthday',
            'Age',
            'city',
            'address',
            'state',
            'zip',
            'latitude',
            'longitude',
            'mail',
            'facebook',
            'link',
            // 'user_id',
            'pro_img',
            'description:ntext',
            'date_create',
            'date_update',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
