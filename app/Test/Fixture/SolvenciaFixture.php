<?php
/**
 * SolvenciaFixture
 *
 */
class SolvenciaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'institucion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'cedula' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'unsigned' => false),
		'estado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 12, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'institucion_id' => 1,
			'cedula' => 1,
			'estado' => 'Lorem ipsu',
			'created' => '2015-01-16 02:37:54',
			'modified' => '2015-01-16 02:37:54'
		),
	);

}
