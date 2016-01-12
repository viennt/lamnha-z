<div class="contractorCategories box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php echo __('Add Contractor Category'); ?></h3>
	</div>
	<?php echo $this->Form->create('ContractorCategory', array(
		'inputDefaults' => array('div' => 'form-group')
		)); ?>
		<div class="box-body"><?php
			echo $this->Form->input('name', array('class'=>'form-control', 'label' => 'Tên'));
			echo $this->Form->input('description', array('class'=>'form-control', 'label' => 'Mô tả'));
			echo $this->Form->input('parent_id', array('class'=>'form-control', 'options' => $parentContractorCategories, 'label' => 'Danh mục cha'));
		?></div>
	<?php $options = array('label' => 'Submit', 'div' => array('class' => 'box-footer'), 'class' => array('input' => 'btn btn-primary btn-flat btn-sm col-lg-12'));
	echo $this->Form->end($options); ?>
</div>