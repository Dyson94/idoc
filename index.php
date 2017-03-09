<?php

session_start();
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>IDOC</title>
  <link rel="stylesheet" href="css/style.css">
  
<script type="text/javascript">
function validateForm()
{
	
 var regis = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  var address = document.forms["f1"]["email"].value;
      if(regis.test(address) == false)
         {
           alert('Invalid Email Address');
           return false;
        }

   var x=document.forms["f1"]["pass"].value;
if (x==null || x=="")
  {
  alert("Password must be filled out");
  return false;
  }
}
</script>
</head>
<body>
<div>
<br>
<div style="top:50; left:630; position:absolute; z-index:1;">
<font face="cooper" size = "15">I</font>-<font face="Broadway" color="red" size = "10">Doc</font>
</div>
<section class="container">
  <div class="login">
      <h1>Login</h1>
      <form name="f1" action="index.php" onSubmit="return validateForm()" method="post">
        <P><input type="text" name="email" placeholder="Email Id"></p>
        <p><input type="password" name="pass" placeholder="Type your Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="submit" value="Login"></p>
      </form>
<?php
if(isset($_REQUEST['submit'])=="submit")
{
 extract($_POST);
 require("connect.php");
$_SESSION['user_email']=$email=$_POST["email"];
$_SESSION['user_pass']=$pass=$_POST["pass"];
$select="select user_email,user_pass from registration where user_email='$email'and user_pass='$pass'";
$exe=mysql_query($select);
if(mysql_num_rows($exe)>0)
 
{
   header("location:messages.php");
}
else
{
  echo "<script>alert('Invalid username or password')</script>";	
}

	$SQL = "INSERT INTO login (`email`) VALUES ('$email')";
	$result = mysql_query($SQL);

}
?>
 
   </div>

    <div class="login-help">
      <p><font size="3"><a href="login2.php"> Forgot your password?</a> | 
<a href="index.php">Click here to reset it</a>.</font></p>
    </div>
  </section>
<section class="about">
    <p class="about-links">
      <a href="registration.php" target="_parent">Are you a New User? Sign Up here</a>
    </p>
    </section>
 
</body>
</html>

