<?php
include("../../connection/conn.php");
$id=$_REQUEST['id'];
mysql_query("delete from tender where tid='$id'");
header('location:../viewtender.php?msg=delet');
?>
