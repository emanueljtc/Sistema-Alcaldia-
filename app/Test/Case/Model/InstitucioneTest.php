<?php
App::uses('Institucione', 'Model');

/**
 * Institucione Test Case
 *
 */
class InstitucioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.institucione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Institucione = ClassRegistry::init('Institucione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Institucione);

		parent::tearDown();
	}

}
