<div class="productPrices box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php 
			echo __('Quản lý giá sản phẩm: '); 
			echo isset($productPrices[0]['Products']['name']) ? $this->Html->link($productPrices[0]['Products']['name'], array('controller' => 'products', 'action' => 'view', $productPrices[0]['Products']['id'])) : ''; ?>
		</h3></br></br>
		<div class="pull-right box-tools">
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-list-alt"></span>',
				array('controller'=> 'products', 'action' => 'index'),
				array('class' => 'btn btn-sm btn-default btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Danh sách sản phẩm')
				);?>
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-edit"></span>',
				array('controller'=> 'products', 'action' => 'view', $this->params['pass'][0]),
				array('class' => 'btn btn-sm btn-info btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Trang sản phẩm')
				);?>
		</div>
		<?php echo $this->Html->link(__(' Add '),
			array('controller' => 'productPrices', 'action' => 'add', $this->params['pass'][0]),
			array('class'=>'btn btn-xm btn-primary btn-flat col-lg-12')
			); ?>
	</div>
	<div class="box-body table-responsive no-padding">
		<table class="table table-hover" cellpadding="0" cellspacing="0">
		<thead>
		<tr>
					<th><?php echo $this->Paginator->sort('price'); ?></th>
					<th><?php echo $this->Paginator->sort('started'); ?></th>
					<th><?php echo $this->Paginator->sort('finished'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($productPrices as $productPrice): ?>
	<tr>
		<td><?php echo h($productPrice['ProductPrice']['price']); ?>&nbsp;</td>
		<td><?php echo h($productPrice['ProductPrice']['started']); ?>&nbsp;</td>
		<td><?php echo h($productPrice['ProductPrice']['finished']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productPrice['ProductPrice']['id'], $this->params['pass'][0]), array('class' => 'btn btn-block btn-xs btn-danger btn-flat', 'confirm' => __('Are you sure you want to delete # %s?', $productPrice['ProductPrice']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
		</tbody>
		</table>
	</div>
	<div class="box-footer clearfix">
		<p>
		<?php
		echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>		</p>
		<?php
		echo $this->Paginator->prev('« ', array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ' '));
		echo $this->Paginator->next(' »', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>