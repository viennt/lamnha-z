<?php
/**
 * UsersHasProductFixture
 *
 */
class UsersHasProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'product_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'quatity' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'commision' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'published' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'user_id', 'product_id'), 'unique' => 1),
			'fk_users_has_products_products1_idx' => array('column' => 'product_id', 'unique' => 0),
			'fk_users_has_products_users1_idx' => array('column' => 'user_id', 'unique' => 0)
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
			'user_id' => '',
			'product_id' => '',
			'quatity' => 1,
			'commision' => 1,
			'published' => 1
		),
	);

}
