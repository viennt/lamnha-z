<?php
App::uses('ProductPrice', 'Model');

/**
 * ProductPrice Test Case
 *
 */
class ProductPriceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.product_price',
		'app.users_has_products'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductPrice = ClassRegistry::init('ProductPrice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductPrice);

		parent::tearDown();
	}

}
