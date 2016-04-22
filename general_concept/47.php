<html>
	<title>
		
	</title>
	<body>

<form method="POST">
 		<fieldset>
 			<legend>Enter The Vowel:-</legend>
 			<input type="text" name='ip' >
 			<input type="submit" name='sb' value='SUBMIT'>
 		</fieldset>
 	</form>

 <?php
 if(isset($_POST['sb']))
 {
$vow = $_POST['ip'];


switch (strtolower($vow)) {
    case "a":
        echo "a is a vowel!";
        break;
    case "e":
        echo "e is a vowel!";
        break;
    case "i":
        echo "i is a vowel!";
        break;
    case "o":
        echo "o is a vowel!";
        break;
    case "u":
        echo "u is a vowel!";
        break;
  
    default:
        echo "Entered Character ".$vow." Is Not A Vowel!";
}
}
?>
	</body>
</html>