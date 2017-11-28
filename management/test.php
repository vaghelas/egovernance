<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
session_start();
include("../connection/conn.php");
echo $did=$_SESSION['did'];
echo $_SESSION['rid'];
echo $aid=$_SESSION['arid'];
$sql=mysql_query("select * from register where did='$did' and rid='5' and aid='$aid'");
while($row=mysql_fetch_array($sql))
{
echo $row[4];
}
?>
<body>
</body>
</html>
