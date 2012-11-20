<?php
/**
 * ProcessFixture
 *
 */
class ProcessFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'task_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'content' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'percentage' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3),
		'limit_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'time' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'complete_flg' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'delete_flg' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'task_id' => 1,
			'content' => 'Lorem ipsum dolor sit amet',
			'percentage' => 1,
			'limit_date' => '2012-11-14 02:41:46',
			'time' => 1,
			'status' => 1,
			'complete_flg' => 1,
			'delete_flg' => 1,
			'created' => '2012-11-14 02:41:46',
			'modified' => '2012-11-14 02:41:46'
		),
	);

}
