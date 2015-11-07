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
		'/home.html', 
		array('controller' => 'pages', 'action' => 'display')
	);
	Router::connect(
		"/manage.html", 
		array('controller' => 'pages', 'action' => 'display', 'prefix' => 'manage')
	);

/**
 * Users page
 */
	Router::connect('/register.html', array('controller' => 'users', 'action' => 'register'));
	Router::connect('/login.html', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/logout.html', array('controller' => 'users', 'action' => 'logout'));
	Router::connect('/profile.html', array('controller' => 'profiles', 'action' => 'detail'));
	Router::connect(
		"/manage/profile.html", 
		array('controller' => 'profiles', 'action' => 'detail', 'prefix' => 'manage')
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
 * Products
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
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
