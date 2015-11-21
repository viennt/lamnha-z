<!-- News -->
<div class="products">
	<ol class="breadcrumb"><?php 
		$i = 0;
		$len = count($crumbs);
		foreach ($crumbs as $crumb):
			if($crumb['NewsCategory']['id'] == '1'):
				echo '<li>', $this->Html->link(__('Tin tức'), array('controller' => 'danh-muc-tin-tuc.html', 'manage' => false)),'</li>';
			else:
				if($i == $len - 1) echo '<li class="active">', $crumb['NewsCategory']['name'], '</li>';
				else echo '<li>', $this->Html->link($crumb['NewsCategory']['name'], array('controller' => 'newsCategories', 'action' => 'view', 'id' => $crumb['NewsCategory']['id'], 'slug' => $this->Common->convertViToEn($crumb['NewsCategory']['name'], true))), '</li>';
			endif;
			$i++;
		endforeach;
		unset($i);
		unset($len);
	?></ol>
	<div class="list-items" id="load-content">
		<ul>
			<?php foreach ($newsCategory['News'] as $anews): ?>
			<li style="width: 190px">
			<div class="drag-item" style="width: 190px">
				<div class="inner">
					<?php echo $this->Html->image('product.jpg', array('alt' => 'CakePHP', 'url' => array('controller' => 'news', 'action' => 'view', 'id' => $anews['id'], 'slug' => $this->Common->convertViToEn($anews['title'], true)))); ?>
					<div class="detail">
						<h5><strong><?php echo $anews['title']; ?></strong></h5>
						<span><?php echo $anews['abstract']; ?></span>
					</div>
				</div>
			</div>
			</li>
			<?php endforeach; ?>
			<?php foreach ($news as $anews): ?>
			<li style="width: 190px">
			<div class="drag-item" style="width: 190px">
				<div class="inner">
					<?php echo $this->Html->image('product.jpg', array('alt' => 'CakePHP', 'url' => array('controller' => 'news', 'action' => 'view', 'id' => $anews['News']['id'], 'slug' => $this->Common->convertViToEn($anews['News']['title'], true)))); ?>
					<div class="detail">
						<h5><strong><?php echo $anews['News']['title']; ?></strong></h5>
						<span><?php echo $anews['News']['abstract']; ?></span>
					</div>
				</div>
			</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>