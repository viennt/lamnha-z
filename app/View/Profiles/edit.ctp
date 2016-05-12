<div class="profiles box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php echo __('Edit Profile'); ?></h3>
	</div>
	<?php echo $this->Form->create('Profile', array(
		'inputDefaults' => array('div' => 'form-group')
		)); ?>
		<div class="box-body"><?php
			echo $this->Form->input('id', array('class'=>'form-control'));
			echo $this->Form->input('user_id', array('class'=>'form-control'));
			echo $this->Form->input('avatar_url', array('class'=>'form-control'));
			echo $this->Form->input('full_name', array('class'=>'form-control'));
			echo $this->Form->input('email', array('class'=>'form-control'));
			echo $this->Form->input('phone_number', array('class'=>'form-control'));
			echo $this->Form->input('personal_number', array('class'=>'form-control'));
			echo $this->Form->input('date_of_birth', array('class'=>'form-control'));
			echo $this->Form->input('place_of_birth', array('class'=>'form-control'));
			echo $this->Form->input('sex', array('class'=>'form-control'));
			echo $this->Form->input('address', array('class'=>'form-control'));
			echo $this->Form->input('published', array('class'=>'form-control'));
		?></div>
	<?php $options = array('label' => 'Submit', 'div' => array('class' => 'box-footer'), 'class' => array('input' => 'btn btn-primary btn-flat btn-sm col-lg-12'));
	echo $this->Form->end($options); ?>
</div>

<script type="text/javascript">
$(document).ready(function () {
	var actions = '<li class=\"header\">';
	actions += '<?php echo __("ACTIONS"); ?>';

	actions += '<li>';
	actions += '<?php echo $this->Form->postLink("<i class=\"fa fa-circle-o text-red\"></i> <span>Delete</span>", array("action" => "delete", $this->Form->value("Profile.id")), array("escape" => false), __("Are you sure you want to delete # %s?", $this->Form->value("Profile.id"))); ?>';
	actions += '</li>';

	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>List Profiles</span>", array("action" => "index"), array("escape" => false)); ?>';
	actions += '</li>';

	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>List Users</span>", array("controller" => "users", "action" => "index"), array("escape" => false)); ?>';
	actions += '</li>';
	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>New User</span>", array("controller" => "users", "action" => "add"), array("escape" => false)); ?>';
	actions += '</li>';
	$("li#action")
		.after(actions);

});
</script>