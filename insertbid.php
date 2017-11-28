<?php
include "header.php";
?>


<div id="container">
  <div class="wrapper">
    <div id="content">
   			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Confirm amount</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
<?php
include("connection/conn.php");

if(isset($_POST['submit']))
{

$regid=$_SESSION['regid1'];
$tid=$_REQUEST['id'];

$ba=$_POST['bamount'];
$d1=$_FILES['file']['name'];
$d2=$_FILES['file1']['name'];
$tmpfile=$_FILES['file']['tmp_name'];
$tmpfile1=$_FILES['file1']['tmp_name'];
move_uploaded_file($tmpfile,"document1/".$d1);
move_uploaded_file($tmpfile1,"document2/".$d2);

mysql_query("insert into bid(regid,tid,bamount,document1,document2,status)values('$regid','$tid','$ba','$d1','$d2','0')");

}
$sql=mysql_query("select * from register where regid='$regid'");
while($row=mysql_fetch_array($sql))
{
$name=$row[4];
$lname=$row[10];
$email=$row[9];
}
echo "You bid with amount ". $ba . " Please confirm for payment for bid";
?>
<div class="box-content">
<form action="payments.php" method="post">
  <input type="hidden" name="cmd" value="_xclick" /> 
    <input type="hidden" name="no_note" value="1" />
    <input type="hidden" name="lc" value="UK" />
    <input type="hidden" name="currency_code" value="GBP" />
    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
    <input type="hidden" name="first_name" value="<?php echo $name; ?>"  />
    <input type="hidden" name="last_name" value="<?php echo $lname; ?>"  />
    <input type="hidden" name="payer_email" value="<?php echo $email; ?>"  />
    <input type="hidden" name="item_number" value="<?php echo $tid; ?>" / >
    <input type="submit" name="submit" value="Confirm Order" class="btn" style="margin:10px 20px 0 270px; height:32px;"/>
</form>
</div>
				</div><!--/span-->

			</div><!--/row-->  
    
  </div>
    
    <?php
	include 'side.php';
	?>
       <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<?php
include 'footer.php';

?>