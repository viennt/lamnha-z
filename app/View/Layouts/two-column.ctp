<?php
/* -----------------------------------------------------------------------------------------
   LamnhA-Z - http://www.lamnha-z.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2015 LamNhaZ Ltd.
   License - http://www.lamnha-z.com/license.html
   ---------------------------------------------------------------------------------------*/


?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Cung cấp dịch vụ xây dựng trực tuyến. Tạo ra sự kết nối giữa nhà cung cấp và khách hàng, giá thành phù hợp nhất.">
	<meta name="author" content="viennt">

	<link rel="canonical" href="http://www.lamnha-z.com/"/>
	<link rel="alternate" href="http://www.lamnha-z.com/" hreflang="vi-vn" />
	<title>Home Builder - Xây nhà Trực tuyến Giá rẻ</title>

	<meta property="og:title"			content="Home Builder - Xây nhà Trực tuyến Giá rẻ"/>
	<meta property="og:type" 			content="article"/>
	<meta property="og:locale"			content="vn_VN"/>
	<meta property="og:site_name"		content="LamnhaZ.Com" />
	<meta property="og:description"		content="Cung cấp dịch vụ xây dựng trực tuyến. Tạo ra sự kết nối giữa nhà cung cấp và khách hàng, giá thành phù hợp nhất.">
	<meta property="og:url"				content="http://www.lamnha-z.com/trang-chu.html" />
	<meta property="og:image"			content="http://www.lamnha-z.com/img/logo.png" />
	<meta property="og:image:width"		content="640" />
	<meta property="og:image:height"	content="360" />

	<?php echo $this->Html->meta('icon');?>
	<?php echo $this->fetch('meta');?>

	<!-- Bootstrap -->
	<?php echo $this->Html->css('bootstrap.min'); ?>

	<!-- Bootstrap Custom -->
	<?php echo $this->Html->css('bootstrap.custom.min'); ?>

	<!-- Custom style -->
	<?php echo $this->Html->css("public-style"); ?>

	<!-- jQuery 2.1.4 -->
	<?php echo $this->Html->script('jquery-2.1.4.min'); ?>

	<?php echo $this->fetch('css');?>

</head>
<body>
	<div id="container">
		<header>
			<div class="nav-alias"></div>
			<div class="nav-bar">
				<div class="cover">
					<div class="container">
						<figure class="logo-panel col-sx-12 col-sm-12 col-md-12 col-lg-3">
							<?php echo $this->Html->image('logo.png', array('alt' => 'My home builder', 'url' => array('controller' => 'trang-chu.html'))); ?>
						</figure>
						<div class="nav-panel col-sx-12 col-sm-12 col-md-12 col-lg-9">
							<div class="rec hidden-xs hidden-sm hidden-md"></div>
							<div class="top">
								<div class="account-bar">
									<nav>
									<?php echo $this->element('menus/public-account-bar'); ?>
									</nav>
								</div>
							</div>
							<div class="bottom" id="bottom">
								<div class="main-menu">
									<nav>
									<?php echo $this->element('menus/public-main'); ?>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php if(strtolower($this->request->params['controller']) == 'pages'): ?>
			<div id="banner" class="banner hidden-xs hidden-sm hidden-md">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-lg-offset-7">
							<h2>
								<strong>LÀM NHÀ</strong><br/>
								<strong>TRỰC TUYẾN</strong><br/>
							</h2><hr>
							<?php echo $this->Html->link('TẠO DỰ ÁN', array('controller' => 'tao-du-an.html'), array('class' => 'btn btn-flat btn-warning')); ?>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</header>
		<article class="contain">
			<div class="cover">
				<div class="container">
					<section id="left-sidebar-container" class="col-sx-12 col-sm-12 col-md-3 col-lg-3 non-left non-right">
						<?php 
						if(strtolower($this->request->params['controller']) == 'productcategories'
							|| strtolower($this->request->params['controller']) == 'servicecategories')
							echo $this->element('menus/public-left-cart');

						if(strtolower($this->request->params['controller']) == 'productcategories'
							|| strtolower($this->request->params['controller']) == 'pages')
							echo $this->element('menus/public-left-menu', array(
								'title' => 'Sản phẩm',
								'titleURL' => 'danh-muc-san-pham.html',
								'categoryName' => 'Product',
							));

						if(strtolower($this->request->params['controller']) == 'servicecategories'
							|| strtolower($this->request->params['controller']) == 'pages')
							echo $this->element('menus/public-left-menu', array(
								'title' => 'Dịch vụ',
								'titleURL' => 'danh-muc-dich-vu.html',
								'categoryName' => 'Service',
							));

						if(strtolower($this->request->params['controller']) == 'projectcategories'
							|| strtolower($this->request->params['controller']) == 'projects')
							echo $this->element('menus/public-left-menu', array(
								'title' => 'Dự án',
								'titleURL' => 'danh-muc-du-an.html',
								'categoryName' => 'Project',
							));

						if(strtolower($this->request->params['controller']) == 'newscategories')
							echo $this->element('menus/public-left-menu', array(
								'title' => 'Tin tức',
								'titleURL' => 'danh-muc-tin-tuc.html',
								'categoryName' => 'News',
							));
						?>
					</section>
					<article id="content-sidebar-container" class="col-sx-12 col-sm-12 col-md-9 col-lg-9 non-right">
						<div class="content-sidebar">
							<?php if($this->Session->check('Message.flash')): ?>
							<div class="alert alert-success alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<strong>Thông báo!</strong> <?php echo $this->Session->flash(); ?>
							</div>
							<?php endif; ?>
							<?php echo $this->element('menus/breadcrumb');?>
							<div class="panel" id="load">
								<?php echo $this->fetch('content'); ?>
							</div>
						</div>
					</article>
				</div>
			</div>
		</article>
		<footer class="contain">
			<div class="cover">
					<?php //echo $this->element('footer/sponsor'); ?>
					<?php echo $this->element('footer/about'); ?>
					<div class="copyright">
						<div class="container">
							<span><strong>Copyright © 2014-2015.</strong> All rights reserved.</span>
						</div>
					</div>
			</div>
		</footer>
	</div>
	
	<!-- Bootstrap 3.3.5 -->
	<?php echo $this->Html->script('bootstrap.min.js'); ?>

	<!-- jQuery Lazyload -->
	<?php echo $this->Html->script('jquery.lazyload'); ?>

	<!-- jQuery Scrool Stop -->
	<?php echo $this->Html->script('jquery.scrollstop'); ?>

	<!-- Public page -->
	<?php echo $this->Html->script('public-script'); ?>

	<?php echo $this->fetch('script'); ?>
	<?php echo $this->Js->writeBuffer(); ?>
</body>
</html>
