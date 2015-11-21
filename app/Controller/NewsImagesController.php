<?php
App::uses('AppController', 'Controller');
/**
 * NewsImages Controller
 *
 * @property NewsImage $NewsImage
 * @property PaginatorComponent $Paginator
 */
class NewsImagesController extends AppController {
	
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
	public function manage_add($news_id = null) {
		if(($news_id == null) || (!is_numeric($news_id)) ){
			$this->Session->setFlash(__('Liên kết truy cập không đúng.'));
			return $this->redirect($this->referer());
		}
		if ($this->request->is('post')) {
			$this->NewsImage->create();
			if ($this->NewsImage->save($this->request->data)) {
				$this->Session->setFlash(__('The news image has been saved.'));
				return $this->redirect(array('action' => 'add', $news_id));
			} else {
				$this->Session->setFlash(__('The news image could not be saved. Please, try again.'));
			}
		}
		$this->set('news_id', $news_id);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manage_edit($id = null) {
		if (!$this->NewsImage->exists($id)) {
			throw new NotFoundException(__('Invalid news image'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->NewsImage->save($this->request->data)) {
				$this->Session->setFlash(__('The news image has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The news image could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('newsImage.' . $this->NewsImage->primaryKey => $id));
			$this->request->data = $this->NewsImage->find('first', $options);
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
		$this->NewsImage->id = $id;
		if (!$this->NewsImage->exists()) {
			throw new NotFoundException(__('Invalid news image'));
		}
		if ($this->NewsImage->delete()) {
			$this->Session->setFlash(__('The news image has been deleted.'));
		} else {
			$this->Session->setFlash(__('The news image could not be deleted. Please, try again.'));
		}
		return $this->redirect($this->referer());
	}
}
