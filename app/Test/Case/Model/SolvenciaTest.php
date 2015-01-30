<?php
App::uses('Solvencia', 'Model');

/**
 * Solvencia Test Case
 *
 */
class SolvenciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.solvencia',
		'app.institucion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Solvencia = ClassRegistry::init('Solvencia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Solvencia);

		parent::tearDown();
	}

}
