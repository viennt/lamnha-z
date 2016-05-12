<div class="servicePrices box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php echo __('Add Service Price'); ?></h3>
	</div>
	<?php echo $this->Form->create('ServicePrice', array(
		'inputDefaults' => array('div' => 'form-group')
		)); ?>
		<div class="box-body"><?php
			echo $this->Form->input('price', array('class'=>'form-control'));
			echo $this->Form->input('service_id', array('type'=>'hidden', 'value' => $service_id));
		?></div>
	<?php $options = array('label' => 'Submit', 'div' => array('class' => 'box-footer'), 'class' => array('input' => 'btn btn-primary btn-flat btn-sm col-lg-12'));
	echo $this->Form->end($options); ?>
</div>