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