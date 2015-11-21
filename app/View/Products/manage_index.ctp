<?php $this->Paginator->options(array(
		'update' => '#load',
		'evalScripts' => true,
		'before' => $this->Js->get('#busy-indicator')->effect(
			'fadeIn',
			array('buffer' => false)
		),
		'complete' => $this->Js->get('#busy-indicator')->effect(
			'fadeOut',
			array('buffer' => false)
		),
	)); ?>
<div class="products box box-primary">
	<div class="box-header with-border">
		<?php echo $this->Html->link(__(' Thêm sản phẩm mới '),
			array('controller' => 'products', 'action' => 'add'),
			array('class'=>'btn btn-xm btn-primary btn-flat col-lg-12')
			); ?>
	</div>
	<div class="box-body table-responsive no-padding">
		<table class="table table-hover" cellpadding="0" cellspacing="0">
		<thead>
		<tr>
					<th><?php echo $this->Paginator->sort('id', '#'); ?></th>
					<th><?php echo $this->Paginator->sort('name', 'Tên'); ?></th>
					<th><?php echo $this->Paginator->sort('description', 'Chi tiết'); ?></th>
					<th><?php echo $this->Paginator->sort('specification', 'Đặc điểm'); ?></th>
					<th><?php echo $this->Paginator->sort('unit', 'Đơn vị'); ?></th>
					<th><?php echo $this->Paginator->sort('quantity', 'Số lượng'); ?></th>
					<th><?php echo $this->Paginator->sort('commision', 'Hoa hồng'); ?></th>
					<th><?php echo $this->Paginator->sort('published', 'Tình trạng'); ?></th>
					<th><?php echo $this->Paginator->sort('product_category_id', 'Danh mục'); ?></th>
					<th class="actions"><?php echo __('Điều khiển'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($products as $product): ?>
		<tr>
			<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
			<td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
			<td><?php echo h($product['Product']['description']); ?>&nbsp;</td>
			<td><?php echo h($product['Product']['specification']); ?>&nbsp;</td>
			<td><?php echo h($product['Product']['unit']); ?>&nbsp;</td>
			<td><?php echo h($product['Product']['quantity']); ?>&nbsp;</td>
			<td><?php echo h($product['Product']['commision']), '%'; ?>&nbsp;</td>
			<td><?php echo h($product['Product']['published']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($product['ProductCategory']['name'], array('controller' => 'product_categories', 'action' => 'view', $product['ProductCategory']['id'])); ?>
			</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id']), array('class' => 'btn btn-block btn-xs btn-info btn-flat')); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id']), array('class' => 'btn btn-block btn-xs btn-success btn-flat')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), array('class' => 'btn btn-block btn-xs btn-danger btn-flat', 'confirm' => __('Are you sure you want to delete # %s?', $product['Product']['id']))); ?>
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
			'format' => __('Trang {:page}/{:pages}, hiển thị {:current}/{:count} sản phẩm, từ sản phẩm {:start}, đến sản phẩm {:end}')
		));
		?>		</p>
		<?php
		echo $this->Paginator->prev('« ', array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ' '));
		echo $this->Paginator->next(' »', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

<?php echo $this->Js->writeBuffer();?>