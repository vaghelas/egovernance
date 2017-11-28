<?php
include '../connection/conn.php';
?>
<?php
include 'topmenu.php';
?>

		<div class="container-fluid">
		<div class="row-fluid">
	<?php include("leftmenu.php");?>			
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
<?php
$_SESSION['cid1']=$_REQUEST['cid'];
?>
<script src="functions.js">
</script>
<script>

$(document).ready(function(){
  $("#date01").click(function(){
    $("p").show();
  });
});
</script>
		

			<div>
				<ul class="breadcrumb">
					<li>
						<a class="btn btn-info" href="viewcomplain.php">Back
                        <i class="icon-edit icon-white"></i></a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Schedule</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
</div>

	 <?php
include 'library.php'; // include the library file
include "classes/class.phpmailer.php"; // include the class name
?>
    				<div class="box-content">
						<form class="form-horizontal" method="post" action="">
						  <fieldset>
                          
                          
                           <div class="control-group">
								<label class="control-label" for="selectError3">Superviser </label>
								<div class="controls">
								  <select id="selectError3" name="regid">
                                  <option value="">--Select superviser--</option>
                                   
									
                                  <?php
								  
								  $did=$_SESSION['did3'];
							  $sql=mysql_query("select * from register where rid='5' and did='$did'");
								  while($row=mysql_fetch_array($sql))
								  {
								  
									?>
                             <option value="<?php echo $row[0]; ?>" 
							 <?php if($_POST['regid']==$row[0]) {echo 'selected'; }?>><?php echo $row[4]; ?></option>		
                            
								  <?php } ?>
								  </select>
                                  </div>
							  </div>
 
                          
                          <div class="control-group">
							  <label class="control-label" for="date01">Resolve Date</label>
							  <div class="controls" >
								<input type="text" class="input-xlarge datepicker" id="date01"  name="resolvedate"   value="<?php if(isset($_POST['resolvedate'])) {
                 echo htmlentities ($_POST['resolvedate']); }?>">
                              <input type="submit" name="showshedule" value="Show Schedule" alt="showshedule"/>
                             </div>
							</div>
                            
                           <?php
							if(isset($_POST['showshedule']))
							{
							$supid=$_POST['regid'];
							$cdate=$_POST['resolvedate'];
							$sql=mysql_query("select * from schedule where regid='$supid' and resolvedate='$cdate'");
                             if(mysql_num_rows($sql)==0)
							 {
							 echo "Time is not allocated on this date.";
							 }
							 else
							 {
							while($row=mysql_fetch_array($sql))
							{
							
							
							?>
                            <table border="1">
                            <tr>
                            <td>
                            Superwiser Name
                            </td>
                            <td>
                            Complain Id
                            </td>
                            <td>
                            Complain Resolve Date
                            </td>
                            <td>
                            Start Time
                            </td>
                            <td>
                            End Time
                            </td>
                            </tr>
                            
                            <tr>
                            <td>
							<?php $regid=$row[1];
							$sql1=mysql_query("select * from register where regid='$regid'");
							while($row1=mysql_fetch_array($sql1))
							{
							echo $row1[4];
							}
							 ?></td>
							<td><?php echo  $row[2]; ?> </td>
							<td> <?php echo $row[3]; ?> </td>
							<td> <?php echo $row[4]; ?> </td>
							<td> <?php echo $row[5]; ?> </td>
                            </tr>
							<?php
                            }
						    }
							}
							?>
                            </table>
                         <div class="control-group">
								<label class="control-label" for="selectError3">Resolve Start Time </label>
								<div class="controls">
								  <select id="selectError3" name="resolvestarttime">
									<option value="">--select start time--</option>
                                    <option value="8:00AM">8:00AM</option>
									<option value="9:00AM">9:00AM</option>
									<option value="10:00AM">10:00AM</option>
									<option value="11:00AM">11:00AM</option>
									<option value="12:00AM">12:00AM</option>
                                    <option value="1:00AM">1:00PM</option>
                                    <option value="2:00AM">2:00PM</option>
                                    <option value="3:00AM">3:00PM</option>
                                    <option value="4:00AM">4:00PM</option>
                                    <option value="5:00AM">5:00PM</option>
                                    <option value="6:00AM">6:00PM</option>
                                    <option value="7:00AM">7:00PM</option>
                                    <option value="8:00AM">8:00PM</option>
							
								  </select>
								</div>
							  </div>
                              
                              <div class="control-group">
								<label class="control-label" for="selectError3">Resolve End Time </label>
								<div class="controls">
								  <select id="selectError3" name="resolveendtime">
									<option value="">--select end time--</option>
                                    <option value="8:00AM">8:00AM</option>
									<option value="9:00AM">9:00AM</option>
									<option value="10:00AM">10:00AM</option>
									<option value="11:00AM">11:00AM</option>
									<option value="12:00AM">12:00AM</option>
                                    <option value="1:00AM">1:00PM</option>
                                    <option value="2:00AM">2:00PM</option>
                                    <option value="3:00AM">3:00PM</option>
                                    <option value="4:00AM">4:00PM</option>
                                    <option value="5:00AM">5:00PM</option>
                                    <option value="6:00AM">6:00PM</option>
                                    <option value="7:00AM">7:00PM</option>
                                    <option value="8:00AM">8:00PM</option>
							</select>
								</div>
							  </div>
							
                            
							 <div class="control-group">
							  <label class="control-label" for="textarea2">Comment</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="comment"></textarea>
							  </div>
							</div>
							
							<div class="form-actions">
							  <input type="submit" class="btn btn-primary" name="save" alt="save" value="save" ondblclick="return validation();">
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
<?php
if(isset($_POST['save']))
{
$cstid=$_POST['regid'];
$id=$_SESSION['cid1'];
$sql2=mysql_query("select * from complain where cid='$id'");
while($row2=mysql_fetch_array($sql2))
{
$rcid=$row2[1];
}
$sql3=mysql_query("select * from register where regid='$rcid'");
while($row3=mysql_fetch_array($sql3))
{
$email=$row3[9];
}

$rsd = $_POST['resolvedate'];

$rst=$_POST['resolvestarttime'];
$ret=$_POST['resolveendtime'];
$cmnt=$_POST['comment'];
$sql=mysql_query("select * from schedule where regid='$cstid' and resolvedate='$rsd' and resolvestarttime='$rst' and resolveendtime='$ret'");
if(mysql_num_rows($sql)==1)
{
echo "time is already allocated";
}
else
{
mysql_query("insert into schedule(regid,cid,resolvedate,resolvestarttime,resolveendtime,comment)values('$cstid','$id','$rsd','$rst','$ret','$cmnt')");
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "miramodi93@gmail.com";
$mail->Password = "miramiramira";
$mail->SetFrom("miramodi93@gmail.com");
$mail->Subject = "Notification regarding schedule";
$mail->Body = "<b> Complainid: ".$id." Resolvestarttime: ".$rst." </br></br> Resolvestarttime: ".$ret." </br></br> Comment: ".$cmnt."</b>";
$mail->AddAddress($email);
 if(!$mail->Send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else{
    echo "Message has been sent";
}
}
}
?>

<?php
include 'footer.php';
?>

			
		