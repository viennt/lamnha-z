<ul class="nav">
	<?php
	echo '<li>';
	echo $this->Html->link(__('Sản phẩm'), array('controller' => 'danh-muc-san-pham.html', 'manage' => false));
	echo '</li>';

	echo '<li>';
	echo $this->Html->link(__('Dịch vụ'), array('controller' => 'danh-muc-dich-vu.html', 'manage' => false));
	echo '</li>';

	echo '<li>';
	echo 'Thầu';
	echo '</li>';

	echo '<li class="dropdown">';
	echo $this->Html->link(__('Dự án'), array('controller' => 'danh-muc-du-an.html', 'manage' => false));
	if(!is_null($this->Session->read('Auth.User'))):
	echo '<ul class="dropdown-menu">';
		echo '<li>', $this->Html->link(__(' Tao dự án '),
			array('controller' => 'tao-du-an.html')
			), '</li>';
		echo '<li>', $this->Html->link(__(' Dự án của tôi '),
			array('controller' => 'danh-muc-du-an.html')
			), '</li>';
	echo '</ul>';
	endif;
	echo '</li>';

	echo '<li>';
	echo $this->Html->link(__('Chia sẻ'), array('controller' => 'chia-se.html', 'manage' => false));
	echo '</li>';

	echo '<li>';
	echo $this->Html->link(__('Miễn phí'), array('controller' => 'mien-phi.html', 'manage' => false));
	echo '</li>';
	
	?>
	<li class="active"><a href="#">Giỏ hàng [5]</a></li>
</ul>