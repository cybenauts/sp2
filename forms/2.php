<!DOCTYPE HTML> 
<html>
<head>
</head>
<body> 


<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name">
   <br><br>
   E-mail: <input type="text" name="email">
   <br><br>
   Website: <input type="text" name="website">
   <br><br>
   Comment: <textarea name="comment" rows="5" cols="40"></textarea>
   <br><br>
   Gender:
   <input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="male">Male
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php
if(isset($_POST['submit']))
{
   $name = ($_POST["name"]);
   $email = ($_POST["email"]);
   $website = ($_POST["website"]);
   $comment = ($_POST["comment"]);
   $gender = ($_POST["gender"]);
 }
?>

<?php
if(isset($_POST['submit']))
{
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
}
?>

</body>
</html>