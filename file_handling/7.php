<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$abc=fopen('console.txt', 'a+');

$wrt=' M '.'H '.'A';
fwrite($abc, $wrt);

fclose($abc);

echo "Done!!! Appending";
  ?>

</body>
</html>