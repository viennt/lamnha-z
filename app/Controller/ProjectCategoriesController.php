<?php
App::uses('AppController', 'Controller');
/**
 * ProjectCategories Controller
 *
 * @property ProjectCategory $ProjectCategory
 * @property PaginatorComponent $Paginator
 */
class ProjectCategoriesController extends AppController {
	
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
		$this->ProjectCategory->recursive = 0;
		$this->set('projectCategories', $this->Paginator->paginate());
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
		// if (!$this->ProjectCategory->exists($id)) {
		// 	throw new NotFoundException(__('Invalid project category'));
		// }
		// $options = array('conditions' => array('ProjectCategory.' . $this->ProjectCategory->primaryKey => $id));
		// $this->set('projectCategory', $this->ProjectCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function manage_add() {
		if ($this->request->is('post')) {
			$this->ProjectCategory->create();
			if ($this->ProjectCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The project category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project category could not be saved. Please, try again.'));
			}
		}
		$parentProjectCategories = $this->ProjectCategory->ParentProjectCategory->generateTreeList(null, null, null, '___');
		$this->set(compact('parentProjectCategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manage_edit($id = null) {
		if (!$this->ProjectCategory->exists($id)) {
			throw new NotFoundException(__('Invalid project category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProjectCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The project category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProjectCategory.' . $this->ProjectCategory->primaryKey => $id));
			$this->request->data = $this->ProjectCategory->find('first', $options);
		}
		$parentProjectCategories = $this->ProjectCategory->ParentProjectCategory->generateTreeList(null, null, null, '___');
		$this->set(compact('parentProjectCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manage_delete($id = null) {
		$this->ProjectCategory->id = $id;
		if (!$this->ProjectCategory->exists()) {
			throw new NotFoundException(__('Invalid project category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProjectCategory->delete()) {
			$this->Session->setFlash(__('The project category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The project category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
