<?php
include("../../connection/conn.php");
if(isset($_POST['submit']))
{

$depid=$_POST['did'];
$roleid=$_POST['rid'];
$areaid=$_POST['aid'];
$name=$_POST['name'];
$contact=$_POST['contactno'];
$add=$_POST['address'];
$emaill=$_POST['email'];
$usrnam=$_POST['username'];
$pwd=$_POST['password'];
$stts=$_POST['optionsRadios'];
mysql_query("insert into register(did,rid,aid,name,contactno,address,email,username,password,status)values('$depid','$roleid','$areaid','$name','$contact','$add','$emaill','$usrnam','$pwd','$stts')");
echo "Record Insert";
}
?>