<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Charttemplate */

$this->title = 'Create Charttemplate';
$this->params['breadcrumbs'][] = ['label' => 'Charttemplates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="charttemplate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
