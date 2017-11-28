<?php
include("../../connection/conn.php");
$id=$_REQUEST['id'];
mysql_query("delete from complain where cid='$id'");
mysql_query("delete from schedule where cid='$id'");
header('location:../viewcomplain.php?msg=delet');
?>
