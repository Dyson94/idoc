<?php
session_start();
$user = $_SESSION['user_email'];
if (!$user)
{
	header ("Location: index.php");
}
include 'design.php';

$ctrl = $_REQUEST['key'];
include 'sql.php';

$SQL = "DELETE FROM messaging WHERE ctrl_no = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

echo "<script>location.href = 'inbox.php'</script>";
?>