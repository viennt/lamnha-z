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
	<title><?php echo $title_for_layout; ?> - MyHomeBuilder</title>

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
			<div class="nav-alias" style="height: 142px"></div>
			<div class="nav-bar" align="center" style="height: 142px">
				<div class="cover" align="center">
					<div class="container">
						<figure class="logo-panel col-sx-12 col-sm-12 col-md-12 col-lg-3">
							<?php echo $this->Html->image('logo.png', array('alt' => 'CakePHP', 'url' => array('controller' => 'home.html'))); ?>
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
						<div class="hidden-sx hidden-sm hidden-md col-all-12 non-padding" style="height: 36px; z-index: 10">
							<div class="col-lg-3 btn btn-flat">TẤT CẢ DANH MỤC </div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section class="contain">
			<div class="cover">
				<div class="container">
					<article id="content-sidebar-container" class="col-sx-12 col-sm-12 col-md-12 col-lg-12 non-right non-left">
						<div class="content-sidebar">
							<div class="panel" style="border: 2px solid #E5E5E5">
								<?php echo $this->Session->flash(); ?>
								<?php echo $this->fetch('content'); ?>
							</div>
						</div>
					</article>
				</div>
			</div>
		</section>
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
</body>
</html>
