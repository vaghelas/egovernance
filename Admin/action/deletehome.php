<?php
include("../../connection/conn.php");
$id=$_REQUEST['id'];
mysql_query("delete from home where hid='$id'");
header('location:../viewhome.php?msg=delet');
?>
