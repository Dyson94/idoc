<?php
session_start();
$user = $_SESSION['user_email'];
if (!$user)
{
	header ("Location: index.php");
}
include 'design.php';

$msg = "";
include 'connect.php';

if (isset($_POST['cancel'])) {
	echo "<script>location.href = 'inbox.php'</script>";
}
else if (isset($_POST['send'])) {
	$user = $_SESSION['user_email'];
	$nem = $_POST['hid_nem'];
	$sub = $_POST['sub'];
	$mes = $_POST['mes'];
	
	$SQL = "INSERT INTO sent_items (`to_receiver`, `from_sender`, `mail_subject`, `message`) VALUES ('$nem', '$user', '$sub', '$mes')";
	mysql_query($SQL);
	
	$SQL = "INSERT INTO messaging (`to_receiver`, `from_sender`, `mail_subject`, `message`) VALUES ('$nem', '$user', '$sub', '$mes')";
	$result = mysql_query($SQL);
	if(!$result ){
		echo("<SCRIPT LANGUAGE='JavaScript'>alert('Unknown Error Occured!')</script><script>location.href = 'messages.php'</script>");
	}
	$msg = "Message Sent.";
	echo("<div style='top:260; left:550; position:absolute; z-index:1;'>");
	echo("<form name='ok_form' method='post' action='messages.php'>");
	echo("<input name = 'ok' type = 'submit' value = 'OK'>");
	echo("</div>");
}
else{
	$name = $_REQUEST['key'];
	echo("<div style='top:180; left:270; position:absolute; z-index:1;'>");
	echo("<b><font face='Arial' size = '3'>To:</font></b>");
	echo("</div>");
	
	echo("<div style='top:180; left:350; position:absolute; z-index:1;'>");
	echo("<b><font face='Arial' size = '3'>$name</font></b>");
	echo("</div>");
	
	echo("<div style='top:210; left:270; position:absolute; z-index:1;'>");
	echo("<b><font face='Arial' size = '3'>Subject:</font></b>");
	echo("</div>");
	
	echo("<div style='top:210; left:350; position:absolute; z-index:1;'>");
	echo("<form name = 'reply_form' method = 'post' action = 'reply_mail.php'>");
	echo("<input name = 'hid_nem' type = 'hidden' value = $name>");
	echo("<input name = 'sub' type = 'text' value = '' size = '69'>");
	echo("</div>");
	
	echo("<div style='top:240; left:300; position:absolute; z-index:1;'>");
	echo("<table border = '0 width = '500' bgcolor = 'white'>");
	echo("<tr><td>");
	echo("<textarea name = 'mes' rows = '13' cols = '59'>");
	echo("</textarea>");
	echo("</td></tr>");
	echo("</table>");
	echo("</div>");
	
	echo("<div style='top:525; left:610; position:absolute; z-index:1;'>");
	echo("<input name = 'cancel' type = 'submit' value = 'CANCEL'>");
	echo("</div>");
	
	echo("<div style='top:525; left:690; position:absolute; z-index:1;'>");
	echo("<input name = 'send' type = 'submit' value = 'SEND'>");
	echo("</div>");
	echo("</form>");
}	
?>


<div style="top:200; left:300; position:absolute; z-index:1;">
<font face="Cooper Black" size = "5" color = "blue"><?php echo $msg; ?></font>
</div>
