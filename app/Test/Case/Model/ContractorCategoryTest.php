<?php
App::uses('ContractorCategory', 'Model');

/**
 * ContractorCategory Test Case
 *
 */
class ContractorCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contractor_category',
		'app.contractor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ContractorCategory = ClassRegistry::init('ContractorCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ContractorCategory);

		parent::tearDown();
	}

}
