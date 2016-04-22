<html>
    <title>Storage</title>
<body>

<?php
if (isset($_POST['submit']))
 {
$conn= new mysqli('localhost','root','','matrix');
 

$stmt=$conn->prepare('SELECT username,password FROM login where username=? and password=?');
$stmt->bind_param('ss',$user,$pass);

$user = $_POST["field1"];
$pass = $_POST["field2"];


$stmt->execute();
$stmt->bind_result($f,$l);
$stmt->fetch();
if($f==$user and $l==$pass)	
{
	echo "Success<br>$f<br>$l";
}

 $stmt->close();
 $conn->close();

 }
?>


</body>
</html>