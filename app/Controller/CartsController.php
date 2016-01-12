<?php
/* -----------------------------------------------------------------------------------------
   LamnhA-Z - http://www.lamnha-z.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2015 LamNhaZ Ltd.
   License - http://www.lamnha-z.com/license.html
   ---------------------------------------------------------------------------------------*/

App::uses('AppController', 'Controller');
/**
 * Carts Controller
 *
 * @property Cart $Cart
 */
class CartsController extends AppController {

	public $uses = array('Product', 'ProductPrice', 'Service', 'Cart', 'Project', 'ProjectsHasProduct');

/**
 * addProduct Method
 * @param int $productId
 */
    public function purchase() {
		if ($this->request->is('post')) {
			if (!empty($this->request->data)) {
				$carts = $this->Cart->readProduct();
				$projectId = $this->request->data['Cart']['project_id'];
				if (null!=$carts) {
					$ProjectsHasProduct = array();
					foreach ($carts as $productId => $count) {
						$price = $this->ProductPrice->find('first', array(
							'conditions' => array('ProductPrice.product_id' => $productId, 'ProductPrice.finished IS NULL'),
							'recursive' => -1,
							));
						$this->Cart->query('INSERT INTO `notifications`(`type`, `item_id`, `users_id`) SELECT CONCAT("Yêu cầu mua sản phẩm: ", `name`), 0, `user_id` FROM `products` WHERE `id` = '.$productId);
						$item['ProjectsHasProduct']['project_id'] = $projectId;
						$item['ProjectsHasProduct']['product_id'] = $productId;
						$item['ProjectsHasProduct']['quantity'] = $count;
						$item['ProjectsHasProduct']['price'] = $price['ProductPrice']['price'];
						$item['ProjectsHasProduct']['date'] = date("Y-n-j");
						$ProjectsHasProduct[] = $item;
			        }
					if ($this->ProjectsHasProduct->saveMany($ProjectsHasProduct)) {
						$this->Cart->saveProduct(null);
						$this->Session->setFlash(__('Thanh toán thành công.'));
						return $this->redirect(array('action' => 'view'));
					} else {
						$this->Session->setFlash(__('Thanh toán không thành công.'));
					}
				}
			}
		}
    }

	public function addProduct() {
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$this->Cart->addProduct($this->request->data['Cart']['product_id']);
		}
		echo $this->Cart->getCount();
	}

	public function updateProduct() {
		if ($this->request->is('post')) {
			if (!empty($this->request->data)) {
				$cart = array();
				foreach ($this->request->data['Cart']['count'] as $index => $count) {
					if ($count > 0) {
						$productId = $this->request->data['Cart']['product_id'][$index];
						$cart[$productId] = $count;
					}
				}
				$this->Cart->saveProduct($cart);
			}
		}
		$this->redirect(array('action'=>'view'));
	}

	public function deleteProduct($id = null) {
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid news'));
		}
		$this->request->allowMethod('post', 'delete');
		$carts = $this->Cart->readProduct();
		unset($carts[$id]);
		$this->Cart->saveProduct($carts);
		$this->redirect(array('controller'=>'gio-hang.html'));
	}

	public function addService() {
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$this->Cart->addService($this->request->data['Cart']['service_id']);
		}
		echo $this->Cart->getCount();
	}

	public function deleteService($id = null) {
		$this->Service->id = $id;
		if (!$this->Service->exists()) {
			throw new NotFoundException(__('Invalid news'));
		}
		$this->request->allowMethod('post', 'delete');
		$carts = $this->Cart->readService();
		unset($carts[$id]);
		$this->Cart->saveService($carts);
		$this->redirect(array('controller'=>'gio-hang.html'));
	}

	public function view() {
		$carts = $this->Cart->readProduct();
		$products = array();
		if (null!=$carts) {
			foreach ($carts as $productId => $count) {
				$product = $this->Product->read(null, $productId);
				$product['Product']['count'] = $count;
				$products[] = $product;
	        }
		}
		$carts = $this->Cart->readService();
		$services = array();
		if (null!=$carts) {
			foreach ($carts as $serviceId => $count) {
				$service = $this->Service->read(null, $serviceId);
				$service['Service']['count'] = $count;
				$services[] = $service;
	        }
		}
		$projects = $this->Project->find('list', array(
			'conditions' => array('Project.user_id' => $this->Session->read('Auth.User.id')),
			'recursive' => -1,
			));
		$this->set(compact('products', 'services', 'projects'));
	}
}