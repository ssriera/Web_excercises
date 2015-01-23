<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'national_parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'codeup');

//setup connection
require'db_connect.php';

//create array of parks
$parks = [
	['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => 'June 28 1980', 'area_in_acres' => '172924'],
	['name' => 'Redwood', 'location' => 'California', 'date_established' => 'October 2 1968', 'area_in_acres' => '112512'],
	['name' => 'Sequoia', 'location' => 'California', 'date_established' => 'September 25 1890', 'area_in_acres' => '404051'],
	['name' => 'Yosemite', 'location' => 'California', 'date_established' => 'October 1 1890', 'area_in_acres' => '761266'],
	['name' => 'Zion', 'location' => 'Utah', 'date_established' => 'November 19 1919', 'area_in_acres' => '146597']
];

//create foreach to loop through array
foreach ($parks as $park) {
	$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres)
	          VALUES ('{$park['name']}', '{$park['location']}', str_to_date('{$park['date_established']}', '%M %e %Y'), '{$park['area_in_acres']}')";

	$dbc->exec($query);                    

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}

//create insert statements as string

//