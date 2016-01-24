<?php

return array(
	/*
	|--------------------------------------------------------------------------
	| Default Remote Connection Name
	|--------------------------------------------------------------------------
	|
	| Here you may specify the default connection that will be used for SSH
	| operations. This name should correspond to a connection name below
	| in the server list. Each connection will be manually accessible.
	|
	*/
	'default' => $_ENV['REMOTE_NAME'],
	/*
	|--------------------------------------------------------------------------
	| Remote Server Connections
	|--------------------------------------------------------------------------
	|
	| These are the servers that will be accessible via the SSH task runner
	| facilities of Laravel. This feature radically simplifies executing
	| tasks on your servers, such as deploying out these applications.
	|
	*/
	'connections' => array(
		'production' => array(
			'host'      => $_ENV['REMOTE_HOST'],
			'username'  => $_ENV['REMOTE_USERNAME'],
			'password'  => $_ENV['REMOTE_PASSWORD'],
			'key'       => $_ENV['REMOTE_KEY'],
			'keyphrase' => $_ENV['REMOTE_KEYPHRASE'],
			'root'      => $_ENV['REMOTER_ROOT_PATH']
		),
        'testing' => array(
            'host'      => $_ENV['REMOTE_HOST'],
            'username'  => $_ENV['REMOTE_USERNAME'],
            'password'  => $_ENV['REMOTE_PASSWORD'],
            'key'       => $_ENV['REMOTE_KEY'],
            'keyphrase' => $_ENV['REMOTE_KEYPHRASE'],
            'root'      => $_ENV['REMOTER_ROOT_PATH']
        )
	),
	/*
	|--------------------------------------------------------------------------
	| Remote Server Groups
	|--------------------------------------------------------------------------
	|
	| Here you may list connections under a single group name, which allows
	| you to easily access all of the servers at once using a short name
	| that is extremely easy to remember, such as "web" or "database".
	|
	*/
	'groups' => array(
		$_ENV['REMOTE_GROUP_NAME'] => explode('_', $_ENV['REMOTE_GROUP_MEMBERS'])
	)





// end file config for remote
);
