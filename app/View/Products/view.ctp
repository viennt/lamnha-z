<link rel="stylesheet" type="text/css" href=<?php echo $this->webroot.'plugins/bootstrap-slider/slider.css'; ?> media='all'>
<link rel="stylesheet" type="text/css" href=<?php echo $this->webroot.'css/magnify.css'; ?> media='all'>
<div class="products row" style="margin: 0">
	<h1><?php echo h($product['Product']['name']); ?></h1>
	<div class="product-name col-all-12"><h3><?php echo h($product['Product']['name']); ?></h3></div>
	<div class="col-lg-8" style="border-right: 1px dashed #E5E5E5">
		<div class="row">
			<div class="images col-sx-2 col-sm-12 col-md-5 col-lg-5">
				<figure class="thumbnail productImage">
					<?php
					if(isset($product['ProductImage'][0]['name']))
						echo $this->Html->image(
							'uploads/products/'.$product['ProductImage'][0]['name'], 
							array('alt' => $product['ProductImage'][0]['description'], 'id' => 'mainImg', 'data-magnify-src' => $this->webroot.'img/uploads/products/'.$product['ProductImage'][0]['name'])
						); ?>
				</figure>
				<div class="moreImages row">
					<a href="#" class="btn btn-sm" style="float: left">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<div class="non-border non-padding col-all-9">
					<?php foreach ($product['ProductImage'] as $productImage): ?>
						<figure class="thumbnail non-border pointer col-all-4">
							<?php echo $this->Html->image(
								'uploads/products/'.$productImage['name'], 
								array('alt' => $productImage['description'], 'id' => 'subImg-'.$productImage['id'], 'onclick' => 'changeImage(this)')
							); ?>
						</figure>
					<?php endforeach; ?>
					</div>
					<a href="#" class="btn btn-sm" style="float: right">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
			<div class="detail col-sx-2 col-sm-12 col-md-7 col-lg-7">
				<div class="info">
					<div class="price col-sx-12">200.000đ</div>
					<div class="row">
						<div class="line col-all-5">Nhà cung cấp:</div>
						<div class="line col-all-7">Công ty ABC</div>
					</div>
					<div class="row">
						<div class="line col-all-5">Danh mục:</div>
						<div class="line col-all-7">
							<?php echo $this->Html->link($product['ProductCategory']['name'], array('controller' => 'product_categories', 'action' => 'view', $product['ProductCategory']['id'])); ?>
						</div>
					</div>
					
					<div class="row">
						<div class="line col-all-5">Đặc điểm:</div>
						<div class="line col-all-7">
							<?php echo h($product['Product']['specification']); ?>
						</div>
					</div>
					<div class="row">
						<div class="line col-all-5">Đánh giá:</div>
						<div class="line col-all-7">* * * * *</div>
					</div>
					<div class="row">
						<div class="line col-all-5">S.lượng (<?php echo h($product['Product']['unit']); ?>):</div>
						<div class="line row col-all-7">
							<div class="col-all-9">
								<input id="quantity" type="text" data-slider-min="1" data-slider-max="20" data-slider-step="1" data-slider-value="1" data-slider-tooltip="hide">
							</div>
							<input id="quantityVal" class="form-control non-left non-right col-all-3" type="number" name="quantity" min="1" max="20" value="1">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-all-12">
						<button class="btn btn-block btn-flat btn-warning">Thêm vào dự án</button>
					</div>
				</div>
			</div>
			<div class="col-all-12">
				<?php echo $product['Product']['description']; ?>
			</div>
		</div>
		<div class="row">
		</div>
	</div>
	<div class="col-lg-4" style="border-left: 1px dashed #E5E5E5;">
		<div class="comment">
			<div class="row">
				<div class="form-group col-all-12">
					<span class="glyphicon glyphicon-star star-rating"></span> 
					<span class="glyphicon glyphicon-star star-rating"></span> 
					<span class="glyphicon glyphicon-star star-rating"></span> 
					<span class="glyphicon glyphicon-star-empty star-rating"></span> 
					<span class="glyphicon glyphicon-star-empty star-rating"></span> 
					<textarea class="form-control content" rows="3" placeholder="Nhận xét của bạn"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-all-12">
					<input type="text" class="form-control col-all-6" placeholder="Tên">
					<button class="btn btn-flat btn-warning submit col-all-5">Thêm bình luận</button>
				</div>
			</div>
		</div>
	</div>
</div>


<script src=<?php echo $this->webroot.'plugins/bootstrap-slider/bootstrap-slider.js'; ?>></script>
<script src=<?php echo $this->webroot.'js/jquery.magnify.js'; ?>></script>
<script type="text/javascript">
$(document).ready(function () {
	$("#quantity").slider();
	$("#quantity").on("slide", function(slideEvt) {
		$("#quantityVal").val(slideEvt.value);
	});

	$("#mainImg").magnify();
});	
var changeImage = function(subImg) {
	console.log("a");
	$("#mainImg").attr("src", $(subImg).attr("src"));
	$("#mainImg").attr("data-magnify-src", $(subImg).attr("src"));
	$("#mainImg").magnify();
};
</script>


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