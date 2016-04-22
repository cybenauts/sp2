<?php session_start(); ?>
<?php include('source_auth.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/source.css">
</head>
<body>
<div class="form-wrapper">
 
  <form action="source_auth.php" method="post">
    <h3>Login Here</h3>
 
    <div class="form-item">
		<input type="text" name="field1" required="required" placeholder="Username" autofocus required></input>
    </div>
 
    <div class="form-item">
		<input type="password" name="field2" required="required" placeholder="Password" required></input>
    </div>
 
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="submit" value="Login"></input>
    </div>
  </form>
  <?php include('source_auth.php'); ?>
  <div class="reminder">
    <p>Not a member? <a href="#">Sign up now</a></p>
    <p><a href="#">Forgot password?</a></p>
  </div>
 
</div>
 
</body>
</html>