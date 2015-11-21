<ul class="nav">
	<?php if(!is_null($this->Session->read('Auth.User'))): ?>
		<?php if((!is_null($this->Session->read('Auth.User'))) 
			&& ($this->Session->read('Auth.User.Group.id') != '5') 
			&& ($this->Session->read('Auth.User.Group.id') != '6')): ?>
		<li><?php echo $this->Html->link(
			'<span class="glyphicon glyphicon-stats"></span> Trang quản lý',
			array('controller'=> 'manage.html'),
			array('class' => 'item', 'escape' => false)
			);?></li>
		<?php endif; ?>
	<li><?php echo $this->Html->link(
		'<span class="glyphicon glyphicon-user"></span> Tài khoản',
		array('controller'=> 'profile.html'),
		array('class' => 'item', 'escape' => false)
		);?></li>
	<li><?php echo $this->Html->link(
		'<span class="glyphicon glyphicon-log-out"></span> Đăng xuất',
		array('controller'=> 'logout.html'),
		array('class' => 'item', 'escape' => false)
		);?></li>
	<?php else: ?>
	<li><?php echo $this->Html->link(
		'<span class="glyphicon glyphicon-lock"></span> Đăng nhập',
		array('controller'=> 'login.html'),
		array('class' => 'item', 'escape' => false)
		);?></li>
	<li> <?php echo $this->Html->link(
		'<span class="glyphicon glyphicon-log-in"></span> Đăng ký',
		array('controller'=> 'register.html'),
		array('class' => 'item', 'escape' => false)
		);?></li>
	<?php endif; ?>
</ul>