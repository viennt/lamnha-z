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

	public $uses = array('Product', 'Service', 'Cart');

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
				foreach ($this->request->data['Cart']['count'] as $index=>$count) {
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
		// Do something here
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
		// Do something here
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
		$this->set(compact('products', 'services'));
	}
}