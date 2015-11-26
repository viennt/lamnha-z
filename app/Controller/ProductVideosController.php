<?php
/* -----------------------------------------------------------------------------------------
   LamnhA-Z - http://www.lamnha-z.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2015 LamNhaZ Ltd.
   License - http://www.lamnha-z.com/license.html
   ---------------------------------------------------------------------------------------*/

App::uses('AppController', 'Controller');
/**
 * ProductVideos Controller
 *
 * @property ProductVideo $ProductVideo
 * @property PaginatorComponent $Paginator
 */
class ProductVideosController extends AppController {
	
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
			$this->ProductVideo->create();
			if ($this->ProductVideo->save($this->request->data)) {
				$this->Session->setFlash(__('The product video has been saved.'));
				return $this->redirect(array('action' => 'add', $product_id));
			} else {
				$this->Session->setFlash(__('The product video could not be saved. Please, try again.'));
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
		if (!$this->ProductVideo->exists($id)) {
			throw new NotFoundException(__('Invalid product video'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductVideo->save($this->request->data)) {
				$this->Session->setFlash(__('The product video has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The product video could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductVideo.' . $this->ProductVideo->primaryKey => $id));
			$this->request->data = $this->ProductVideo->find('first', $options);
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
		$this->ProductVideo->id = $id;
		if (!$this->ProductVideo->exists()) {
			throw new NotFoundException(__('Invalid product video'));
		}
		if ($this->ProductVideo->delete()) {
			$this->Session->setFlash(__('The product video has been deleted.'));
		} else {
			$this->Session->setFlash(__('The product video could not be deleted. Please, try again.'));
		}
		return $this->redirect($this->referer());
	}
}
