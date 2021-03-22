<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/*$this->title = 'Signup'; */
/*$this->params['breadcrumbs'][] = $this->title; */
?>
<div class="site-signup">
<h1><?= Html::encode($this->title) ?></h1>
	<div class="content-wrapper" style="margin-left: 0px;">

    <section id="candidates" class="content-header" style="margin-top:40px;">
      <div class="container">
	  <div class="row">
			<img src = "../img/l.jpg" class="col-md-11" style="height:250px; width:1090px;"> 
	  </div>
	  <div class="row">
	  <div class="col-md-3">
	  <h2><i>Why Kenya?</i></h2>
	  </div>
	  </div>
        <div class="row">
          <div class="col-md-3">
            <div class="box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title"><b>Welcome</b></h3>
              </div>
              <div class="box-body no-padding">
               <ul class="nav nav-pills nav-stacked">
                 
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-8 bg-white padding-2 ">
            

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-md-8">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

				<?= $form->field($model, 'fullname') ?>
                
				<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>		
		  </div>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer" style="margin-left: 0px;">
  <div class="text-center">
      <strong>Copyright &copy; 2021 <a href="learningfromscratch.online">Law System</a>.</strong> All Rights
    reserved | Victor Onyango
    </div>
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->
</div>
</div>
