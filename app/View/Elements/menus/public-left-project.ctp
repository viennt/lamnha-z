<div class="left-sidebar">
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title">Dự án mẫu</h3>
		</div>
		<div class="panel-body">
			<div id='cssmenu'>
				<?php
					$menuHorizontal_projects = $this->requestAction('/menus/projects');
					echo $this->Common->create_menu($menuHorizontal_projects, 'ProjectCategory','projectCategories', 'view');
				?>
			</div>
		</div>
	</div>
</div>