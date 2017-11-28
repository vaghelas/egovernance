<?php
include("../../connection/conn.php");
$id=$_REQUEST['id'];
mysql_query("delete from bid where bid='$id'");
header('location:../viewbidamount.php?msg=delet');
?>