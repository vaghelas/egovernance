<?php
include("../../connection/conn.php");
$id=$_REQUEST['id'];
mysql_query("delete from role where rid='$id'");
header('location:../viewrole.php?msg=delet');
?>