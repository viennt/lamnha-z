<div class="left-sidebar">
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title">Dịch vụ - Thầu</h3>
		</div>
		<div class="panel-body">
			<div id='cssmenu'>
				<?php
					$menuHorizontal_services = $this->requestAction('/menus/services');
					echo $this->Common->create_menu($menuHorizontal_services, 'ServiceCategory','serviceCategories', 'view');
				?>
			</div>
		</div>
	</div>
</div>