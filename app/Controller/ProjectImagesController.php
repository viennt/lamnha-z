<?php
/* -----------------------------------------------------------------------------------------
   LamnhA-Z - http://www.lamnha-z.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2015 LamNhaZ Ltd.
   License - http://www.lamnha-z.com/license.html
   ---------------------------------------------------------------------------------------*/

App::uses('AppController', 'Controller');
/**
 * ProjectImages Controller
 *
 * @property ProjectImage $ProjectImage
 * @property PaginatorComponent $Paginator
 */
class ProjectImagesController extends AppController {
	
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
			$this->ProjectImage->create();
			if ($this->ProjectImage->save($this->request->data)) {
				$this->Session->setFlash(__('The project image has been saved.'));
				return $this->redirect(array('action' => 'add', $id));
			} else {
				$this->Session->setFlash(__('The project image could not be saved. Please, try again.'));
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
		if (!$this->ProjectImage->exists($id)) {
			throw new NotFoundException(__('Invalid project image'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProjectImage->save($this->request->data)) {
				$this->Session->setFlash(__('The project image has been saved.'));
				return $this->redirect(array('action' => 'edit', $id));
			} else {
				$this->Session->setFlash(__('The project image could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProjectImage.' . $this->ProjectImage->primaryKey => $id));
			$this->request->data = $this->ProjectImage->find('first', $options);
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
		$this->ProjectImage->id = $id;
		if (!$this->ProjectImage->exists()) {
			throw new NotFoundException(__('Invalid project image'));
		}
		if ($this->ProjectImage->delete()) {
			$this->Session->setFlash(__('The project image has been deleted.'));
		} else {
			$this->Session->setFlash(__('The project image could not be deleted. Please, try again.'));
		}
		return $this->redirect($this->referer());
	}
}
