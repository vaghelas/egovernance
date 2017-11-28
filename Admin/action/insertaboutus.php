<?php
include("../../connection/conn.php");
if(isset($_POST['submit']))
{

$ab=$_POST['text1'];
$abt=$_POST['text2'];

mysql_query("insert into aboutus(text1,text2)values('$ab','$abt')");
echo "Record Insert";
header('location:../aboutus.php');
}
else
{
echo "Record Not Inserted";
}
?>