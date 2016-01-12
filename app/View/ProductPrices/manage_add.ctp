<div class="productPrices box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php echo __('Add Product Price'); ?></h3>
	</div>
	<?php echo $this->Form->create('ProductPrice', array(
		'inputDefaults' => array('div' => 'form-group')
		)); ?>
		<div class="box-body"><?php
			echo $this->Form->input('price', array('class'=>'form-control'));
			echo $this->Form->input('product_id', array('type'=>'hidden', 'value' => $product_id));
		?></div>
	<?php $options = array('label' => 'Submit', 'div' => array('class' => 'box-footer'), 'class' => array('input' => 'btn btn-primary btn-flat btn-sm col-lg-12'));
	echo $this->Form->end($options); ?>
</div>