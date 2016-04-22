<?php
		if (isset($_POST['submit']))
 	{
		$conn= new mysqli('localhost','root','','matrix');
		
		
 
			$stmt=$conn->prepare('SELECT username,password FROM login where username=? and password=?');
			$stmt->bind_param('ss',$user,$pass);

		    $user = $_POST["field1"];
            $pass = $_POST["field2"];

            $stmt->execute();
			$stmt->bind_result($f,$l);
			$stmt->fetch();
 
			if ($f==$user and $l==$pass) 
				{			
					$_SESSION['user_id']=$user;;
					header('location: source_home.php');
 
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
			}
		
  ?>