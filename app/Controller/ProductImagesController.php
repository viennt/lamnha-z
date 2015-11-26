<?php
/* -----------------------------------------------------------------------------------------
   LamnhA-Z - http://www.lamnha-z.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2015 LamNhaZ Ltd.
   License - http://www.lamnha-z.com/license.html
   ---------------------------------------------------------------------------------------*/

App::uses('AppController', 'Controller');
/**
 * ProductImages Controller
 *
 * @property ProductImage $ProductImage
 * @property PaginatorComponent $Paginator
 */
class ProductImagesController extends AppController {
	
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
 * add method
 *
 * @return void
 */
	public function manage_add($product_id = null) {
		if(($product_id == null) || (!is_numeric($product_id)) ){
			$this->Session->setFlash(__('Liên kết truy cập không đúng.'));
			return $this->redirect($this->referer());
		}
		if ($this->request->is('post')) {
			$this->ProductImage->create();
			if ($this->ProductImage->save($this->request->data)) {
				$this->Session->setFlash(__('The product image has been saved.'));
				return $this->redirect(array('action' => 'add', $product_id));
			} else {
				$this->Session->setFlash(__('The product image could not be saved. Please, try again.'));
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
		if (!$this->ProductImage->exists($id)) {
			throw new NotFoundException(__('Invalid product image'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductImage->save($this->request->data)) {
				$this->Session->setFlash(__('The product image has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The product image could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductImage.' . $this->ProductImage->primaryKey => $id));
			$this->request->data = $this->ProductImage->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manage_delete($id = null) {
		$this->ProductImage->id = $id;
		if (!$this->ProductImage->exists()) {
			throw new NotFoundException(__('Invalid product image'));
		}
		if ($this->ProductImage->delete()) {
			$this->Session->setFlash(__('The product image has been deleted.'));
		} else {
			$this->Session->setFlash(__('The product image could not be deleted. Please, try again.'));
		}
		return $this->redirect($this->referer());
	}
}
