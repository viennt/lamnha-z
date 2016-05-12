<?php
App::uses('UsersHasProduct', 'Model');

/**
 * UsersHasProduct Test Case
 *
 */
class UsersHasProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.users_has_product',
		'app.user',
		'app.group',
		'app.news',
		'app.category',
		'app.category_type',
		'app.product',
		'app.product_image',
		'app.product_video',
		'app.project',
		'app.project_image',
		'app.service',
		'app.service_price',
		'app.profile'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsersHasProduct = ClassRegistry::init('UsersHasProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsersHasProduct);

		parent::tearDown();
	}

}
