<?php
session_start();
include("../connection/conn.php");

 
if(isset($_POST['submit']))
{

$rid=$_SESSION['regid1'];

$aid=$_REQUEST['aid'];
$cid=$_REQUEST['cid'];
$deptid=$_REQUEST['deptid'];

$rw=$_POST['review'];

mysql_query("insert into review(regid,aid,did,cid,review)values('$rid','$aid','$deptid','$cid','$rw')");
echo "Record Insert";
}

header('location:../viewcomplain.php');
?>
