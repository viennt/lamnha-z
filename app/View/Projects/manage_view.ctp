<div class="projects view">
<h2><?php echo __('Project'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($project['Project']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($project['Project']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Budget'); ?></dt>
		<dd>
			<?php echo h($project['Project']['budget']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Started'); ?></dt>
		<dd>
			<?php echo h($project['Project']['started']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expected'); ?></dt>
		<dd>
			<?php echo h($project['Project']['expected']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Finished'); ?></dt>
		<dd>
			<?php echo h($project['Project']['finished']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Amount'); ?></dt>
		<dd>
			<?php echo h($project['Project']['total_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['User']['id'], array('controller' => 'users', 'action' => 'view', $project['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['ProjectCategory']['name'], array('controller' => 'project_categories', 'action' => 'view', $project['ProjectCategory']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Project Designs'); ?></h3>
	<?php if (!empty($project['ProjectDesign'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($project['ProjectDesign'] as $projectDesign): ?>
		<tr>
			<td><?php echo $projectDesign['id']; ?></td>
			<td><?php echo $projectDesign['name']; ?></td>
			<td><?php echo $projectDesign['description']; ?></td>
			<td><?php echo $projectDesign['project_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'project_designs', 'action' => 'view', $projectDesign['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'project_designs', 'action' => 'edit', $projectDesign['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'project_designs', 'action' => 'delete', $projectDesign['id']), array(), __('Are you sure you want to delete # %s?', $projectDesign['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project Design'), array('controller' => 'project_designs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Project Images'); ?></h3>
	<?php if (!empty($project['ProjectImage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($project['ProjectImage'] as $projectImage): ?>
		<tr>
			<td><?php echo $projectImage['id']; ?></td>
			<td><?php echo $projectImage['name']; ?></td>
			<td><?php echo $projectImage['description']; ?></td>
			<td><?php echo $projectImage['project_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'project_images', 'action' => 'view', $projectImage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'project_images', 'action' => 'edit', $projectImage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'project_images', 'action' => 'delete', $projectImage['id']), array(), __('Are you sure you want to delete # %s?', $projectImage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project Image'), array('controller' => 'project_images', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
