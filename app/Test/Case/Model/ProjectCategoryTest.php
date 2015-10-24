<?php
App::uses('ProjectCategory', 'Model');

/**
 * ProjectCategory Test Case
 *
 */
class ProjectCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project_category',
		'app.project'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectCategory = ClassRegistry::init('ProjectCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectCategory);

		parent::tearDown();
	}

}
