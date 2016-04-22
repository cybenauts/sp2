<?php 
include('source_auth.php');
//include('session.php'); 
 
/*$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);*/
 
 ?>
 
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/source.css">
</head>
<body>
<div class="form-wrapper"> 
    <center><h3>Welcome:  </h3></center>
	 <div class="reminder">
    <p><a href="source_logout.php">Log out</a></p>
  </div>
</div>
 
</body>
</html>