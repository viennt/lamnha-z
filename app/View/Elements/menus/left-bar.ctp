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
<div class="left-sidebar">
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title">Vật liệu - Thiết bị</h3>
		</div>
		<div class="panel-body">
			<div id='cssmenu'>
				<?php
					$menuHorizontal_products = $this->requestAction('/menus/products');
					echo $this->Common->create_menu($menuHorizontal_products, 'ProductCategory','productCategories', 'view');
				?>
			</div>
		</div>
	</div>
</div>
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