<div class="projectCategories box box-primary">
	<div class="box-header with-border">
		<?php echo $this->Html->link(__(' Thêm danh mục mới '),
			array('controller' => 'projectCategories', 'action' => 'add'),
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
		<?php foreach ($projectCategories as $projectCategory): ?>
	<tr>
		<td><?php echo h($projectCategory['ProjectCategory']['id']); ?>&nbsp;</td>
		<td><?php echo h($projectCategory['ProjectCategory']['name']); ?>&nbsp;</td>
		<td><?php echo h($projectCategory['ProjectCategory']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($projectCategory['ParentProjectCategory']['name'], array('controller' => 'project_categories', 'action' => 'view', $projectCategory['ParentProjectCategory']['id'])); ?>
		</td>
		<td><?php echo h($projectCategory['ProjectCategory']['lft']); ?>&nbsp;</td>
		<td><?php echo h($projectCategory['ProjectCategory']['rght']); ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('Xem'), array('action' => 'view', $projectCategory['ProjectCategory']['id']), array('class' => 'btn btn-xs btn-info btn-flat')); ?>
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $projectCategory['ProjectCategory']['id']), array('class' => 'btn btn-xs btn-success btn-flat')); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $projectCategory['ProjectCategory']['id']), array('class' => 'btn btn-xs btn-danger btn-flat', 'confirm' => __('Bạn có chắc chắn muốn xóa # %s?', $projectCategory['ProjectCategory']['id']))); ?>
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
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>New Project Category</span>", array("action" => "add"), array("escape" => false)); ?>';
	actions += '</li>';
	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>List Project Categories</span>", array("controller" => "project_categories", "action" => "index"), array("escape" => false)); ?>';
	actions += '</li>';
	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>New Parent Project Category</span>", array("controller" => "project_categories", "action" => "add"), array("escape" => false)); ?>';
	actions += '</li>';
	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>List Projects</span>", array("controller" => "projects", "action" => "index"), array("escape" => false)); ?>';
	actions += '</li>';
	actions += '<li>';
	actions += '<?php echo $this->Html->link("<i class=\"fa fa-circle-o text-aqua\"></i> <span>New Project</span>", array("controller" => "projects", "action" => "add"), array("escape" => false)); ?>';
	actions += '</li>';
	$("li#action")
		.after(actions);

});
</script>