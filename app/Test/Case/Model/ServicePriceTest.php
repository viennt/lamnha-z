<?php
App::uses('ServicePrice', 'Model');

/**
 * ServicePrice Test Case
 *
 */
class ServicePriceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.service_price',
		'app.service'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ServicePrice = ClassRegistry::init('ServicePrice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ServicePrice);

		parent::tearDown();
	}

}
