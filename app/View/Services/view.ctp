<!--<link rel="stylesheet" type="text/css" href=<?php echo $this->webroot.'css/magnify.css'; ?> media='all'> -->
<div class="publicView row" style="margin: 0">
	<div class="name col-all-12"><h1><?php echo h($service['Service']['name']); ?></h1><hr></div>
	<div class="col-lg-8" style="border-right: 1px dashed #E5E5E5">
		<div class="row">
			<?php if(isset($service['ServiceImage'])): ?>
			<div class="images col-sx-2 col-sm-12 col-md-5 col-lg-5">
				<figure class="thumbnail publicViewImage">
					<?php if(isset($service['ServiceImage'][0]['name'])):
						echo $this->Html->image(
							'uploads/services/'.$service['ServiceImage'][0]['name'], 
							array('alt' => $service['ServiceImage'][0]['description'], 'id' => 'mainImg', 'data-magnify-src' => $this->webroot.'img/uploads/services/'.$service['ServiceImage'][0]['name'])
						);
						endif; ?>
				</figure>
				<div class="moreImages row">
					<a href="#" class="btn btn-sm" style="float: left">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<div class="non-border non-padding col-all-9">
					<?php foreach ($service['ServiceImage'] as $serviceImage): ?>
						<figure class="thumbnail non-border pointer col-all-4">
							<?php echo $this->Html->image(
								'uploads/services/'.$serviceImage['name'], 
								array('alt' => $serviceImage['description'], 'id' => 'subImg-'.$serviceImage['id'], 'onclick' => 'changeImage(this)')
							); ?>
						</figure>
					<?php endforeach;?>
					</div>
					<a href="#" class="btn btn-sm" style="float: right">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
			<?php endif;?>
			<div class="detail col-sx-2 col-sm-12 col-md-7 col-lg-7">
				<h2><?php echo h($service['ServiceCategory']['name']); ?></h2>
				<div class="info">
					<div class="price col-sx-12">
						<?php echo '200.000đ'; ?>
					</div>
					<div class="row">
						<div class="line col-all-5">Nhà cung cấp:</div>
						<div class="line col-all-7">
							<?php echo h($service['Service']['user_id']); ?>
						</div>
					</div>
					<div class="row">
						<div class="line col-all-5">Danh mục:</div>
						<div class="line col-all-7">
							<?php echo $this->Html->link($service['ServiceCategory']['name'], array('controller' => 'productCategories', 'action' => 'view', 'id' => $service['ServiceCategory']['id'], 'slug' => $this->Common->convertViToEn($service['ServiceCategory']['name'], true))); ?>
						</div>
					</div>
					<div class="row">
						<div class="line col-all-5">Đánh giá:</div>
						<div class="line col-all-7">* * * * *</div>
					</div>
				</div>
				<div class="row">
					<div class="col-all-12">
					<?php echo $this->Form->create('Cart', array('id'=>'add-form','url'=>array('controller'=>'carts','action'=>'addService')));
						echo $this->Form->hidden('service_id',array('value'=>$service['Service']['id']));
						echo $this->Form->submit('Add to cart',array('class'=>'btn btn-block btn-flat btn-warning'));
						echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
			<div class="col-all-12">
				<?php echo $service['Service']['description']; ?>
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