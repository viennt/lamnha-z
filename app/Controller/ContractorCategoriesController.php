<?php
/* -----------------------------------------------------------------------------------------
   LamnhA-Z - http://www.lamnha-z.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2015 LamNhaZ Ltd.
   License - http://www.lamnha-z.com/license.html
   ---------------------------------------------------------------------------------------*/

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
		if (!$this->ContractorCategory->exists($id)) {
			throw new NotFoundException(__('Invalid news category'));
		}
		$options = array('conditions' => array('ContractorCategory.' . $this->ContractorCategory->primaryKey => $id));
		$this->set('contractorCategory', $this->ContractorCategory->find('first', $options));
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
				$this->Session->setFlash(__('The news category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The news category could not be saved. Please, try again.'));
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
			throw new NotFoundException(__('Invalid news category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ContractorCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The news category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The news category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContractorCategory.' . $this->ContractorCategory->primaryKey => $id));
			$this->request->data = $this->ContractorCategory->find('first', $options);
		}
		$parentNewsCategories = $this->ContractorCategory->ParentContractorCategory->generateTreeList(null, null, null, '___');
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
		$this->ContractorCategory->id = $id;
		if (!$this->ContractorCategory->exists()) {
			throw new NotFoundException(__('Invalid news category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ContractorCategory->delete()) {
			$this->Session->setFlash(__('The news category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The news category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout = "two-column";
		if (!$this->ContractorCategory->exists($id)) {
			throw new NotFoundException(__('Invalid news category'));
		}
		$this->loadModel('News');
		$categoryIds = $this->ContractorCategory->children($id , false, 'id');
		$categoryIds = Hash::extract($categoryIds, '{n}.ContractorCategory.id');
		array_push($categoryIds, "{$id}");
		
		$optionsNews = array(
			'conditions' => array('News.news_category_id' => $categoryIds, 'News.published' => 1),
			'recursive' => 1,
			'fields' => array('News.title', 'News.abstract', 'News.created', 'News.view'));
		$this->set('news', $this->News->find('all', $optionsNews));

		$this->set('crumbs', $this->ContractorCategory->getPath($id));
	}
}
