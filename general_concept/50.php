<html>
	<title>
		
	</title>
	<body>
<form method="POST">
 		<fieldset>
 			<legend>Enter The No For Factorial-</legend>
 			<input type="text" name='ip' >
 			<input type="submit" name='sb' value='SUBMIT'>
 		</fieldset>
 	</form>

<?php
/* Function to get Factorial of a Number */
if(isset($_POST['sb']))
{
$num=$_POST['ip'];
function getFactorial($num)
{
    $fact = 1;
    for($i = 1; $i <= $num ;$i++)
        $fact = $fact * $i;
    return $fact;
}
echo 'Factorial OF '.$num.' is '. getFactorial($num);
}
?>
	</body>
</html>