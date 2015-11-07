<ul class="nav">
	<?php
	echo '<li>';
	echo $this->Html->link(__('Trang chủ'), array('controller' => 'home.html', 'manage' => false));
	echo '</li>';
	echo '<li>';
	echo $this->Html->link(__('Tin tức'), array('controller' => 'danh-muc-tin-tuc.html', 'manage' => false));
	echo '</li>';
	echo '<li>';
	echo $this->Html->link(__('Dự án'), array('controller' => 'danh-muc-du-an.html', 'manage' => false));
	echo '</li>';
	echo '<li>';
	echo $this->Html->link(__('Sản phẩm'), array('controller' => 'danh-muc-san-pham.html', 'manage' => false));
	echo '</li>';
	echo '<li>';
	echo $this->Html->link(__('Dịch vụ'), array('controller' => 'danh-muc-dich-vu.html', 'manage' => false));
	echo '</li>';
	
	?>
	<li class=" active"><a href="#">Giỏ hàng [5]</a></li>
</ul>