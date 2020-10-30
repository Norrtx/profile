<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Skill */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skill-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'score')->textInput() ?>

    <?= $form->field($model, 'maxscore')->textInput() ?>

    <?= $form->field($model, 'chart_type')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput(['disabled' => 'disabled']) ?>

    <?= $form->field($model, 'date_create')->textInput() ?>

    <?= $form->field($model, 'date_update')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>
    
    <div class="form-group field-skill-status">
        <label class="control-label" for="skill-status">test</label>
        <input type="text" id="skill-status" class="form-control" name="test" aria-invalid="false">

        <div class="help-block"></div>
    </div>
    <div class="form-group field-skill-status">
        <label class="control-label" for="skill-status">test2</label>
        <input type="text" id="skill-status" class="form-control" name="test2" aria-invalid="false">

        <div class="help-block"></div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
