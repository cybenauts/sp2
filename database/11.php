<?php

$conn=new mysqli('localhost','root','','moonis');

$stmt=$conn->prepare('update myGuests set firstname=? where id=?');
$stmt->bind_param('si',$name,$ent);

$name='Matrix';
$ent=6;
if($stmt->execute()==true)
{
	echo "Updated Entry With ID: ".$ent.'<br>'.'Name Changed To: '.$name;
}


$stmt->close();
$conn->close();


  ?>