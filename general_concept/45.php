<html>
	<title>
		
	</title>
	<body>
 	<form method="POST">
 		<fieldset>
 			<legend>Enter The String To Match-</legend>
 			<input type="text" name='ip' >
 			<input type="submit" name='sb' value='SUBMIT'>
 		</fieldset>
 	</form>

<?php
if(isset($_POST['sb']))
{
$tex=$_POST['ip'];
echo 'Word found at index: '.strpos("Hello world!", $tex); // output
}
?>
	</body>
</html>