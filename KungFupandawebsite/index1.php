<?php
require 'connection_panda.php';
?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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

		<title>Ultimate Kung Fu Panda Fan Site</title>
	</head>
<body>
			<!--bootstrap framework -->
			<div class="container">
				<div class="row">
					<div class='col-sm-12 center'>
						<img src="panda_images/logo.png" height="150px">
					</div>
				</div>
            <!-- Navigation Bar -->
				<nav class="navbar navbar-default" role="navigation">
				    <div class="container-fluid">
					    <div class="navbar-header">
					         <button type="button" class="btn btn-primary navbar-btn" onclick="">
					            HOME
					        </button>
					    </div>
				    </div>
				</nav>
            <!-- Read the poster in the database, display the page and establish a link -->
				<div class="row">
					<?php
						$result = mysqli_query($conn, $sql);

						if(mysqli_num_rows($result) > 0){
							while($row = mysqli_fetch_assoc($result)){
								echo "<div class='col-12 col-md-4'>";
								echo "<a href='film_panda.php?film=".$row['imdbID']."'><img src='panda_poster/".$row['poster']."'width='100%'></a><br></br></div>";
							}
						}
					?>
				</div>
			</div>
			<!-- Footer-->
	        <footer class="navbar-fixed-bottom">
	   <div class="container center">
	     (c)2008-2020 Ultimate Kung Fu Panda Fan Site All Rights Reserved
	  </div>
	 </footer>

</body>
</html>