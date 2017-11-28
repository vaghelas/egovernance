<?php
include("../../connection/conn.php");
session_start();



if(isset($_POST['submit']))
{


$cstid=$_POST['regid'];
echo $id=$_SESSION['cid1'];



$rsd = $_POST['resolvedate'];

$rst=$_POST['resolvestarttime'];
$ret=$_POST['resolveendtime'];
$cmnt=$_POST['comment'];

mysql_query("insert into schedule(regid,cid,resolvedate,resolvestarttime,resolveendtime,comment)values('$cstid','$id','$rsd','$rst','$ret','$cmnt')");
echo "Record Insert";

}
?>
