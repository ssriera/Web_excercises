<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'national_parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'codeup');

require('db_connect.php');

$query = 'CREATE TABLE national_parks(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(240),
	location VARCHAR(240),
	date_established date,
	area_in_acres float(12,2) UNSIGNED,
	PRIMARY KEY (id)
	
);';

$dbc->exec($query);