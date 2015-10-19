<?php
/**
 * NewsFixture
 *
 */
class NewsFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'abstract' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'detail' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'view' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false),
		'published' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'category_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'category_id', 'user_id'), 'unique' => 1),
			'fk_news_categories1_idx' => array('column' => 'category_id', 'unique' => 0),
			'fk_news_users1_idx' => array('column' => 'user_id', 'unique' => 0)
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
			'title' => 'Lorem ipsum dolor sit amet',
			'abstract' => 'Lorem ipsum dolor sit amet',
			'detail' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-09-14 17:45:39',
			'view' => 1,
			'published' => 1,
			'category_id' => '',
			'user_id' => ''
		),
	);

}
