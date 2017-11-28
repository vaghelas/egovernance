<?php
include("../../connection/conn.php");
if(isset($_POST['submit']))
{
$tno=$_POST['tno'];
$descptn=$_POST['description'];
$sd=$_POST['startdate'];
$ed=$_POST['enddate'];
$stts=$_POST['optionsRadios'];
mysql_query("insert into tender(tno,tdescription,tstartdate,tenddate,status)values('$tno','$descptn','$sd','$ed','$stts')");
echo "Record Insert";
}
header('location:../viewtender.php');
?>