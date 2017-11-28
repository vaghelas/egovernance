<?php
include("../../connection/conn.php");
$id=$_REQUEST['id'];
mysql_query("delete from schedule where sdlid='$id'");
header('location:../viewschedule.php?msg=delet');
?>
