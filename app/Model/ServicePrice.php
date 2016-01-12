<?php
App::uses('AppModel', 'Model');
/**
 * ServicePrice Model
 *
 * @property Service $Service
 */
class ServicePrice extends AppModel {

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
		'Service' => array(
			'className' => 'Service',
			'foreignKey' => 'service_id',
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
        $this->data['ServicePrice']['started'] = date("Y-n-j");
        $this->updateAll(
			array('ServicePrice.finished' => "'{$this->data['ServicePrice']['started']}'"),
			array('ServicePrice.finished' => null, 'ServicePrice.service_id' => $this->data['ServicePrice']['service_id'])
		);
        return true;
    }

/**
 * Before Delete Callback
 * @param array $options
 * @return boolean
 */
    public function beforeDelete($cascade = true) {
		$ServicePrice = $this->find('first', array(
			'conditions' => array('ServicePrice.id' => $this->id),
			'recursive' => 0,
			'fields' => array('ServicePrice.started', 'ServicePrice.service_id')
			));
		if(isset($ServicePrice['ServicePrice']['service_id'])) {
			$service_id = $ServicePrice['ServicePrice']['service_id'];
			$date = $ServicePrice['ServicePrice']['started'];
			$this->updateAll(
				array('ServicePrice.finished' => null),
				array('ServicePrice.finished' => $date, 'ServicePrice.service_id' => $service_id)
			);
		}
        return true;
    }
}
