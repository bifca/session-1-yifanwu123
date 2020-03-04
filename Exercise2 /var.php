  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "movies";
	$profileid = 1;
	$page1 = "index.php?profileid=";
	if (isset($_GET["profileid"])){
		$profileid = $_GET["profileid"];
  }
  
    $prev = $profileid - 1;
    $next = $profileid + 1;
    if($profileid >= 6){
      $next = 1;
    }
    if($profileid <= 1){
      $prev = 6;
    }
    $prev_page = $page1.$prev;
    $next_page = $page1.$next;
  
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // $sql2 = "SELECT * FROM animals";	
    $sql = "SELECT * FROM animals WHERE profileid = '".$profileid."'";
    $result = mysqli_query($conn, $sql);
    // $result2 = mysqli_query($conn, $sql2);
	    if (mysqli_num_rows($result) > 0) {
            // output data of each row

        while($row = mysqli_fetch_assoc($result)) {     
            $name = $row["name"];
            $movielines = $row["movielines"];
            $picture = $row["picture"];
          }
      }  else {
        echo "0 results";
      }
    ?>