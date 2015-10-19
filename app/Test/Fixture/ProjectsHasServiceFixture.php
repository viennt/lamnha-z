<?php
/**
 * ProjectsHasServiceFixture
 *
 */
class ProjectsHasServiceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'project_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'service_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'started' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'finished' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'project_id', 'service_id'), 'unique' => 1),
			'fk_projects_has_services_services1_idx' => array('column' => 'service_id', 'unique' => 0),
			'fk_projects_has_services_projects1_idx' => array('column' => 'project_id', 'unique' => 0)
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
			'project_id' => '',
			'service_id' => '',
			'started' => '2015-09-14 17:46:44',
			'finished' => '2015-09-14 17:46:44'
		),
	);

}
