<!-- Products -->
<div class="publicList">
	<div class="list-items row" id="load-content">
		<?php foreach ($projects as $project): ?>
 		<div class="col-sx-4 col-sm-4 col-md-4 col-lg-3">
			<div class="inner">
				<?php echo $this->Html->image(
					'noimage.jpg', 
					array(
						'alt' => isset($project['ProjectImage'][0]['description']) ? $project['ProjectImage'][0]['description'] : 'lamnha-z',
						'url' => array('controller' => 'projects', 'action' => 'view', 'id' => $project['Project']['id'], 'slug' => $this->Common->convertViToEn($project['Project']['name'], true)),
						'class' => 'lazy',
						'data-original' => isset($project['ProjectImage'][0]['name']) ? $this->webroot.'img/uploads/projects/images/'.$project['ProjectImage'][0]['name'] : '#'
					)); ?>
				<div class="detail">
					<h5><strong>
						<?php echo $this->Html->link($project['Project']['name'], array('controller' => 'projects', 'action' => 'view', 'id' => $project['Project']['id'], 'slug' => $this->Common->convertViToEn($project['Project']['name'], true))); ?>
					</strong></h5>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>