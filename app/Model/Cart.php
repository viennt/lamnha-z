<?php
/* -----------------------------------------------------------------------------------------
   LamnhA-Z - http://www.lamnha-z.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2015 LamNhaZ Ltd.
   License - http://www.lamnha-z.com/license.html
   ---------------------------------------------------------------------------------------*/

App::uses('AppModel', 'Model');
App::uses('CakeSession', 'Model/Datasource');

/**
 * Cart Model
 *
 * @property Cart $Cart
 */ 
class Cart extends AppModel {
    public $name = "Cart";
 
    public $useTable = false;
     
/**
 * addProduct Method
 * @param int $productId
 */
    public function addProduct($productId) {
        $allProducts = $this->readProduct();
        if (null != $allProducts) {
            if (array_key_exists($productId, $allProducts)) {
                $allProducts[$productId]++;
            } else {
                $allProducts[$productId] = 1;
            }
        } else {
            $allProducts[$productId] = 1;
        }
         
        $this->saveProduct($allProducts);
    }
     
/**
 * addProduct Method
 * @param int $productId
 */
    public function addService($serviceId) {
        $allServices = $this->readService();
        if (null != $allServices) {
            if (array_key_exists($serviceId, $allServices)) {
                $allServices[$serviceId]++;
            } else {
                $allServices[$serviceId] = 1;
            }
        } else {
            $allServices[$serviceId] = 1;
        }
         
        $this->saveService($allServices);
    }
     
/**
 * getCount Method
 */
    public function getCount() {
        $allProducts = $this->readProduct();
        $allServices = $this->readService();
         
        $count = count($allProducts) + count($allServices);

        if ($count < 1) {
            return 0;
        }

        return $count;
    }

/**
 * saveProduct Method
 * @param array $data
 * @return void
 */
    public function saveProduct($data) {
        return CakeSession::write('LamnhaZ.Cart.Product', $data);
    }

/**
 * saveService Method
 * @param array $data
 * @return void
 */
    public function saveService($data) {
        return CakeSession::write('LamnhaZ.Cart.Service', $data);
    }

/**
 * readProduct
 * @return void
 */
    public function readProduct() {
        return CakeSession::read('LamnhaZ.Cart.Product');
    }

/**
 * readSerice
 * @return void
 */
    public function readService() {
        return CakeSession::read('LamnhaZ.Cart.Service');
    }
 
}