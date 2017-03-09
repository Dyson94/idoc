 <?php
$conn=mysql_connect("localhost","root","");
if($conn)
{
  mysql_select_db("anandu",$conn);
}
else
{
   echo("Error in connection");
}
?>

