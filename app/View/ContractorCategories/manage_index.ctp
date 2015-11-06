<div class="contractorCategories box box-primary">
	<div class="box-header with-border">
		<?php echo $this->Html->link(__(' Add '),
			array('controller' => 'contractorCategories', 'action' => 'add'),
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
		<?php foreach ($contractorCategories as $contractorCategory): ?>
	<tr>
		<td><?php echo h($contractorCategory['ContractorCategory']['id']); ?>&nbsp;</td>
		<td><?php echo h($contractorCategory['ContractorCategory']['name']); ?>&nbsp;</td>
		<td><?php echo h($contractorCategory['ContractorCategory']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contractorCategory['ParentContractorCategory']['name'], array('controller' => 'contractor_categories', 'action' => 'view', $contractorCategory['ParentContractorCategory']['id'])); ?>
		</td>
		<td><?php echo h($contractorCategory['ContractorCategory']['lft']); ?>&nbsp;</td>
		<td><?php echo h($contractorCategory['ContractorCategory']['rght']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contractorCategory['ContractorCategory']['id']), array('class' => 'btn tn-block btn-xs btn-info btn-flat')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contractorCategory['ContractorCategory']['id']), array('class' => 'btn tn-block btn-xs btn-success btn-flat')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contractorCategory['ContractorCategory']['id']), array('class' => 'btn tn-block btn-xs btn-danger btn-flat', 'confirm' => __('Are you sure you want to delete # %s?', $contractorCategory['ContractorCategory']['id']))); ?>
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