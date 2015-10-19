<?php
/**
 * ServicePriceFixture
 *
 */
class ServicePriceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'price' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'started' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'finished' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'service_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'service_id'), 'unique' => 1),
			'fk_table1_services1' => array('column' => 'service_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'price' => 1,
			'started' => '2015-09-14 17:46:48',
			'finished' => '2015-09-14 17:46:48',
			'service_id' => ''
		),
	);

}
