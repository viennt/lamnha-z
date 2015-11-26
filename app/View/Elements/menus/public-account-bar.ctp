<ul class="nav">
	<?php if(!is_null($this->Session->read('Auth.User'))): ?>
		<?php if(($this->Session->read('Auth.User.Group.id') != '5') 
			&& ($this->Session->read('Auth.User.Group.id') != '6')): ?>
		<li><?php echo $this->Html->link(
			'<span class="glyphicon glyphicon-stats"></span> Trang quản lý',
			array('controller'=> 'manage.html'),
			array('class' => 'item', 'escape' => false)
			);?></li>
		<?php endif; ?>
	<li><?php echo $this->Html->link(
		'<span class="glyphicon glyphicon-user"></span> Tài khoản',
		array('controller'=> 'tai-khoan.html'),
		array('class' => 'item', 'escape' => false)
		);?></li>
	<li><?php echo $this->Html->link(
		'<span class="glyphicon glyphicon-log-out"></span> Đăng xuất',
		array('controller'=> 'dang-xuat.html'),
		array('class' => 'item', 'escape' => false)
		);?></li>
	<?php else: ?>
	<li><?php echo $this->Html->link(
		'<span class="glyphicon glyphicon-lock"></span> Đăng nhập',
		array('controller'=> 'dang-nhap.html'),
		array('class' => 'item', 'escape' => false)
		);?></li>
	<li> <?php echo $this->Html->link(
		'<span class="glyphicon glyphicon-log-in"></span> Đăng ký',
		array('controller'=> 'dang-ky.html'),
		array('class' => 'item', 'escape' => false)
		);?></li>
	<?php endif; ?>
</ul>