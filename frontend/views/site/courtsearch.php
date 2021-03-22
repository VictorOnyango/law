<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Law';
?>
<div class="site-index">
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
                <h3 class="box-title"><b>Welcome</b></h3>
              </div>
              <div class="box-body no-padding">
                <nav class="nav nav-pills flex-column">
                    <a href="<?= Url::to(['site/index'])?>" class="nav-item nav-link active">
                      <i class="fa fa-home"></i> Law Search
                    </a>
                    <a href="<?= Url::to(['site/court'])?>" class="nav-item nav-link">
                      <i class="fa fa-user"></i> Court Search
                    </a>
                    <a href="<?= Url::to(['site/lawyer'])?>" class="nav-item nav-link">
                       <i class="fa fa-envelope"></i> Lawyer Search
                    </a>
                    <a href="<?= Url::to(['site/criminal'])?>" class="nav-item nav-link">
                       <i class="fa fa-line-chart"></i> Criminal Search
                    </a>
                </nav>
              </div>
            </div>
          </div>
          <div class="col-md-9 bg-white padding-2 ">
            <h2><i>COURT SEARCH</i></h2>
            <h1>Found Videos</h1>
            <?php echo \yii\widgets\ListView::widget([
              'dataProviders' => $dataProvider,
              'itemView' => '_court_item',
              'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
              'itemOptions' => [
                'tag' => false
              ]
            ]) ?>
			
			
			
			




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
