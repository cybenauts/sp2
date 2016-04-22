<?php

$conn=new mysqli('localhost','root','','moonis');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

$stmt=$conn->prepare('delete from myGuests where id=?');
$stmt->bind_param('i',$ent);

$ent=5;
if($stmt->execute()==true)
{
	echo "Deleted Entry With ID: ".$ent;
}


$stmt->close();
$conn->close();


  ?>