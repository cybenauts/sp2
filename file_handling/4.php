<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$txt=fopen('web.txt', 'r');
while (!feof($txt)) {
	echo fgetc($txt);

}
fclose($txt);

?>
</body>
</html>