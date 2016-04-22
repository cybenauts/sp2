<html>
    <title>Storage</title>
<body>

<?php
if (isset($_POST['submit']))
 {
 	
		echo $_SERVER['DOCUMENT_ROOT'];


$Fname = $_POST["field1"];
$Address = $_POST["field2"];
$email = $_POST["field3"];
$phno = $_POST["field4"];
$pass = $_POST["field5"];
$cPass = $_POST["field6"];
$checkb= $_POST["field7"];

 }
?>


<?php
if(isset($_POST['submit']))
{
echo "Hello, $Fname <br />"; //variable inside echo "" works
echo "You live at ".$Address.", and your email is ".$email.'<br>';
echo "Your Phone No is ".$phno."<br />";
echo "<i>You agreement is [".$checkb."]</i>.<br>";

}
?>

</body>
</html>