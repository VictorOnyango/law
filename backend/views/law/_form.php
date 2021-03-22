<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Law */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="law-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lawsection')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lawrule')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
