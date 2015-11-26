<?php
/* -----------------------------------------------------------------------------------------
   LamnhA-Z - http://www.lamnha-z.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2015 LamNhaZ Ltd.
   License - http://www.lamnha-z.com/license.html
   ---------------------------------------------------------------------------------------*/

App::uses('AppController', 'Controller');
/**
 * ProjectDesigns Controller
 *
 * @property ProjectDesign $ProjectDesign
 * @property PaginatorComponent $Paginator
 */
class ProjectDesignsController extends AppController {
	
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
	public function add($project_id = null) {
		$this->layout = 'two-column';
		if(($project_id == null) || (!is_numeric($project_id)) ){
			$this->Session->setFlash(__('Liên kết truy cập không đúng.'));
			return $this->redirect($this->referer());
		}
		if ($this->request->is('post')) {
			$this->ProjectDesign->create();
			if ($this->ProjectDesign->save($this->request->data)) {
				$this->Session->setFlash(__('The project design has been saved.'));
				return $this->redirect(array('action' => 'add', $project_id));
			} else {
				$this->Session->setFlash(__('The project design could not be saved. Please, try again.'));
			}
		}
		$this->set('project_id', $project_id);
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
		if (!$this->ProjectDesign->exists($id)) {
			throw new NotFoundException(__('Invalid project design'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProjectDesign->save($this->request->data)) {
				$this->Session->setFlash(__('The project design has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project design could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProjectDesign.' . $this->ProjectDesign->primaryKey => $id));
			$this->request->data = $this->ProjectDesign->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProjectDesign->id = $id;
		if (!$this->ProjectDesign->exists()) {
			throw new NotFoundException(__('Invalid project design'));
		}
		if ($this->ProjectDesign->delete()) {
			$this->Session->setFlash(__('The project design has been deleted.'));
		} else {
			$this->Session->setFlash(__('The project design could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
