<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

<?php
use yii\helpers\Url;
use frontend\models\Law;
use yii\helpers\Html;
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
                    <a href="<?= Url::to(['site/law'])?>" class="nav-item nav-link active">
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
            <h2><i>LAW SEARCH</i></h2> 
			<div class="body-content">

<form action="<?php echo Url::to(['/law/search'])?>" class="form-inline my-2 my-lg-0">
	<input class="form-control mr-sm-2" type="search" placeholder="Search" name="name">
	<button class="btn btn-outline-success my-2 my-sm-0">Search</button>
</form>
</br>
<div class="row">
<table class="table table-hover">
	<thead>
		<tr>
		<th scope="col">ID</th>
			<th scope="col">Law Section</th>
			<th scope="col">Law Rule</th>
			<th scope="col">Keyword</th>
		</tr>
	</thead>
	<tbody>
		<?php if(count($law) > 0): ?>
			<?php foreach($law as $law): ?>
		<tr class="table-active">
			<th scope="row"><?php echo $law->lawid; ?></th>
			<td><?php echo $law->lawsection; ?></td>
			<td><?php echo $law->lawrule; ?></td>
			<td><?php echo $law->keyword; ?></td>
			
			<?php endforeach; ?>
		<?php else: ?>
			<tr>
				<td>No Records Found!</td>
			</tr>
		<?php endif; ?>
	</tbody>
</table>
</div>
</div>
			
			
			




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
