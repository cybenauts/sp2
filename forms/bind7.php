<html>
    <title>Storage</title>
<body>

<?php
if (isset($_POST['submit']))
 {
 	

$Fname = $_POST["field1"];
$web = $_POST["field3"];
$email = $_POST["field2"];
$message = $_POST["field4"];

$txt=fopen('entry7.txt', 'w');

fwrite($txt,"Hello,$Fname.\r\n");
fwrite($txt,"Your email is $email.\r\n");
fwrite($txt,"Your Website is $web.\r\n");
fwrite($txt,"Your Message is [$message]");


fclose($txt);
echo "Data Writen To A File";
echo "<br><a href='entry7.txt'>Check The File</a>";
 }
?>

</body>
</html>