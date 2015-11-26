<div class="projectDesigns box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php echo __('Edit Project Image'); ?></h3>
	</div>
	<?php echo $this->Form->create('ProjectImage', array(
		'inputDefaults' => array('div' => 'form-group')
		)); ?>
		<div class="box-body">
			<div class="row non-margin">
				<div class="thumbnail col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<?php echo $this->Html->image('uploads/projects/images/'.$this->data['ProjectImage']['name'], array('alt' => $this->data['ProjectImage']['description'])); ?>
				</div>
			</div>
			<?php
			echo $this->Form->input('id', array('class'=>'form-control'));
			echo $this->Form->input('description', array('class'=>'form-control'));
			echo $this->Form->input('project_id', array('type'=>'hidden'));
		?></div>
	<?php $options = array('label' => 'Submit', 'div' => array('class' => 'box-footer'), 'class' => array('input' => 'btn btn-warning btn-flat btn-sm col-lg-12'));
	echo $this->Form->end($options); ?>
</div>