<?php
include("../../connection/conn.php");
$id=$_REQUEST['id'];
mysql_query("delete from area where aid='$id'");
header('location:../viewarea.php?msg=delet');
?>
