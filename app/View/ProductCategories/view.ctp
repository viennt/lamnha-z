<!-- Products -->
<div class="products">
	<ol class="breadcrumb"><?php 
		$i = 0;
		$len = count($crumbs);
		foreach ($crumbs as $crumb):
			if($crumb['ProductCategory']['id'] == '1'):
				echo '<li>', $this->Html->link(__('Sản phẩm'), array('controller' => 'danh-muc-san-pham.html', 'manage' => false)),'</li>';
			else:
				if($i == $len - 1) echo '<li class="active">', $crumb['ProductCategory']['name'], '</li>';
				else echo '<li>', $this->Html->link($crumb['ProductCategory']['name'], array('controller' => 'productCategories', 'action' => 'view', 'id' => $crumb['ProductCategory']['id'], 'slug' => $this->Common->convertViToEn($crumb['ProductCategory']['name'], true))), '</li>';
			endif;
			$i++;
		endforeach;
		unset($i);
		unset($len);
	?></ol>
	<div class="list-items" id="load-content">
		<ul>
			<?php foreach ($productCategory['Product'] as $product): ?>
			<li style="width: 190px">
			<div class="drag-item" style="width: 190px">
				<div class="inner">
					<?php echo $this->Html->image('product.jpg', array('alt' => 'CakePHP', 'url' => array('controller' => 'products', 'action' => 'view', 'id' => $product['id'], 'slug' => $this->Common->convertViToEn($product['name'], true)))); ?>
					<div class="detail">
						<h5><strong><?php echo $product['name']; ?></strong></h5>
						<h5><small><?php echo $product['specification']; ?></small></h5>
						<span><?php echo $product['unit']; ?></span>
					</div>
				</div>
			</div>
			</li>
			<?php endforeach; ?>
			<?php foreach ($products as $product): ?>
			<li style="width: 190px">
			<div class="drag-item" style="width: 190px">
				<div class="inner">
					<?php echo $this->Html->image('product.jpg', array('alt' => 'CakePHP', 'url' => array('controller' => 'products', 'action' => 'view', 'id' => $product['Product']['id'], 'slug' => $this->Common->convertViToEn($product['Product']['name'], true)))); ?>
					<div class="detail">
						<h5><strong><?php echo $product['Product']['name']; ?></strong></h5>
						<h5><small><?php echo $product['Product']['specification']; ?></small></h5>
						<span><?php echo $product['Product']['unit']; ?></span>
					</div>
				</div>
			</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<script src=<?php echo $this->webroot,'plugins/easyui/jquery.easyui.min.js'; ?>></script>