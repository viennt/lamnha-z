<div class="serviceCategories view">
<h2><?php echo __('Service Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($serviceCategory['ServiceCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($serviceCategory['ServiceCategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($serviceCategory['ServiceCategory']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Service Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($serviceCategory['ParentServiceCategory']['name'], array('controller' => 'service_categories', 'action' => 'view', $serviceCategory['ParentServiceCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($serviceCategory['ServiceCategory']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($serviceCategory['ServiceCategory']['rght']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Service Categories'); ?></h3>
	<?php if (!empty($serviceCategory['ChildServiceCategory'])): ?>
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
	<?php foreach ($serviceCategory['ChildServiceCategory'] as $childServiceCategory): ?>
		<tr>
			<td><?php echo $childServiceCategory['id']; ?></td>
			<td><?php echo $childServiceCategory['name']; ?></td>
			<td><?php echo $childServiceCategory['description']; ?></td>
			<td><?php echo $childServiceCategory['parent_id']; ?></td>
			<td><?php echo $childServiceCategory['lft']; ?></td>
			<td><?php echo $childServiceCategory['rght']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'service_categories', 'action' => 'view', $childServiceCategory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'service_categories', 'action' => 'edit', $childServiceCategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'service_categories', 'action' => 'delete', $childServiceCategory['id']), array(), __('Are you sure you want to delete # %s?', $childServiceCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Service Category'), array('controller' => 'service_categories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Services'); ?></h3>
	<?php if (!empty($serviceCategory['Service'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Published'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Service Category Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($serviceCategory['Service'] as $service): ?>
		<tr>
			<td><?php echo $service['id']; ?></td>
			<td><?php echo $service['name']; ?></td>
			<td><?php echo $service['description']; ?></td>
			<td><?php echo $service['price']; ?></td>
			<td><?php echo $service['published']; ?></td>
			<td><?php echo $service['user_id']; ?></td>
			<td><?php echo $service['service_category_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'services', 'action' => 'view', $service['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'services', 'action' => 'edit', $service['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'services', 'action' => 'delete', $service['id']), array(), __('Are you sure you want to delete # %s?', $service['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
