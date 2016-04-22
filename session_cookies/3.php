<!DOCTYPE html>
	<?php
$cookie_name = "user";
$cookie_value = "Steve Jobs";
setcookie($cookie_name, $cookie_value, time() + (3600), "/"); //1HR
echo "Cookies Modified!!!";
?>
<html>
<head>
	<title></title>

</head>
<body>

</body>
</html>