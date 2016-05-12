<link rel="stylesheet" type="text/css" href=<?php echo $this->webroot.'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'; ?>>
<div class="projects box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php echo __('Edit Project'); ?></h3>
	</div>
	<?php echo $this->Form->create('Project', array(
		'inputDefaults' => array('div' => 'form-group')
		)); ?>
		<div class="box-body"><?php
			echo $this->Form->input('id', array('class'=>'form-control'));
			echo $this->Form->input('name', array('class'=>'form-control'));
			echo $this->Form->input('description', array('class'=>'form-control', 'id' => 'description-textarea'));
			echo $this->Form->input('budget', array('class'=>'form-control'));
			echo $this->Form->input('started', array('class'=>'form-control'));
			echo $this->Form->input('expected', array('class'=>'form-control'));
			echo $this->Form->input('user_id', array('type'=>'hidden', 'value' => $user_id));
			echo $this->Form->input('project_category_id', array('class'=>'form-control'));
		?></div>
	<?php $options = array('label' => 'Submit', 'div' => array('class' => 'box-footer'), 'class' => array('input' => 'btn btn-primary btn-flat btn-sm col-lg-12'));
	echo $this->Form->end($options); ?>
</div>

<script src=<?php echo $this->webroot,'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'; ?>></script>
<script type="text/javascript">
$(document).ready(function () {
	$('#description-textarea').wysihtml5();
});
</script>