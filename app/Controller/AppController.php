<?php
/* -----------------------------------------------------------------------------------------
   LamnhA-Z - http://www.lamnha-z.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2015 LamNhaZ Ltd.
   License - http://www.lamnha-z.com/license.html
   ---------------------------------------------------------------------------------------*/

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
            $this->layout = 'manage';
        else:
            $this->layout = 'one-column';
            $this->Auth->allow();
        endif;
    }
}
