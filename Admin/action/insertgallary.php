<?php
include("../../connection/conn.php");
if(isset($_POST['submit']))
{
$name=$_POST['iname'];
$img=$_FILES['file']['name'];
$tmpfile=$_FILES['file']['tmp_name'];
move_uploaded_file($tmpfile,"../upload/".$img);

mysql_query("insert into gallary(iname,image)values('$name','$img')");
echo "Record Insert";
}
header('location:gallary.php');
?>

