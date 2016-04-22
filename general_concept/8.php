<html>
<title></title>
<body>
	<form method = "POST">
		<fieldset>
			<legend> Validation:</legend>
			<input type="text" name="email">
			<input type="submit" value="check">
		</fieldset>
	</form>
	<?php 
	$email=$_POST['email'];
	if(filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		header('Location: http://www.google.com/');
	}
	else
		echo"<h2>INVALID EMAIL FORMAT</h2>";

	?>
</body>
</html>