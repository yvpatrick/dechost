<?php 
	extract($_POST);
	$mysqli = new mysqli('localhost', 'root', '9889107536', 'db_srm_library');

	if($mysqli->connect_errno > 0){
   		die('Unable to connect to database [' . $db->connect_error . ']');
	}

	$dob=$dd.'/'.$mm.'/'.$yy;

	$query = "INSERT INTO user_login VALUES 
('$regno','$uname','$pwd','$gender','$dept','$email','$mobile')";

	$insert_row = $mysqli->query($query);

	if($insert_row){
		  header("location:login.html");
	}
	else{
   		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
     ?>

