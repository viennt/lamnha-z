<li class="treeview active">
    <a href="#">
        <span class="glyphicon glyphicon-dashboard"></span>
        <span>Bảng điều khiển</span>
        <span class="glyphicon glyphicon-option-horizontal pull-right"></span>
    </a>
    <ul class="treeview-menu">
        <li <?php if(strtolower(substr($this->request->controller, -10)) === 'categories') echo 'class="active"'?>>
            <a href="#">
                <span class="glyphicon glyphicon-folder-open"></span> Quản lý danh mục
            </a>
            <ul class="treeview-menu menu-open">
                <li><?php echo $this->Html->link(
                    '<span class="glyphicon glyphicon-triangle-right"></span> Dự án',
                    array('controller'=> 'projectCategories', 'action' => 'index', 'manage' => true),
                    array('class' => 'sidebar-toggle', 'escape' => false)
                    );?></li>
                <li><?php echo $this->Html->link(
                    '<span class="glyphicon glyphicon-triangle-right"></span> Sản phẩm',
                    array('controller'=> 'productCategories', 'action' => 'index', 'manage' => true),
                    array('class' => 'sidebar-toggle', 'escape' => false)
                    );?></li>
                <li><?php echo $this->Html->link(
                    '<span class="glyphicon glyphicon-triangle-right"></span> Dịch vụ',
                    array('controller'=> 'serviceCategories', 'action' => 'index', 'manage' => true),
                    array('class' => 'sidebar-toggle', 'escape' => false)
                    );?></li>
                <li><?php echo $this->Html->link(
                    '<span class="glyphicon glyphicon-triangle-right"></span> Tin tức',
                    array('controller'=> 'newsCategories', 'action' => 'index', 'manage' => true),
                    array('class' => 'sidebar-toggle', 'escape' => false)
                    );?></li>
            </ul>
            </li>
        <li><a href="#">
            <span class="glyphicon glyphicon-home"></span> Quản lý dự án
            </a></li>
        <li <?php if(strtolower($this->request->controller) === 'products') echo 'class="active"';?>>
        <?php echo $this->Html->link(
            '<span class="glyphicon glyphicon-shopping-cart"></span> Quản lý sản phẩm',
            array('controller'=> 'products', 'action' => 'index', 'manage' => true),
            array('class' => 'sidebar-toggle', 'escape' => false)
            );?></li>
        <li><?php echo $this->Html->link(
            '<span class="glyphicon glyphicon-cloud"></span> Quản lý dịch vụ',
            array('controller'=> 'services', 'action' => 'index', 'manage' => true),
            array('class' => 'sidebar-toggle', 'escape' => false)
            );?></li>
        <li><?php echo $this->Html->link(
            '<span class="glyphicon glyphicon-bullhorn"></span> Quản lý tin tức',
            array('controller'=> 'news', 'action' => 'index', 'manage' => true),
            array('class' => 'sidebar-toggle', 'escape' => false)
            );?></li>
        <li><?php echo $this->Html->link(
            '<span class="glyphicon glyphicon-user"></span> Quản lý người dùng',
            array('controller'=> 'users', 'action' => 'index', 'manage' => true),
            array('class' => 'sidebar-toggle', 'escape' => false)
            );?></li>
        <li><a href="#">
            <span class="glyphicon glyphicon-check"></span> Phân quyền
            </a></li>
        <li><a href="#">
            <span class="glyphicon glyphicon-stats"></span> Thống kê
            </a></li>
    </ul>
</li>
<li class="treeview">
    <a href="#">
        <span class="glyphicon glyphicon-home"></span>
        <span>Danh mục dự án</span>
    </a>
    <ul class="treeview-menu">
        <li><a href="#"><span class="glyphicon glyphicon-triangle-right"></span> Menu v1</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-triangle-right"></span> Menu v2</a></li>
    </ul>
</li>
<li class="treeview">
    <a href="#">
        <span class="glyphicon glyphicon-shopping-cart"></span>
        <span>Danh mục sản phẩm</span>
    </a>
    <ul class="treeview-menu">
        <li><a href="#"><span class="glyphicon glyphicon-triangle-right"></span> Menu v1</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-triangle-right"></span> Menu v2</a></li>
    </ul>
</li>
<li class="treeview">
    <a href="#">
        <span class="glyphicon glyphicon-cloud"></span>
        <span>Danh mục dịch vụ</span>
    </a>
    <ul class="treeview-menu">
        <li><a href="#"><span class="glyphicon glyphicon-triangle-right"></span> Menu v1</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-triangle-right"></span> Menu v2</a></li>
    </ul>
</li>
<li class="treeview">
    <a href="#">
        <span class="glyphicon glyphicon-bullhorn"></span>
        <span>Danh mục tin tức</span>
    </a>
    <ul class="treeview-menu">
        <li><a href="#"><span class="glyphicon glyphicon-triangle-right"></span> Menu v1</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-triangle-right"></span> Menu v2</a></li>
    </ul>
</li>