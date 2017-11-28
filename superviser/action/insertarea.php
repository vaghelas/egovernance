<?php
include("../../connection/conn.php");
if(isset($_POST['submit']))
{

$zoneid=$_POST['zoneid'];
$areanam=$_POST['areaname'];

mysql_query("insert into area(zid,areaname)values('$zoneid','$areanam')");
echo "Record Insert";
}
?>