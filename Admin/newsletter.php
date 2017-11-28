<?php
include("../connection/conn.php");
include 'library.php'; // include the library file
include "classes/class.phpmailer.php"; // include the class name
$eid=$_REQUEST['eid'];
$sql1=mysql_query("select * from event where eid='$eid'");
	while($row1=mysql_fetch_array($sql1))
	{
	$event=$row1[1];
	}
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com"; //Hostname of the mail server
$mail->Port = 465; //Port of the SMTP like to be 25, 80, 465 or 587
$mail->SMTPAuth = true; //Whether to use SMTP authentication
$mail->IsHTML(true);
$mail->Username = "miramodi93@gmail.com"; //Username for SMTP authentication any valid email created in your domain
$mail->Password = "miramiramira";
$mail->AddReplyTo("miramodi93@gmail.com", "Reply name"); //reply-to address
$mail->SetFrom("miramodi93@gmail.com", "By Krinall"); //From address of the mail
// put your while loop here like below,
$mail->Subject = "News Letter"; //Subject od your mail
$sql=mysql_query("select * from subscribe where status='1'");
while($row=mysql_fetch_array($sql))
{
$recipients = array(
   $row[1] => 'nasir'
);

foreach($recipients as $email => $name){
	// it will display the emails of all users in their Mailbox 'To' area. Simple multiple mail.
	$mail->AddAddress($email, $name); //To address who will receive this email
	
	$mail->MsgHTML("<b>$event<br/><br/></b>"); //Put your body of the message you can place html code here
	
	$send = $mail->Send(); //Send the mails
	// if you want to does not show other users email addresses like newsletter, daily, weekly, subscription emails means use the below line to clear previous email address
	$mail->ClearAddresses();
}
}
	if($send){
		echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
		header('location:viewevents.php?msg2=sucess');
	}
	else{
		echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
	}
	
?>
