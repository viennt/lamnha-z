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
	<title><?php echo $this->fetch('title'); ?></title>

	<?php echo $this->Html->meta('icon');?>
	<?php echo $this->fetch('meta');?>

	<!-- Bootstrap -->
	<?php echo $this->Html->css('bootstrap.min'); ?>

	<!-- Custom style -->
	<?php echo $this->Html->css("public-style"); ?>

	<!-- jQuery 2.1.4 -->
	<?php echo $this->Html->script('jquery-2.1.4.min'); ?>

	<!-- Vertical Menu -->
	<?php echo $this->Html->css("vertical-menu"); ?>

	<?php echo $this->fetch('css');?>

</head>
<body>
	<div id="container">
		<header>
			<div class="nav-alias"></div>
			<div class="nav-bar" align="center">
				<div class="cover" align="center">
					<div class="container">
						<figure class="logo-panel col-sx-12 col-sm-12 col-md-12 col-lg-3">
							<?php echo $this->Html->image('logo.png', array('alt' => 'CakePHP', 'url' => array('controller' => 'home.html'), 'style' => 'border: 2px solid #FFF; max-width: 90%')); ?>
						</figure>
						<div class="nav-panel col-sx-12 col-sm-12 col-md-12 col-lg-9">
							<div class="rec hidden-xs hidden-sm hidden-md"></div>
							<div class="top">
								<div class="account-bar">
									<nav>
									<?php echo $this->element('menus/account-bar'); ?>
									</nav>
								</div>
							</div>
							<div class="bottom">
								<div class="main-menu">
									<nav>
									<?php echo $this->element('menus/main'); ?>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="banner hidden-xs hidden-sm hidden-md" align="center">
				<div class="container">
				</div>
			</div>
		</header>
		<section class="contain">
			<div class="cover">
				<div class="container">
					<section id="left-sidebar-container" class="col-sx-12 col-sm-12 col-md-3 col-lg-3 non-left non-right">
						<?php echo $this->element('menus/left-bar'); ?>
					</section>
					<article id="content-sidebar-container" class="col-sx-12 col-sm-12 col-md-9 col-lg-9 non-right">
						<div class="content-sidebar">
							<div class="panel">
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
					<div class="sponsor">
						<div class="container"> Sponsor</div>
					</div>
					<div class="about-company">
						<div class="container"> About Company</div>
					</div>
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

	<!-- FastClick -->
	<script src="<?php echo $this->webroot; ?>/plugins/fastclick/fastclick.min.js"></script>

	<!-- Public page -->
	<?php echo $this->Html->script('public-script'); ?>

	<!-- Vertical menu -->
	<?php echo $this->Html->script('vertical-menu'); ?>
</body>
</html>
