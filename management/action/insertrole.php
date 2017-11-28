<?php
include("../../connection/conn.php");
if(isset($_POST['submit']))
{

$rolenam=$_POST['rolename'];
mysql_query("insert into role(rolename)values('$rolenam')");
echo "Record Insert";
}
?>