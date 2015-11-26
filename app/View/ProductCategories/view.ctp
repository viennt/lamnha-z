<!-- Products -->
<div class="publicList">
	<div class="list-items" id="load-content">
		<ul>
 			<?php foreach ($products as $product): ?>
			<li style="width: 190px">
			<div class="drag-item" style="width: 190px">
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
						<h5><small>Nhà cung cấp: Công ty ABC</small></h5>
					</div>
				</div>
			</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<script src=<?php echo $this->webroot,'plugins/easyui/jquery.easyui.min.js'; ?>></script>