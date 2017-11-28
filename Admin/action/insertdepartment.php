<?php
include("../../connection/conn.php");
if(isset($_POST['submit']))
{
$zone=$_POST['zone'];
$dept=$_POST['deptname'];
mysql_query("insert into department(zid,departmentname)values('$zone','$dept')");
echo "Record Insert";
}
header('location:../department.php');
?>