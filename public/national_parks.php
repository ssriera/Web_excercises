<?php

//THINGS TO FIX
//THE DATE EST FORMAT
//THE SAVE PARK FUNCTIONALITY

//Define the variables for connection & require
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'national_parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'codeup');

require 'db_connect.php';

// ATTEMPT To post new park
if(!empty($_POST)) {

	try {
		
		foreach ($_POST as $key => $value) {
			if (empty($value) || strlen($value) > 240) {
				throw new InvalidInputException('Invalid Input');
			}
		}
		
		$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');

		$parks[] = $_POST;
		
		//create foreach to loop through array
		foreach ($parks as $park) {
			$stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
		    $stmt->bindValue(':location',  $park['location'],  PDO::PARAM_STR);
		    $stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_INT);
		    $stmt->bindValue(':area_in_acres',  $park['area_in_acres'],  PDO::PARAM_INT);
		    $stmt->bindValue(':description',  $park['description'],  PDO::PARAM_STR);

		    $stmt->execute();
		}

	} catch (InvalidInputException $e) {
		$e->getMessage();
	}	
}




//pagination for the pages
if (!isset($_GET['page'])) {
		$page = 1;
		$previous = 1;
		$offset = 0;
	} else {
		$page = $_GET['page'] + 1;
		$previous = $_GET['page'] - 1;
		$offset = ($page-1) * 4;
};


//To retrieve the park values
$stmt = $dbc->prepare('SELECT * FROM national_parks LIMIT 4 OFFSET :offset');
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);






?>

<html>
<head>
	<title>National Parks!</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="jumbotron" style="padding:0px;">
	<div class="fluid-container">
  <img src="/img/517.jpg" style="width: 1200px; height:500px;">
  	</div>
</div>
	<h1 class="text-center"><span class="glyphicon glyphicon-tree-conifer"></span> National Parks in the United States</h1>
	<br>
<div class="container-fluid">
	<div class=".col-md-6 .col-md-offset-4">
		<table class="table table-bordered table-striped">
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Location</th>
				<th>Date Established</th>
				<th>Area in Acres</th>
				<th>Description</th>
			</tr>
<!-- To iterate through the values & populate the table correctly -->
			<? foreach ($parks as $key => $park): ?>

				<tr>
					<? foreach ($park as $value): ?> 
					<td><?= $value ?></td>
					<? endforeach ?>
					</tr>
				<? endforeach ?>
		</table>
	<p>
	  <a href="?page=<?=$page?>" role="button" class="btn btn-default btn-sm pull-right glyphicon glyphicon-chevron-right">Next</a>
  	  <a href="?page=<?=$previous?>" role="button" class="btn btn-default btn-sm glyphicon glyphicon-chevron-left">Previous</a>
	</p>
	<br>
	<p>
		<form action="/national_parks.php" method="POST" enctype="multipart/form-data">
			<h3>Add a Park to the List:</h3>
				<input type="text" name="name" placeholder="Name">
				<input type="text" name="location" placeholder="Location">
				<input type="text" name="date_established" placeholder="Date Established">
				<input type="text" name="area_in_acres" placeholder="Area in Acres">
				<input type="text" name="description" placeholder="Description">
				<input type="submit" value="Save">
		</form>	
	</p>
	</div>
</div>
<br>
<p><hr></p>
<br>


<br>
<p><hr></p>
<br>
<footer class="text-center">
&copy; 2015 Riera 
</footer>

<!-- For jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


</body>
</html>

