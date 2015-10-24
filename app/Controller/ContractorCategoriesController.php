<?php
App::uses('AppController', 'Controller');
/**
 * ContractorCategories Controller
 *
 * @property ContractorCategory $ContractorCategory
 * @property PaginatorComponent $Paginator
 */
class ContractorCategoriesController extends AppController {
	
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
		$this->ContractorCategory->recursive = 0;
		$this->set('contractorCategories', $this->Paginator->paginate());
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
		// if (!$this->ContractorCategory->exists($id)) {
		// 	throw new NotFoundException(__('Invalid contractor category'));
		// }
		// $options = array('conditions' => array('ContractorCategory.' . $this->ContractorCategory->primaryKey => $id));
		// $this->set('contractorCategory', $this->ContractorCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function manage_add() {
		if ($this->request->is('post')) {
			$this->ContractorCategory->create();
			if ($this->ContractorCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The contractor category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contractor category could not be saved. Please, try again.'));
			}
		}
		$parentContractorCategories = $this->ContractorCategory->ParentContractorCategory->generateTreeList(null, null, null, '___');
		$this->set(compact('parentContractorCategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manage_edit($id = null) {
		if (!$this->ContractorCategory->exists($id)) {
			throw new NotFoundException(__('Invalid contractor category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ContractorCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The contractor category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contractor category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContractorCategory.' . $this->ContractorCategory->primaryKey => $id));
			$this->request->data = $this->ContractorCategory->find('first', $options);
		}
		$parentContractorCategories = $this->ContractorCategory->ParentContractorCategory->generateTreeList(null, null, null, '___');
		$this->set(compact('parentContractorCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	 public function manage_delete($id = null) {
		$this->ContractorCategory->id = $id;
		if (!$this->ContractorCategory->exists()) {
			throw new NotFoundException(__('Invalid contractor category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ContractorCategory->delete()) {
			$this->Session->setFlash(__('The contractor category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The contractor category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
