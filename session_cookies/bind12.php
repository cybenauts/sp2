<!Doctype HTML>
<?php
setcookie('Fname',$_POST["field1"],time()+3600,'/');
setcookie('email',$_POST["field2"],time()+3600,'/');
setcookie('interest',$_POST["field3"],time()+3600,'/');
setcookie('info',$_POST["field4"],time()+3600,'/');
  ?>
<html>
    <title>Cookies</title>
<body>
<?php
echo "Your Information is set into COOKIES"; //Variables Working in echo
 
?>
</body>
</html>