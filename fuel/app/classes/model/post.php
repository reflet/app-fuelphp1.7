<?php

class Model_Post extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'category',
		'title',
		'summary',
		'body',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => true,
		),
	);

	protected static $_table_name = 'posts';

}
