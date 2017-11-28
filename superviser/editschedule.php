<?php
include '../connection/conn.php';
?>

<?php
include 'topmenu.php';
?>
		<div class="container-fluid">
		<div class="row-fluid">
				
<?php
include 'leftmenu.php';
?>
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a class="btn btn-info" href="viewschedule.php">Back
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
include '../connection/conn.php';
$id=$_REQUEST['sdlid'];
$sql=mysql_query("select * from schedule where sdlid='$id'");
while($row=mysql_fetch_array($sql))
{
$cid=$row[1];
$rd=$row[2];
$srt=$row[3];
$ert=$row[4];
$cmt=$row[5];

}
if(isset($_POST['submit']))
{
$cstid=$_POST['regid'];
$rsd = $_POST['resolvedate'];

$rst=$_POST['resolvestarttime'];
$ret=$_POST['resolveendtime'];
$cmnt=$_POST['comment'];



mysql_query("update schedule set regid='$cstid',resolvedate='$rsd',resolvestarttime='$rst',resolveendtime='$ret',comment='$cmnt' where sdlid='$id'");

header('location:viewschedule.php?msg1=edt');
}
?>
                    

                    
					<div class="box-content">
						<form class="form-horizontal" method="post" action="">
						  <fieldset>
                          
                           <div class="control-group">
								<label class="control-label" for="selectError3">superviser </label>
								<div class="controls">
								  <select id="selectError3" name="regid">
									<option value="">--Select customerid--</option>
                                  <?php
								  $sql=mysql_query("select * from register");
								  while($row=mysql_fetch_array($sql))
								  {
									?>
                                    <option value="<?php echo $row[0]; ?>"><?php echo $row[4]; ?></option>								  
								
								 
								  <?php } ?>
								  </select>
								</div>
							  </div>
 
                          
                          <div class="control-group">
							  <label class="control-label" for="date01">Resolve Date</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01"  name="resolvedate" value="02/16/12">
							  </div>
							</div>
                          
                          <div class="control-group">
								<label class="control-label" for="selectError3">Resolve Start Time </label>
								<div class="controls">
								  <select id="selectError3" name="resolvestarttime">
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
							  <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


			
					
		<?php
	include 'footer.php';
	?>