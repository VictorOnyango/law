<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Lawyer;

/* @var $this yii\web\View */
/* @var $model backend\models\Lawyer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lawyer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'court')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qualification')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expertise')->dropDownList(
        ArrayHelper::map(lawyer::find()->all(),'lawyerid','expertise'),
        ['prompt'=>'Select Expertise']
        
         )?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
