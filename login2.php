<?php
ob_start();
session_start();
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <link rel="stylesheet" href="css/style.css">
  
<script type="text/javascript">
function validateForm()
{
 var regis = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  var address = document.forms["fo2"]["ema"].value;
      if(regis.test(address) == false)
         {
           alert('Invalid Email Address');
           return false;
        }	

 
  var x=document.forms["fo2"]["mno"].value;
if (x==null || x=="")
  {
  alert("Mobile number must be filled out");
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
      <h1>Forget Password</h1>
      <form name="fo2" action="login2.php" onSubmit="return validateForm()" method="post">
        <P><input type="text" name="ema" placeholder="Type your Email id"></p>
	<P><input type="text" name="mno" placeholder="Type your mobile number"></p>
        
        <p class="submit"><input type="submit" name="submit" value="Get Password"></p>
      </form>
<?php
if(isset($_REQUEST['submit'])=="submit")
{
$uid=$_POST["ema"];
$mno=$_POST["mno"];
 require("connect.php");

$exe=mysql_query("select * from registration where user_email='$uid' and mno='$mno'") or die(mysql_error());

while($row=mysql_fetch_array($exe))
 	{		
  echo "<script>alert('Your password is ".$row['user_pass']."')</script>";	

}
 
}

?>
   

    </div>
<div class="login-help">
      <p><font size="4"><a href="index.php">Back</a>  
</font></p>
    </div>

</body>
</html>


