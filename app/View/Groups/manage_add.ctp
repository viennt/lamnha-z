<div class="groups box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php echo __('Add Group'); ?></h3>
	</div>
	<?php echo $this->Form->create('Group', array(
		'inputDefaults' => array('div' => 'form-group')
		)); ?>
		<div class="box-body"><?php
			echo $this->Form->input('name', array('class'=>'form-control'));
		?></div>
	<?php $options = array('label' => 'Submit', 'div' => array('class' => 'box-footer'), 'class' => array('input' => 'btn btn-primary btn-flat btn-sm col-lg-12'));
	echo $this->Form->end($options); ?>
</div>