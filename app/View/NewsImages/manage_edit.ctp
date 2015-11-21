<div class="newsImages box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php echo __('Chỉnh sửa hình ảnh tin tức'); ?></h3>
		<div class="pull-right box-tools">
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-list-alt"></span>',
				array('controller'=> 'news', 'action' => 'index'),
				array('class' => 'btn btn-sm btn-default btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Danh sách tin tức')
				);?>
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-edit"></span>',
				array('controller'=> 'news', 'action' => 'view', $this->data['News']['id']),
				array('class' => 'btn btn-sm btn-info btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Trang tin tức')
				);?>
		</div>
	</div>
	<?php echo $this->Form->create('NewsImage', array(
		'inputDefaults' => array('div' => 'form-group'),
		'type' => 'file'
		)); ?>
		<div class="box-body">
			<div class="row non-margin">
				<div class="thumbnail col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<?php echo $this->Html->image('uploads/news/'.$this->data['NewsImage']['name'], array('alt' => $this->data['NewsImage']['description'])); ?>
				</div>
			</div>
			<?php
			echo $this->Form->input('id', array('class'=>'form-control'));
			echo $this->Form->input('description', array('class'=>'form-control'));
			echo $this->Form->input('news_id', array('type'=>'hidden'));
		?></div>
	<?php $options = array('label' => 'Submit', 'div' => array('class' => 'box-footer'), 'class' => array('input' => 'btn btn-primary btn-flat btn-sm col-lg-12'));
	echo $this->Form->end($options); ?>
</div>