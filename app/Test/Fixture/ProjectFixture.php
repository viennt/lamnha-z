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
		'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'budget' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'started' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'expected' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'finished' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'total_amount' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'project_category_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'user_id', 'project_category_id'), 'unique' => 1),
			'fk_projects_users1_idx' => array('column' => 'user_id', 'unique' => 0),
			'fk_projects_project_categories1_idx' => array('column' => 'project_category_id', 'unique' => 0)
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
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'budget' => 1,
			'started' => '2015-11-21 02:55:33',
			'expected' => '2015-11-21 02:55:33',
			'finished' => '2015-11-21 02:55:33',
			'total_amount' => 1,
			'user_id' => '',
			'project_category_id' => ''
		),
	);

}
