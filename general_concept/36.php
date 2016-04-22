<<!DOCTYPE html>
<html>
<head>
	<title>Fatorial</title>
</head>
<body>
<form method="POST">
	<fieldset>
		<legend>Enter a no for Factorial:</legend>
		<input type="text" name="fact">
		<input type="submit" value="Calculate">
	</fieldset>
</form>
<?php  
function factorial($n)  
{  
  if($n ==0)  
    {  
       return 1;  
    }  
  else   
    {     
       return $n * factorial($n-1);  
    }  
    }  
print_r('<h2>'.'Factorial= '.factorial($_POST['fact']).'</h2>');  
?>


</body>
</html>






