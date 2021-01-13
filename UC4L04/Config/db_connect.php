<?php

// Connect to database
$conn = mysqli_connect('localhost', 'alvin', 'Alvinalvin21@', 'ninja_pizzas');

// check connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>