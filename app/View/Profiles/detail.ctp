<div class="profile row" style="margin: 0">
	<div class="info col-sx-12 col-sm-6 col-md-4 col-lg-3">
		<figure class="thumbnail">
			<img class="profile-user-img img-responsive" src="img/uploads/users/1446456920.jpg" alt="1446456920">
		</figure>
		<ul class="list-group list-group-unbordered">
			<li class="list-group-item">
				<i>Email: </i>
				<b class="pull-right"><?php echo h($profile['Profile']['email']); ?></b>
			</li>
			<li class="list-group-item">
				<i>Số điện thoại: </i>
				<b class="pull-right"><?php echo h($profile['Profile']['phone_number']); ?></b>
			</li>
			<li class="list-group-item">
				<i>Số CMND: </i>
				<b class="pull-right"><?php echo h($profile['Profile']['personal_number']); ?></b>
			</li>
			<li class="list-group-item">
				<i>Ngày sinh: </i>
				<b class="pull-right"><?php echo h($profile['Profile']['date_of_birth']); ?></b>
			</li>
			<li class="list-group-item">
				<i>Nơi sinh: </i>
				<b class="pull-right"><?php echo h($profile['Profile']['place_of_birth']); ?></b>
			</li>
			<li class="list-group-item">
				<i>Giới tính: </i>
				<b class="pull-right"><?php echo h($profile['Profile']['sex']); ?></b>
			</li>
			<li class="list-group-item">
				<i>Địa chỉ: </i><br/>
				<b><?php echo h($profile['Profile']['address']); ?></b>
			</li>
		</ul>
	</div>
	<div class="about col-sx-12 col-sm-6 col-md-8 col-lg-9">
		<h2><?php echo h($profile['Profile']['full_name']); ?></h2>
		<h5>Nhà cung cấp dịch vụ</h5>
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#active">Hoạt động</a></li>
			<li><a data-toggle="tab" href="#projects">Dự án</a></li>
			<li><a data-toggle="tab" href="#products">Sản phẩm</a></li>
			<li><a data-toggle="tab" href="#services">Dịch vụ</a></li>
			<li><a data-toggle="tab" href="#news">Bài viết</a></li>
			<li><a data-toggle="tab" href="#about">Thông tin</a></li>
			<li><a data-toggle="tab" href="#edit">Chỉnh sửa</a></li>
		</ul>

		<div class="tab-content">
			<div id="active" class="tab-pane fade in active">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div id="projects" class="tab-pane fade">
				<h3>Dự án đã hoàn thành</h3>
				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div id="products" class="tab-pane fade">
				<h3>Sản phẩm đã đăng</h3>
				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div id="services" class="tab-pane fade">
				<h3>Dịch vụ đã đăng</h3>
				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div id="news" class="tab-pane fade">
				<h3>Bài viết đã đăng</h3>
				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div id="about" class="tab-pane fade">
				<h3>Giới thiệu</h3>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis modi inventore quisquam debitis quos explicabo odit? Beatae tempora ex et sit esse temporibus dolore aut odit inventore. Odio, non! Quo.</p>
			</div>
			<div id="edit" class="tab-pane fade">
				<?php echo $this->Form->create('Profile', array(
					'action' => 'edit',
					'inputDefaults' => array('div' => 'form-group')
					)); ?>
					<div class="box-body"><?php
						echo $this->Form->input('id', array('class'=>'form-control'));
						echo $this->Form->input('user_id', array('type'=>'hidden', 'value' => $this->Session->read('Auth.User.id')));
						echo $this->Form->input('full_name', array('class'=>'form-control'));
						echo $this->Form->input('email', array('class'=>'form-control'));
						echo $this->Form->input('phone_number', array('class'=>'form-control'));
						echo $this->Form->input('personal_number', array('class'=>'form-control'));
						echo $this->Form->input('date_of_birth', array('type' => 'text', 'class'=>'form-control', 'data-inputmask' => '\'alias\': \'mm/dd/yyyy\'', 'data-mask' => ''));
						echo $this->Form->input('place_of_birth', array('class'=>'form-control'));
						echo $this->Form->input('sex', array('class'=>'form-control'));
						echo $this->Form->input('address', array('class'=>'form-control'));
					?></div>
				<?php $options = array('label' => 'Chỉnh sửa', 'div' => array('class' => 'box-footer'), 'class' => array('input' => 'btn btn-warning btn-flat btn-sm col-lg-12'));
				echo $this->Form->end($options); ?>
			</div>
		</div>
	</div>
</div>