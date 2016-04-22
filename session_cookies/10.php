<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();
echo "Variables Unset!!!<br>"; 

// destroy the session 
session_destroy();
echo "Session Destroyed!!!"; 
?>

</body>
</html>