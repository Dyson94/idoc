<?php
ob_start();
session_start();
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Email management system</title>
  <link rel="stylesheet" href="css/style1.css">
  
<script type="text/javascript">
function validateForm()
{


   var x=document.forms["f1"]["uname"].value;
if (x==null || x=="")
  {
  alert("User name must be filled out");
  return false;
  }
	
 var regis = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  var address = document.forms["f1"]["user_email"].value;
      if(regis.test(address) == false)
         {
           alert('Invalid Email Address');
           return false;
        }

   var x=document.forms["f1"]["user_pass"].value;
if (x==null || x=="")
  {
  alert("Password must be filled out");
  return false;
  }


   var x=document.forms["f1"]["user_cpass"].value;
if (x==null || x=="")
  {
  alert("Confirm Password is must be same as Password");
  return false;
  }

 var x=document.forms["f1"]["gender"].value;
if (x==null || x=="")
  {
  alert("Gender must be filled out");
  return false;
  }
 var x=document.forms["f1"]["dob"].value;
if (x==null || x=="")
  {
  alert("date of birth must be filled out");
  return false;
  }
 var x=document.forms["f1"]["address"].value;
if (x==null || x=="")
  {
  alert("Address must be filled out");
  return false;
  }


 var x=document.forms["f1"]["country"].value;
if (x==null || x=="")
  {
  alert("Country must be filled out");
  return false;
  }
 var x=document.forms["f1"]["mno"].value;
if (x==null || x=="")
  {
  alert("mobile number must be filled out");
  return false;
  }


}
</script>
  
</head>
<body>
<div>
<br>
<section class="container">
  <div class="login">
      <h1>Registration</h1>
      <form name="f1" action="registration.php" onSubmit="return validateForm()" method="post">
<P>Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="uname" placeholder=" Type your Username"></p>
<P>Create Email ID:&nbsp;&nbsp;&nbsp;<input type="text" name="user_email" placeholder="Email Id"></p>
<p>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="user_pass" placeholder="Type your Password"></p>
<p>Confirm Password:<input type="password" name="user_cpass" placeholder="Type your Password Again"></p>
<p>Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="gen" placeholder="Type your gender"></p>
<p>Date of Birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="dob" name="dob" placeholder="Type your date of birth"></p>
<p>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address" placeholder="Type your Address"></p>
<p>Country:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="country" placeholder="Type your Country"></p>
<p>Mobile No:&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mno" placeholder="Type your mobile number"></p>      
        </p>
        <p class="submit"><input type="submit" name="submit" value="Register"></p>
      </form>
<?php
if(isset($_REQUEST['submit'])=="submit")
{
 extract($_POST);
mysql_connect("localhost","root","");  
mysql_select_db("anandu");
if($user_pass!=$user_cpass)
{
  echo "<script>alert('Your Password must be same as confirm Password')</script>";
  exit();
}

$check_uname="select * from registration where uname='$uname'";
$run=mysql_query($check_uname);
if(mysql_num_rows($run)>0)
{
echo "<script>alert('Email $uname is already exist please try different one')</script>";
exit();
}


$check_email="select * from registration where user_email='$user_email'";
$run=mysql_query($check_email);
if(mysql_num_rows($run)>0)
{
echo "<script>alert('Email $user_email is already exist please try different one')</script>";
exit();
}
$address = $_POST['address'];
$insert=mysql_query("insert into registration  values(null,'$uname','$user_email','$user_pass','$user_cpass','$gen','$dob','$address','$country','$mno')")or die(mysql_error());  
if($insert)

{
  echo "<script>alert('Your Email has successfully Registered')</script>";
  echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}
else
{
  echo "<script>alert('Something went wrong please Try Again')</script>";
}

}
?>
  
    </div>

    </div>
<div class="login-help">
      <p><font size="4"><a href="index.php">click to Main login page</a>  
</font></p>
    </div>
    
 
</body>
</html>

