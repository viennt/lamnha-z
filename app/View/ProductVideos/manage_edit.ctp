<div class="productVideos box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php echo __('Chỉnh sửa video sản phẩm'); ?></h3>
		<div class="pull-right box-tools">
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-list-alt"></span>',
				array('controller'=> 'products', 'action' => 'index'),
				array('class' => 'btn btn-sm btn-default btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Danh sách sản phẩm')
				);?>
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-edit"></span>',
				array('controller'=> 'products', 'action' => 'view', $this->data['Product']['id']),
				array('class' => 'btn btn-sm btn-info btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Trang sản phẩm')
				);?>
		</div>
	</div>
	<?php echo $this->Form->create('ProductVideo', array(
		'inputDefaults' => array('div' => 'form-group')
		)); ?>
		<div class="box-body">
			<div class="row non-margin">
				<div class="thumbnail col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<iframe width="100%" height="315" src=<?php echo 'https://www.youtube.com/embed/'.$this->data['ProductVideo']['code'] ?> frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<?php
			echo $this->Form->input('id', array('class'=>'form-control'));
			echo $this->Form->input('code', array('class'=>'form-control'));
			echo $this->Form->input('description', array('class'=>'form-control'));
			echo $this->Form->input('product_id', array('type'=>'hidden'));
		?></div>
	<?php $options = array('label' => 'Submit', 'div' => array('class' => 'box-footer'), 'class' => array('input' => 'btn btn-primary btn-flat btn-sm col-lg-12'));
	echo $this->Form->end($options); ?>
</div>