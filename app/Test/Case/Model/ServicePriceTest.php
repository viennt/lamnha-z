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
		'app.service',
		'app.user',
		'app.group',
		'app.profile',
		'app.contractor',
		'app.news',
		'app.news_category',
		'app.news_image',
		'app.project',
		'app.project_category',
		'app.project_design',
		'app.project_image',
		'app.product',
		'app.product_category',
		'app.product_image',
		'app.product_video',
		'app.service_category'
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
