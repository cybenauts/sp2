<!DOCTYPE html>
<html>
<head>
	<title>Final Call</title>
	<link rel="stylesheet" type="text/css" href="form-style-10.css">
</head>
<body>

<script>
    function validateForm()
    {

    var x=document.myForm.field5.value;
    var y=document.myForm.field6.value;
    //var z = document.myForm.field7.value; //will work


        if(x!=y)
        {
            alert("Password mismatch");
            return false;
        }
        else if(z =='' || z == null) 
        {
        alert("You must agree to our Terms and Policy");
        return false;
        }

    }

</script>

<div class="form-style-10">

<h1>Welcome! To The Smart Parking<span>Sign In To Get Yourself Registered! </span></h1>


<form  method="post" onsubmit="return validateForm()" name='myForm' action="bind14.php" >

    <div class="section"><span>1</span>First Name &amp; Address</div>
    <div class="inner-wrap">
        <label>Your Full Name <input type="text" name="field1" required="true" /></label>
        <label>Address <textarea name="field2"></textarea></label>
    </div>

    <div class="section"><span>2</span>Email &amp; Phone</div>
    <div class="inner-wrap">
        <label>Email Address <input type="email" name="field3" required="true" /></label>
        <label>Phone Number <input type="text" name="field4" required="true" /></label>
    </div>

    <div class="section"><span>3</span>Passwords</div>
        <div class="inner-wrap">
        <label>Password <input type="password" name="field5" required="true" /></label>
        <label>Confirm Password <input type="password" name="field6" required="true" /></label>
    </div>
    <div class="button-section">
     <input type="submit" name="submit" />
     <span class="privacy-policy">
     <input type="checkbox" name="field7[] required="true" " >You agree to our Terms and Policy. 
     </span>
    </div>
</form>
</div>

</body>
</html>