<?php
session_start();
$user = $_SESSION['user_email'];
if (!$user)
{
	header ("Location: index.php");
}
include 'design.php';

?>

<html>
<head>
<title>Home(ADMIN)
</title>
</head>
<body link="#0066FF" vlink="#6633CC" bgcolor="#FFFFCC" background="images/image001.jpg" style='margin:0'>

<div style="top:140; left:250; position:absolute; z-index:1;">
<div style="top:0; left:0; position:absolute; z-index:1;">
<?php
	echo("<table>");
	echo "<tr><td><h1>". strtoupper($user)."</h1></td><td>(Administrator)</td></tr>";
	echo("</table>");
?>
</div>
</div>

<div style="top:200; left:255; position:absolute; z-index:1;">
<?php
include 'connect.php';
$mess = "";
$count = 0;
$SQL = "SELECT * FROM messaging WHERE to_receiver = '$user' AND opened = 0";
$result = mysql_query($SQL);
while ($db_field = mysql_fetch_assoc($result)) {
	$count = $count + 1;
}

if($count > 0){
	echo("You have ".$count." new message!");
}
else{
	echo("You have no new message!");
}

?>
</div>

<div style="top:550; left:300; position:absolute; z-index:1;">
<img border = "none" src = "images/maulawka.gif"></img>
</div>


</body>
</html>