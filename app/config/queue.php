<?php

return array(
	/*
	|--------------------------------------------------------------------------
	| Default Queue Driver
	|--------------------------------------------------------------------------
	|
	| The Laravel queue API supports a variety of back-ends via an unified
	| API, giving you convenient access to each back-end using the same
	| syntax for each one. Here you may set the default queue driver.
	|
	| Supported: "sync", "beanstalkd", "sqs", "iron", "redis"
	|
	*/
	'default' => $_ENV['QUEUE_DRIVER'],
	/*
	|--------------------------------------------------------------------------
	| Queue Connections
	|--------------------------------------------------------------------------
	|
	| Here you may configure the connection information for each server that
	| is used by your application. A default configuration has been added
	| for each back-end shipped with Laravel. You are free to add more.
	|
	*/
	'connections' => array(
		'sync' => array(
			'driver' => $_ENV['SYNC_DRIVER']
		),
		'beanstalkd' => array(
			'driver' => $_ENV['BEANSTALKD_DRIVER'],
			'host'   => $_ENV['BEANSTALKD_HOST'],
			'queue'  => $_ENV['BEANSTALKD_QUEUE'],
			'ttr'    => $_ENV['BEANSTALKD_TTR']
		),
		'sqs' => array(
			'driver' => $_ENV['SQS_DRIVER'],
			'key'    => $_ENV['SQS_KEY'],
			'secret' => $_ENV['SQS_SECRET'],
			'queue'  => $_ENV['SQS_QUEUE'],
			'region' => $_ENV['SQS_REGION']
		),
		'iron' => array(
			'driver'  => $_ENV['IRON_DRIVER'],
			'host'    => $_ENV['IRON_HOST'],
			'token'   => $_ENV['IRON_TOKEN'],
			'project' => $_ENV['IRON_PROJECT'],
			'queue'   => $_ENV['IRON_QUEUE'],
			'encrypt' => $_ENV['IRON_ENCRYPT']
		),
		'redis' => array(
			'driver' => $_ENV['REDIS_DRIVER'],
			'queue'  => $_ENV['REDIS_QUEUE'],
		)
	),
	/*
	|--------------------------------------------------------------------------
	| Failed Queue Jobs
	|--------------------------------------------------------------------------
	|
	| These options configure the behavior of failed queue job logging so you
	| can control which database and table are used to store the jobs that
	| have failed. You may change them to any database / table you wish.
	|
	*/
	'failed' => array(
		'database' => $_ENV['FAILED_QUEUE_DB'],
        'table'    => $_ENV['FAILED_QUEUE_TABLE'],
	)



// end file config for queue
);
