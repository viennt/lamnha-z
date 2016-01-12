<?php
App::uses('AppController', 'Controller');
/**
 * ServicePrices Controller
 *
 * @property ServicePrice $ServicePrice
 * @property PaginatorComponent $Paginator
 */
class ServicePricesController extends AppController {
	
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
	public function manage_index($id =  null) {
		$this->ServicePrice->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('ServicePrice.service_id' => $id),
			'limit' => 20
		);
		$this->set('servicePrices', $this->Paginator->paginate());
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
 *
 * @return void
 */
	public function manage_add($service_id = null) {
		if ($this->request->is('post')) {
			$this->ServicePrice->create();
			if ($this->ServicePrice->save($this->request->data)) {
				$this->Session->setFlash(__('The service price has been saved.'));
				return $this->redirect(array('action' => 'index', $service_id));
			} else {
				$this->Session->setFlash(__('The service price could not be saved. Please, try again.'));
			}
		}
		$this->set('service_id', $service_id);
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
	public function manage_delete($id = null, $service_id = null) {
		$this->ServicePrice->id = $id;
		if (!$this->ServicePrice->exists()) {
			throw new NotFoundException(__('Invalid service price'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ServicePrice->delete()) {
			$this->Session->setFlash(__('The service price has been deleted.'));
		} else {
			$this->Session->setFlash(__('The service price could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index', $service_id));
	}
}
