<?PHP
include "header.php";
?>



<?php
include 'slider2.php';
?>
<?php
include("connection/conn.php");
?>

<div style="width:200px;margin:-240px 154px 0px 0px;width:328px;float:right;border-radius:5px;height:239px;">
        <div style="color:#fff;background:none repeat scroll 0% 0% #3B5998;font-size:25px;border-radius:5px;border-radius:6px 6px 0px 0px;" align="center">
        City Event
        
        </div>
        <div style="color:#fff;background:none repeat scroll 0% 0% rgba(103, 138, 212, 1);height: 211px;
border-radius: 0px 0px 6px 6px;">
<marquee direction="up">
<ul>

<?php

						  $sql2=mysql_query("select * from event");
						  while($row2=mysql_fetch_array($sql2))
						  {
						  ?>
                          <li>
						  <?php
						  echo $row2[1];
						 
						  ?>
        
        </li><br /> <?php                 
		}
		?> 
        
        </ul>       
        </marquee>
        </div>
        </div>



<!-- ####################################################################################################### -->
<div id="container">
  <div class="wrapper">
    <div id="content">
    <br/><br/>
      <h2 align="center" style="background-color:rgba(123, 151, 231, 1);margin:-33px 0px 0px -22px">Ahmedabad Municipal corporation</h2>
<img src="images/map1.png" style="margin:12px 0px 0px -15px;" width="590" height="320" />     
    </div>
    <div id="column">
      <div class="holder">
        <h2 style="margin:-40px 0px 15px -22px;">Contact Form</h2>
        <?php
include 'library.php'; // include the library file
include "classes/class.phpmailer.php"; // include the class name
if(isset($_POST["submit"])){
	$sub = $_POST["subject"];
	$add = $_POST["address"];
	$name = $_POST["name"];
	$email = $_POST["email"];
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
$mail->SetFrom($email);
$mail->Subject = "Subject " .$sub;
$mail->Body = "<b> Address: ".$add." Name: ".$name." </br></br> Email: ".$email."</b>";
$mail->AddAddress("miramodi93@gmail.com");
 if(!$mail->Send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else{
    echo "Message has been sent";
}
}
?>
        <?php /*?><ul id="latestnews">
          <li> <img class="imgl" src="images/demo/100x75.gif" alt="" />
            <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
            <p>Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
          </li>
          <li class="last"> <img class="imgl" src="images/demo/100x75.gif" alt="" />
            <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
            <p>Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
          </li>
        </ul><?php */?>
        <form method="post" action="">
     <div class="control-group">
							  <label class="control-label" for="typeahead"> Subject</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="subject" id="typeahead"  data-provide="typeahead" data-items="4" >
								
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="textarea2">Details</label>
							  <div class="controls">
								<textarea class="cleditor" name="address" id="textarea2" rows="3"></textarea>
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead"> Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="name" id="typeahead"  data-provide="typeahead" data-items="4" >
								
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead"> Email </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="email" id="typeahead"  data-provide="typeahead" data-items="4" >
								
							  </div>
							</div>  
                            
                            <div class="form-actions">
							  <input type="submit" class="btn btn-primary" name="submit" value="send mail"/>
							  <button type="reset" class="btn">Reset</button>
							</div>

</form>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<?php
include 'footer.php';
?>