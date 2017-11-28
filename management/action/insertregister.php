<?php
include("../../connection/conn.php");
if(isset($_POST['submit']))
{
session_start();
$did=$_SESSION['did'];
 $_SESSION['rid'];
 $aid=$_SESSION['arid'];
$name=$_POST['name'];
$img=$_FILES['file']['name'];
$tmpfile=$_FILES['file']['tmp_name'];
move_uploaded_file($tmpfile,"../upload/".$img);
$contact=$_POST['contactno'];
$gndr=$_POST['optionsRadios1'];
$add=$_POST['address'];
$emaill=$_POST['email'];
$usrnam=$_POST['username'];
$pwd=$_POST['password'];
$stts=$_POST['optionsRadios'];
mysql_query("insert into register(did,rid,aid,name,image,contactno,gender,address,email,username,password,status)values('$did','5','$aid','$name','$img','$contact','$gndr','$add','$emaill','$usrnam','$pwd','$stts')");
echo "Record Insert";
}
?>