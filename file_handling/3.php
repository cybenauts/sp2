<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$txt=fopen('web.txt', 'r')or die('Resource Not Found');

	while(!feof($txt))
	{
		echo fgets($txt);
		echo '<br>';
	}

	fclose($txt);

?>
</body>
</html>
