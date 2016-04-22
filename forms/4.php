<html>
<head>
<title>Form Response with If-Else Statement</title>
</head>
 
<body>
<h2>Favorite City</h2>
 
<?php
if (!isset($_POST['submit'])){
?> 
<form method="post" action="bind4.php">
Please enter your favorite city:  <br />
<input type="text" name="city" />
<p />
<input type="submit" name="submit" value="Go" />
</form>
<?php

}else{
 
$city = $_POST['city'];
echo "Your favorite city is $city.";
 
}
?>
 
</body>
</html>