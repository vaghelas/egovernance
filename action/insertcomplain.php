<?php
session_start();
include("../connection/conn.php");
if(isset($_POST['submit']))
{
$rid=$_SESSION['regid1'];
$deptid=$_POST['did'];
$ttl=$_POST['title'];
$dscrptn=$_POST['description'];
$ara=$_POST['aid'];

mysql_query("insert into complain(regid,did,title,description,area,status)
values('$rid','$deptid','$ttl','$dscrptn','$ara','pending')");

header('location:../complain.php?msg=success');
}
?>
