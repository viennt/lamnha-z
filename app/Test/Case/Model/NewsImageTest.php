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
		'app.category',
		'app.category_type',
		'app.product',
		'app.project',
		'app.service',
		'app.user'
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
