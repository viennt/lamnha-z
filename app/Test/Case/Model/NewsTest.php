<?php
App::uses('News', 'Model');

/**
 * News Test Case
 *
 */
class NewsTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.news',
		'app.user',
		'app.group',
		'app.profile',
		'app.contractor',
		'app.project',
		'app.service',
		'app.service_category',
		'app.service_price',
		'app.news_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->News = ClassRegistry::init('News');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->News);

		parent::tearDown();
	}

}
