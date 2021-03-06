<link rel="stylesheet" type="text/css" href=<?php echo $this->webroot.'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'; ?>>
<div class="news box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php echo __('Edit News'); ?></h3>
		<div class="pull-right box-tools">
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-list-alt"></span>',
				array('controller'=> 'news', 'action' => 'index'),
				array('class' => 'btn btn-default btn-sm btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Danh sách tin tức')
				);?>
		</div>
	</div>
	<?php echo $this->Form->create('News', array(
		'inputDefaults' => array('div' => 'form-group')
		)); ?>
		<div class="box-body"><?php
			echo $this->Form->input('id', array('class'=>'form-control'));
			echo $this->Form->input('title', array('class'=>'form-control', 'label' => 'Tiêu đề'));
			echo $this->Form->input('abstract', array('class'=>'form-control', 'label' => 'Tóm tắt'));
			echo $this->Form->input('detail', array('class'=>'form-control', 'id' => 'description-textarea', 'label' => 'Chi tiết'));
			echo $this->Form->input('user_id', array('type'=>'hidden', 'value' => $user_id));
			echo $this->Form->input('news_category_id', array('class'=>'form-control', 'label' => 'Danh mục'));
		?></div>
	<?php $options = array('label' => 'Submit', 'div' => array('class' => 'box-footer'), 'class' => array('input' => 'btn btn-primary btn-flat btn-sm col-lg-12'));
	echo $this->Form->end($options); ?>
</div>

<script src=<?php echo $this->webroot.'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'; ?>></script>
<script type="text/javascript">
$(document).ready(function () {
	$('#description-textarea').wysihtml5();
});
</script>