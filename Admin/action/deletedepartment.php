<?php
include("../../connection/conn.php");
$id=$_REQUEST['id'];
mysql_query("delete from department where did='$id'");
header('location:../viewdepartment.php?msg=delet');
?>
