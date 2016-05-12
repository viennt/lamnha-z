<?php // pre process
	foreach ($service["ServicePrice"] as $key => $value) {
		if (!isset($value["finished"])) {
			$service['Service']['price'] = $value["price"];
		}
	}
?>
<div class="view_page box box-primary flat" style="margin: 0">
	<div class="box-header with-border">
		<h3 class="box-title">Dịch vụ: <?php echo h($service['Service']['name']); ?></h3>
		<div class="pull-right box-tools">
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-list-alt"></span>',
				array('controller'=> 'services', 'action' => 'index'),
				array('class' => 'btn btn-sm btn-default btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Danh sách dịch vụ')
				);?>
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-eye-open"></span>',
				array('controller'=> 'services', 'action' => 'view', 'slug' => $this->Common->convertViToEn($service['Service']['name'],true), 'id' => $service['Service']['id'], 'manage' => false),
				array('class' => 'btn btn-sm btn-warning btn-flat', 'target' => '_blank', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Xem lại')
				);?>
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-edit"></span>',
				array('action' => 'edit', $service['Service']['id']),
				array('class' => 'btn btn-sm btn-success btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Chỉnh sửa')
				);?>
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-usd"></span>',
				array('controller' => 'servicePrices', 'action' => 'index', $service['Service']['id']),
				array('class' => 'btn btn-sm btn-info btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Giá')
				);?>
			<?php echo $this->Form->postLink(
				'<span class="glyphicon glyphicon-remove"></span>',
				array('action' => 'delete', $service['Service']['id']),
				array('class' => 'btn btn-sm btn-danger btn-flat', 'confirm' => __('Are you sure you want to delete # %s?', $service['Service']['id']), 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Xóa')
				);?>
		</div>
	</div>
	<div class="row non-margin">
		<div class="col-sx-12 col-sm-12 col-md-12 col-lg-6">
			<div class="row non-margin">
				<div class="detail col-all-12">
					<h4>THÔNG TIN DỊCH VỤ: </h4>
					<div class="row">
						<div class="col-all-5">Tình trạng:</div>
						<div class="col-all-7"><?php 
							if($service['Service']['published'] == '1'):
								echo '<div class="label label-success">Công khai</div> ';
								echo $this->Form->postLink('Ẩn dịch vụ',
									array('action' => 'changePublished', $service['Service']['id'], $service['Service']['published']),
									array('class' => 'label label-default', 'escape' => false)
									);
							else:
								echo $this->Form->postLink('Công khai dịch vụ',
									array('action' => 'changePublished', $service['Service']['id'], $service['Service']['published']),
									array('class' => 'label label-default', 'escape' => false)
									);
								echo ' <div class="label label-danger">Đang ẩn</div>';
							endif; 
						?></div>
					</div>
					<div class="row">
						<div class="col-all-5">Danh mục:</div>
						<div class="col-all-7">
							<?php echo $this->Html->link($service['ServiceCategory']['name'], array('controller' => 'productCategories', 'action' => 'view', $service['ServiceCategory']['id'])); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-all-5">Giá bán:</div>
						<div class="col-all-7"><?php 
							if(!isset($service['Service']['price']))
								echo '<span style="font-weight: bold; color: #D73925">', 'Chưa có giá', '</span>';
							else
								echo $this->Number->currency($service['Service']['price'], '', array('wholeSymbol' => ' ₫', 'wholePosition' => 'after', 'places' => 0, 'thousands' => '.'));
						?></div>
					</div>
					<div class="row">
						<div class="col-all-5">Nhà cung cấp:</div>
						<div class="col-all-7">
							<?php echo $this->Html->link($service['Service']['user_id'], array('controller' => 'users', 'action' => 'view', $service['Service']['user_id'])); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-all-5">Đánh giá:</div>
						<div class="col-all-7">* * * * *</div>
					</div>
				</div>
				<div class="description col-all-12">
					<h4>CHI TIẾT DỊCH VỤ: </h4>
					<?php echo $service['Service']['description']; ?>
				</div>
			</div>
		</div>
		<figure class="col-sx-12 col-sm-12 col-md-12 col-lg-6">
			<div class="row non-margin">
				<div class="image col-all-12">
					<h4>HÌNH ẢNH DỊCH VỤ: </h4>
					<?php echo $this->Html->link(__(' Thêm hình ảnh '),
						array('controller' => 'productImages', 'action' => 'add', $service['Service']['id']),
						array('class'=>'btn btn-sm btn-primary btn-flat col-lg-12 disabled')
						); ?>
					<!-- Tính năng có thể thêm -->
					<!-- <div class="row">
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
										array('class' => 'btn btn-xs col-all-6 btn-success btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Chỉnh sửa hình ảnh')
										);?>
									<?php echo $this->Html->link(
										'<span class="glyphicon glyphicon-remove"></span>',
										array('controller'=> 'productImages', 'action' => 'delete', $image['id']),
										array('class' => 'btn btn-xs col-all-6 btn-danger btn-flat', 'confirm' => __('Are you sure you want to delete # %s?', $image['id']), 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Xóa hình ảnh')
										);?>
									</p>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div> -->
				</div>
				<div class="video col-all-12">
					<h4>VIDEO DỊCH VỤ: </h4>
					<?php echo $this->Html->link(__(' Thêm Video '),
						array('controller' => 'productVideos', 'action' => 'add', $service['Service']['id']),
						array('class'=>'btn btn-sm btn-primary btn-flat col-lg-12 disabled')
						); ?>
					<!-- Tính năng có thể thêm -->
					<!-- <div class="row">
						<?php foreach($product['ProductVideo'] as $video): ?>
						<div class="col-sx-12 col-sm-12 col-md-6 col-lg-6">
							<div class="thumbnail">
								<iframe width="100%" height="150" src=<?php echo 'https://www.youtube.com/embed/'.$video['code'] ?> frameborder="0" allowfullscreen></iframe>
								<div class="caption">
									<p>
									<?php echo $this->Html->link(
										'<span class="glyphicon glyphicon-edit"></span>',
										array('controller'=> 'productVideos', 'action' => 'edit', $video['id']),
										array('class' => 'btn btn-xs col-all-6 btn-success btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Chỉnh sửa hình ảnh')
										);?>
									<?php echo $this->Html->link(
										'<span class="glyphicon glyphicon-remove"></span>',
										array('controller'=> 'productVideos', 'action' => 'delete', $video['id']),
										array('class' => 'btn btn-xs col-all-6 btn-danger btn-flat', 'confirm' => __('Are you sure you want to delete # %s?', $video['id']), 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Xóa hình ảnh')
										);?>
									</p>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div> -->
				</div>
			</div>
		</figure>
	</div>
</div>



<!--<div class="related">
	<?php foreach ($service['ServicePrice'] as $servicePrice): ?>
		<tr>
			<td><?php echo $servicePrice['id']; ?></td>
			<td><?php echo $servicePrice['price']; ?></td>
			<td><?php echo $servicePrice['started']; ?></td>
			<td><?php echo $servicePrice['finished']; ?></td>
			<td><?php echo $servicePrice['service_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'service_prices', 'action' => 'view', $servicePrice['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'service_prices', 'action' => 'edit', $servicePrice['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'service_prices', 'action' => 'delete', $servicePrice['id']), array(), __('Are you sure you want to delete # %s?', $servicePrice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
</div>-->