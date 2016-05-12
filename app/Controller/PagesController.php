<?php
/* -----------------------------------------------------------------------------------------
   LamnhA-Z - http://www.lamnha-z.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2015 LamNhaZ Ltd.
   License - http://www.lamnha-z.com/license.html
   ---------------------------------------------------------------------------------------*/


App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {


/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * display method
 *
 * @return void
 */
	public function display() {
		$this->layout = "two-column";
		$this->loadModel('Project');
		$optionsProject = array(
			'recursive' => 1,
			'order' => array('Project.id DESC'),
			'limit' => 4,
			'fields' => array('Project.name'));
		$this->set('projects', $this->Project->find('all', $optionsProject));

		$this->loadModel('Product');
		$optionsProduct = array(
			'conditions' => array('Product.published' => 1),
			'recursive' => 1,
			'order' => array('Product.id DESC'),
			'limit' => 8,
			'fields' => array('Product.name'));
		$this->set('products', $this->Product->find('all', $optionsProduct));

		$this->loadModel('Service');
		$optionsService = array(
			'conditions' => array('Service.published' => 1),
			'recursive' => 1,
			'order' => array('Service.id DESC'),
			'limit' => 8,
			'fields' => array('Service.name'));
		$this->set('services', $this->Service->find('all', $optionsService));
	}

/**
 * Admin_Display method
 *
 * @return void
 */
	public function manage_display() {

		$title = 'Dashboard';
		$this->set(compact('title'));	
	}

/**
 * Invoice method
 *
 * @return void
 */
	public function manage_invoice() {
			
	}

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function logs() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}
}
