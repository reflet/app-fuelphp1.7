<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=db;dbname=myblog',
			'username'   => 'root',
			'password'   => 'mysql'
		),
		'profiling' => true // Profilerにクエリを表示する
	),
);
