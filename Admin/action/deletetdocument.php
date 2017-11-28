<?php
include("../../connection/conn.php");
$id=$_REQUEST['id'];
mysql_query("delete from tdocument where tdid='$id'");
header('location:../viewtdocument.php?msg=delet');
?>
