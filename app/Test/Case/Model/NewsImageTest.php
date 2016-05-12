<?php
App::uses('NewsImage', 'Model');

/**
 * NewsImage Test Case
 *
 */
class NewsImageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.news_image',
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
		$this->NewsImage = ClassRegistry::init('NewsImage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NewsImage);

		parent::tearDown();
	}

}
