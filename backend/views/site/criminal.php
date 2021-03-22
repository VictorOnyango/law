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
                <h3 class="box-title"><b>Welcome Admin</b></h3>
              </div>
              <div class="box-body no-padding">
               <ul class="nav nav-pills nav-stacked">
                  <li><a href="<?= Url::to(['site/index'])?>"><i class="fa fa-address-card-o"></i>Court Entry</a></li>
                  <li><a href="<?= Url::to(['site/lawyer'])?>"><i class="fa fa-list-ul"></i> Lawyer Entry</a></li>
                  <li class="active"><a href="<?= Url::to(['site/criminal'])?>"><i class="fa fa-list-ul"></i> Criminal Entry</a></li>
                </ul>
              </div>
            </div>
          </div>sss
          <div class="col-md-8 bg-white padding-2 ">
            <h2><i>LAW SEARCH</i></h2> 
            <!--<div class="row">
            <div class=col-md-6>
            <div class="input-group input-group-lg">
                <input type="text" id="searchBar" class="form-control" placeholder="Section No">
                <span class="input-group-btn">
                  <button id="searchBtn" type="button" class="btn btn-info btn-flat">Go!</button>
                </span>
            </div>
            </div>
            <div class=col-md-6>
            <div class="input-group input-group-lg">
                <input type="text" id="searchBar" class="form-control" placeholder="Keyword">
                <span class="input-group-btn">
                  <button id="searchBtn" type="button" class="btn btn-info btn-flat">Go!</button>
                </span>
            </div>
            </div>
            </div> -->
            
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="margin-top:5%;">
                    <div class="row>
                    <form action=""method="POST">
                    <div class="col-md-6">
                    <input type="text" name="search" class='form-control'
                    placeholder="Search by Law section or Keyword" value=""
                    </div>
                    <br>
                    <div class="col-md-6 text-left">
                        <button class="btn">Search</button>
                    </div>
                    </form>
                    <br>
                    <br>
                    <table class="table table-bordered">
                        <tr>
                            <th>Law section</th>
                            <th>Law rule</th>
                        </tr>
                        <tr>
                            <th> </th>
                            <th> </th>
                            
                        </tr>
                    </table>
                    </div>
                    </div>
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
