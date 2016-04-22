<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it 
$_SESSION["favcar"] = "Ferrari 458 Italia";
echo "Session Modified";
print_r($_SESSION);
?>

</body>
</html>