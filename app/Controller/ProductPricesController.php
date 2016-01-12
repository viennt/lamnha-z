<?php
/* -----------------------------------------------------------------------------------------
   LamnhA-Z - http://www.lamnha-z.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2015 LamNhaZ Ltd.
   License - http://www.lamnha-z.com/license.html
   ---------------------------------------------------------------------------------------*/

App::uses('AppController', 'Controller');
/**
 * ProductPrices Controller
 *
 * @property ProductPrice $ProductPrice
 * @property PaginatorComponent $Paginator
 */
class ProductPricesController extends AppController {
	
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
	public function manage_index($id = null) {
		$this->ProductPrice->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('ProductPrice.product_id' => $id),
			'limit' => 20
		);
		$this->set('productPrices', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manage_view($id = null) {
		return false;
	}

/**
 * add method
 * @param number $product_id
 *
 * @return void
 */
	public function manage_add($product_id = null) {
		if ($this->request->is('post')) {
			$this->ProductPrice->create();
			if ($this->ProductPrice->save($this->request->data)) {
				$this->Session->setFlash(__('The product price has been saved.'));
				return $this->redirect(array('action' => 'index', $product_id));
			} else {
				$this->Session->setFlash(__('The product price could not be saved. Please, try again.'));
			}
		}
		$this->set('product_id', $product_id);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manage_edit($id = null) {
		return false;
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manage_delete($id = null, $product_id = null) {
		$this->ProductPrice->id = $id;
		if (!$this->ProductPrice->exists()) {
			throw new NotFoundException(__('Invalid product price'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProductPrice->delete()) {
			$this->Session->setFlash(__('The product price has been deleted.'));
		} else {
			$this->Session->setFlash(__('The product price could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index', $product_id));
	}
}
