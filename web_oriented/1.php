<!-- This Script is from www.phpfreecpde.com, Coded by: Kerixa Inc-->

<?php
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password

$lastuser='';
$link=mysql_connect($host, $username, $password);
$username='';
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
				login("The login was successful.");
			}
		}
	}else echo 'The username was not supplied';
}elseif (isset( $_GET['type'])&& $_GET['type']=='viewuser'){
	$username=$_GET['user'];
	$query=mysql_query("select * from users where username='$username'") or die('An Errorr Occured');
	$row = mysql_fetch_array($query)or die('An Errorr Occured');
	$fullname=$row['fullname'];
	$city=$row['city'];
	$country=$row['country'];
	$interests=$row['interests'];
	$shout=$row['shout'];
	die( '
<form method="post" action="'.$_SERVER['PHP_SELF'].'?type=update&user='.$username.'">
<table style="border-width: 0px;width: 477px; height: 107px" align="center">
	<tr>
		<td style="padding: 5px;border-style: solid;border-width: 0px;font-size: 17pt;background-color: #DFDFFF; width: 394px; ;">
		Shout: '.$shout.'
		</td></tr><tr>
		<td style="padding: 5px;border-style: solid;border-width: 0px;font-size: 17pt;background-color: #DFDFFF; width: 394px; ;">
		<table style="width: 100%; font-family: serif;">
			<tr>
				<td style="width: 106px; ">
				Full Name:</td>
				<td>'.$fullname.'</td>
			</tr>
			<tr>
				<td style="width: 106px; ">
				City:</td>
				<td>'.$city.'</td>
			</tr>
			<tr>
				<td style="width: 106px; ">
				Country:</td>
				<td>'.$country.'</td>
			</tr>
			<tr>
				<td style="width: 106px; ">
				Interests:</td>
				<td>'.$interests.'</td>
			</tr>
		</table>
		<div style="text-align: center">
			<a href="'.$_SERVER['PHP_SELF'].'">Return Back</a></div>
		</td>
	</tr>
</table>
</form>
<div style="text-align: center">
	<font face="Tahoma"><a target="_blank" href="http://www.phpfreecode.com/">
	<span style="font-size: 8pt; text-decoration: none">PHP Free Code</span></a></font>
</div>
');	
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
					login( "The user $username has been successfully registered.");
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
	if ($a==0)login ("You have already logged in; Enjoy.");
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
`email` TEXT NOT NULL,
`shout` LONGTEXT NOT NULL,
`fullname` TEXT NOT NULL,
`city` TEXT NOT NULL,
`country` TEXT NOT NULL,
`interests` LONGTEXT NOT NULL
) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;";

mysql_query($sql) or die('Setup Failed');
echo('
<p style="color: #008000;	text-align: left;	font-size: 15pt;"">-Automatic setup completed successfully. Your Login-Registration system is ready!</p>
');
}

function login($msg){
global $username;
$shout='';$country='';$city='';$intrests='';$fullname='';$interests='';
if (isset($_POST['Submit']) && $_GET['type']=='update'){
	$fullname=$_POST['fullname'];
	$city=$_POST['city'];
	$country=$_POST['country'];
	$interests=$_POST['interests'];
	$shout=$_POST['shout'];
	$username=$_GET['user'];		
	
	$sql="
	UPDATE `users`.`users` SET `shout` = '$shout',
	`fullname` = '$fullname',
	`city` = '$city',
	`country` = '$country',
	`interests` = '$interests' WHERE `users`.`username` = '$username'  ;
	mysql_query($sql) or die('Update Failed');
";}
$query=mysql_query("select * from users where username='$username'") or die('An Errorr Occured');
$row = mysql_fetch_array($query)or die('An Errorr Occured');
$fullname=$row['fullname'];
$city=$row['city'];
$country=$row['country'];
$interests=$row['interests'];
$shout=$row['shout'];
$username=$row['username'];		

die('
<form method="post" action="'.$_SERVER['PHP_SELF'].'?type=update&user='.$username.'">
<table style="border-width: 0px;width: 678px; height: 107px" align="center">
	<tr>
		<td style=" padding: 5px; border-style: solid;border-width: 0px;font-size: 17pt;background-color: #DFDFFF; width: 274px; ">'.$msg.'</td>
		<td style="padding: 5px;border-style: solid;border-width: 0px;font-size: 17pt;background-color: #DFDFFF; width: 394px; ;">
		Shout:
			<input name="shout" style="width: 315px; height: 38px; font-size: 16pt;" value="'.$shout.'">
		</td></tr><tr>
		<td style="padding: 5px;border-style: solid;border-width: 0px;font-size: 17pt;background-color: #DFDFFF; width: 274px;">
		<span style=""><strong>Welcome '.$username.'</strong></span><br style="">
		<span style="border-style: solid;border-width: 0px;background-color: #DFDFFF; ;">
		<a href="'.$_SERVER['PHP_SELF'].'?type=logout">
		Logout</a></span><br><br>
		<input name="Submit" style="width: 160px; height: 46px; font-size: 15pt" type="submit" value="Save &amp; Update"></td>
		<td style="padding: 5px;border-style: solid;border-width: 0px;font-size: 17pt;background-color: #DFDFFF; width: 394px; ;">
		<table style="width: 100%; font-family: serif;">
			<tr>
				<td style="width: 106px; ">
				Full Name:</td>
				<td>
				<input name="fullname" style="margin-left: 0px; font-size: 12pt; ; width: 237px;" value="'.$fullname.'"></td>
			</tr>
			<tr>
				<td style="width: 106px; ">
				City:</td>
				<td style="">
				<input name="city" style="margin-left: 0px; font-size: 12pt; ; width: 237px;" value="'.$city.'"></td>
			</tr>
			<tr>
				<td style="width: 106px; ">
				Country:</td>
				<td style="">
				<input name="country" style="margin-left: 0px; font-size: 12pt; ; width: 237px;" value="'.$country.'"></td>
			</tr>
			<tr>
				<td style="width: 106px; ">
				Interests:</td>
				<td style="">
				<textarea name="interests" style="width: 237px; height: 82px">'.$interests.'</textarea></td>
			</tr>
		</table>
		</td>
	</tr>
</table>
</form>
<div style="text-align: center">
	<font face="Tahoma"><a target="_blank" href="http://www.phpfreecode.com/">
	<span style="font-size: 8pt; text-decoration: none">PHP Free Code</span></a></font>
</div>
');
}

?>

<html>
<body>

<table style="border-width: 0px;width: 420px; height: 107px">
	<tr>
		<td style="border-style: solid;border-width: 0px;background-color: #DFDFFF; width: 259px;"><form action="<?php echo $_SERVER['PHP_SELF'].'?type=login'?>" method="post" ><h1>Login</h1>
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
		<td style="border-style: solid;border-width: 0px;background-color: #DFDFFF; text-align: left; font-size: 18pt;" rowspan="3" valign="top">
		<strong>All Members:<br></strong>
<?php
$query=mysql_query("select * from users") or die('An Errorr Occured');
while($row = mysql_fetch_array($query)){
	echo '
	<a href="'.$_SERVER['PHP_SELF'].'?type=viewuser&user='.$row['username'].'">'.$row['username'].'</a><br>
	'; 
}
?>
</td>
</tr>
	<tr>
		<td style="border-style: solid;border-width: 0px;background-color: #DFFFFF; width: 259px;"><form action="<?php echo $_SERVER['PHP_SELF'].'?type=register'?>" method="post" >
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
		<td style="border-style: solid;border-width: 0px;font-size: 17pt;background-color: #DFDFFF; width: 259px;"><strong>Last member: <?php echo $lastuser?></strong></td>
	</tr>
</table>
<br><font face="Tahoma"><a target="_blank" href="http://www.phpfreecode.com/"><span style="font-size: 8pt; text-decoration: none">PHP Free Code</span></a></font>
</body></html>