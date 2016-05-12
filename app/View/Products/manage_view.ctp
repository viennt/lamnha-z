<?php // pre process
	foreach ($product["ProductPrice"] as $key => $value) {
		if (!isset($value["finished"])) {
			$product['Product']['price'] = $value["price"];
		}
	}
?>
<div class="view_page box box-primary flat" style="margin: 0">
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
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-usd"></span>',
				array('controller' => 'productPrices', 'action' => 'index', $product['Product']['id']),
				array('class' => 'btn btn-sm btn-info btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Giá')
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
						<div class="col-all-5">Tình trạng:</div>
						<div class="col-all-7"><?php 
							if($product['Product']['published'] == '1'):
								echo '<div class="label label-success">Công khai</div> ';
								echo $this->Form->postLink('Ẩn sản phẩm',
									array('action' => 'changePublished', $product['Product']['id'], $product['Product']['published']),
									array('class' => 'label label-default', 'escape' => false)
									);
							else:
								echo $this->Form->postLink('Công khai sản phẩm',
									array('action' => 'changePublished', $product['Product']['id'], $product['Product']['published']),
									array('class' => 'label label-default', 'escape' => false)
									);
								echo ' <div class="label label-danger">Đang ẩn</div>';
							endif; 
						?></div>
					</div>
					<div class="row">
						<div class="col-all-5">Danh mục:</div>
						<div class="col-all-7">
							<?php echo $this->Html->link($product['ProductCategory']['name'], array('controller' => 'product_categories', 'action' => 'view', $product['ProductCategory']['id'])); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-all-5">Giá bán:</div>
						<div class="col-all-7"><?php 
							if(!isset($product['Product']['price']))
								echo '<span style="font-weight: bold; color: #D73925">', 'Chưa có giá', '</span>';
							else
								echo $this->Number->currency($product['Product']['price'], '', array('wholeSymbol' => ' ₫', 'wholePosition' => 'after', 'places' => 0, 'thousands' => '.')); 
						?></div>
					</div>
					<div class="row">
						<div class="col-all-5">Nhà cung cấp:</div>
						<div class="col-all-7">Công ty ABC</div>
					</div>
					<div class="row">
						<div class="col-all-5">Đặc điểm:</div>
						<div class="col-all-7">
							<?php echo h($product['Product']['specification']); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-all-5">Số lượng: </div>
						<div class="col-all-7">
							<?php echo h($product['Product']['quantity']); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-all-5">Hoa hồng:</div>
						<div class="col-all-7">
							<?php echo h($product['Product']['commision']), '%'; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-all-5">Đánh giá:</div>
						<div class="col-all-7">* * * * *</div>
					</div>
				</div>
				<div class="description col-all-12">
					<h4>CHI TIẾT SẢN PHẨM: </h4>
					<?php echo $product['Product']['description']; ?>
				</div>
			</div>
		</div>
		<figure class="col-sx-12 col-sm-12 col-md-12 col-lg-6">
			<div class="row non-margin">
				<div class="image col-all-12">
					<h4>HÌNH ẢNH SẢN PHẨM: </h4>
					<?php echo $this->Html->link(__(' Thêm hình ảnh '),
						array('controller' => 'productImages', 'action' => 'add', $product['Product']['id']),
						array('class'=>'btn btn-sm btn-primary btn-flat col-lg-12')
						); ?>
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
					</div>
				</div>
				<div class="video col-all-12">
					<h4>VIDEO SẢN PHẨM: </h4>
					<?php echo $this->Html->link(__(' Thêm Video '),
						array('controller' => 'productVideos', 'action' => 'add', $product['Product']['id']),
						array('class'=>'btn btn-sm btn-primary btn-flat col-lg-12')
						); ?>
					<div class="row">
						<?php foreach($product['ProductVideo'] as $video): ?>
						<div class="col-sx-12 col-sm-12 col-md-6 col-lg-6">
							<div class="thumbnail ">
								<div class="embed-responsive embed-responsive-16by9">
								<iframe src=<?php echo 'https://www.youtube.com/embed/'.$video['code'] ?> frameborder="0" allowfullscreen></iframe></div>
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
					</div>
				</div>
			</div>
		</figure>
	</div>
</div>