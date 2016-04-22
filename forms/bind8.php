<html>
    <title>Storage</title>
<body>

<?php
if (isset($_POST['submit']))
 {
 	

$Fname = $_POST["field1"];
$email = $_POST["field2"];
$interest = $_POST["field3"];
$info = $_POST["field4"];


echo "Hello, ".$Fname.".<br />";
echo "Your email is ".$email.'<br>';
echo "Your Interest is ".$interest."<br />";
echo "Your Information is<i> [$info]</i><br>"; //Variables Working in echo
 }
?>

</body>
</html>