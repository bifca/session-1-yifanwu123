<html>
<body>
<?php
include 'config.php';


$id = $_GET["id"];
$sql = "SELECT * FROM animals WHERE profileid = $id";
	
    $result = mysqli_query($db, $sql);

   if (mysqli_num_rows($result) > 0) {
       while($row = mysqli_fetch_assoc($result)) {
            $profileid = $row["profileid"];
            $name = $row["name"];
            $movielines = $row["movielines"];
            $picture = $row["picture"];
       }
   }
   ?>
<form action="updateinfo.php" method="POST">
<br>
<br>
profileid <input type="text" value="<?php echo $profileid;?>" name="profileid">
<br>
picture <input type="text" value="<?php echo $picture;?>" name="picture">
<br>
name <input type="text" value="<?php echo $name;?>" name="name">
<br>
movielines <input type="text" value="<?php echo $movielines;?>" name="movielines">
<br>
<br>
<input type="submit">
</form>

	</body>
	</html>
