<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AJAX Cities and Suburbs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Cities and Suburbs</h1>

	<select id="cities">
	<option value="">Select a city:</option>
		<?php 
			
		//Connect to database
		$dbc = new mysqli('localhost', 'root', '', 'cities_and_suburbs');

		//Get all the cities
		$sql = "SELECT cityID, cityName FROM cities";

		//Run the query and capture the results
		$result = $dbc->query ( $sql );

		//LOOP OVER THE RESULTS AND CREATE AN OPTION ELEMENT FOR EACH 
		while ( $city = $result->fetch_assoc() ) {
			echo '<option value="'. $city['cityID'] .'">'. $city['cityName'] .'</option>';
		}

		?>
	</select>

	<select id="suburbs">
		
	</select>

	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="js/script.js"></script> 
</body>
</html>