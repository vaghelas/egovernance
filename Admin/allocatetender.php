<?php
include("../connection/conn.php");

$id=$_REQUEST['id'];




mysql_query("update bid set status='1' where bid='$id'");

header('location:viewbidamount.php');

?>        