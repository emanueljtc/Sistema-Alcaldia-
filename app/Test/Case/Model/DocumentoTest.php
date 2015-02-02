<?php
App::uses('Documento', 'Model');

/**
 * Documento Test Case
 *
 */
class DocumentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.documento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Documento = ClassRegistry::init('Documento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Documento);

		parent::tearDown();
	}

}
