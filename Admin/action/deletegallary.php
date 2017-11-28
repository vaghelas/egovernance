<?php
include("../../connection/conn.php");
$id=$_REQUEST['id'];
mysql_query("delete from gallary where gid='$id'");

header('location:../viewgallary.php?msg=delet');
?>