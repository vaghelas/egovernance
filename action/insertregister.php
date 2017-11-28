<?php
include("../connection/conn.php");

if(isset($_POST['submit']))
{



$areaid=$_POST['aid'];
$name=$_POST['name'];
$img=$_FILES['file']['name'];
$tmpfile=$_FILES['file']['tmp_name'];
move_uploaded_file($tmpfile,"../profilepic/".$img);
$contact=$_POST['contactno'];
$gndr=$_POST['optionsRadios1'];
$add=$_POST['address'];
$emaill=$_POST['email'];
$usrnam=$_POST['username'];
$pwd=$_POST['password'];

mysql_query("insert into register(rid,aid,name,image,contactno,gender,address,email,username,password)values('4','$areaid','$name','$img','$contact','$gndr','$add','$emaill','$usrnam','$pwd')");
echo "Record Insert";
}
header('location:userlogin.php');
?>