<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect(
		'/', 
		array('controller' => 'pages', 'action' => 'display')
	);
	Router::connect(
		'/trang-chu.html', 
		array('controller' => 'pages', 'action' => 'display')
	);
	Router::connect(
		"/manage.html", 
		array('controller' => 'pages', 'action' => 'display', 'prefix' => 'manage')
	);

/**
 * Users page
 */
	Router::connect('/dang-ky.html', array('controller' => 'users', 'action' => 'register'));
	Router::connect('/dang-nhap.html', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/dang-xuat.html', array('controller' => 'users', 'action' => 'logout'));
	Router::connect('/tai-khoan.html', array('controller' => 'profiles', 'action' => 'detail'));
	Router::connect(
		"/manage/profile.html", 
		array('controller' => 'profiles', 'action' => 'detail', 'prefix' => 'manage')
	);

/**
 * Project
 */
    Router::connect(
        '/danh-muc-du-an.html',
        array('controller' => 'projectCategories', 'action' => 'view', 1)
    );
    Router::connect(
        '/danh-muc-du-an/:slug-:id.html',
        array('controller' => 'projectCategories', 'action' => 'view'),
        array(
            'pass' => array('id', 'slug'),
            "id"=>"[0-9]+", // chỉ là số
        )
    );
    Router::connect(
        '/du-an/:slug-:id.html',
        array('controller' => 'projects', 'action' => 'view'),
        array(
            'pass' => array('id', 'slug'),
            "id"=>"[0-9]+", // chỉ là số
        )
    );
    Router::connect(
        '/du-an/chinh-sua/:slug-:id.html',
        array('controller' => 'projects', 'action' => 'edit'),
        array(
            'pass' => array('id', 'slug'),
            "id"=>"[0-9]+", // chỉ là số
        )
    );
    Router::connect(
        '/tao-du-an.html',
        array('controller' => 'projects', 'action' => 'add')
    );

/**
 * Products
 */
    Router::connect(
        '/danh-muc-san-pham.html',
        array('controller' => 'productCategories', 'action' => 'view', 1)
    );
    Router::connect(
        '/danh-muc-san-pham/:slug-:id.html',
        array('controller' => 'productCategories', 'action' => 'view'),
        array(
            'pass' => array('id', 'slug'),
            "id"=>"[0-9]+", // chỉ là số
        )
    );
    Router::connect(
        '/san-pham/:slug-:id.html',
        array('controller' => 'products', 'action' => 'view'),
        array(
            'pass' => array('id', 'slug'),
            "id"=>"[0-9]+", // chỉ là số
        )
    );

/**
 * Service
 */
    Router::connect(
        '/danh-muc-dich-vu.html',
        array('controller' => 'serviceCategories', 'action' => 'view', 1)
    );
    Router::connect(
        '/danh-muc-dich-vu/:slug-:id.html',
        array('controller' => 'serviceCategories', 'action' => 'view'),
        array(
            'pass' => array('id', 'slug'),
            "id"=>"[0-9]+", // chỉ là số
        )
    );
    Router::connect(
        '/dich-vu/:slug-:id.html',
        array('controller' => 'services', 'action' => 'view'),
        array(
            'pass' => array('id', 'slug'),
            "id"=>"[0-9]+", // chỉ là số
        )
    );

/**
 * News
 */
    Router::connect(
        '/danh-muc-tin-tuc.html',
        array('controller' => 'newsCategories', 'action' => 'view', 1)
    );
    Router::connect(
        '/danh-muc-tin-tuc/:slug-:id.html',
        array('controller' => 'newsCategories', 'action' => 'view'),
        array(
            'pass' => array('id', 'slug'),
            "id"=>"[0-9]+", // chỉ là số
        )
    );
    Router::connect(
        '/chia-se.html',
        array('controller' => 'newsCategories', 'action' => 'view', 8)
    );
    Router::connect(
        '/mien-phi.html',
        array('controller' => 'newsCategories', 'action' => 'view', 9)
    );
    Router::connect(
        '/tin-tuc/:slug-:id.html',
        array('controller' => 'news', 'action' => 'view'),
        array(
            'pass' => array('id', 'slug'),
            "id"=>"[0-9]+", // chỉ là số
        )
    );

/**
 * Cart
 */
    Router::connect(
        '/gio-hang.html',
        array('controller' => 'carts', 'action' => 'view')
    );

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
