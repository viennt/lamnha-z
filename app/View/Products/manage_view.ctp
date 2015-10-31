<div class="products box" style="margin: 0">
	<div class="row">
		<div class="col-all-12" style="border-right: 1px dashed #E5E5E5">
			<div class="row">
				<div class="images col-sx-12 col-sm-12 col-md-12 col-lg-3">
					<figure class="thumbnail productImage" align="center">
						<?php echo $this->Html->image(
							'product.jpg', 
							array('alt' => '', 'id' => 'mainImg', 'data-magnify-src' => '/lamnha-z/img/product.jpg')
						); ?>
					</figure>
					<div class="moreImages row" style="margin: 0" align="center">
						<div class="thumbnail non-border pointer col-all-2">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</div>
						<figure class="thumbnail non-border non-padding pointer col-all-2">
							<?php echo $this->Html->image(
								'product.jpg', 
								array('alt' => '', 'id' => 'subImg', 'onclick' => 'changeImage(this)')
							); ?>
						</figure>
						<figure class="thumbnail non-border non-padding pointer col-all-2">
							<?php echo $this->Html->image(
								'product.jpg', 
								array('alt' => '', 'id' => 'subImg', 'onclick' => 'changeImage(this)')
							); ?>
						</figure>
						<figure class="thumbnail non-border non-padding pointer col-all-2">
							<?php echo $this->Html->image(
								'product.jpg', 
								array('alt' => '', 'id' => 'subImg', 'onclick' => 'changeImage(this)')
							); ?>
						</figure>
						<figure class="thumbnail non-border non-padding pointer col-all-2">
							<?php echo $this->Html->image(
								'product.jpg', 
								array('alt' => '', 'id' => 'subImg', 'onclick' => 'changeImage(this)')
							); ?>
						</figure>
						<div class="thumbnail non-border non-padding pointer col-all-2">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</div>
					</div>
				</div>
				<div class="detail col-sx-12 col-sm-12 col-md-12 col-lg-4">
					<div class="row">
						<div class="col-all-5">Tên:</div>
						<div class="col-all-7"><?php echo h($product['Product']['name']); ?></div>
					</div>
					<div class="row">
						<div class="col-all-5">Giá:</div>
						<div class="col-all-7">200.000đ</div>
					</div>
					<div class="row">
						<div class="col-all-5">Nhà cung cấp:</div>
						<div class="col-all-7">Công ty ABC</div>
					</div>
					<div class="row">
						<div class="col-all-5">Danh mục:</div>
						<div class="col-all-7">
							<?php echo $this->Html->link($product['ProductCategory']['name'], array('controller' => 'product_categories', 'action' => 'view', $product['ProductCategory']['id'])); ?>
						</div>
					</div>
					
					<div class="row">
						<div class="col-all-5">Đặc điểm:</div>
						<div class="col-all-7">
							<?php echo h($product['Product']['specification']); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-all-5">Đánh giá:</div>
						<div class="col-all-7">* * * * *</div>
					</div>
				</div>
				<div class=" col-sx-12 col-sm-12 col-md-12 col-lg-5">
					<?php echo $product['Product']['description']; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="related">
	<h3><?php echo __('Related Product Images'); ?></h3>
	<?php if (!empty($product['ProductImage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['ProductImage'] as $productImage): ?>
		<tr>
			<td><?php echo $productImage['id']; ?></td>
			<td><?php echo $productImage['name']; ?></td>
			<td><?php echo $productImage['description']; ?></td>
			<td><?php echo $productImage['product_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'product_images', 'action' => 'view', $productImage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'product_images', 'action' => 'edit', $productImage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'product_images', 'action' => 'delete', $productImage['id']), array(), __('Are you sure you want to delete # %s?', $productImage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product Image'), array('controller' => 'product_images', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Product Videos'); ?></h3>
	<?php if (!empty($product['ProductVideo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['ProductVideo'] as $productVideo): ?>
		<tr>
			<td><?php echo $productVideo['id']; ?></td>
			<td><?php echo $productVideo['code']; ?></td>
			<td><?php echo $productVideo['description']; ?></td>
			<td><?php echo $productVideo['product_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'product_videos', 'action' => 'view', $productVideo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'product_videos', 'action' => 'edit', $productVideo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'product_videos', 'action' => 'delete', $productVideo['id']), array(), __('Are you sure you want to delete # %s?', $productVideo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product Video'), array('controller' => 'product_videos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>