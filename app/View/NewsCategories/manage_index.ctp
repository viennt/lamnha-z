<div class="newsCategories box box-primary">
	<div class="box-header with-border">
		<?php echo $this->Html->link(__(' Add '),
			array('controller' => 'newsCategories', 'action' => 'add'),
			array('class'=>'btn btn-xm btn-primary btn-flat col-lg-12')
			); ?>
	</div>
	<div class="box-body table-responsive no-padding">
		<table class="table table-hover" cellpadding="0" cellspacing="0">
		<thead>
		<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th><?php echo $this->Paginator->sort('description'); ?></th>
					<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
					<th><?php echo $this->Paginator->sort('lft'); ?></th>
					<th><?php echo $this->Paginator->sort('rght'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($newsCategories as $newsCategory): ?>
	<tr>
		<td><?php echo h($newsCategory['NewsCategory']['id']); ?>&nbsp;</td>
		<td><?php echo h($newsCategory['NewsCategory']['name']); ?>&nbsp;</td>
		<td><?php echo h($newsCategory['NewsCategory']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($newsCategory['ParentNewsCategory']['name'], array('controller' => 'news_categories', 'action' => 'view', $newsCategory['ParentNewsCategory']['id'])); ?>
		</td>
		<td><?php echo h($newsCategory['NewsCategory']['lft']); ?>&nbsp;</td>
		<td><?php echo h($newsCategory['NewsCategory']['rght']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $newsCategory['NewsCategory']['id']), array('class' => 'btn tn-block btn-xs btn-info btn-flat')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $newsCategory['NewsCategory']['id']), array('class' => 'btn tn-block btn-xs btn-success btn-flat')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $newsCategory['NewsCategory']['id']), array('class' => 'btn tn-block btn-xs btn-danger btn-flat', 'confirm' => __('Are you sure you want to delete # %s?', $newsCategory['NewsCategory']['id']))); ?>
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