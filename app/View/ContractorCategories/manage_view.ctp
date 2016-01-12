<div class="productCategories view">
<h2><?php echo __('Product Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productCategory['ProductCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($productCategory['ProductCategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($productCategory['ProductCategory']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Product Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productCategory['ParentProductCategory']['name'], array('controller' => 'product_categories', 'action' => 'view', $productCategory['ParentProductCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($productCategory['ProductCategory']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($productCategory['ProductCategory']['rght']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Product Categories'); ?></h3>
	<?php if (!empty($productCategory['ChildProductCategory'])): ?>
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
	<?php foreach ($productCategory['ChildProductCategory'] as $childProductCategory): ?>
		<tr>
			<td><?php echo $childProductCategory['id']; ?></td>
			<td><?php echo $childProductCategory['name']; ?></td>
			<td><?php echo $childProductCategory['description']; ?></td>
			<td><?php echo $childProductCategory['parent_id']; ?></td>
			<td><?php echo $childProductCategory['lft']; ?></td>
			<td><?php echo $childProductCategory['rght']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'product_categories', 'action' => 'view', $childProductCategory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'product_categories', 'action' => 'edit', $childProductCategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'product_categories', 'action' => 'delete', $childProductCategory['id']), array(), __('Are you sure you want to delete # %s?', $childProductCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Product Category'), array('controller' => 'product_categories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($productCategory['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Specification'); ?></th>
		<th><?php echo __('Unit'); ?></th>
		<th><?php echo __('Published'); ?></th>
		<th><?php echo __('Opened'); ?></th>
		<th><?php echo __('Product Category Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($productCategory['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['description']; ?></td>
			<td><?php echo $product['specification']; ?></td>
			<td><?php echo $product['unit']; ?></td>
			<td><?php echo $product['published']; ?></td>
			<td><?php echo $product['opened']; ?></td>
			<td><?php echo $product['product_category_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), array(), __('Are you sure you want to delete # %s?', $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
