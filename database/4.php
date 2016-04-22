<?php

$conn= new mysqli('localhost','root','','moonis');

$sql="insert into myGuests (firstname,lastname,email) values('Tony','Stark','ironman@me.com')";
if($conn->query($sql)== true);
echo "Insertion Successful<br>";

$sql="insert into myGuests (firstname,lastname,email) values('Sherlock','Homes','deduction@me.com')";
if($conn->query($sql)== true);
echo "Insertion Successful<br>";

$sql="insert into myGuests (firstname,lastname,email) values('Pablo','Escobar','narcos@me.com')";
if($conn->query($sql)== true);
echo "Insertion Successful<br>";

$conn->close();
?>