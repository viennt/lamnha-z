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
<html lang="vi">
<head>
	<meta charset="UTF-8">
    <meta property="og:locale" content="vn_VN">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Cung cấp dịch vụ xây dựng trực tuyến. Tạo ra sự kết nối giữa nhà cung cấp và khách hàng, giá thành phù hợp nhất.">
    <meta name="author" content="viennt">
	<link rel="canonical" href="http://www.lamnha-z.com/"/>
	<link rel="alternate" href="http://www.lamnha-z.com/" hreflang="vi-vn" />
	<title>Home Builder - Xây nhà Trực tuyến Giá rẻ</title>

	<?php echo $this->Html->meta('icon');?>
	<?php echo $this->fetch('meta');?>

	<!-- Bootstrap -->
	<?php echo $this->Html->css('bootstrap.min'); ?>

	<!-- AdminLTE -->
	<?php echo $this->Html->css('AdminLTE.min'); ?>

	<!-- Custom style -->
	<?php echo $this->Html->css("manage-style"); ?>
	
	<!-- jQuery 2.1.4 -->
	<?php echo $this->Html->script('jquery-2.1.4.min'); ?>

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
	<?php echo $this->Html->css('skins/_all-skins.min'); ?>
	<?php echo $this->fetch('css');?>

</head>
<body class="skin-blue fixed">
	<div class="wrapper">
		<header class="main-header">
			<a href="#" class="logo">LamNha Manage</a>
			<nav class="navbar navbar-static-top" role="navigation">
				<?php echo $this->element('menus/admin-top'); ?>
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
							<button type="submit" name="search" id="search-btn" class="btn btn-flat"><span class="glyphicon glyphicon-search"></span></button>
						</span>
					</div>
				</form>
				<!-- /.search form -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu">
					<li class="header">MAIN NAVIGATION</li>
					<?php echo $this->element('menus/admin-left'); ?>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper" style="min-height: 1036px;">
			<section class="content-header">
				<h1>
					<?php if(isset($title)) echo $title;
					else echo $this->fetch('title'); ?>
					<small>Controller panel</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><span class="glyphicon glyphicon-dashboard"></span> Home</a></li>
					<li class="active"><?php echo $this->fetch('title'); ?></li>
				</ol>
			</section>
			<section class="content" id="load">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</section>
		</div>
		<!-- /.content-wrapper -->
		
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 2.3.0 | <?php echo WWW_ROOT; ?>
			</div>
			<strong>Copyright © 2014-2015.</strong> All rights reserved.
		</footer>
	</div>
	
	<!-- Bootstrap 3.3.5 -->
	<?php echo $this->Html->script('bootstrap.min.js'); ?>

	<!-- AdminLTE App -->
	<?php echo $this->Html->script('app.min.js'); ?>

	<?php echo $this->fetch('script'); ?>
	<?php echo $this->Js->writeBuffer(); ?>
</body>
</html>
