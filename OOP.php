<!DOCTYPE html>
<html> 
	<head><title>Object Oriented Programming</title></head>
	<body>
<?php
	class car {
		public $color;
		public $manufacturer;
	}
	$beetle = new car();
	$beetle->color = "red";
	$beetle->manufacturer = "Volkswagen";
	
	$mustang = new car();
	$mustang->color = "green";
	$mustang->manufacturer = "Ford";
	
	echo "<h2> Some properties: </h2>";
	echo "<p>The Beetle's color is " . $beetle->color . ". </p>";
	echo "<p>The Mustang's manufacturer is " . $mustang->manufacturer . ".</p>";
	echo "<h2>The \$beetle Object: </h2><pre>";
	print_r($beetle);
	echo "</pre>";
	echo "<h2>The \$mustang object: </h2><pre>";
	print_r($mustang);
	echo "</pre>";
?>
	</body>
</html>