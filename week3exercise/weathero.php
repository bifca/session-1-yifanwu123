<!DOCTYPE html>
<html>
<head>
	<title>API Showcase</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<?php
		

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

		
		$query = $_POST['city'];
		
		curl_setopt($curl, CURLOPT_URL, "http://api.openweathermap.org/data/2.5/weather?q=".$query."&APPID=3978ff1858fcf0dd052b5a753c8663be");

		$city_weather_search = json_decode(curl_exec($curl));

		
		$temp_max = (double)($city_weather_search->main->temp_max - 273.15);
		$temp_min = (double)($city_weather_search->main->temp_min - 273.15);
		$temp = (double)($city_weather_search->main->temp - 273.15);
		
		$count = 0;
		echo '<div class="container">
				<div class="row">';
					foreach ($city_weather_search->weather as $weather){
						if ($count == 2){
							echo "</div><div class='row'>";
							$count = 0;
						}
						echo "<div class='col-12 col-md-12'>
						<h2>".$city_weather_search->name.",".$city_weather_search->sys->country." ".$weather->description."</h2>";
						
						echo "<br><h4>".'Current temperature: '.$temp."℃"."</h4><br>
						<p>Temperature from ".$temp_min." to ".$temp_max." ℃".", wind ".$city_weather_search->wind->speed." m/s. clouds "

						.$city_weather_search->clouds->all." %, ".$city_weather_search->main->pressure." hpa
						
						
						</p></br>

						
						<p>Geo coords [".$city_weather_search->coord->lat.", ".$city_weather_search->coord->lon."]</p>




						</div>";
						$count = $count+1;




					}
					echo "</div>";











	?>
</body>
</html>