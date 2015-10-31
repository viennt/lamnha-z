<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="viennt">
	<meta name="description" content="Website lease products">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>MyHomeBuilder - <?php echo $title_for_layout; ?></title>

	<?php echo $this->Html->meta('icon');?>
	<?php echo $this->fetch('meta');?>

	<!-- Font Awesome -->
	<?php echo $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');?>

	<!-- Ionicons -->
	<?php echo $this->Html->css('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');?>

	<!-- Bootstrap -->
	<?php echo $this->Html->css('bootstrap.min'); ?>

	<!-- AdminLTE -->
	<?php echo $this->Html->css('AdminLTE.min'); ?>
	
	<!-- jQuery 2.1.4 -->
	<?php echo $this->Html->script('jquery-2.1.4.min'); ?>

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
	<?php echo $this->Html->css('skins/_all-skins.min'); ?>
	<?php echo $this->fetch('css');?>

</head>
<body class="skin-blue">
	<header class="main-header">
	  <a href="#" class="logo">
	    <!-- LOGO -->
	    LamNha Admin
	  </a>
	  <!-- Header Navbar: style can be found in header.less -->
	  <nav class="navbar navbar-static-top" role="navigation">
	    <!-- Sidebar toggle button-->
	    <a href="#" class="sidebar-toggle visible-xs" data-toggle="offcanvas" role="button"></a>
	    <!-- Navbar Right Menu -->
	    <div class="navbar-custom-menu">
	      <ul class="nav navbar-nav">
	        <!-- Notifications: style can be found in dropdown.less -->
	        <li class="dropdown notifications-menu">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	            <i class="fa fa-bell-o"></i>
	            <span class="label label-warning">1</span>
	          </a>
	          <ul class="dropdown-menu">
	            <li class="header">You have 1 notifications</li>
	            <li>
	              <!-- inner menu: contains the actual data -->
	              <ul class="menu">
	                <li>
	                  <a href="#">
	                    <i class="ion ion-ios-people info"></i> Notification title
	                  </a>
	                </li>
	                ...
	              </ul>
	            </li>
	            <li class="footer"><a href="#">View all</a></li>
	          </ul>
	        </li>
	        <!-- Tasks: style can be found in dropdown.less -->
	        <li class="dropdown tasks-menu">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	            <i class="fa fa-flag-o"></i>
	            <span class="label label-danger">1</span>
	          </a>
	          <ul class="dropdown-menu">
	            <li class="header">You have 1 tasks</li>
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
	                </li><!-- end task item -->
	                ...
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
	            <img src="<?php echo $this->webroot; ?>/img/user9-128x128.jpg" class="user-image" alt="User Image">
	            <span class="hidden-xs">Nguyen The Vien</span>
	          </a>
	          <ul class="dropdown-menu">
	            <!-- User image -->
	            <li class="user-header">
	              <img src="<?php echo $this->webroot; ?>/img/user9-128x128.jpg" class="img-circle" alt="User Image">
	              <p>
	                Nguyen The Vien - Web Developer
	                <small>Member since Nov. 2012</small>
	              </p>
	            </li>
	            <!-- Menu Body -->
	            <li class="user-body">
	              <div class="col-xs-4 text-center">
	                <a href="#">Followers</a>
	              </div>
	              <div class="col-xs-4 text-center">
	                <a href="#">Sales</a>
	              </div>
	              <div class="col-xs-4 text-center">
	                <a href="#">Friends</a>
	              </div>
	            </li>
	            <!-- Menu Footer-->
	            <li class="user-footer">
	              <div class="pull-left">
	              	<?php echo $this->Html->link(
							'Profile',
							'/profile.html',
							array('class' => 'btn btn-default btn-flat')
						); ?>
	              </div>
	              <div class="pull-right">
	              	<?php echo $this->Html->link(
							'Logout',
							'/logout.html',
							array('class' => 'btn btn-default btn-flat')
						); ?>
	              </div>
	            </li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </nav>
	</header>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Menu v1</a></li>
                <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Menu v2</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Layout Options</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
              </ul>
            </li>
            <li>
              <a href="../widgets.html">
                <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
			<li id="action"></li>
          </ul>
        </section>
        <!-- /.sidebar -->
	</aside>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper" style="min-height: 1036px;">
		<section class="content-header">
          <h1>
          	<?php if(isset($title))
          			echo $title;
          		else
          			echo $this->fetch('title'); ?>
            <small>Controller panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?php echo $this->fetch('title'); ?></li>
          </ol>
        </section>
        <section class="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
        </section>
	</div>
	<!-- /.content-wrapper -->
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>Version</b> 2.3.0
		</div>
		<strong>Copyright © 2014-2015.</strong> All rights reserved.
	</footer>



	<!-- Bootstrap 3.3.5 -->
	<?php echo $this->Html->script('bootstrap.min.js'); ?>

	<!-- AdminLTE App -->
	<?php echo $this->Html->script('app.min.js'); ?>
	
	<!-- FastClick -->
	<script src="<?php echo $this->webroot; ?>/plugins/fastclick/fastclick.min.js"></script>

	<?php echo $this->fetch('script'); ?>

	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
