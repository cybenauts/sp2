<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">


	header {
    background-color:black;
    font-family: sans-serif;
    color:white;
    text-align:center;
    padding:10px; 
    margin: 10px;
}
		
		.menu{
			text-align: right;
			line-height:30px;
		    background-color:#eeeeee;
		    height:300px;
		    width:100px;
		    float:left;
		    padding:5px; 

		}

		.body{
			background-color: ;
			font-family: sans-serif;
			font-size: 25px;
			text-align: center;
			color: ;
			margin: 10px;
			border-color: blue;
			padding: 10px;
		}
		.form{
			float :right;
			background-color:#eeeeee; 
			height:300px;
		    width:100px;
		    padding:5px; 
		}
		.footer{
		background-color: #A9A9A9;
			text-align: center;
			margin: 10px;
			padding: 10px;
			
		}
		/*body{
			background-image: url('http://wallpapercave.com/wp/khv9YHz.jpg');

		}*/
	</style>
</head>
<body>

<header>
<h1>Linker Page</h1>
</header>

<div class="menu">

<?php include 'menu.php';?>

</div>

<div class="form">
<form action="redir.php" method="post" accept-charset="utf-8">
Enter Program<br><br>
<fieldset>

	<legend>Load:</legend>
	
<select name="prog">
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
</select><br><br>
<input type="submit" name='submit' value="EXE">
	
	</fieldset>
</form>


<br>
<br>


<form action="redir.php" method="post" accept-charset="utf-8">
Other Program<br><br>
<fieldset>
	<legend>More:</legend>
<input type='text' name='ip' style="width:40px ; height:10px"> </input> <br> <br> <!-- Special Attention to Height and Width and input closing-->
<input type="submit" name='submit1' value="EXE" />
</fieldset>
</form>

</div>



<div class="body">
<h1>Welcome to my home page!</h1>
<?php include 'vars.php';
echo "This is an $color $car.";
?>
<p>Rendering File Inclusion.</p>
<p>With 5+ PHP files.</p>
</div>



<div class="footer">
<?php include 'footer.php';?>
</div>
</body>
</html>