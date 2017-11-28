<?php
include("../../connection/conn.php");
if(isset($_POST['submit']))
{

$cstid=$_POST['regid'];
$rsd = $_POST['resolvedate'];

$rst=$_POST['resolvestarttime'];
$ret=$_POST['resolveendtime'];
$cmnt=$_POST['comment'];

mysql_query("insert into schedule(regid,resolvedate,resolvestarttime,resolveendtime,comment)values('$cstid','$rsd','$rst','$ret','$cmnt')");
echo "Record Insert";
}
?>
