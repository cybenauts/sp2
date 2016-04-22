<html>
	<title>
		
	</title>
	<body>
 	
<?php
$x = 5;
$y = 10;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y']; //using Global Access
} 

myTest();
echo $y; // outputs 15
?>
	</body>
</html>