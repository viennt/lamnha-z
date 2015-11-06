<a href="#" class="sidebar-toggle hidden-lg" data-toggle="offcanvas" role="button">
	<span class="glyphicon glyphicon-menu-hamburger"></span>
</a>
<?php echo $this->Html->link(
	'<span class="glyphicon glyphicon-globe"></span> Xem trang chính',
	array('controller'=> 'home.html', 'action' => '', 'manage' => false),
	array('class' => 'sidebar-toggle', 'target' => '_blank', 'escape' => false)
	);?>
<?php echo $this->Html->link(
	$this->Html->image( 'control/indicator.gif'),
	array('#'),
	array('class' => 'hid sidebar-toggle', 'id' => 'busy-indicator', 'escape' => false)
	); ?>
<!-- Navbar Right Menu -->
<div class="navbar-custom-menu">
	<ul class="nav navbar-nav">
		<!-- Notifications: style can be found in dropdown.less -->
		<li class="dropdown notifications-menu">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<span class="glyphicon glyphicon-bell"></span>
				<span class="label label-danger">2</span>
			</a>
			<ul class="dropdown-menu">
				<li class="header">Bạn có 2 thông báo</li>
				<li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu">
					<li>
					<a href="#">
						<i class="ion ion-ios-people info"></i> Hoàng Văn đã mua sản phẩn của bạn
					</a>
					</li>
					<li>
					<a href="#">
						<i class="ion ion-ios-people info"></i> Hoàng Văn đã nhận xét sản phẩn của bạn
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
				<span class="glyphicon glyphicon-flag"></span>
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
				<?php echo $this->Html->image('user9-128x128.jpg', array('alt' => 'User Image', 'class' => 'user-image')); ?>
				<span class="hidden-xs">Nguyen The Vien</span>
			</a>
			<ul class="dropdown-menu">
			<!-- User image -->
			<li class="user-header">
				<?php echo $this->Html->image('user9-128x128.jpg', array('alt' => 'User Image')); ?>
				<p>
				Nguyen The Vien - Web Developer
				<small>Member since Nov. 2012</small>
				</p>
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