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

<div style="top:180; left:270; position:absolute; z-index:1;">
<font face="Broadway" size = "6">Sent Items:</font>
</div>

<div style="top:230px; left:270px; width:500px; height:320px; position:absolute; overflow:auto; z-index:1">
<table border = "2" width = "100%">
<tr>
	<th></th>
	<th>To</th>
	<th>Subject</th>
	<th>Date</th>
	<th>Action</th>
</tr>

<?php
include 'connect.php';

$SQL = "SELECT * FROM sent_items WHERE from_sender = '$user' ORDER BY date_send DESC";
$result = mysql_query($SQL);
while ($db_field = mysql_fetch_assoc($result)) {
	$ctrl = $db_field['ctrl_no'];
	$a = $db_field['opened'];
	$b = $db_field['to_receiver'];
	$c = $db_field['mail_subject'];
	$d = $db_field['date_send'];
	echo("<tr>");
	if($a == 0){
		echo("<td align = 'center' width = '1'><a href = 'read_mail_s.php?key=".$ctrl."'><img src = 'images/unopened.jpg' border = '0'></img></a></td>");
	}
	else{
		echo("<tr><td align = 'center' width = '1'><a href = 'read_mail_s.php?key=".$ctrl."'><img src = 'images/opened.jpg' border = '0'></img></a></td>");
	}
	echo("<td align = 'center'><b>$b</b></td>");
	if($c == ""){
		echo("<td align = 'center' width = '150'>no subject</td>");
	}
	else{
		echo("<td align = 'center' width = '150'>$c</td>");
	}
	echo("<td align = 'center'>$d</td>");
	echo("<td align = 'center' width ='60'>");
	echo("<a href = 'delete_mail_s.php?key=".$ctrl."'><img src = 'images/deletemail.jpg' border = '0'></img></a></td>");
	echo("</tr>");
}
?>


</table>
</div>

</body>
</html>