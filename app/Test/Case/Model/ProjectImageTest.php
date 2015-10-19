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
		'app.project'
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
