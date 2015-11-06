<?php
App::uses('ProductVideo', 'Model');

/**
 * ProductVideo Test Case
 *
 */
class ProductVideoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.product_video',
		'app.product',
		'app.product_category',
		'app.product_image'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductVideo = ClassRegistry::init('ProductVideo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductVideo);

		parent::tearDown();
	}

}
