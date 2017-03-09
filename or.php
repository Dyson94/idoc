<?php
include 'conne.php';

$SQL = "SELECT * FROM order";
$result = mysql_query($SQL);
while ($db_field = mysql_fetch_assoc($result)) {
	$a = $db_field['st'];
	
	if($a == 0){
		
	}
	else{
		echo("<tr><td align = 'center' width = '1'><a href = 'read_mail.php?key=".$ctrl."'><img src = 'images/opened.jpg' border = '0'></img></a></td>");
	}
?>