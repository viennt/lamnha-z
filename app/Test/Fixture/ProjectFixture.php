<?php
/**
 * ProjectFixture
 *
 */
class ProjectFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'budget' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'started' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'expected' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'finished' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'total_amount' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'category_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'category_id', 'user_id'), 'unique' => 1),
			'fk_projects_categories1_idx' => array('column' => 'category_id', 'unique' => 0),
			'fk_projects_users1_idx' => array('column' => 'user_id', 'unique' => 0)
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
			'name' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'budget' => 1,
			'started' => '2015-09-14 17:46:15',
			'expected' => '2015-09-14 17:46:15',
			'finished' => '2015-09-14 17:46:15',
			'total_amount' => 1,
			'category_id' => '',
			'user_id' => ''
		),
	);

}
