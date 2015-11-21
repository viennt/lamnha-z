<div class="left-sidebar">
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title">Tin tức</h3>
		</div>
		<div class="panel-body">
			<div id='cssmenu'>
				<?php
					$menuHorizontal_news = $this->requestAction('/menus/news');
					echo $this->Common->create_menu($menuHorizontal_news, 'NewsCategory','newsCategories', 'view');
				?>
			</div>
		</div>
	</div>
</div>