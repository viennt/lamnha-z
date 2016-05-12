<?php
App::uses('ProjectsHasProduct', 'Model');

/**
 * ProjectsHasProduct Test Case
 *
 */
class ProjectsHasProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.projects_has_product',
		'app.project',
		'app.category',
		'app.category_type',
		'app.news',
		'app.user',
		'app.product',
		'app.product_image',
		'app.product_video',
		'app.service',
		'app.project_image'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectsHasProduct = ClassRegistry::init('ProjectsHasProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectsHasProduct);

		parent::tearDown();
	}

}
