<?php
/**
 * ProfileFixture
 *
 */
class ProfileFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'avatar_url' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 225, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'full_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'phone_number' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'personal_number' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'unique'),
		'date_of_birth' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'place_of_birth' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sex' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'published' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'user_id'), 'unique' => 1),
			'personal_number_UNIQUE' => array('column' => 'personal_number', 'unique' => 1),
			'fk_profiles_users1_idx' => array('column' => 'user_id', 'unique' => 0)
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
			'avatar_url' => 'Lorem ipsum dolor sit amet',
			'full_name' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'phone_number' => 1,
			'personal_number' => 1,
			'date_of_birth' => '2015-10-10 11:14:54',
			'place_of_birth' => 'Lorem ipsum dolor sit amet',
			'sex' => 'Lorem ipsum dolor ',
			'address' => 'Lorem ipsum dolor sit amet',
			'published' => 1
		),
	);

}
