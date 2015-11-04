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

	<!-- Custom style -->
	<?php echo $this->Html->css("public-style"); ?>

	<!-- Vertical Menu -->
	<?php echo $this->Html->css("vertical-menu"); ?>

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
							<?php echo $this->Html->image('logo.png', array('alt' => 'My home builder', 'url' => array('controller' => 'home.html'))); ?>
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
			<div class="banner hidden-xs hidden-sm hidden-md">
				<div class="container"></div>
			</div>
			<?php endif; ?>
		</header>
		<article class="contain">
			<div class="cover">
				<div class="container">
					<section id="left-sidebar-container" class="col-sx-12 col-sm-12 col-md-3 col-lg-3 non-left non-right">
						<?php 
						if(strtolower($this->request->params['controller']) == 'projectcategories'
							|| strtolower($this->request->params['controller']) == 'pages')
							echo $this->element('menus/public-left-project');
						if(strtolower($this->request->params['controller']) == 'productcategories'
							|| strtolower($this->request->params['controller']) == 'pages')
							echo $this->element('menus/public-left-product');
						if(strtolower($this->request->params['controller']) == 'servicecategories'
							|| strtolower($this->request->params['controller']) == 'pages')
							echo $this->element('menus/public-left-service');
						?>
					</section>
					<article id="content-sidebar-container" class="col-sx-12 col-sm-12 col-md-9 col-lg-9 non-right">
						<div class="content-sidebar">
							<div class="panel" id="load">
								<?php echo $this->Session->flash(); ?>
								<?php echo $this->fetch('content'); ?>
							</div>
						</div>
					</article>
				</div>
			</div>
		</article>
		<footer class="contain">
			<div class="cover">
					<?php echo $this->element('footer/sponsor'); ?>
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

	<!-- Public page -->
	<?php echo $this->Html->script('public-script'); ?>

	<!-- Vertical menu -->
	<?php echo $this->Html->script('vertical-menu'); ?>

	<?php echo $this->fetch('script'); ?>
	<?php echo $this->Js->writeBuffer(); ?>
</body>
</html>
