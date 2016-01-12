<div class="view_page box box-primary flat" style="margin: 0">
	<div class="box-header with-border">
		<h3 class="box-title">Tin tức: <?php echo h($news['News']['title']); ?></h3>
		<div class="pull-right box-tools">
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-list-alt"></span>',
				array('controller'=> 'news', 'action' => 'index'),
				array('class' => 'btn btn-sm btn-default btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Danh sách tin tức')
				);?>
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-eye-open"></span>',
				array('controller'=> 'news', 'action' => 'view', 'slug' => $this->Common->convertViToEn($news['News']['title'],true), 'id' => $news['News']['id'], 'manage' => false),
				array('class' => 'btn btn-sm btn-warning btn-flat', 'target' => '_blank', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Xem lại')
				);?>
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-edit"></span>',
				array('action' => 'edit', $news['News']['id']),
				array('class' => 'btn btn-sm btn-success btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Chỉnh sửa')
				);?>
			<?php echo $this->Form->postLink(
				'<span class="glyphicon glyphicon-remove"></span>',
				array('action' => 'delete', $news['News']['id']),
				array('class' => 'btn btn-sm btn-danger btn-flat', 'confirm' => __('Are you sure you want to delete # %s?', $news['News']['id']), 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Xóa')
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
							if($news['News']['published'] == '1'):
								echo '<div class="label label-success">Công khai</div> ';
								echo $this->Form->postLink('Ẩn tin tức',
									array('action' => 'changePublished', $news['News']['id'], $news['News']['published']),
									array('class' => 'label label-default', 'escape' => false)
									);
							else:
								echo $this->Form->postLink('Công khai tin tức',
									array('action' => 'changePublished', $news['News']['id'], $news['News']['published']),
									array('class' => 'label label-default', 'escape' => false)
									);
								echo ' <div class="label label-danger">Đang ẩn</div>';
							endif; 
						?></div>
					</div>
					<div class="row">
						<div class="col-all-5">Danh mục:</div>
						<div class="col-all-7">
							<?php echo $this->Html->link($news['NewsCategory']['name'], array('controller' => 'news_categories', 'action' => 'view', $news['NewsCategory']['id'])); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-all-5">Người đăng:</div>
						<div class="col-all-7">
							<?php echo h($news['News']['user_id']); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-all-5">Ngày đăng:</div>
						<div class="col-all-7">
							<?php echo h($news['News']['created']); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-all-5">Lượt xem:</div>
						<div class="col-all-7">
							<?php echo h($news['News']['view']); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-all-5">Tóm tắt:</div>
						<div class="col-all-7">
							<?php echo h($news['News']['abstract']); ?>
						</div>
					</div>
				</div>
				<div class="description col-all-12">
					<h4>NỘI DUNG: </h4>
					<?php echo $news['News']['detail']; ?>
				</div>
			</div>
		</div>
		<figure class="col-sx-12 col-sm-12 col-md-12 col-lg-6">
			<div class="row non-margin">
				<div class="image col-all-12">
					<h4>HÌNH ẢNH TIN TỨC: </h4>
					<?php echo $this->Html->link(__(' Thêm hình ảnh '),
						array('controller' => 'newsImages', 'action' => 'add', $news['News']['id']),
						array('class'=>'btn btn-sm btn-primary btn-flat col-lg-12')
						); ?>
					<div class="row">
						<?php foreach($news['NewsImage'] as $image): ?>
						<div class="col-sx-12 col-sm-6 col-md-4 col-lg-4">
							<div class="thumbnail">
								<?php echo $this->Html->image(
									'uploads/news/'.$image['name'], 
									array('alt' => 'name')
									); ?>
								<div class="caption">
									<p>
									<?php echo $this->Html->link(
										'<span class="glyphicon glyphicon-edit"></span>',
										array('controller'=> 'newsImages', 'action' => 'edit', $image['id']),
										array('class' => 'btn btn-xs col-all-6 btn-success btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Chỉnh sửa hình ảnh')
										);?>
									<?php echo $this->Html->link(
										'<span class="glyphicon glyphicon-remove"></span>',
										array('controller'=> 'newsImages', 'action' => 'delete', $image['id']),
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
						array('controller' => 'newsVideos', 'action' => 'add', $news['News']['id']),
						array('class'=>'btn btn-sm btn-primary btn-flat col-lg-12 disabled')
						); ?>
					<!-- Tính năng có thể thêm -->
					<!-- <div class="row">
						<?php foreach($news['newsVideo'] as $video): ?>
						<div class="col-sx-12 col-sm-12 col-md-6 col-lg-6">
							<div class="thumbnail ">
								<div class="embed-responsive embed-responsive-16by9">
								<iframe src=<?php echo 'https://www.youtube.com/embed/'.$video['code'] ?> frameborder="0" allowfullscreen></iframe></div>
								<div class="caption">
									<p>
									<?php echo $this->Html->link(
										'<span class="glyphicon glyphicon-edit"></span>',
										array('controller'=> 'newsVideos', 'action' => 'edit', $video['id']),
										array('class' => 'btn btn-xs col-all-6 btn-success btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Chỉnh sửa hình ảnh')
										);?>
									<?php echo $this->Html->link(
										'<span class="glyphicon glyphicon-remove"></span>',
										array('controller'=> 'newsVideos', 'action' => 'delete', $video['id']),
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