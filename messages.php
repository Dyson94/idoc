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
<title>Message(ADMIN)
</title>
</head>
<body link="#0066FF" vlink="#6633CC" bgcolor="#FFFFCC" background="images/image001.jpg" style='margin:0'>

<div style="top:180; left:280; position:absolute; z-index:1;">
<font face="Broadway" size = "6">Messages:</font>
</div>

<?php
include 'connect.php';

$SQL = "SELECT count( * ) as total_record  FROM messaging WHERE to_receiver = '$user'";
$result = mysql_query($SQL);
while ($db_field = mysql_fetch_assoc($result)) {
	$a = $db_field['total_record'];
}

$SQL = "SELECT count( * ) as total_record  FROM sent_items WHERE from_sender = '$user'";
$result = mysql_query($SQL);
while ($db_field = mysql_fetch_assoc($result)) {
	$b = $db_field['total_record'];
}
?>


<div style="top:270px; left:300px; width:500px; height:320px; position:absolute; overflow:auto; z-index:1">
<?php echo $a; ?> <b>Inbox</b><br><br>
<?php echo $b; ?> <b>Sent Items</b><br>
</div>

</body>
</html>