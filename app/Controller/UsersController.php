<?php
/* -----------------------------------------------------------------------------------------
   LamnhA-Z - http://www.lamnha-z.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2015 LamNhaZ Ltd.
   License - http://www.lamnha-z.com/license.html
   ---------------------------------------------------------------------------------------*/

App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

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
 * beforeFilter method
 *
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		// Allow users to register and logout.
		$this->Auth->allow('register', 'logout');
	}

/**
 * register method
 *
 * @return void
 */
	public function register() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * login method
 *
 * @return void
 */
	public function login() {
		$this->layout = 'ajax';
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Session->setFlash(__('Invalid username or password, try again'));
		}
		$this->render('login_private');
	}

/**
 * login method
 *
 * @return void
 */
	public function registerfacebook($id = null, $name = null, $email = null){
		var_dump($id);
		die;
	}

/**
 * login method
 *
 * @return void
 */
	public function loginfacebook($id = null){
			$user = $this->User->find('first',
				array('conditions' => array('User.facebook_id' => $id), 'recursive' => 1, 'callbacks' => true,
				'fields' => array('User.username', 'User.password', 'User.id', 'User.facebook_id', 'User.group_id')));
		if(isset($user['User'])){
				$this->loadModel('Group');
				$group = $this->Group->find('first',
					array('conditions' => array('Group.id' => $user['User']['group_id']), 'recursive' => 0));
			$user['username'] = $user['User']['username'];
			$user['password'] = $user['User']['password'];
			$user['facebook_id'] = $user['User']['facebook_id'];
			$user['id'] = $user['User']['id'];
				$user['Group']['id'] = $group['Group']['id'];
				$user['Group']['name'] = $group['Group']['name'];
				$user['Group']['created'] = $group['Group']['created'];
				$user['Group']['modified'] = $group['Group']['modified'];
			unset($user['User']);
			unset($user['Contractor']);
			unset($user['Project']);
			unset($user['Service']);
			unset($user['News']);
			unset($user['Product']);

			if ($this->Auth->login($user))
				$this->Session->setFlash(__('Đăng nhập thành công'));
		}else {
			$this->Session->setFlash(__('Đăng nhập không thành công. Vui lòng thử lại.'));
		}
		return $this->redirect($this->Auth->redirectUrl());
	}

/**
 * logout method
 *
 * @return void
 */
	public function logout() {
	    return $this->redirect($this->Auth->logout());
	}

/**
 * index method
 *
 * @return void
 */
	public function manage_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * manage_login method
 *
 * @return void
 */
	public function manage_login() {
		$this->redirect('/login.html');
	}

/**
 * add method
 *
 * @return void
 */
	public function manage_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manage_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The use1f2r could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manage_edit($id = null) { die;
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function manage_view($id = null) { die;
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

}