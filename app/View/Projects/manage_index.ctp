<div class="projects box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php echo __('Projects'); ?></h3></br></br>
		<?php echo $this->Html->link(__(' Add '),
			array('controller' => 'projects', 'action' => 'add'),
			array('class'=>'btn btn-xm btn-primary btn-flat col-lg-12')
			); ?>
	</div>
	<div class="box-body table-responsive no-padding">
		<table class="table table-hover" cellpadding="0" cellspacing="0">
		<thead>
		<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th><?php echo $this->Paginator->sort('budget'); ?></th>
					<th><?php echo $this->Paginator->sort('started'); ?></th>
					<th><?php echo $this->Paginator->sort('expected'); ?></th>
					<th><?php echo $this->Paginator->sort('finished'); ?></th>
					<th><?php echo $this->Paginator->sort('total_amount'); ?></th>
					<th><?php echo $this->Paginator->sort('user_id'); ?></th>
					<th><?php echo $this->Paginator->sort('project_category_id'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($projects as $project): ?>
	<tr>
		<td><?php echo h($project['Project']['id']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['name']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['budget']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['started']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['expected']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['finished']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['total_amount']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($project['User']['id'], array('controller' => 'users', 'action' => 'view', $project['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($project['ProjectCategory']['name'], array('controller' => 'project_categories', 'action' => 'view', $project['ProjectCategory']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $project['Project']['id']), array('class' => 'btn btn-block btn-xs btn-info btn-flat')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $project['Project']['id']), array('class' => 'btn btn-block btn-xs btn-success btn-flat')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $project['Project']['id']), array('class' => 'btn btn-block btn-xs btn-danger btn-flat', 'confirm' => __('Are you sure you want to delete # %s?', $project['Project']['id']))); ?>
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