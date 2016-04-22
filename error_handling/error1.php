<?php  
$name = $_POST['name'];  
$phone = $_POST['phone'];<br>if (isset($_POST['submit']))  
{  
if (is_numeric($name))//checking if the value is numeric  
{  
 die("Name must not be numeric!");//error message if the value is numeric  
}  
else   
{  
echo "<br />Name entered is:".$_POST['name'];  
}  
if (!is_numeric($phone))//checking if the value is not numeric  
{  
 die("<br />Phone no must be numeric!");//error message if the value is not numeric  
}  
else   
{  
echo "<br />Phone No is:".$_POST['phone'];  
}  
}  
?>  