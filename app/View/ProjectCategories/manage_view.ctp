<div class="projectCategories view">
<h2><?php echo __('Project Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($projectCategory['ProjectCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($projectCategory['ProjectCategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($projectCategory['ProjectCategory']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Project Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projectCategory['ParentProjectCategory']['name'], array('controller' => 'project_categories', 'action' => 'view', $projectCategory['ParentProjectCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($projectCategory['ProjectCategory']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($projectCategory['ProjectCategory']['rght']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Project Categories'); ?></h3>
	<?php if (!empty($projectCategory['ChildProjectCategory'])): ?>
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
	<?php foreach ($projectCategory['ChildProjectCategory'] as $childProjectCategory): ?>
		<tr>
			<td><?php echo $childProjectCategory['id']; ?></td>
			<td><?php echo $childProjectCategory['name']; ?></td>
			<td><?php echo $childProjectCategory['description']; ?></td>
			<td><?php echo $childProjectCategory['parent_id']; ?></td>
			<td><?php echo $childProjectCategory['lft']; ?></td>
			<td><?php echo $childProjectCategory['rght']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'project_categories', 'action' => 'view', $childProjectCategory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'project_categories', 'action' => 'edit', $childProjectCategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'project_categories', 'action' => 'delete', $childProjectCategory['id']), array(), __('Are you sure you want to delete # %s?', $childProjectCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Project Category'), array('controller' => 'project_categories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($projectCategory['Project'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Budget'); ?></th>
		<th><?php echo __('Started'); ?></th>
		<th><?php echo __('Expected'); ?></th>
		<th><?php echo __('Finished'); ?></th>
		<th><?php echo __('Total Amount'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Project Category Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($projectCategory['Project'] as $project): ?>
		<tr>
			<td><?php echo $project['id']; ?></td>
			<td><?php echo $project['name']; ?></td>
			<td><?php echo $project['description']; ?></td>
			<td><?php echo $project['budget']; ?></td>
			<td><?php echo $project['started']; ?></td>
			<td><?php echo $project['expected']; ?></td>
			<td><?php echo $project['finished']; ?></td>
			<td><?php echo $project['total_amount']; ?></td>
			<td><?php echo $project['user_id']; ?></td>
			<td><?php echo $project['project_category_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $project['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $project['id']), array(), __('Are you sure you want to delete # %s?', $project['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
