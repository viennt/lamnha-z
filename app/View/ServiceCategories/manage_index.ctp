<div class="serviceCategories box box-primary">
	<div class="box-header with-border">
		<?php echo $this->Html->link(__(' Thêm danh mục mới '),
			array('controller' => 'serviceCategories', 'action' => 'add'),
			array('class'=>'btn btn-xm btn-primary btn-flat col-lg-12')
			); ?>
	</div>
	<div class="box-body table-responsive no-padding">
		<table class="table table-hover" cellpadding="0" cellspacing="0">
		<thead>
		<tr>
					<th><?php echo $this->Paginator->sort('id', '#'); ?></th>
					<th><?php echo $this->Paginator->sort('name', 'Tên'); ?></th>
					<th><?php echo $this->Paginator->sort('description', 'Mô tả'); ?></th>
					<th><?php echo $this->Paginator->sort('parent_id', 'Danh mục cha'); ?></th>
					<th><?php echo $this->Paginator->sort('lft'); ?></th>
					<th><?php echo $this->Paginator->sort('rght'); ?></th>
					<th class="actions"><?php echo __('Điều khiển', '#'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($serviceCategories as $serviceCategory): ?>
	<tr>
		<td><?php echo h($serviceCategory['ServiceCategory']['id']); ?>&nbsp;</td>
		<td><?php echo h($serviceCategory['ServiceCategory']['name']); ?>&nbsp;</td>
		<td><?php echo h($serviceCategory['ServiceCategory']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($serviceCategory['ParentServiceCategory']['name'], array('controller' => 'service_categories', 'action' => 'view', $serviceCategory['ParentServiceCategory']['id'])); ?>
		</td>
		<td><?php echo h($serviceCategory['ServiceCategory']['lft']); ?>&nbsp;</td>
		<td><?php echo h($serviceCategory['ServiceCategory']['rght']); ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('Xem'), array('action' => 'view', $serviceCategory['ServiceCategory']['id']), array('class' => 'btn btn-xs btn-info btn-flat')); ?>
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $serviceCategory['ServiceCategory']['id']), array('class' => 'btn btn-xs btn-success btn-flat')); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $serviceCategory['ServiceCategory']['id']), array('class' => 'btn btn-xs btn-danger btn-flat', 'confirm' => __('Bạn có chắc chắn muốn xóa # %s?', $serviceCategory['ServiceCategory']['id']))); ?>
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
<script type="text/javascript">
$(document).ready(function () {
	var actions = '<li class=\"header\">';
	actions += '<?php echo __("ACTIONS"); ?>';
	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>New Service Category</span>", array("action" => "add"), array("escape" => false)); ?>';
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