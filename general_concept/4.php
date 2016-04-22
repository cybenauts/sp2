
<html>
<title>
Form
</title>
<body>
<form method ="POST">
<fieldset>
<legend>Filling Name:</legend>
<h2>Please Input Your Name:</h2><br>
<input type="text" name="fname">
<input type="submit" value="Submit">
</fieldset>
</form>
<fieldset>
<?php
$name=$_POST["fname"];
echo "<h3>Hello $name </h3";
?>
</fieldset>
</body>
</html>
