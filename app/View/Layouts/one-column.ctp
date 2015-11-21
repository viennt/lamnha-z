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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Cung cấp dịch vụ xây dựng trực tuyến. Tạo ra sự kết nối giữa nhà cung cấp và khách hàng, giá thành phù hợp nhất.">
	<meta name="author" content="viennt">

	<meta property="og:title"			content="Home Builder - Xây nhà Trực tuyến Giá rẻ"/>
	<meta property="og:type" 			content="article"/>
	<meta property="og:locale"			content="vn_VN"/>
	<meta property="og:site_name"		content="LamnhaZ.Com" />
	<meta property="og:description"		content="Cung cấp dịch vụ xây dựng trực tuyến. Tạo ra sự kết nối giữa nhà cung cấp và khách hàng, giá thành phù hợp nhất.">
	<meta property="og:url"				content="http://www.lamnha-z.com/home.html" />
	<meta property="og:image"			content="http://www.lamnha-z.com/img/logo.png" />
	<meta property="og:image:width"		content="640" />
	<meta property="og:image:height"	content="360" />

	<link rel="canonical" href="http://www.lamnha-z.com/"/>
	<link rel="alternate" href="http://www.lamnha-z.com/" hreflang="vi-vn" />
	<title>Home Builder - Xây nhà Trực tuyến Giá rẻ</title>

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
			<div class="nav-alias" style="height: 142px"></div>
			<div class="nav-bar" style="height: 142px">
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
						<div class="hidden-sx hidden-sm hidden-md hidden-lg col-all-12 non-padding" style="height: 36px; z-index: 10">
							<div class="col-lg-3 btn btn-flat">TẤT CẢ DANH MỤC </div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<article class="contain">
			<div class="cover">
				<div class="container">
					<div id="content-sidebar-container" class="col-sx-12 col-sm-12 col-md-12 col-lg-12 non-right non-left">
						<div class="content-sidebar">
							<?php if($this->Session->check('Message.flash')): ?>
							<div class="alert alert-warning alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<strong>Thông báo!</strong> <?php echo $this->Session->flash(); ?>
							</div>
							<?php endif; ?>
							<div class="panel" style="border: 2px solid #E5E5E5" id="load">
								<?php echo $this->fetch('content'); ?>
							</div>
						</div>
					</div>
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

	<?php echo $this->fetch('script'); ?>
	<?php echo $this->Js->writeBuffer(); ?>
</body>
</html>
