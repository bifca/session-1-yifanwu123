<!--API for accessing OMDB website-->
<?php
$imdbID = $_GET['film'];
require 'connection_panda.php';

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

	$query = array(
	"apikey" => 'df1323af',
	"i" => $imdbID,
	"plot" => 'full'
);

curl_setopt($curl, CURLOPT_URL, "http://www.omdbapi.com"."?".http_build_query($query));

$film = json_decode(curl_exec($curl));
//Read the database in imdbid
$sql2 = "SELECT * FROM films WHERE imdbID = '".$imdbID."'";
?>

<html>
	<head>
	<!--Reference bootstrap framework-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<title>Ultimate Kung Fu Panda Fan Site</title>
		<!---Picture style-->
		<style>
			.center{
				text-align: center;
				border: 3px solid red;
				background-color: orange;
			}
			.navbar{
				background-color: #FFE7BA;
			}
		</style>
	</head>
<body>
<!--Bootstrap grid-->
<!--Photo-->
		<div class="container">
				<div class="row">
					<div class='col-sm-12 center'>
						<img src="panda_images/logo.png" height="150px">
					</div>
				</div>
        <!--Navigation Bar-->
				<nav class="navbar navbar-default" role="navigation">
				    <div class="container-fluid">
					    <div class="navbar-header">
					         <button type="button" class="btn btn-primary navbar-btn" onclick="javascript:history.back(-1)">
					            BACK
					        </button>
					    </div>			
				    </div>
				</nav>
        <!-- Title -->
				<div class="row">
					<div class="col-12 col-md-12">
						<?php echo '<h1>'.$film->Title.'</h1>';?>
					</div>
				</div>

				<div class="row">
					<div class="col-12 col-md-3">
					<?php echo '<p><img src="'.$film->Poster.'"width="100%"</p>'; ?>
					</div>

					<div class="col-12 col-md-9">

					<?php 
						echo '<p><strong>Plot: </strong>'.$film->Plot.'</p>'; 

						echo '<p><strong>Realeased: </strong>'.$film->Released.'</p>'; 

						echo '<p><strong>Actors: </strong>'.$film->Actors.'</p>'; 

						echo '<p><strong>Ratings: </strong></p>'; 
						foreach ($film->Ratings as $Ratings ) {
							echo '<p>'.$Ratings->Source.": ".$Ratings->Value.'</p>';
						};

					?>
					</div>
				</div>
         <!--Video-->
			<?php
				$result = mysqli_query($conn, $sql2);
				if (mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){
			?>
						<div class="row">
						<div class='col-12 col-md-12 '>
		
			<P align="center"><strong>Trailer: </strong></P>		
			<p align="center">

						<video  controls>
						<?php
							echo "<source src='panda_trailer/".$row['trailer']."'  type='video/mp4'  >Your browser does not support the video tag
								</video></div></div>";
								}
							}
						?>
			</p>
		</div>
      <!--FOOTER-->
	<footer class="navbar-fixed-bottom">
	    <div class="container center">
	     (c)2008-2020 Ultimate Kung Fu Panda Fan Site All Rights Reserved
	    </div>
	 </footer>
</body>
</html>