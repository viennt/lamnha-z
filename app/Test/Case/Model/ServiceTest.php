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
		'app.category',
		'app.category_type',
		'app.news',
		'app.user',
		'app.product',
		'app.product_image',
		'app.product_video',
		'app.project',
		'app.project_image',
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
