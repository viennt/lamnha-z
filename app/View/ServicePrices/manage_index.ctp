<div class="servicePrices box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php 
			echo __('Quản lý giá dịch vụ: '); 
			echo isset($servicePrices[0]['Service']['name']) ? $this->Html->link($servicePrices[0]['Service']['name'], array('controller' => 'services', 'action' => 'view', $servicePrices[0]['Service']['id'])) : ''; ?>
		</h3></br></br>
		<div class="pull-right box-tools">
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-list-alt"></span>',
				array('controller'=> 'services', 'action' => 'index'),
				array('class' => 'btn btn-sm btn-default btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Danh sách dịch vụ')
				);?>
			<?php echo $this->Html->link(
				'<span class="glyphicon glyphicon-edit"></span>',
				array('controller'=> 'services', 'action' => 'view', $this->params['pass'][0]),
				array('class' => 'btn btn-sm btn-info btn-flat', 'escape' => false, 'data-toggle'=> 'tooltip', 'data-original-title'=> 'Trang dịch vụ')
				);?>
		</div>
		<?php echo $this->Html->link(__(' Add '),
			array('controller' => 'servicePrices', 'action' => 'add', $this->params['pass'][0]),
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
		<?php foreach ($servicePrices as $servicePrice): ?>
	<tr>
		<td><?php echo h($servicePrice['ServicePrice']['price']); ?>&nbsp;</td>
		<td><?php echo h($servicePrice['ServicePrice']['started']); ?>&nbsp;</td>
		<td><?php echo h($servicePrice['ServicePrice']['finished']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $servicePrice['ServicePrice']['id'], $this->params['pass'][0]), array('class' => 'btn btn-block btn-xs btn-danger btn-flat', 'confirm' => __('Are you sure you want to delete # %s?', $servicePrice['ServicePrice']['id']))); ?>
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