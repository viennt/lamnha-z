<div class="newsCategories view">
<h2><?php echo __('News Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($newsCategory['NewsCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($newsCategory['NewsCategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($newsCategory['NewsCategory']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent News Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($newsCategory['ParentNewsCategory']['name'], array('controller' => 'news_categories', 'action' => 'view', $newsCategory['ParentNewsCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($newsCategory['NewsCategory']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($newsCategory['NewsCategory']['rght']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related News'); ?></h3>
	<?php if (!empty($newsCategory['News'])): ?>
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
	<?php foreach ($newsCategory['News'] as $news): ?>
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
	<h3><?php echo __('Related News Categories'); ?></h3>
	<?php if (!empty($newsCategory['ChildNewsCategory'])): ?>
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
	<?php foreach ($newsCategory['ChildNewsCategory'] as $childNewsCategory): ?>
		<tr>
			<td><?php echo $childNewsCategory['id']; ?></td>
			<td><?php echo $childNewsCategory['name']; ?></td>
			<td><?php echo $childNewsCategory['description']; ?></td>
			<td><?php echo $childNewsCategory['parent_id']; ?></td>
			<td><?php echo $childNewsCategory['lft']; ?></td>
			<td><?php echo $childNewsCategory['rght']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'news_categories', 'action' => 'view', $childNewsCategory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'news_categories', 'action' => 'edit', $childNewsCategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'news_categories', 'action' => 'delete', $childNewsCategory['id']), array(), __('Are you sure you want to delete # %s?', $childNewsCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child News Category'), array('controller' => 'news_categories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
