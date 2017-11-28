<?php
include("../../connection/conn.php");
if(isset($_POST['submit']))
{
$enam=$_POST['event'];

mysql_query("insert into event(ename)values('$enam')");


header('location:../event.php');
}
?>