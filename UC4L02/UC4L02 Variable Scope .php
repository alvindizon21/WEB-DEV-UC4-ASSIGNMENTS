<?php 

	// variable scope

	// local vars

	function myFunc(){
		$price = 10;
		echo $price;
	}

	// myFunc();
	// echo $price;

	function myFuncTwo($age){
		echo $age;
	}

	// myFuncTwo(25);
	// echo $age;

	// global variables

	$name = 'Alvin';

	function sayHello(){
		global $name;
		$name = 'Dizon' .'<br>';
		echo "hello $name ";
	}

	sayHello();
	echo $name . '<br>';

	function sayBye(&$name){
		$name = 'Calvin' . '<br>';
		echo "bye $name ";
	}

	sayBye($name);
	echo $name;


?>

<!DOCTYPE html>
<html>
<head>
	<title>UC4L02 Assignments</title>
</head>
<body>
   <h1>UC4L02 Variable Scope</h1>
</body>
</html>