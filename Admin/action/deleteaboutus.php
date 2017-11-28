<?php
include("../../connection/conn.php");
$id=$_REQUEST['id'];
mysql_query("delete from aboutus where abid='$id'");
header('location:../viewaboutus.php?msg=delet');
?>
