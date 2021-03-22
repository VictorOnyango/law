<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use backend\models\Lawyer;
use backend\models\Court;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\LawyerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lawyers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lawyer-index">
<div class="content-wrapper" style="margin-left: 0px;">
    <section id="candidates" class="content-header" style="margin-top:40px;">
      <div class="container">
      <div class="row">
            <img src = "../img/l.jpg" style="height:250px; width:1090px;"> 
      </div>
      <div class="row">
      <h2><i>Why Kenya?</i></h2>
      </div>
        <div class="row">
          <div class="col-md-3">
            <div class="box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title"><b>Welcome Admin</b></h3>
              </div>
              <div class="box-body no-padding">
               <nav class="nav nav-pills flex-column">
               <a href="<?= Url::to(['law/create'])?>" class="nav-item nav-link ">
                      <i class="fa fa-home"></i> Law Entry
                    </a>
                    <a href="<?= Url::to(['court/create'])?>" class="nav-item nav-link">
                      <i class="fa fa-home"></i> Court Entry
                    </a>
                    <a href="<?= Url::to(['lawyer/create'])?>" class="nav-item nav-link active">
                      <i class="fa fa-user"></i> Lawyer Entry
                    </a>
                    <a href="<?= Url::to(['criminal/create'])?>" class="nav-item nav-link">
                       <i class="fa fa-envelope"></i> Criminal Entry
                    </a>
                </nav>
              </div>
            </div>
          </div>
          <div class="col-md-9 bg-white padding-2 ">
                <h1><?= Html::encode($this->title) ?></h1>
                    <p>
                        <?= Html::a('Create Lawyer', ['create'], ['class' => 'btn btn-success']) ?>
                    </p>

             <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                             ['class' => 'yii\grid\SerialColumn'],

                                 'lawyerid',
                                 'name',
                                 'court',
                                 'age',
                                 'qualification',
                                 'expertise',

                             ['class' => 'yii\grid\ActionColumn'],
                            ],
                     ]); ?>
          </div>
        </div>
      </div>
    </section>

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









</div>
