<?php 
	extract($_POST);
	$mysqli = new mysqli('localhost', 'root', '9889107536', 'db_srm_library');

	if($mysqli->connect_errno > 0){
   		die('Unable to connect to database [' . $db->connect_error . ']');
	}


	$query = "SELECT uname from user_login where email='$email' and pass='$pwd'"; 

	$insert_row = $mysqli->query($query);

	if($insert_row->num_rows>0){
        
        header("location:gallery.html");
	}
	else{
           echo "no such user found";
    }
     ?>

