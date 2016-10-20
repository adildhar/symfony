<?php
// Configuration
	$dbhost = 'localhost';
	$dbname = 'symfony';
	$username= 'fonyuser';
	$password= 'Symfony_1234';

	// Connect to mongo database
	$m = new MongoClient("mongodb://$username:$password@$dbhost:27017/$dbname");
	$db = $m->$dbname;

	// Get the users collection
	$c_users = $db->users;

	// Find the user with first_name 'MongoDB' and last_name 'Fan'
	$user = array(
		'first_name' => 'MongoDB',
		'last_name' => 'Fan'
	);

	$user = $c_users->findOne($user);
	var_dump($user);


