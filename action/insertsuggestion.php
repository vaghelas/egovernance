<?php
include("../connection/conn.php");
session_start();
if(isset($_POST['submit']))
{
$regid=$_SESSION['regid'];
$did=$_POST['did'];
$aid=$_POST['aid'];
$ttl=$_POST['title'];
$dscptn=$_POST['description'];


mysql_query("insert into suggetion(regid,did,aid,title,description)values('$regid','$did','$aid','$ttl','$dscptn')");
echo "Record Insert";
}
header('location:../suggestion.php');
?>
