<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("web.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("web.txt"));
fclose($myfile);
?>

</body>
</html>