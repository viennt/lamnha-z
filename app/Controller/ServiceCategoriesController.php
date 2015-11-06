<?php
App::uses('AppController', 'Controller');
/**
 * ServiceCategories Controller
 *
 * @property ServiceCategory $ServiceCategory
 * @property PaginatorComponent $Paginator
 */
class ServiceCategoriesController extends AppController {
	
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
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function manage_index() {
		$this->ServiceCategory->recursive = 0;
		$this->set('serviceCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manage_view($id = null) {
		return $this->redirect($this->referer());
		// if (!$this->ServiceCategory->exists($id)) {
		// 	throw new NotFoundException(__('Invalid service category'));
		// }
		// $options = array('conditions' => array('ServiceCategory.' . $this->ServiceCategory->primaryKey => $id));
		// $this->set('serviceCategory', $this->ServiceCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function manage_add() {
		if ($this->request->is('post')) {
			$this->ServiceCategory->create();
			if ($this->ServiceCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The service category has been saved.'));
				return $this->redirect(array('action' => 'add'));
			} else {
				$this->Session->setFlash(__('The service category could not be saved. Please, try again.'));
			}
		}
		$parentServiceCategories = $this->ServiceCategory->ParentServiceCategory->generateTreeList(null, null, null, '___');
		$this->set(compact('parentServiceCategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manage_edit($id = null) {
		if (!$this->ServiceCategory->exists($id)) {
			throw new NotFoundException(__('Invalid service category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ServiceCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The service category has been saved.'));
				return $this->redirect(array('action' => 'view'));
			} else {
				$this->Session->setFlash(__('The service category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ServiceCategory.' . $this->ServiceCategory->primaryKey => $id));
			$this->request->data = $this->ServiceCategory->find('first', $options);
		}
		$parentServiceCategories = $this->ServiceCategory->ParentServiceCategory->generateTreeList(null, null, null, '___');
		$this->set(compact('parentServiceCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manage_delete($id = null) {
		$this->ServiceCategory->id = $id;
		if (!$this->ServiceCategory->exists()) {
			throw new NotFoundException(__('Invalid service category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ServiceCategory->delete()) {
			$this->Session->setFlash(__('The service category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The service category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
