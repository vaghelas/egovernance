<?php
include("../../connection/conn.php");
if(isset($_POST['submit']))
{
$tno=$_POST['tno'];
$dcmnt=$_FILES['file']['name'];
$tmpfile=$_FILES['file']['tmp_name'];
move_uploaded_file($tmpfile,"../document/".$dcmnt);

$cd=$_POST['cdate'];
$ud=$_POST['udate'];

mysql_query("insert into tdocument(tno,document,cdate,udate)values('$tno','$dcmnt','$cd','$ud')");
echo "Record Insert";
}
?>