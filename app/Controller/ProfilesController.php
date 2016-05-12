<?php
/* -----------------------------------------------------------------------------------------
   LamnhA-Z - http://www.lamnha-z.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2015 LamNhaZ Ltd.
   License - http://www.lamnha-z.com/license.html
   ---------------------------------------------------------------------------------------*/

App::uses('AppController', 'Controller');
/**
 * Profiles Controller
 *
 * @property Profile $Profile
 * @property PaginatorComponent $Paginator
 */
class ProfilesController extends AppController {
	
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
 * manage_detail method
 *
 * @return void
 */
	public function manage_detail($id = null) {
		if(is_null($id))
			$id = $this->Auth->User('id');

		$options = array('conditions' => array('Profile.user_id' => $id));
		$this->set('profile', $this->Profile->find('first', $options));
	}

/**
 * manage_add method
 *
 * @return void
 */
	public function manage_add() {
		if ($this->request->is('post')) {
			$this->Profile->create();
			if ($this->Profile->save($this->request->data)) {
				$this->Session->setFlash(__('The profile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profile could not be saved. Please, try again.'));
			}
		}
		$users = $this->Profile->User->find('list');
		$this->set(compact('users'));
	}

/**
 * manage_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manage_edit($id = null) {
		if (!$this->Profile->exists($id)) {
			throw new NotFoundException(__('Invalid profile'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Profile->save($this->request->data)) {
				$this->Session->setFlash(__('The profile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profile could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Profile.' . $this->Profile->primaryKey => $id));
			$this->request->data = $this->Profile->find('first', $options);
		}
		$users = $this->Profile->User->find('list');
		$this->set(compact('users'));
	}

/**
 * detail method
 *
 * @return void
 */
	public function detail($id = null) {
		if(is_null($id))
			$id = $this->Auth->User('id');
		$this->loadModel('User');
		$options = array('conditions' => array('User.id' => $id), 'recursive' => 2);
		$this->set('profile', $this->User->find('first', $options));
		$options = array('conditions' => array('Profile.' . $this->Profile->primaryKey => $id));
		$this->request->data = $this->Profile->find('first', $options);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Profile->exists($id)) {
			throw new NotFoundException(__('Invalid profile'));
		}
		$this->autoRender = false;
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Profile->save($this->request->data)) {
				$this->Session->setFlash(__('The profile has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The profile could not be saved. Please, try again.'));
			}
		}
	}
}
