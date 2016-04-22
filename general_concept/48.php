<html>
	<title>
		
	</title>
	<body>

<form method="POST">
 		<fieldset>
 			<legend>Checking Palindrome:-</legend>
 			<input type="text" name='ip' >
 			<input type="submit" name='sb' value='SUBMIT'>
 		</fieldset>
 	</form>

 <?php
 if(isset($_POST['sb']))
 {
$num = $_POST['ip'];
$p=$num;
while((int)$num!=0)
{
$rem=$num%10;
$sum=$sum*10+$rem;
$num=$num/10;

}

if($sum==$p)
{
echo $p.' is palindrome number';
}
else
{
echo $p. ' is not palindrome number';
}
}
?>
	</body>
</html>