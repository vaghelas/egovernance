<?php
include("../../connection/conn.php");
$id=$_REQUEST['id'];
mysql_query("delete from register where regid='$id'");

header('location:../viewregister.php?msg=delet');
?>
