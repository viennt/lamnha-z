<link rel="stylesheet" type="text/css" href=<?php echo $this->webroot.'plugins/ionslider/ion.rangeSlider.skinNice.css'; ?>>
<link rel="stylesheet" type="text/css" href=<?php echo $this->webroot.'plugins/ionslider/ion.rangeSlider.css'; ?>>
<div class="products row" style="margin: 0">
	<div class="col-lg-12"><h3><?php echo h($product['Product']['name']); ?></h3></div>
	<div class="col-lg-8" style="border-right: 1px dashed #E5E5E5">
		<div class="row">
			<div class="detail col-sx-2 col-sm-12 col-md-5 col-lg-5">
				<figure class="thumbnail productImage">
					<?php echo $this->Html->image(
						'product.jpg', 
						array('alt' => '', 'id' => 'mainImg')
					); ?>
				</figure>
			</div>
			<div class="info col-sx-2 col-sm-12 col-md-7 col-lg-7">
				<div class="price col-sx-12">200.000đ</div>
				<div class="row">
					<div class="line col-sx-5 col-sm-5 col-md-5 col-lg-5">Nhà cung cấp:</div>
					<div class="line col-sx-7 col-sm-7 col-md-7 col-lg-7">Công ty ABC</div>
				</div>
				<div class="row">
					<div class="line col-sx-5 col-sm-5 col-md-5 col-lg-5">Danh mục:</div>
					<div class="line col-sx-7 col-sm-7 col-md-7 col-lg-7">
						<?php echo $this->Html->link($product['ProductCategory']['name'], array('controller' => 'product_categories', 'action' => 'view', $product['ProductCategory']['id'])); ?>
					</div>
				</div>
				
				<div class="row">
					<div class="line col-sx-5 col-sm-5 col-md-5 col-lg-5">Đặc điểm:</div>
					<div class="line col-sx-7 col-sm-7 col-md-7 col-lg-7">
						<?php echo h($product['Product']['specification']); ?>
					</div>
				</div>
				<div class="row">
					<div class="line col-sx-5 col-sm-5 col-md-5 col-lg-5">Đánh giá:</div>
					<div class="line col-sx-7 col-sm-7 col-md-7 col-lg-7">* * * * *</div>
				</div>
				<div class="row">
					<div class="line col-sx-5 col-sm-5 col-md-5 col-lg-5">S.lượng (<?php echo h($product['Product']['unit']); ?>):</div>
					<div class="line col-sx-7 col-sm-7 col-md-7 col-lg-7 row">
						<div class="col-sx-9 col-sm-9 col-md-9 col-lg-9">
							<input type="single" id="example_id" name="example_name" value="" />
						</div>
						<input class="col-sx-3 col-sm-3 col-md-3 col-lg-3 non-left non-right" type="number" name="quantity" min="1" max="5" value="1">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sx-2 col-sm-12 col-md-5 col-lg-5">
				<div class="moreImages row" style="margin: 0" align="center">
					<div class="thumbnail non-border pointer col-sx-2 col-sm-2 col-md-2 col-lg-2">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</div>
					<figure class="thumbnail non-border pointer col-sx-2 col-sm-2 col-md-2 col-lg-2">
						<?php echo $this->Html->image(
							'product.jpg', 
							array('alt' => '', 'id' => 'subImg', 'onclick' => 'changeImage(this)')
						); ?>
					</figure>
					<figure class="thumbnail non-border pointer col-sx-2 col-sm-2 col-md-2 col-lg-2">
						<?php echo $this->Html->image(
							'product.jpg', 
							array('alt' => '', 'id' => 'subImg', 'onclick' => 'changeImage(this)')
						); ?>
					</figure>
					<figure class="thumbnail non-border pointer col-sx-2 col-sm-2 col-md-2 col-lg-2">
						<?php echo $this->Html->image(
							'product.jpg', 
							array('alt' => '', 'id' => 'subImg', 'onclick' => 'changeImage(this)')
						); ?>
					</figure>
					<figure class="thumbnail non-border pointer col-sx-2 col-sm-2 col-md-2 col-lg-2">
						<?php echo $this->Html->image(
							'product.jpg', 
							array('alt' => '', 'id' => 'subImg', 'onclick' => 'changeImage(this)')
						); ?>
					</figure>
					<div class="thumbnail non-border pointer col-sx-2 col-sm-2 col-md-2 col-lg-2">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</div>
				</div>
			</div>
			<div class="col-sx-2 col-sm-12 col-md-7 col-lg-7">
				<button class="btn btn-block btn-flat btn-warning">Thêm vào dự án</button>
			</div>
		</div>
		<div class="row">
			<div class="col-sx-12 col-sm-12 col-md-12 col-lg-12">
				<?php echo $product['Product']['description']; ?>
			</div>
		</div>
	</div>
	<div class="col-lg-4" style="border-left: 1px dashed #E5E5E5;">
		a
	</div>
</div>


<script src=<?php echo $this->webroot.'plugins/ionslider/ion.rangeSlider.min.js'; ?>></script>
<script type="text/javascript">
$(document).ready(function () {
	$("#example_id").ionRangeSlider();
});
function changeImage(subImg) {
	$('#mainImg').attr('src', $(subImg).attr('src'));
}
</script>


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