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
<div class="news box box-primary">
	<div class="box-header with-border">
		<?php echo $this->Html->link(__(' Add '),
			array('controller' => 'news', 'action' => 'add'),
			array('class'=>'btn btn-xm btn-primary btn-flat col-lg-12')
			); ?>
	</div>
	<div class="box-body table-responsive no-padding">
		<table class="table table-hover" cellpadding="0" cellspacing="0">
		<thead>
		<tr>
					<th><?php echo $this->Paginator->sort('id', '#'); ?></th>
					<th><?php echo $this->Paginator->sort('title', 'Tiêu đề'); ?></th>
					<th><?php echo $this->Paginator->sort('user_id', 'Người đăng'); ?></th>
					<th><?php echo $this->Paginator->sort('created', 'Ngày đăng'); ?></th>
					<th><?php echo $this->Paginator->sort('view', 'Lượt xem'); ?></th>
					<th><?php echo $this->Paginator->sort('published', 'Công khai'); ?></th>
					<th><?php echo $this->Paginator->sort('news_category_id', 'Danh mục'); ?></th>
					<th class="actions"><?php echo __('Điều khiển', '#'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($news as $news): ?>
		<tr>
			<td><?php echo h($news['News']['id']); ?>&nbsp;</td>
			<td><?php echo h($news['News']['title']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($news['User']['id'], array('controller' => 'users', 'action' => 'view', $news['User']['id'])); ?>
			</td>
			<td><?php echo h($news['News']['created']); ?>&nbsp;</td>
			<td><?php echo h($news['News']['view']); ?>&nbsp;</td>
			<td><?php 
				if($news['News']['published'] == '1')
					echo '<span class="label label-success">', 'Công khai', '</span>';
				else
					echo '<span class="label label-danger">', 'Đang ẩn', '</span>';

			?></td>
			<td>
				<?php echo $this->Html->link($news['NewsCategory']['name'], array('controller' => 'news_categories', 'action' => 'view', $news['NewsCategory']['id'])); ?>
			</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Xem'), array('action' => 'view', $news['News']['id']), array('class' => 'btn btn-xs btn-info btn-flat')); ?>
				<?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $news['News']['id']), array('class' => 'btn btn-xs btn-success btn-flat')); ?>
				<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $news['News']['id']), array('class' => 'btn btn-xs btn-danger btn-flat', 'confirm' => __('Are you sure you want to delete # %s?', $news['News']['id']))); ?>
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
			'format' => __('Trang {:page}/{:pages}, hiển thị {:current}/{:count} tin tức, từ tin {:start}, đến tin {:end}')
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