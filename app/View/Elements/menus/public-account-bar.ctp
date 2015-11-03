<ul class="nav">
	<li>
	<?php echo $this->Html->link(
		'<span class="glyphicon glyphicon-stats"></span> Manage Page',
		array('controller'=> 'manage.html'),
		array('class' => 'item', 'escape' => false)
		);?></li>
	<li>
	<?php echo $this->Html->link(
		'<span class="glyphicon glyphicon-user"></span> Account',
		array('controller'=> 'profile.html'),
		array('class' => 'item', 'escape' => false)
		);?></li>
	<li>
	<?php echo $this->Html->link(
		'<span class="glyphicon glyphicon-lock"></span> Login',
		array('controller'=> 'login.html'),
		array('class' => 'item', 'escape' => false)
		);?></li>
	<li>
	<?php echo $this->Html->link(
		'<span class="glyphicon glyphicon-log-in"></span> Register',
		array('controller'=> 'register.html'),
		array('class' => 'item', 'escape' => false)
		);?></li>
	<li>
	<?php echo $this->Html->link(
		'<span class="glyphicon glyphicon-log-out"></span> Logout',
		array('controller'=> 'logout.html'),
		array('class' => 'item', 'escape' => false)
		);?></li>
</ul>