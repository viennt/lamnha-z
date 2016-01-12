<?php
/* -----------------------------------------------------------------------------------------
   LamnhA-Z - http://www.lamnha-z.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2015 LamNhaZ Ltd.
   License - http://www.lamnha-z.com/license.html
   ---------------------------------------------------------------------------------------*/

App::uses('AppController', 'Controller');
/**
 * Projects Controller
 *
 * @property Project $Project
 * @property PaginatorComponent $Paginator
 */
class ProjectsController extends AppController {
	
/**
 * Scaffold
 *
 * @var string
 */
	public $scaffold = 'manage';
	
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler');
	
/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Js');
	
/**
 * paginate: setting
 *
 * @var array
 */
	public $paginate = array(
		'limit' => 10,
		'order' => array(
			'Project.id' => 'asc'
		)
	);

/**
 * index method
 *
 * @return void
 */
	public function manage_index() {
		$this->Project->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		$this->set('projects', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manage_view($id = null, $slug = null) {
		if (!$this->Project->exists($id)) {
			throw new NotFoundException(__('Invalid project'));
		}
		$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
		$this->set('project', $this->Project->find('first', $options));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->loadModel('ProjectsHasProduct');
		if (!$this->Project->exists($id)) {
			throw new NotFoundException(__('Invalid project'));
		}
		$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
		$this->set('project', $this->Project->find('first', $options));
		$options = array('conditions' => array('ProjectsHasProduct.project_id' => $id), 'order' => array('ProjectsHasProduct.date DESC'), 'limit' => 5);
		$this->set('hasproducts', $this->ProjectsHasProduct->find('all', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'two-column';
		if ($this->request->is('post')) {
			$this->Project->create();
			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The project has been saved.'));
				return $this->redirect(array('controller' => 'trang-chu.html'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'));
			}
		}
		$user_id = $this->Auth->User('id');
		$projectCategories = $this->Project->ProjectCategory->find('list');
		$this->set(compact('user_id', 'projectCategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->layout = 'two-column';
		if (!$this->Project->exists($id)) {
			throw new NotFoundException(__('Invalid project'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The project has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
			$this->request->data = $this->Project->find('first', $options);
		}
		$user_id = $this->Auth->User('id');
		$projectCategories = $this->Project->ProjectCategory->find('list');
		$this->set(compact('user_id', 'projectCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Project->delete()) {
			$this->Session->setFlash(__('The project has been deleted.'));
		} else {
			$this->Session->setFlash(__('The project could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
