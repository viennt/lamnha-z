<div class="users box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php echo __('Edit User'); ?></h3>
	</div>
	<?php echo $this->Form->create('User', array(
		'inputDefaults' => array('div' => 'form-group')
		)); ?>
		<div class="box-body"><?php
			echo $this->Form->input('id', array('class'=>'form-control'));
			echo $this->Form->input('username', array('class'=>'form-control'));
			echo $this->Form->input('password', array('class'=>'form-control'));
			echo $this->Form->input('group_id', array('class'=>'form-control'));
		?></div>
	<?php $options = array('label' => 'Submit', 'div' => array('class' => 'box-footer'), 'class' => array('input' => 'btn btn-primary btn-flat btn-sm col-lg-12'));
	echo $this->Form->end($options); ?>
</div>

<script type="text/javascript">
$(document).ready(function () {
	var actions = '<li class=\"header\">';
	actions += '<?php echo __("ACTIONS"); ?>';

	actions += '<li>';
	actions += '<?php echo $this->Form->postLink("<i class=\"fa fa-circle-o text-red\"></i> <span>Delete</span>", array("action" => "delete", $this->Form->value("User.id")), array("escape" => false), __("Are you sure you want to delete # %s?", $this->Form->value("User.id"))); ?>';
	actions += '</li>';

	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>List Users</span>", array("action" => "index"), array("escape" => false)); ?>';
	actions += '</li>';

	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>List Groups</span>", array("controller" => "groups", "action" => "index"), array("escape" => false)); ?>';
	actions += '</li>';
	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>New Group</span>", array("controller" => "groups", "action" => "add"), array("escape" => false)); ?>';
	actions += '</li>';
	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>List Contractors</span>", array("controller" => "contractors", "action" => "index"), array("escape" => false)); ?>';
	actions += '</li>';
	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>New Contractor</span>", array("controller" => "contractors", "action" => "add"), array("escape" => false)); ?>';
	actions += '</li>';
	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>List News</span>", array("controller" => "news", "action" => "index"), array("escape" => false)); ?>';
	actions += '</li>';
	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>New News</span>", array("controller" => "news", "action" => "add"), array("escape" => false)); ?>';
	actions += '</li>';
	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>List Profiles</span>", array("controller" => "profiles", "action" => "index"), array("escape" => false)); ?>';
	actions += '</li>';
	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>New Profile</span>", array("controller" => "profiles", "action" => "add"), array("escape" => false)); ?>';
	actions += '</li>';
	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>List Projects</span>", array("controller" => "projects", "action" => "index"), array("escape" => false)); ?>';
	actions += '</li>';
	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>New Project</span>", array("controller" => "projects", "action" => "add"), array("escape" => false)); ?>';
	actions += '</li>';
	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>List Services</span>", array("controller" => "services", "action" => "index"), array("escape" => false)); ?>';
	actions += '</li>';
	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>New Service</span>", array("controller" => "services", "action" => "add"), array("escape" => false)); ?>';
	actions += '</li>';
	$("li#action")
		.after(actions);

});
</script>