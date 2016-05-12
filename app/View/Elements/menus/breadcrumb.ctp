<ol class="breadcrumb"><?php 
	if(isset($crumbs)){
		$controller = array(
			'ProductCategory' => array('title' => 'Sản phẩm', 'url' => 'danh-muc-san-pham.html', 'controller' => 'productCategories'),
			'ServiceCategory' => array('title' => 'Dịch vụ', 'url' => 'danh-muc-dich-vu.html', 'controller' => 'serviceCategories'),
			'ProjectCategory' => array('title' => 'Dự án', 'url' => 'danh-muc-du-an.html', 'controller' => 'projectCategories'),
			'NewsCategory' => array('title' => 'Tin tức', 'url' => 'danh-muc-tin-tuc.html', 'controller' => 'newsCategories'),
		);
		$i = 0;
		$len = count($crumbs);
		echo '<li>', $this->Html->link('Trang chủ', array('controller' => 'home.html', 'manage' => false)),'</li>';
		echo '<li>', $this->Html->link($controller[array_keys($crumbs[0])[0]]['title'], array('controller' => $controller[array_keys($crumbs[0])[0]]['url'], 'manage' => false)),'</li>';
		foreach ($crumbs as $crumb):
			$controllerName = array_keys($crumb)[0];
			if($i == $len - 1 && $i != 0) 
				echo '<li class="active">', $crumb[$controllerName]['name'], '</li>';
			else if ($i != 0)
				echo '<li>', $this->Html->link($crumb[$controllerName]['name'], array('controller' => $controller[$controllerName]['controller'], 'action' => 'view', 'id' => $crumb[$controllerName]['id'], 'slug' => $this->Common->convertViToEn($crumb[$controllerName]['name'], true))), '</li>';
			$i++;
		endforeach;
		unset($i);
		unset($len);
	}
?></ol>