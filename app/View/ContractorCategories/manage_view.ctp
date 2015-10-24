<div class="contractorCategories view">
<h2><?php echo __('Contractor Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contractorCategory['ContractorCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contractorCategory['ContractorCategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($contractorCategory['ContractorCategory']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Contractor Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contractorCategory['ParentContractorCategory']['name'], array('controller' => 'contractor_categories', 'action' => 'view', $contractorCategory['ParentContractorCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($contractorCategory['ContractorCategory']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($contractorCategory['ContractorCategory']['rght']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Contractor Categories'); ?></h3>
	<?php if (!empty($contractorCategory['ChildContractorCategory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contractorCategory['ChildContractorCategory'] as $childContractorCategory): ?>
		<tr>
			<td><?php echo $childContractorCategory['id']; ?></td>
			<td><?php echo $childContractorCategory['name']; ?></td>
			<td><?php echo $childContractorCategory['description']; ?></td>
			<td><?php echo $childContractorCategory['parent_id']; ?></td>
			<td><?php echo $childContractorCategory['lft']; ?></td>
			<td><?php echo $childContractorCategory['rght']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contractor_categories', 'action' => 'view', $childContractorCategory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contractor_categories', 'action' => 'edit', $childContractorCategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contractor_categories', 'action' => 'delete', $childContractorCategory['id']), array(), __('Are you sure you want to delete # %s?', $childContractorCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Contractor Category'), array('controller' => 'contractor_categories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Contractors'); ?></h3>
	<?php if (!empty($contractorCategory['Contractor'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Contractor Category Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Detail Work'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contractorCategory['Contractor'] as $contractor): ?>
		<tr>
			<td><?php echo $contractor['id']; ?></td>
			<td><?php echo $contractor['contractor_category_id']; ?></td>
			<td><?php echo $contractor['user_id']; ?></td>
			<td><?php echo $contractor['detail_work']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contractors', 'action' => 'view', $contractor['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contractors', 'action' => 'edit', $contractor['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contractors', 'action' => 'delete', $contractor['id']), array(), __('Are you sure you want to delete # %s?', $contractor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contractor'), array('controller' => 'contractors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
