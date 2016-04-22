<?php

if(isset($_POST['submit']))
{
	$sto=$_POST['prog'];
	

	$sto=$sto.'.php';
	//echo "$sto";
	header('Location: '.$sto);
}

if(isset($_POST['submit1']))
{
	$sto=$_POST['ip'];
	$sto=$sto.'.php';
	header('Location: '.$sto);
}
?>