<?php
App::uses('ProjectsHasService', 'Model');

/**
 * ProjectsHasService Test Case
 *
 */
class ProjectsHasServiceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.projects_has_service',
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
		$this->ProjectsHasService = ClassRegistry::init('ProjectsHasService');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectsHasService);

		parent::tearDown();
	}

}
