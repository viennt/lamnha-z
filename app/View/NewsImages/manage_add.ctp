<div class="newsImages box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php echo __('Thêm hình ảnh tin tức'); ?></h3>
		<div class="pull-right box-tools">
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-list-alt"></span>',
				array('controller'=> 'news', 'action' => 'index'),
				array('class' => 'btn btn-sm btn-default btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Danh sách tin tức')
				);?>
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-edit"></span>',
				array('controller'=> 'news', 'action' => 'view', $news_id),
				array('class' => 'btn btn-sm btn-info btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Trang tin tức')
				);?>
		</div>
	</div>
	<?php echo $this->Form->create('NewsImage', array(
		'inputDefaults' => array('div' => 'form-group'),
		'type' => 'file'
		)); ?>
		<div class="box-body"><?php
			echo $this->Form->input('name', array('class'=>'form-control', 'type' => 'file'));
			echo $this->Form->input('description', array('class'=>'form-control'));
			echo $this->Form->input('news_id', array('type'=>'hidden', 'value' => $news_id));
		?></div>
	<?php $options = array('label' => 'Submit', 'div' => array('class' => 'box-footer'), 'class' => array('input' => 'btn btn-primary btn-flat btn-sm col-lg-12'));
	echo $this->Form->end($options); ?>
</div>