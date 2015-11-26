<!-- Service -->
<div class="publicList">
	<div class="list-items" id="load-content">
		<ul>
			<?php foreach ($services as $service): ?>
			<li style="width: 190px">
			<div class="drag-item" style="width: 190px">
				<div class="inner">
					<?php echo $this->Html->image(
						'noimage.jpg',
						array(
							'alt' => isset($service['ServiceImage'][0]['description']) ? $service['ServiceImage'][0]['description'] : 'lamnha-z',
							'url' => array('controller' => 'services', 'action' => 'view', 'id' => $service['Service']['id'], 'slug' => $this->Common->convertViToEn($service['Service']['name'], true)),
							'class' => 'lazy',
							'data-original' => isset($service['ServiceImage'][0]['name']) ? 'uploads/services/'.$service['ServiceImage'][0]['name']: '#',
						)); ?>
					<div class="detail">
						<h5><strong>
							<?php echo $this->Html->link($service['Service']['name'], array('controller' => 'services', 'action' => 'view', 'id' => $service['Service']['id'], 'slug' => $this->Common->convertViToEn($service['Service']['name'], true))); ?>
						</strong></h5>
					</div>
				</div>
			</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<script src=<?php echo $this->webroot,'plugins/easyui/jquery.easyui.min.js'; ?>></script>