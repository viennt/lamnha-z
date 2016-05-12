<li class="treeview active">
    <a href="#">
        <span class="glyphicon glyphicon-dashboard"></span>
        <span>Bảng điều khiển</span>
        <span class="glyphicon glyphicon-option-horizontal pull-right"></span>
    </a>
    <ul class="treeview-menu">
        <?php if(($this->Session->read('Auth.User.Group.id') == '1') 
            || ($this->Session->read('Auth.User.Group.id') == '2')): ?>
        <li <?php if(strtolower(substr($this->request->controller, -10)) === 'categories') echo 'class="active"'?>>
            <a href="#">
                <span class="glyphicon glyphicon-folder-open"></span> Quản lý danh mục
            </a>
            <ul class="treeview-menu menu-open">
                <li <?php if(strtolower($this->request->controller) === 'projectcategories') echo 'class="active"';?>>
                <?php echo $this->Html->link(
                    '<span class="glyphicon glyphicon-triangle-right"></span> Dự án',
                    array('controller'=> 'projectCategories', 'action' => 'index', 'manage' => true),
                    array('class' => 'sidebar-toggle', 'escape' => false)
                    );?></li>
                <li <?php if(strtolower($this->request->controller) === 'productcategories') echo 'class="active"';?>>
                <?php echo $this->Html->link(
                    '<span class="glyphicon glyphicon-triangle-right"></span> Sản phẩm',
                    array('controller'=> 'productCategories', 'action' => 'index', 'manage' => true),
                    array('class' => 'sidebar-toggle', 'escape' => false)
                    );?></li>
                <li <?php if(strtolower($this->request->controller) === 'servicecategories') echo 'class="active"';?>>
                <?php echo $this->Html->link(
                    '<span class="glyphicon glyphicon-triangle-right"></span> Dịch vụ',
                    array('controller'=> 'serviceCategories', 'action' => 'index', 'manage' => true),
                    array('class' => 'sidebar-toggle', 'escape' => false)
                    );?></li>
                <li <?php if(strtolower($this->request->controller) === 'contractorcategories') echo 'class="active"';?>>
                <?php echo $this->Html->link(
                    '<span class="glyphicon glyphicon-triangle-right"></span> Thầu',
                    array('controller'=> 'contractorCategories', 'action' => 'index', 'manage' => true),
                    array('class' => 'sidebar-toggle', 'escape' => false)
                    );?></li>
                <li <?php if(strtolower($this->request->controller) === 'newscategories') echo 'class="active"';?>>
                <?php echo $this->Html->link(
                    '<span class="glyphicon glyphicon-triangle-right"></span> Tin tức',
                    array('controller'=> 'newsCategories', 'action' => 'index', 'manage' => true),
                    array('class' => 'sidebar-toggle', 'escape' => false)
                    );?></li>
            </ul>
        </li>
        <?php endif; ?>
        <?php if(($this->Session->read('Auth.User.Group.id') == '1') 
            || ($this->Session->read('Auth.User.Group.id') == '2')): ?>
        <li <?php if(strtolower($this->request->controller) === 'projects') echo 'class="active"';?>>
        <?php echo $this->Html->link(
            '<span class="glyphicon glyphicon-home"></span> Quản lý dự án',
            array('controller'=> 'projects', 'action' => 'index', 'manage' => true),
            array('class' => 'sidebar-toggle', 'escape' => false)
            );?></li>
        <?php endif; ?>
        <li <?php if(strtolower($this->request->controller) === 'products') echo 'class="active"';?>>
        <?php echo $this->Html->link(
            '<span class="glyphicon glyphicon-shopping-cart"></span> Quản lý sản phẩm',
            array('controller'=> 'products', 'action' => 'index', 'manage' => true),
            array('class' => 'sidebar-toggle', 'escape' => false)
            );?></li>
        <li <?php if(strtolower($this->request->controller) === 'services') echo 'class="active"';?>>
        <?php echo $this->Html->link(
            '<span class="glyphicon glyphicon-cloud"></span> Quản lý dịch vụ',
            array('controller'=> 'services', 'action' => 'index', 'manage' => true),
            array('class' => 'sidebar-toggle', 'escape' => false)
            );?></li>
        <?php if(($this->Session->read('Auth.User.Group.id') == '1') 
            || ($this->Session->read('Auth.User.Group.id') == '2')): ?>
        <li <?php if(strtolower($this->request->controller) === 'news') echo 'class="active"';?>>
        <?php echo $this->Html->link(
            '<span class="glyphicon glyphicon-bullhorn"></span> Quản lý tin tức',
            array('controller'=> 'news', 'action' => 'index', 'manage' => true),
            array('class' => 'sidebar-toggle', 'escape' => false)
            );?></li>
        <?php endif; ?>
        <?php if(($this->Session->read('Auth.User.Group.id') == '1') 
            || ($this->Session->read('Auth.User.Group.id') == '2')): ?>
        <li <?php if(strtolower($this->request->controller) === 'users') echo 'class="active"';?>>
        <?php echo $this->Html->link(
            '<span class="glyphicon glyphicon-user"></span> Quản lý người dùng',
            array('controller'=> 'users', 'action' => 'index', 'manage' => true),
            array('class' => 'sidebar-toggle', 'escape' => false)
            );?></li>
        <?php endif; ?>
        <!-- <li><a href="#">
            <span class="glyphicon glyphicon-check"></span> Phân quyền
            </a></li> -->
        <!-- <li><a href="#">
            <span class="glyphicon glyphicon-stats"></span> Thống kê
            </a></li> -->
    </ul>
</li>
<!-- <li class="treeview">
    <a href="#">
        <span class="glyphicon glyphicon-home"></span>
        <span>Danh mục dự án</span>
    </a>
    <?php 
    $root_id = 1;
    $categoryName = 'project';
    $data = $this->requestAction('/menus/'.strtolower($categoryName).'Cats');
    echo $this->Common->create_adminlte_menu($data, $root_id, $categoryName.'Category', strtolower($categoryName).'Categories', 'view');
    ?>
</li>
<li class="treeview">
    <a href="#">
        <span class="glyphicon glyphicon-shopping-cart"></span>
        <span>Danh mục sản phẩm</span>
    </a>
    <?php 
    $root_id = 1;
    $categoryName = 'product';
    $data = $this->requestAction('/menus/'.strtolower($categoryName).'Cats');
    echo $this->Common->create_adminlte_menu($data, $root_id, $categoryName.'Category', strtolower($categoryName).'Categories', 'view');
    ?>
</li>
<li class="treeview">
    <a href="#">
        <span class="glyphicon glyphicon-cloud"></span>
        <span>Danh mục dịch vụ</span>
    </a>
    <?php 
    $root_id = 1;
    $categoryName = 'service';
    $data = $this->requestAction('/menus/'.strtolower($categoryName).'Cats');
    echo $this->Common->create_adminlte_menu($data, $root_id, $categoryName.'Category', strtolower($categoryName).'Categories', 'view');
    ?>
</li>
<li class="treeview">
    <a href="#">
        <span class="glyphicon glyphicon-bullhorn"></span>
        <span>Danh mục tin tức</span>
    </a>
    <?php 
    $root_id = 1;
    $categoryName = 'news';
    $data = $this->requestAction('/menus/'.strtolower($categoryName).'Cats');
    echo $this->Common->create_adminlte_menu($data, $root_id, $categoryName.'Category', strtolower($categoryName).'Categories', 'view');
    ?>
</li> -->