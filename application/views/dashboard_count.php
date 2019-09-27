
<section class="content">
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="<?php echo base_url('mainclass/class');?>"><div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fas fa-university"></i></span>
            
            <div class="info-box-content">
              <span class="info-box-text classtext">Class</span>
              
              <span class="info-box-number"><?php $countClass = (isset($getClass)) ? $getClass : ""; echo $countClass;?></span>
            
            </div>
            <!-- /.info-box-content -->
          </div></a>
          <!-- /.info-box -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fas fa-stream"></i></span>

            <div class="info-box-content">
              <span class="info-box-text classtext"><a href="<?php echo base_url('stream/streamlist');?>">Stream</a></span>
              <span class="info-box-number"><?php if(isset($allStream)) echo $allStream;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text classtext"><a href="<?php echo base_url('students');?>">Students</a></span>
              <span class="info-box-number"><?php if(isset($allStudent)) echo $allStudent;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fas fa-laptop"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Categories</span>
              <span class="info-box-number"><?php if(isset($allCategory)) echo $allCategory;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fab fa-product-hunt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text classtext"><a href="<?php echo base_url('admin/products');?>">Products</a></span>
              <span class="info-box-number"><?php if(isset($allProduct)) echo $allProduct;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
    </div>
  </div>
</section>