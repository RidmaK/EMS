<?php
	$servername="localhost";
	$username="root";
	$password="";

	$conn=mysqli_connect($servername,$username,$password);

	if(!$conn) {
		die("Connection not connected: ".mysqli_connect_error($conn). '<br>');
	}
	else if(mysqli_select_db($conn,"gym")) {
        //echo "database selected.<br>";
    }
    else {
        echo "database not selected.<br>";
    }
?> 
