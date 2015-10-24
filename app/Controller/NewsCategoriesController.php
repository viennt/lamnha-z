<?php
App::uses('AppController', 'Controller');
/**
 * NewsCategories Controller
 *
 * @property NewsCategory $NewsCategory
 * @property PaginatorComponent $Paginator
 */
class NewsCategoriesController extends AppController {
	
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
		$this->NewsCategory->recursive = 0;
		$this->set('newsCategories', $this->Paginator->paginate());
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
		// if (!$this->NewsCategory->exists($id)) {
		// 	throw new NotFoundException(__('Invalid news category'));
		// }
		// $options = array('conditions' => array('NewsCategory.' . $this->NewsCategory->primaryKey => $id));
		// $this->set('newsCategory', $this->NewsCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function manage_add() {
		if ($this->request->is('post')) {
			$this->NewsCategory->create();
			if ($this->NewsCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The news category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The news category could not be saved. Please, try again.'));
			}
		}
		$parentNewsCategories = $this->NewsCategory->ParentNewsCategory->generateTreeList(null, null, null, '___');
		$this->set(compact('parentNewsCategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manage_edit($id = null) {
		if (!$this->NewsCategory->exists($id)) {
			throw new NotFoundException(__('Invalid news category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->NewsCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The news category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The news category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('NewsCategory.' . $this->NewsCategory->primaryKey => $id));
			$this->request->data = $this->NewsCategory->find('first', $options);
		}
		$parentNewsCategories = $this->NewsCategory->ParentNewsCategory->generateTreeList(null, null, null, '___');
		$this->set(compact('parentNewsCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manage_delete($id = null) {
		$this->NewsCategory->id = $id;
		if (!$this->NewsCategory->exists()) {
			throw new NotFoundException(__('Invalid news category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->NewsCategory->delete()) {
			$this->Session->setFlash(__('The news category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The news category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
