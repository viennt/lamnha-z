<!-- Service -->
<div class="list-items">
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
	<div class="row" id="load-content">
		<?php foreach ($serviceCategory['Service'] as $service): ?>
		<div class="item span3 col-sm-6 col-md-4 col-lg-3">
			<div class="inner">
				<?php echo $this->Html->image('product.jpg', array('alt' => 'CakePHP', 'url' => array('controller' => 'services', 'action' => 'view', 'id' => $service['id'], 'slug' => $this->Common->convertViToEn($service['name'], true)))); ?>
				<div class="detail">
					<h5><strong><?php echo $service['name']; ?></strong></h5>
					<h5><small><?php echo $service['user_id']; ?></small></h5>
					<span><?php echo $service['price']; ?></span>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
		<?php foreach ($services as $service): ?>
		<div class="item span3 col-sm-6 col-md-4 col-lg-3">
			<div class="inner">
				<?php echo $this->Html->image('product.jpg', array('alt' => 'CakePHP', 'url' => array('controller' => 'services', 'action' => 'view', 'id' => $service['Service']['id'], 'slug' => $this->Common->convertViToEn($service['Service']['name'], true)))); ?>
				<div class="detail">
					<h5><strong><?php echo $service['Service']['name']; ?></strong></h5>
					<h5><small><?php echo $service['Service']['user_id']; ?></small></h5>
					<span><?php echo $service['Service']['price']; ?></span>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
	<div class="btn btn-flat btn-warning col-all-12" id="load-btn">Xem thêm</div>
</div>


<script type="text/javascript" async>
$("#load-btn").on("click", function() {
	$.ajax({
		"url": "<?php echo $this->Html->url(array('controller' => 'load.php')); ?>",
		"type": "get",
		"dataType": "html",
		"success": function(data) {
			$("#load-content").append(data);
		}
	})
	.done(function( data ) {
	    $("#load-content").append(data);
  });
});
</script>
