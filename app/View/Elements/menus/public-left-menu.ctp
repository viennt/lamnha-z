<div class="left-sidebar">
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title"><?php
				echo $this->Html->link($title, array('controller' => $titleURL, 'manage' => false));
			?></h3>
		</div>
		<div class="panel-body">
			<div id="cssmenu"><?php
				$root_id = 1;
				$data = $this->requestAction('/menus/'.strtolower($categoryName).'Cats');
				echo $this->Common->create_menu($data, $root_id, $categoryName.'Category', strtolower($categoryName).'Categories', 'view', 'has-sub');
			?></div>
		</div>
	</div>
</div>