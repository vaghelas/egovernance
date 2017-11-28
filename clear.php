 <?php
include 'connection/conn.php';
$id=$_REQUEST['id'];
mysql_query("update bid set status='3' where regid='$id'");


header('location:viewmessage.php');

?>
