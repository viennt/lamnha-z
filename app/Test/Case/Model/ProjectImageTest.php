<?php
App::uses('ProjectImage', 'Model');

/**
 * ProjectImage Test Case
 *
 */
class ProjectImageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project_image',
		'app.project',
		'app.user',
		'app.group',
		'app.profile',
		'app.contractor',
		'app.news',
		'app.news_category',
		'app.news_image',
		'app.service',
		'app.service_category',
		'app.service_price',
		'app.product',
		'app.product_category',
		'app.product_image',
		'app.product_video',
		'app.project_category',
		'app.project_design'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectImage = ClassRegistry::init('ProjectImage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectImage);

		parent::tearDown();
	}

}
