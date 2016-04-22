<html>
<head>
<title>Personal INFO</title>
</head>

<body>



<form method="post" action="5bind.php">

<fieldset >  
<legend><h4>Details</h4></legend>

First Name:<input type="text" size="12" maxlength="12" name="Fname"><br/>
Last Name:<input type="text" size="12" maxlength="36" name="Lname"><br/><br>

Gender:<br />
Male:<input type="radio" value="Male" name="gender">
Female:<input type="radio" value="Female" name="gender"><br /><br>

Please choose type of residence:<br />
Steak:<input type="checkbox" value="Steak" name="food[]"><br />
Pizza:<input type="checkbox" value="Pizza" name="food[]"><br />
Chicken:<input type="checkbox" value="Chicken" name="food[]"><br /><br>




<textarea rows="5" cols="20" name="quote" wrap="physical">Enter your favorite quote...
</textarea><br><br>



Select a Level of Education:<br />
<select name="education">
<option value="Jr.High">Jr.High</option>
<option value="HighSchool">HighSchool</option>
<option value="College">College</option>
</select><br /><br>

Select your fav. car:<br>
<select name="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi" selected>Audi</option>
</select><br><br>

Select your favorite time of day:<br />
<select name="TofD" size="">
<option value="Morning">Morning</option>
<option value="Day">Day</option>
<option value="Night">Night</option>
</select><br /><br>



<input type="submit" value="SUBMIT" name="submit">
</fieldset>
</form>



</body>
</html>