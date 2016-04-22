<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$abc=fopen('console.txt', 'w');

$wrt='Moonis '.'Haider '.'Abdi';
fwrite($abc, $wrt);

fclose($abc);

echo "Done!!! File Written";
  ?>

</body>
</html>