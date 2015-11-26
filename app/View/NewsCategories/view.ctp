<!-- News -->
<div class="publicList">
	<div class="list-items" id="load-content">
		<ul class="list-group">
		<?php foreach ($news as $anews): ?>
		<li class="list-group-item">
		<ul class="media-list">
		<li class="media">
			<div class="media-left">
				<?php echo $this->Html->image(
					'noimage.jpg',
					array(
						'alt' => isset($anews['NewsImage'][0]['description']) ? $anews['NewsImage'][0]['description'] : 'lamnha-z',
						'url' => array('controller' => 'news', 'action' => 'view', 'id' => $anews['News']['id'], 'slug' => $this->Common->convertViToEn($anews['News']['title'], true)),
						'class' => 'media-object lazy',
						'style' => 'width: 150px',
						'data-original' => isset($anews['NewsImage'][0]['name']) ? $this->webroot.'img/uploads/news/'.$anews['NewsImage'][0]['name'] : '#'
					)); ?>
			</div>
			<div class="media-body">
			<h4 class="media-heading">
				<?php echo $this->Html->link($anews['News']['title'], array('controller' => 'news', 'action' => 'view', 'id' => $anews['News']['id'], 'slug' => $this->Common->convertViToEn($anews['News']['title'], true))); ?>
			</h4>
			<?php echo date("(d/m/y)", strtotime($anews['News']['created'])); ?> <br/>
			<?php echo $anews['News']['abstract']; ?>
			</div>
		</li>
		</ul>
		</li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>