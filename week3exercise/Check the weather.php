<!DOCTYPE html>
<html>
<head>
	<title>Check the weather</title>
</head>
<body>
	<form action="weathero.php" method="post">
	<h1>Weather forecast</h1>
         City：
				<select name="city"> 
					<option value="Shijiazhuang" selected>My hometown</option>
					<option value="Wuhan" >Wuhan</option>
					<option value="Shanghai">Shanghai</option>
					<option value="Beijing">Beijing</option>
					<option value="Tokyo">Tokyo,Japan</option>
					<option value="London" >London,England</option>
					<option value="Birmingham">Birmingham,England</option>
					<option value="New York City">NewYork,USA</option>
					<option value="Los Angeles">LosAngeles,USA</option>
					<option value="Sydney">Sydney,Australia</option>
				</select>
		<br>
		<input type="submit">
	</form>

	<?php
		

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

		
		
		curl_setopt($curl, CURLOPT_URL, "http://api.openweathermap.org/data/2.5/weather?q=Shijiazhuang&APPID=3978ff1858fcf0dd052b5a753c8663be");

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