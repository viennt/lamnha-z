<div class="productCategories box box-primary">
	<div class="box-header with-border">
		<?php echo $this->Html->link(__(' Thêm danh mục mới '),
			array('controller' => 'productCategories', 'action' => 'add'),
			array('class'=>'btn btn-xm btn-primary btn-flat col-lg-12')
			); ?>
	</div>
	<div class="box-body table-responsive no-padding">
		<table class="table table-hover" cellpadding="0" cellspacing="0">
		<thead>
		<tr>
					<th><?php echo $this->Paginator->sort('id', '#'); ?></th>
					<th><?php echo $this->Paginator->sort('name', 'Tên'); ?></th>
					<th><?php echo $this->Paginator->sort('description', 'Mô tả'); ?></th>
					<th><?php echo $this->Paginator->sort('parent_id', 'Danh mục cha'); ?></th>
					<th><?php echo $this->Paginator->sort('lft'); ?></th>
					<th><?php echo $this->Paginator->sort('rght'); ?></th>
					<th class="actions"><?php echo __('Điều khiển', '#'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($productCategories as $productCategory): ?>
	<tr>
		<td><?php echo h($productCategory['ProductCategory']['id']); ?>&nbsp;</td>
		<td><?php echo h($productCategory['ProductCategory']['name']); ?>&nbsp;</td>
		<td><?php echo h($productCategory['ProductCategory']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($productCategory['ParentProductCategory']['name'], array('controller' => 'product_categories', 'action' => 'view', $productCategory['ParentProductCategory']['id'])); ?>
		</td>
		<td><?php echo h($productCategory['ProductCategory']['lft']); ?>&nbsp;</td>
		<td><?php echo h($productCategory['ProductCategory']['rght']); ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('Xem'), array('action' => 'view', $productCategory['ProductCategory']['id']), array('class' => 'btn btn-xs btn-info btn-flat')); ?>
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $productCategory['ProductCategory']['id']), array('class' => 'btn btn-xs btn-success btn-flat')); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $productCategory['ProductCategory']['id']), array('class' => 'btn btn-xs btn-danger btn-flat', 'confirm' => __('Bạn có chắc chắn muốn xóa # %s?', $productCategory['ProductCategory']['id']))); ?>
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