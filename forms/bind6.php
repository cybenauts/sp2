<html>
    <title>Storage</title>
<body>

<?php
if (isset($_POST['submit']))
 {
 	

$Fname = $_POST["field1"];
$Lname = $_POST["field2"];
$email = $_POST["field3"];
$subject = $_POST["field4"];
$message = $_POST["field5"];


echo "Hello, ".$Fname.".<br />";
echo "Your email is ".$email.'<br>';
echo "Your Subject is ".$subject."<br />";
echo "<i>Your Message is [$message]</i><br>"; //Variables Working in echo
 }
?>

</body>
</html>