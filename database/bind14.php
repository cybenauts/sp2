<html>
    <title>Storage</title>
<body>

<?php
if (isset($_POST['submit']))
 {



if($_POST["field5"]==$_POST["field6"])//redundant already did in JS
{
$conn= new mysqli('localhost','root','','moonis');
// prepare and bind
$stmt = $conn->prepare("INSERT INTO registration (name, address, email, phno, password) VALUES (?, ?, ?,?,?)");
$stmt->bind_param("sssss", $Fname, $Address, $email, $phno, $pass);

$Fname = $_POST["field1"];
$Address = $_POST["field2"];
$email = $_POST["field3"];
$phno = $_POST["field4"];
$pass = $_POST["field5"];
$cPass = $_POST["field6"];

$stmt->execute();
echo "Prepared records created successfully";
echo "<br><a href=retr14.php>Retrive From dB</a>";

$stmt->close();
$conn->close();
 }
}
?>




</body>
</html>