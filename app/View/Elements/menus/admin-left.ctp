<li class="treeview">
    <a href="#">
        <span class="glyphicon glyphicon-dashboard"></span>
        <span>Dashboard</span>
        <span class="glyphicon glyphicon-option-horizontal pull-right"></span>
    </a>
    <ul class="treeview-menu">
        <li><a href="#">
            <span class="glyphicon glyphicon-folder-open"></span> Quản lý danh mục
        </a></li>
        <li><a href="#">
            <span class="glyphicon glyphicon-home"></span> Quản lý dự án
        </a></li>
        <li><?php echo $this->Html->link(
            '<span class="glyphicon glyphicon-shopping-cart"></span> Quản lý sản phẩm',
            array('controller'=> 'products', 'action' => 'index', 'manage' => true),
            array('class' => 'sidebar-toggle', 'escape' => false)
            );?></li>
        <li><a href="#">
            <span class="glyphicon glyphicon-cloud"></span> Quản lý dịch vụ
        </a></li>
        <li><a href="#">
            <span class="glyphicon glyphicon-bullhorn"></span> Quản lý tin tức
        </a></li>
        <li><a href="#">
            <span class="glyphicon glyphicon-user"></span> Quản lý người dùng
        </a></li>
        <li><a href="#">
            <span class="glyphicon glyphicon-user"></span> Quản lý nhóm người dùng
        </a></li>
        <li><a href="#">
            <span class="glyphicon glyphicon-check"></span> Phân quyền
        </a></li>
        <li><a href="#">
            <span class="glyphicon glyphicon-stats"></span> Thống kê
        </a></li>
        <li><a href="#">
            <span class="glyphicon glyphicon-file"></span> Báo cáo
        </a></li>
        <li><a href="#">
            <span class="glyphicon glyphicon-wrench"></span> Cài đặt
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