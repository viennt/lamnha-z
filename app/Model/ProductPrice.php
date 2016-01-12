<?php
App::uses('AppModel', 'Model');
/**
 * ProductPrice Model
 *
 * @property Products $Products
 */
class ProductPrice extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'price' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'started' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Products' => array(
			'className' => 'Products',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * Before Save Callback
 * @param array $options
 * @return boolean
 */
    function beforeSave($options = array()) {
        $this->data['ProductPrice']['started'] = date("Y-n-j");
        $this->updateAll(
			array('ProductPrice.finished' => "'{$this->data['ProductPrice']['started']}'"),
			array('ProductPrice.finished' => null, 'ProductPrice.product_id' => $this->data['ProductPrice']['product_id'])
		);
        return true;
    }

/**
 * Before Delete Callback
 * @param array $options
 * @return boolean
 */
    public function beforeDelete($cascade = true) {
		$ProductPrice = $this->find('first', array(
			'conditions' => array('ProductPrice.id' => $this->id),
			'recursive' => 0,
			'fields' => array('ProductPrice.started', 'ProductPrice.product_id')
			));
		if(isset($ProductPrice['ProductPrice']['product_id'])) {
			$product_id = $ProductPrice['ProductPrice']['product_id'];
			$date = $ProductPrice['ProductPrice']['started'];
			$this->updateAll(
				array('ProductPrice.finished' => null),
				array('ProductPrice.finished' => $date, 'ProductPrice.product_id' => $product_id)
			);
		}
        return true;
    }
}
