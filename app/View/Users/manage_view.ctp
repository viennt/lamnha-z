<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Contractors'); ?></h3>
	<?php if (!empty($user['Contractor'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Contractor Category Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Detail Work'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Contractor'] as $contractor): ?>
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
<div class="related">
	<h3><?php echo __('Related News'); ?></h3>
	<?php if (!empty($user['News'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Abstract'); ?></th>
		<th><?php echo __('Detail'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('View'); ?></th>
		<th><?php echo __('Published'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('News Category Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['News'] as $news): ?>
		<tr>
			<td><?php echo $news['id']; ?></td>
			<td><?php echo $news['title']; ?></td>
			<td><?php echo $news['abstract']; ?></td>
			<td><?php echo $news['detail']; ?></td>
			<td><?php echo $news['created']; ?></td>
			<td><?php echo $news['view']; ?></td>
			<td><?php echo $news['published']; ?></td>
			<td><?php echo $news['user_id']; ?></td>
			<td><?php echo $news['news_category_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'news', 'action' => 'view', $news['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'news', 'action' => 'edit', $news['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'news', 'action' => 'delete', $news['id']), array(), __('Are you sure you want to delete # %s?', $news['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Profiles'); ?></h3>
	<?php if (!empty($user['Profile'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Avatar Url'); ?></th>
		<th><?php echo __('Full Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Phone Number'); ?></th>
		<th><?php echo __('Personal Number'); ?></th>
		<th><?php echo __('Date Of Birth'); ?></th>
		<th><?php echo __('Place Of Birth'); ?></th>
		<th><?php echo __('Sex'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Published'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Profile'] as $profile): ?>
		<tr>
			<td><?php echo $profile['id']; ?></td>
			<td><?php echo $profile['user_id']; ?></td>
			<td><?php echo $profile['avatar_url']; ?></td>
			<td><?php echo $profile['full_name']; ?></td>
			<td><?php echo $profile['email']; ?></td>
			<td><?php echo $profile['phone_number']; ?></td>
			<td><?php echo $profile['personal_number']; ?></td>
			<td><?php echo $profile['date_of_birth']; ?></td>
			<td><?php echo $profile['place_of_birth']; ?></td>
			<td><?php echo $profile['sex']; ?></td>
			<td><?php echo $profile['address']; ?></td>
			<td><?php echo $profile['published']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'profiles', 'action' => 'view', $profile['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'profiles', 'action' => 'edit', $profile['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'profiles', 'action' => 'delete', $profile['id']), array(), __('Are you sure you want to delete # %s?', $profile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($user['Project'])): ?>
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
	<?php foreach ($user['Project'] as $project): ?>
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
<div class="related">
	<h3><?php echo __('Related Services'); ?></h3>
	<?php if (!empty($user['Service'])): ?>
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
	<?php foreach ($user['Service'] as $service): ?>
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
