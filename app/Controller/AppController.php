<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {	

/**
 * Components
 *
 * @var array
 */
	public $components = array(
        'Flash', 'Session',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'pages',
                'action' => 'display'
            ),
            'logoutRedirect' => array(
                'controller' => 'pages',
                'action' => 'display'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            )
        )
    );
	
/**
 * beforeFilter method
 *
 * @return void
 */
    public function beforeFilter() {
        if($this->request->prefix == 'manage'):
            $this->layout = 'admin';
        endif;
        $this->Auth->allow('display');

        ///////////////////////////////////////////////////////////////////////////
        $this->loadModel('ProjectCategory');
        $ProjectCategories = $this->ProjectCategory->find('all');
        foreach ($ProjectCategories as $Category) {
            $Projectdata[$Category['ProjectCategory']['parent_id']][] = $Category;
        }
        $this->set('menuHorizontal_projects', $Projectdata);

        ///////////////////////////////////////////////////////////////////////////
        $this->loadModel('ProductCategory');
        $ProductCategories = $this->ProductCategory->find('all');
        foreach ($ProductCategories as $Category) {
            $Productdata[$Category['ProductCategory']['parent_id']][] = $Category;
        }
        $this->set('menuHorizontal_products', $Productdata);

        ///////////////////////////////////////////////////////////////////////////
        $this->loadModel('ServiceCategory');
        $ServiceCategories = $this->ServiceCategory->find('all');
        foreach ($ServiceCategories as $Category) {
            $Servicedata[$Category['ServiceCategory']['parent_id']][] = $Category;
        }
        $this->set('menuHorizontal_services', $Servicedata);
    }
}
