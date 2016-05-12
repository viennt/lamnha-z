<h3>Dự án nổi bật</h3><hr>
<div class="publicList">
	<div class="list-items row" id="load-content">
		<?php foreach ($projects as $project): ?>
 		<div class="col-sx-6 col-sm-3 col-md-3 col-lg-3">
			<div class="inner">
				<?php echo $this->Html->image(
					'noimage.jpg', 
					array(
						'alt' => isset($project['ProjectImage'][0]['description']) ? $project['ProjectImage'][0]['description'] : 'lamnha-z',
						'url' => array('controller' => 'projects', 'action' => 'view', 'id' => $project['Project']['id'], 'slug' => $this->Common->convertViToEn($project['Project']['name'], true)),
						'class' => 'lazy',
						'data-original' => isset($project['ProjectImage'][0]['name']) ? $this->webroot.'img/uploads/projects/images/'.$project['ProjectImage'][0]['name'] : '#'
					)); ?>
				<div class="detail">
					<h5><strong>
						<?php echo $this->Html->link($project['Project']['name'], array('controller' => 'projects', 'action' => 'view', 'id' => $project['Project']['id'], 'slug' => $this->Common->convertViToEn($project['Project']['name'], true))); ?>
					</strong></h5>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>

<h3>Sản phẩm nổi bật | Sản phẩm mới</h3><hr>
<div class="publicList">
	<div class="list-items row" id="load-content">
		<?php foreach ($products as $product): ?>
 		<div class="col-sx-6 col-sm-3 col-md-3 col-lg-3">
			<div class="inner">
				<?php echo $this->Html->image(
					'noimage.jpg', 
					array(
						'alt' => isset($product['ProductImage'][0]['description']) ? $product['ProductImage'][0]['description'] : 'lamnha-z',
						'url' => array('controller' => 'products', 'action' => 'view', 'id' => $product['Product']['id'], 'slug' => $this->Common->convertViToEn($product['Product']['name'], true)),
						'class' => 'lazy',
						'data-original' => isset($product['ProductImage'][0]['name']) ? $this->webroot.'img/uploads/products/'.$product['ProductImage'][0]['name'] : '#'
					)); ?>
				<div class="detail">
					<h5><strong>
						<?php echo $this->Html->link($product['Product']['name'], array('controller' => 'products', 'action' => 'view', 'id' => $product['Product']['id'], 'slug' => $this->Common->convertViToEn($product['Product']['name'], true))); ?>
					</strong></h5>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>

<h3>Dịch vụ nổi bật | Dịch vụ mới</h3><hr>
<div class="publicList">
	<div class="list-items row" id="load-content">
		<?php foreach ($services as $service): ?>
 		<div class="col-sx-6 col-sm-3 col-md-3 col-lg-3">
			<div class="inner">
				<?php echo $this->Html->image(
					'noimage.jpg', 
					array(
						'alt' => isset($service['ServiceImage'][0]['description']) ? $service['ServiceImage'][0]['description'] : 'lamnha-z',
						'url' => array('controller' => 'services', 'action' => 'view', 'id' => $service['Service']['id'], 'slug' => $this->Common->convertViToEn($service['Service']['name'], true)),
						'class' => 'lazy',
						'data-original' => isset($service['ServiceImage'][0]['name']) ? $this->webroot.'img/uploads/services/'.$service['ServiceImage'][0]['name'] : '#'
					)); ?>
				<div class="detail">
					<h5><strong>
						<?php echo $this->Html->link($service['Service']['name'], array('controller' => 'services', 'action' => 'view', 'id' => $service['Service']['id'], 'slug' => $this->Common->convertViToEn($service['Service']['name'], true))); ?>
					</strong></h5>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>
<hr>