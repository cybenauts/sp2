<?php 
$conn= new mysqli('localhost','root','','moonis');
 

$stmt=$conn->prepare('SELECT firstname,lastname FROM MyGuests where id=?');
$stmt->bind_param('i',$ent);
$ent=8;

$stmt->execute();

 $stmt->bind_result($f,$l);

 $stmt->fetch();
 echo $f." ".$l;

 $stmt->close();
 $conn->close();
 ?>