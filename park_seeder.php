<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'national_parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'codeup');

//setup connection
require'db_connect.php';


//create array of parks
$parks = [
	['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => 'June 12 1944', 'area_in_acres' => '316953', 'description' => 'Named for the prominent bend in the Rio Grande along the US–Mexico border, this park encompasses a large and remote part of the Chihuahuan Desert.'],
	['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => 'June 28 1980', 'area_in_acres' => '486848', 'description' => 'Located in Biscayne Bay, this park at the north end of the Florida Keys has four interrelated marine ecosystems.'],
	['name' => 'Congaree', 'location' => 'South Carolina', 'date_established' => 'November 10 2003', 'area_in_acres' => '120340', 'description' => 'On the Congaree River, this park is the largest portion of old-growth floodplain forest left in North America.'],
	['name' => 'Glacier', 'location' => 'Montana', 'date_established' => 'May 11 1910', 'area_in_acres' => '2190374', 'description' => 'The U.S. half of Waterton-Glacier International Peace Park, this park hosts 26 glaciers and 130 named lakes beneath a stunning canopy of Rocky Mountain peaks.'],
	['name' => 'Katmai', 'location' => 'Alaska', 'date_established' => 'December 2 1980', 'area_in_acres' => '28966', 'description' => 'This park on the Alaska Peninsula protects the Valley of Ten Thousand Smokes, an ash flow formed by the 1912 eruption of Novarupta, as well as Mount Katmai.'],
	['name' => 'Redwood', 'location' => 'California', 'date_established' => 'October 2 1968', 'area_in_acres' => '172924', 'description' => 'This park and the co-managed state parks protect almost half of all remaining Coastal Redwoods, the tallest trees on Earth.'],
	['name' => 'Yosemite', 'location' => 'California', 'date_established' => 'October 01 1890', 'area_in_acres' => '761266', 'description' => 'Among the earliest candidates for National Park status, Yosemite features towering granite cliffs, dramatic waterfalls, and old-growth forests at a unique intersection of geology and hydrology.'],
	['name' => 'Denali', 'location' => 'Alaska', 'date_established' => 'February 26 1917', 'area_in_acres' => '530922', 'description' => 'Centered around Mount McKinley, the tallest mountain in North America, Denali is serviced by a single road leading to Wonder Lake.'],
	['name' => 'Olympic', 'location' => 'Washington', 'date_established' => 'June 29 1938', 'area_in_acres' => '3085340', 'description' => 'Situated on the Olympic Peninsula, this park straddles a diversity of ecosystems from Pacific shoreline to temperate rainforests to the alpine slopes of Mount Olympus.'],
	['name' => 'Voyageurs', 'location' => 'Minnesota', 'date_established' => 'January 8 1971', 'area_in_acres' => '233390', 'description' => 'Formed by glaciers, the region features tall bluffs, rock gardens, scenic islands and bays, and several historic buildings.']
];

$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');


//create foreach to loop through array
foreach ($parks as $park) {
	$stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location',  $park['location'],  PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_INT);
    $stmt->bindValue(':area_in_acres',  $park['area_in_acres'],  PDO::PARAM_INT);
    $stmt->bindValue(':description',  $park['description'],  PDO::PARAM_STR);

    $stmt->execute();
}

?>