<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'alvin', 'Alvinalvin21@', 'ninja_pizza');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>