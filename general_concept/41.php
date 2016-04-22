<html>
	<title>
		
	</title>
	<body>
 	
<?php
$x = 5;
$y = 10; 

function myTest() {
    global $x, $y;
    $y = $x + $y;  //accessing variables inside the functions
}

myTest();
echo $y; // outputs 15
?>

	</body>
</html>