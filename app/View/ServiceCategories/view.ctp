<!-- Service -->
<div class="products">
	<ol class="breadcrumb"><?php 
		$i = 0;
		$len = count($crumbs);
		foreach ($crumbs as $crumb):
			if($crumb['ServiceCategory']['id'] == '1'):
				echo '<li>', $this->Html->link(__('Dịch vụ'), array('controller' => 'danh-muc-dich-vu.html', 'manage' => false)),'</li>';
			else:
				if($i == $len - 1) echo '<li class="active">', $crumb['ServiceCategory']['name'], '</li>';
				else echo '<li>', $this->Html->link($crumb['ServiceCategory']['name'], array('controller' => 'serviceCategories', 'action' => 'view', 'id' => $crumb['ServiceCategory']['id'], 'slug' => $this->Common->convertViToEn($crumb['ServiceCategory']['name'], true))), '</li>';
			endif;
			$i++;
		endforeach;
		unset($i);
		unset($len);
	?></ol>
	<div class="list-items" id="load-content">
		<ul>
			<?php foreach ($serviceCategory['Service'] as $service): ?>
			<li style="width: 190px">
			<div class="drag-item" style="width: 190px">
				<div class="inner">
					<?php echo $this->Html->image('product.jpg', array('alt' => 'CakePHP', 'url' => array('controller' => 'services', 'action' => 'view', 'id' => $service['id'], 'slug' => $this->Common->convertViToEn($service['name'], true)))); ?>
					<div class="detail">
						<h5><strong><?php echo $service['name']; ?></strong></h5>
						<h5><small><?php echo $service['user_id']; ?></small></h5>
						<span><?php echo '12334'; ?></span>
					</div>
				</div>
			</div>
			</li>
			<?php endforeach; ?>
			<?php foreach ($services as $service): ?>
			<li style="width: 190px">
			<div class="drag-item" style="width: 190px">
				<div class="inner">
					<?php echo $this->Html->image('product.jpg', array('alt' => 'CakePHP', 'url' => array('controller' => 'services', 'action' => 'view', 'id' => $service['Service']['id'], 'slug' => $this->Common->convertViToEn($service['Service']['name'], true)))); ?>
					<div class="detail">
						<h5><strong><?php echo $service['Service']['name']; ?></strong></h5>
						<h5><small><?php echo $service['Service']['user_id']; ?></small></h5>
						<span><?php echo '12334'; ?></span>
					</div>
				</div>
			</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<script src=<?php echo $this->webroot,'plugins/easyui/jquery.easyui.min.js'; ?>></script>