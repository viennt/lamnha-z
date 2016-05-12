<?php
App::uses('CategoryType', 'Model');

/**
 * CategoryType Test Case
 *
 */
class CategoryTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.category_type',
		'app.category',
		'app.news',
		'app.user',
		'app.group',
		'app.profile',
		'app.project',
		'app.project_image',
		'app.service',
		'app.service_price',
		'app.product',
		'app.product_image',
		'app.product_video'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategoryType = ClassRegistry::init('CategoryType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategoryType);

		parent::tearDown();
	}

}
