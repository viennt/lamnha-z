<div class="products box box-primary flat" style="margin: 0">
	<div class="box-header with-border">
		<h3 class="box-title">Sản phẩm: <?php echo h($product['Product']['name']); ?></h3>
		<div class="pull-right box-tools">
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-list-alt"></span>',
				array('controller'=> 'products', 'action' => 'index'),
				array('class' => 'btn btn-sm btn-default btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Danh sách sản phẩm')
				);?>
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-eye-open"></span>',
				array('controller'=> 'products', 'action' => 'view', 'slug' => $this->Common->convertViToEn($product['Product']['name'],true), 'id' => $product['Product']['id'], 'manage' => false),
				array('class' => 'btn btn-sm btn-warning btn-flat', 'target' => '_blank', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Xem lại')
				);?>
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-edit"></span>',
				array('action' => 'edit', $product['Product']['id']),
				array('class' => 'btn btn-sm btn-success btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Chỉnh sửa')
				);?>
			<?php echo $this->Form->postLink(
				'<span class="glyphicon glyphicon-remove"></span>',
				array('action' => 'delete', $product['Product']['id']),
				array('class' => 'btn btn-sm btn-danger btn-flat', 'confirm' => __('Are you sure you want to delete # %s?', $product['Product']['id']), 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Xóa')
				);?>
		</div>
	</div>
	<div class="row non-margin">
		<div class="col-sx-12 col-sm-12 col-md-12 col-lg-6">
			<div class="row non-margin">
				<div class="detail col-all-12">
					<h4>THÔNG TIN SẢN PHẨM: </h4>
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
				<div class="col-all-12">
					<h4>CHI TIẾT SẢN PHẨM: </h4>
					<?php echo $product['Product']['description']; ?>
				</div>
			</div>
		</div>
		<figure class="col-sx-12 col-sm-12 col-md-12 col-lg-6">
			<div class="row non-margin">
				<div class="image col-all-12">
					<h4>HÌNH ẢNH SẢN PHẨM: </h4>
					<div class="row">
						<?php foreach($product['ProductImage'] as $image): ?>
						<div class="col-sx-12 col-sm-6 col-md-4 col-lg-4">
							<div class="thumbnail">
								<?php echo $this->Html->image(
									'uploads/products/'.$image['name'], 
									array('alt' => 'name')
									); ?>
								<div class="caption">
									<p>
									<?php echo $this->Html->link(
										'<span class="glyphicon glyphicon-edit"></span>',
										array('controller'=> 'productImages', 'action' => 'edit', $image['id']),
										array('class' => 'btn col-all-6 btn-success btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Danh sách sản phẩm')
										);?>
									<?php echo $this->Html->link(
										'<span class="glyphicon glyphicon-remove"></span>',
										array('controller'=> 'productImages', 'action' => 'delete', $image['id']),
										array('class' => 'btn col-all-6 btn-danger btn-flat', 'confirm' => __('Are you sure you want to delete # %s?', $image['id']), 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Danh sách sản phẩm')
										);?>
									</p>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					<?php echo $this->Html->link(__(' Thêm hình ảnh '),
						array('controller' => 'productImages', 'action' => 'add', $product['Product']['id']),
						array('class'=>'btn btn-sm btn-primary btn-flat col-lg-12')
						); ?>
				</div>
				<div class="col-all-12">
					<h4>VIDEO SẢN PHẨM: </h4>
				</div>
			</div>
		</figure>
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