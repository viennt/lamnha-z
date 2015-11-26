<div class="projectDesigns box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php echo __('Add Project Design'); ?></h3>
	</div>
	<?php echo $this->Form->create('ProjectDesign', array(
		'inputDefaults' => array('div' => 'form-group'),
		'type' => 'file'
		)); ?>
		<div class="box-body"><?php
			echo $this->Form->input('name', array('class'=>'form-control', 'type' => 'file'));
			echo $this->Form->input('description', array('class'=>'form-control'));
			echo $this->Form->input('project_id', array('type'=>'hidden', 'value' => $project_id));
		?></div>
	<?php $options = array('label' => 'Submit', 'div' => array('class' => 'box-footer'), 'class' => array('input' => 'btn btn-warning btn-flat btn-sm col-lg-12'));
	echo $this->Form->end($options); ?>
</div>