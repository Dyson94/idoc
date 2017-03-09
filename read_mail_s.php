<?php
session_start();
$user = $_SESSION['user_email'];
if (!$user)
{
	header ("Location: index.php");
}
include 'design.php';

$ctrl = $_REQUEST['key'];
include 'connect.php';

$SQL = "UPDATE sent_items SET opened = 1 WHERE ctrl_no = '$ctrl'";
mysql_query($SQL);


$SQL = "SELECT * FROM sent_items WHERE ctrl_no = '$ctrl'";
$result = mysql_query($SQL);
while ($db_field = mysql_fetch_assoc($result)) {
	$to = $db_field['to_receiver'];
	$date = $db_field['date_send'];
	$sub = $db_field['mail_subject'];
	$mess = $db_field['message'];
}

?>
<div style="top:180; left:290; position:absolute; z-index:1;">
<b><font face="Arial" size = "3">To:</font></b>
</div>

<div style="top:180; left:400; position:absolute; z-index:1;">
<b><font face="Arial" size = "3"><?php echo $to; ?></font></b>
</div>

<div style="top:210; left:290; position:absolute; z-index:1;">
<b><font face="Arial" size = "3">Date:</font></b>
</div>

<div style="top:210; left:400; position:absolute; z-index:1;">
<b><font face="Arial" size = "3"><?php echo $date; ?></font></b>
</div>

<div style="top:240; left:290; position:absolute; z-index:1;">
<b><font face="Arial" size = "3">Subject:</font></b>
</div>

<div style="top:240; left:400; position:absolute; z-index:1;">
<b><font face="Arial" size = "3"><?php echo $sub; ?></font></b>
</div>

<div style="top:280; left:290; position:absolute; z-index:1;">
<table border = "0" width = "500" bgcolor = "white">
<tr><td><?php echo $mess; ?></td></tr>
</table>
</div>

