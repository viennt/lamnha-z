<?php
App::uses('Service', 'Model');

/**
 * Service Test Case
 *
 */
class ServiceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.service',
		'app.user',
		'app.group',
		'app.profile',
		'app.contractor',
		'app.news',
		'app.project',
		'app.service_category',
		'app.service_price'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Service = ClassRegistry::init('Service');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Service);

		parent::tearDown();
	}

}
