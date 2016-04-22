<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Moonis Abdi";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
echo "Cookies Set!!!";
?>



<html>
<body>

</body>
</html>