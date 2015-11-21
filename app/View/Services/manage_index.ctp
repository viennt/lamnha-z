<?php $this->Paginator->options(array(
		'update' => '#load',
		'evalScripts' => true,
		'before' => $this->Js->get('#busy-indicator')->effect(
			'fadeIn',
			array('buffer' => false)
		),
		'complete' => $this->Js->get('#busy-indicator')->effect(
			'fadeOut',
			array('buffer' => false)
		),
	)); ?>
<div class="services box box-primary">
	<div class="box-header with-border">
		<?php echo $this->Html->link(__(' Thêm dịch vụ mới '),
			array('controller' => 'services', 'action' => 'add'),
			array('class'=>'btn btn-xm btn-primary btn-flat col-lg-12')
			); ?>
	</div>
	<div class="box-body table-responsive no-padding">
		<table class="table table-hover" cellpadding="0" cellspacing="0">
		<thead>
		<tr>
					<th><?php echo $this->Paginator->sort('id', '#'); ?></th>
					<th><?php echo $this->Paginator->sort('name', 'Tên'); ?></th>
					<th><?php echo $this->Paginator->sort('description', 'Chi tiết'); ?></th>
					<th><?php echo $this->Paginator->sort('published', 'Công khai'); ?></th>
					<th><?php echo $this->Paginator->sort('user_id', 'Nhà cung cấp'); ?></th>
					<th><?php echo $this->Paginator->sort('service_category_id', 'Danh mục'); ?></th>
					<th class="actions"><?php echo __('Điều khiển'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($services as $service): ?>
		<tr>
			<td><?php echo h($service['Service']['id']); ?>&nbsp;</td>
			<td><?php echo h($service['Service']['name']); ?>&nbsp;</td>
			<td><?php echo h($service['Service']['description']); ?>&nbsp;</td>
			<td><?php echo h($service['Service']['published']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($service['User']['id'], array('controller' => 'users', 'action' => 'view', $service['User']['id'])); ?>
			</td>
			<td>
				<?php echo $this->Html->link($service['ServiceCategory']['name'], array('controller' => 'service_categories', 'action' => 'view', $service['ServiceCategory']['id'])); ?>
			</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $service['Service']['id']), array('class' => 'btn btn-block btn-xs btn-info btn-flat')); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $service['Service']['id']), array('class' => 'btn btn-block btn-xs btn-success btn-flat')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $service['Service']['id']), array('class' => 'btn btn-block btn-xs btn-danger btn-flat', 'confirm' => __('Are you sure you want to delete # %s?', $service['Service']['id']))); ?>
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
			'format' => __('Trang {:page}/{:pages}, hiển thị {:current}/{:count} dịch vụ, từ dịch vụ {:start}, đến dịch vụ {:end}')
		));
		?>		</p>
		<?php
		echo $this->Paginator->prev('« ', array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ' '));
		echo $this->Paginator->next(' »', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

<?php echo $this->Js->writeBuffer();?>