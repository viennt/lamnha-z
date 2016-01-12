<?php
/**
 * NotificationFixture
 *
 */
class NotificationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'item_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false),
		'users_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'is_seen' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'time_stamp' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'users_id'), 'unique' => 1),
			'fk_notifications_users1_idx' => array('column' => 'users_id', 'unique' => 0)
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
			'type' => 'Lorem ipsum dolor sit amet',
			'item_id' => '',
			'users_id' => '',
			'is_seen' => 1,
			'time_stamp' => '2016-01-03 14:22:54'
		),
	);

}
