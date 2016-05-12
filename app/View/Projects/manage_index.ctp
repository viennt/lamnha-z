<div class="projects box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php echo __('Projects'); ?></h3></br></br>
		<?php //echo $this->Html->link(__(' Add '),
			//ẩy('controller' => 'projects', 'action' => 'add'),
			//ẩy('class'=>'btn btn-xm btn-primary btn-flat col-lg-12')
			//); ?>
	</div>
	<div class="box-body table-responsive no-padding">
		<table class="table table-hover" cellpadding="0" cellspacing="0">
		<thead>
		<tr>
					<th><?php echo $this->Paginator->sort('id', '#'); ?></th>
					<th><?php echo $this->Paginator->sort('name', 'Tên'); ?></th>
					<th><?php echo $this->Paginator->sort('budget', 'Ngân sách'); ?></th>
					<th><?php echo $this->Paginator->sort('started', 'Ngày bắt đầu'); ?></th>
					<th><?php echo $this->Paginator->sort('total_amount', 'Tổng chi phí'); ?></th>
					<th><?php echo $this->Paginator->sort('user_id', 'Người tạo'); ?></th>
					<th><?php echo $this->Paginator->sort('project_category_id', 'Danh mục'); ?></th>
					<th class="actions"><?php echo __('Điều khiển', '#'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($projects as $project): ?>
	<tr>
		<td><?php echo h($project['Project']['id']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['name']); ?>&nbsp;</td>
		<td><?php echo $this->Number->currency($project['Project']['budget'], '', array('wholeSymbol' => ' ₫', 'wholePosition' => 'after', 'places' => 0, 'thousands' => '.')); ?>&nbsp;</td>
		<td><?php echo date("d-m-Y", strtotime($project['Project']['started'])); ?>&nbsp;</td>
		<td><?php echo $this->Number->currency($project['Project']['total_amount'], '', array('wholeSymbol' => ' ₫', 'wholePosition' => 'after', 'places' => 0, 'thousands' => '.'));; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($project['User']['id'], array('controller' => 'users', 'action' => 'view', $project['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($project['ProjectCategory']['name'], array('controller' => 'project_categories', 'action' => 'view', $project['ProjectCategory']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Xem'), array('action' => 'view', 'id' => $project['Project']['id'], 'slug' => $this->Common->convertViToEn($project['Project']['name'], true), 'manage' => false), array('class' => 'btn btn-xs btn-info btn-flat', 'target' => '_blank')); ?>
			<?php //echo $this->Html->link(__('Sửa'), array('action' => 'edit', $project['Project']['id']), array('class' => 'btn btn-xs btn-success btn-flat')); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $project['Project']['id']), array('class' => 'btn btn-xs btn-danger btn-flat', 'confirm' => __('Are you sure you want to delete # %s?', $project['Project']['id']))); ?>
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