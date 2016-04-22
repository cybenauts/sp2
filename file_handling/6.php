<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$abc=fopen('console.txt', 'w');

$wrt='M '.'H '.'A';
fwrite($abc, $wrt);

fclose($abc);

echo "Done!!! Overwritten";
  ?>

</body>
</html>