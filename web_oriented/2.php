<!-- This Script is from www.phpfreecpde.com, Coded by: Kerixa Inc-->

<?php
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password

$link=mysql_connect($host, $username, $password);
if(!$link) die('
<p style="text-align: center;	font-size: 20pt;"><span style="color: #FF0000;">Failed to connect to the database! </span>
<br><span style="font-size: 12pt;">&gt;&gt;Please check the parameters and database server&lt;&lt;</span></p>
');

$db_name="users"; 
$result=mysql_select_db($db_name);
if(!$result){
	setup();
}
$a=0;

if (isset( $_GET['type'])&& $_GET['type']=='login'){
	if ($_POST['username']) {
		//did they supply a password and username
		$username=$_POST['username'];
		$password=$_POST['password'];
		if ($password==NULL) {
			echo "The password was not supplied";
		}else{
			$query = mysql_query("SELECT username,password FROM users WHERE username = '$username'") or die(mysql_error());
			$data = mysql_fetch_array($query);
			if($data['password'] != $password) {
				echo "The supplied login is incorrect";
			}else{
				$query = mysql_query("SELECT username,password FROM users WHERE username = '$username'") or die(mysql_error());
				$row = mysql_fetch_array($query);
				setcookie("user", "$username", time()+3600);
				welcome("The login was successful.");
			}
		}
	}else echo 'The username was not supplied';
}elseif (isset( $_GET['type'])&& $_GET['type']=='register'){
	if (isset($_POST["username0"])) {
		$username = $_POST["username0"];
		$password = $_POST["password0"];
		$cpassword = $_POST["cpassword"];
		$email = $_POST["email"];
		//Was a field left blank?
		if($username==NULL||$password==NULL||$cpassword==NULL||$email==NULL) {
			echo "A field was left blank.";
		}else{
			//Do the passwords match?
			if($password!=$cpassword) {
				echo "Passwords do not match";
			}else{
				//Has the username or email been used?
				$checkuser = mysql_query("SELECT username FROM users WHERE username='$username'");
				$username_exist = mysql_num_rows($checkuser);
				$checkemail = mysql_query("SELECT email FROM users WHERE email='$email'");
				$email_exist = mysql_num_rows($checkemail);
				if ($email_exist||$username_exist) {
					echo "The username or email is already in use";
				}else{
					//Everything seems good, lets insert.
					$query = "INSERT INTO users (username, password, email) VALUES('$username','$password','$email')";
					mysql_query($query) or die(mysql_error());
					welcome( "The user $username has been successfully registered.");
				}
			}
		}
	}	
}elseif (isset( $_GET['type'])&& $_GET['type']=='logout'){
	setcookie("user", "", time()-3600);
	$a=1;
}

if (isset($_COOKIE['user']) && $_COOKIE['user']!="") {
	$username= $_COOKIE['user'];
	if ($a==0)welcome ("You have already logged in; Enjoy.");
} 

$row1 = mysql_query("SELECT * FROM users");// ORDER BY uid DESC LIMIT 1") or die(mysql_error());
while($row=mysql_fetch_array($row1))
{
	$lastuser= $row['username'];
}

function setup(){
echo('
<p style="color: #008000;	text-align: left;	font-size: 15pt;"">-Automatic setup is started...</p>
');
global $host,$username,$password,$link;
//$link=mysql_connect($host, $username, $password);
$sql= 'CREATE DATABASE users';
if (!mysql_query ($sql, $link)) die('
<p style="text-align: center;	font-size: 20pt;"><span style="color: #FF0000;">Failed to 
create database! </span><br><span style="font-size: 12pt;">&gt;&gt;Please check the parameters and database server&lt;&lt;</span></p>
');
$sql = "CREATE TABLE `users`.`users` (
`username` TEXT NOT NULL ,
`password` TEXT NOT NULL ,
`email` TEXT NOT NULL
) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;";

mysql_query($sql) or die('Setup Failed');
echo('
<p style="color: #008000;	text-align: left;	font-size: 15pt;"">-Automatic setup completed successfully. Your Login-Registration system is ready!</p>
');
}


function welcome($msg){
global $username;
die('
<table style="border-width: 0px;width: 400px; height: 107px">
	<tr>
		<td style="border-style: solid;border-width: 0px;font-size: 17pt;background-color: #DFDFFF;">'.$msg.'</td></tr><tr>
		<td style="border-style: solid;border-width: 0px;font-size: 17pt;background-color: #DFDFFF;"><strong>Welcome '.$username.'</strong><br>
		<a href="'.$_SERVER['PHP_SELF'].'?type=logout"><span style="border-style: solid;border-width: 0px;background-color: #DFDFFF;">Logout</span></a></td>
	</tr>
</table>
');
}

?>

<html>
<body>

<table style="border-width: 0px;width: 400px; height: 107px">
	<tr>
		<td style="border-style: solid;border-width: 0px;background-color: #DFDFFF;"><form action="<?php echo $_SERVER['PHP_SELF'].'?type=login'?>" method="post" ><h1>Login</h1>
<table style='border:0px solid #000000;'>
<tr>
<td align='right'>
Username: <input type='text' size='15' maxlength='25' name='username'>
</td>
</tr>
<tr>
<td align='right'>
Password: <input type='password' size='15' maxlength='25' name='password'>
</td>
</tr>
<tr>
<td align='center'>
<input type="submit" value="Login">
</td>
</tr>
</table>
		</form><br></td>
	</tr>
	<tr>
		<td style="border-style: solid;border-width: 0px;background-color: #DFFFFF;"><form action="<?php echo $_SERVER['PHP_SELF'].'?type=register'?>" method="post" >
<h1>Register</h1>
<table style="border:0px solid #000000;">
<tr>
<td align="right">
Username: <input type="text" size="15" maxlength="25" name="username0">
</td>
</tr>
<tr>
<td align="right">
Password: <input type="password" size="15" maxlength="25" name="password0">
</td>
</tr>
<tr>
<td align="right">
Confirm Password: <input type="password" size="15" maxlength="25" name="cpassword">
</td>
</tr>
<tr>
<td align="right">
Email: <input type="text" size="15" maxlength="25" name="email">
</td>
</tr>
<tr>
<td align="center">
<input type="submit" value="Register">
</td>
</tr>
</table>
		</form><br></td>
	</tr>
	<tr>
		<td style="border-style: solid;border-width: 0px;font-size: 17pt;background-color: #DFDFFF;"><strong>Last member: <?php echo $lastuser?></strong></td>
	</tr>
</table>
<br>
</body></html>