<?php

return array(
	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/
	'mailgun' => array(
		'domain' => $_ENV['MAILGUN_DOMAIN'],
		'secret' => $_ENV['MAILGUN_SECRET']
	),
	'mandrill' => array(
		'secret' => $_ENV['MANDRILL_SECRET']
	),
	'stripe' => array(
		'model'  => $_ENV['STRIPE_MODEL'],
		'secret' => $_ENV['STRIPE_SECRET']
	)




// end file config for services
);
