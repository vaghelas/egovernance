
<?php
include "../connection/conn.php";

$email=$_POST['textemail'];


if(isset($_POST["submit"]))
{
$sql=mysql_query("select * from subscribe where email='$email'");
if(mysql_num_rows($sql)==1)
{
mysql_query("update subscribe set status='0' where email='$email'");
 $from = "abc@gmail.com"; // sender
    $subject = "Subscribe Email";
    $message = "Your Email is subscribe.Thank You For subscription with us";
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail($email,$subject,$message,"From: $from\n");
}
else
{
mysql_query("insert into subscribe(email)values('$email')");
}
header('location:../index1.php?msg=success');
}
if(isset($_POST["submit1"]))
{
$sql=mysql_query("select * from subscribe where email='$email'");
if(mysql_num_rows($sql)==1)
{
mysql_query("update subscribe set status='1' where email='$email'");
 $from = "abc@gmail.com"; // sender
    $subject = "Unscribe Email";
    $message = "Your Email is unsubscribe for subscribe enter email and click on subscribe button";
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail($email,$subject,$message,"From: $from\n");
header('location:../index1.php?msg=success');
}
}
?>

