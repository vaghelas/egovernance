<?php
include 'connection/conn.php';
$id=$_REQUEST['id'];
mysql_query("update bid set status='2' where bid='$id'");
header('location:viewtender.php');
?>					
					
					
					