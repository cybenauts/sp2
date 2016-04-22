<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcar"] = "Lambo Aventador";
$_SESSION["favanimal"] = "Cat";
echo "Session variables are set.";
?>

</body>
</html>