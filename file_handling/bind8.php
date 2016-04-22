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

$txt=fopen('entry.txt', 'w');

fwrite($txt,"Hello,$Fname.\r\n");
fwrite($txt,"Your email is $email.\r\n");
fwrite($txt,"Your Subject is $subject.\r\n");
fwrite($txt,"Your Message is [$message]");


fclose($txt);
echo "Data Writen To A File";
echo "<br><a href='entry.txt'>Check The File</a>";
 }
?>

</body>
</html>