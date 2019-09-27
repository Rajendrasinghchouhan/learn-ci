<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap 3.3.7 -->
  	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
	 <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<!-- Font Awesome -->
  	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/ionicons.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-jvectormap.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/_all-skins.min.css');?>">
	<!-- Google Font -->
  	<link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

	<script src="https://code.jquery.com/jquery-latest.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
	<!-- FastClick -->
	<script src="<?php echo base_url('assets/js/fastclick.js');?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url('assets/js/adminlte.min.js');?>"></script>
	<!-- Sparkline -->
	<script src="<?php echo base_url('assets/js/jquery.sparkline.min.js');?>"></script>
	<!-- jvectormap  -->
	<script src="<?php echo base_url('assets/js/jquery-jvectormap-1.2.2.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/jquery-jvectormap-world-mill-en.js');?>"></script>
	<!-- SlimScroll -->
	<script src="<?php echo base_url('assets/js/jquery.slimscroll.min.js');?>"></script>
	<!-- ChartJS -->
	<script src="<?php echo base_url('assets/js/Chart.js');?>"></script>

	<title><?php //echo $title_page ?></title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<!--<header class="main-header">
	<a href="#" class="logo">
		<span class="logo-mini"></span>
		<span class="logo-lg"><b>Admin</b>LTE</span>
	</a>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4">
				<img src="<?php //echo base_url('assets/images/admin-logo.gif');?>" class="logoimage">
			</div>
			<div class="col-sm-8 col-md-8 col-lg-8">
				<nav>
					<ul>
						<li></li>
						<li><a href=''>Products</a></li>
						<li><a href=''>Class</a></li>
						<li><a href=''>Stream Class</a></li>
						<li><a href=''>Students</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>	
</header>-->
<header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>T</b>AD</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Test </b>Admin</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/images/default_user.png');?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/images/default_user.png');?>" class="img-circle" alt="User Image">

                <p>
                  Admin - Web Developer
                  <small></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/images/default_user.png');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>dashboard
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <?php $class = ($this->router->fetch_class()=='dashboard') ? 'active' : ''; ?>
        <li class="<?php echo $class;?>">
          <a href="<?php echo base_url('dashboard');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <?php $class = ($this->router->fetch_class()=='category') ? 'active menu-open' : '';?>
        <li class="treeview <?php echo $class;?>">
          <a href="#">
            <i class="fa fa-pie-chart"></i>

            <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu ">
            <?php $class = ($this->router->fetch_method()=='index') ? 'active' : '';?>
            <li class="<?php echo $class;?>"><a href='<?php echo base_url('admin/category');?>'><i class="fa fa-circle-o"></i>Categories List</a></li>
            <?php $class = ($this->router->fetch_method()=='categoryform') ? 'active' : '';?>
            <li class="<?php echo $class;?>"><a href='<?php echo base_url('admin/category/categoryform');?>'><i class="fa fa-circle-o"></i> Add Categories</a></li>
          </ul>
        </li>
        <?php  //echo '---->'.$this->router->fetch_class();
              //echo '---->'.$this->router->fetch_method(); 
          ?>
          <?php $class = ($this->router->fetch_class()=='products') ? 'active menu-open' : '';?>
        <li class="treeview <?php echo $class;?>">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php $class = ($this->router->fetch_method()=='index') ? 'active' : '';?>
            <li class="<?php echo $class;?>"><a href='<?php echo base_url('admin/products');?>'><i class="fa fa-circle-o"></i>Products List</a></li>
            
            <?php $class = ($this->router->fetch_method()=='form') ? 'active' : '';?>
            <li class="<?php echo $class;?>"><a href='<?php echo base_url('admin/products/form');?>'><i class="fa fa-circle-o"></i> Add Products </a></li>
          
          </ul>
        </li>
        <?php $class = ($this->router->fetch_class()=='mainclass') ? 'active menu-open' : '';?>
        <li class="treeview <?php echo $class;?>">
          <a href="#">
            <i class="fas fa-user"> </i>
             <span> &nbsp;&nbsp;All Class</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php $class = ($this->router->fetch_method()=='class') ? 'active' : '';?>
              <li class="<?php echo $class;?>"><a href='<?php echo base_url('mainclass/class');?>'><i class="fa fa-laptop"></i></i> Class List</a></li>
            <?php $class = ($this->router->fetch_method()=='classform' || $this->router->fetch_method()=='classinsert') ? 'active' : '';?>
              <li class="<?php echo $class;?>"><a href='<?php echo base_url('mainclass/classform');?>'><i class="fa fa-laptop"></i> Add Class</a></li>
          </ul>
        </li>
        <?php $class = ($this->router->fetch_class()=='stream') ? 'active menu-open' : '';?>
        <li class="treeview <?php echo $class;?>">
          <a href="#">
            <i class="fas fa-user"> </i>
             <span> &nbsp;&nbsp;All Stream</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php $class = ($this->router->fetch_method()=='streamlist') ? 'active' : '';?>
              <li class="<?php echo $class;?>"><a href='<?php echo base_url('stream/streamlist');?>'><i class="fa fa-laptop"></i> Stream List</a></li>
            <?php $class = ($this->router->fetch_method()=='streamform' || $this->router->fetch_method()=='streaminsert') ? 'active' : '';?>
              <li class="<?php echo $class;?>" ><a href='<?php echo base_url('stream/streamform');?>'><i class="fa fa-laptop"></i> Add Stream</a></li>
          </ul>
        </li>
        <?php $class = ($this->router->fetch_class()=='students') ? 'active menu-open' : '';?>
        <li class="treeview <?php echo $class;?>">
          <a href="#">
            <i class="fas fa-user"> </i>
             <span> &nbsp;&nbsp;All Students</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php $class = ($this->router->fetch_method()=='index') ? 'active' : '';?>
              <li class="<?php echo $class;?>"><a href='<?php echo base_url('students');?>'><i class="fa fa-laptop"></i> Student List</a></li>
            <?php $class = ($this->router->fetch_method()=='studentform' || $this->router->fetch_method()=='insert_student' || $this->router->fetch_method()=='update_student') ? 'active' : '';?>
              <li class="<?php echo $class;?>"><a href='<?php echo base_url('students/studentform');?>'><i class="fa fa-laptop"></i> Add Student</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 926px;">
    <!-- Content Header (Page header) -->
    
    	<?php echo $contents; ?>
    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>&copy <?php echo date("Y"); ?> All right reserved. Developed by<a href="" > <?php echo strtoupper("atn technologies") ?></a></strong>
  </footer>

</div>
</body>
</html>