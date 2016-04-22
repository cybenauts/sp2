<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
echo "Retriving Cookies<br>";
if(!isset($_COOKIE['user'])) {
      echo "Cookie named '" . 'user' . "' is not set!";
} else {
      echo "Cookie '" . 'user' . "' is set!<br>";
      echo "Value is: " . $_COOKIE['user'];
}
?>

<!-- <p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p> -->

</body>
</html>