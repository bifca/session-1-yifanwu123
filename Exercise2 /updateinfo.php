<?php

//Get the SQL Server Configuration File
include 'config.php';

if(!$db){
	die("Connection Failed");

}

//Write a SQL query that updates the database below.
//The SQL will start INSERT INTO...
$sql = "
		UPDATE animals 
		SET profileid = '".$_POST['profileid']."', 
			picture = '".$_POST['picture']."', 
			name = '".$_POST['name']."', 
			movielines = '".$_POST['movielines']."'
		WHERE 
			profileid = ".$_POST['profileid']."
		";


//If it is successful it will redirect you to the home page. 
if (mysqli_query($db, $sql)){
header("Location: index.php");
}
//If it fails, it will tell you it has failed.
else{
	echo "user creation failed".$sql."<br>".mysqli_error($db);

}
?>