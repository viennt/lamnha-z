<div class="serviceCategories box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php echo __('Edit Service Category'); ?></h3>
	</div>
	<?php echo $this->Form->create('ServiceCategory', array(
		'inputDefaults' => array('div' => 'form-group')
		)); ?>
		<div class="box-body"><?php
			echo $this->Form->input('id', array('class'=>'form-control'));
			echo $this->Form->input('name', array('class'=>'form-control'));
			echo $this->Form->input('description', array('class'=>'form-control'));
			echo $this->Form->input('parent_id', array('class'=>'form-control', 'options' => $parentServiceCategories));
		?></div>
	<?php $options = array('label' => 'Submit', 'div' => array('class' => 'box-footer'), 'class' => array('input' => 'btn btn-primary btn-flat btn-sm col-lg-12'));
	echo $this->Form->end($options); ?>
</div>

<script type="text/javascript">
$(document).ready(function () {
	var actions = '<li class=\"header\">';
	actions += '<?php echo __("ACTIONS"); ?>';

	actions += '<li>';
	actions += '<?php echo $this->Form->postLink("<i class=\"fa fa-circle-o text-red\"></i> <span>Delete</span>", array("action" => "delete", $this->Form->value("ServiceCategory.id")), array("escape" => false), __("Are you sure you want to delete # %s?", $this->Form->value("ServiceCategory.id"))); ?>';
	actions += '</li>';

	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>List Service Categories</span>", array("action" => "index"), array("escape" => false)); ?>';
	actions += '</li>';

	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>List Service Categories</span>", array("controller" => "service_categories", "action" => "index"), array("escape" => false)); ?>';
	actions += '</li>';
	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>New Parent Service Category</span>", array("controller" => "service_categories", "action" => "add"), array("escape" => false)); ?>';
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