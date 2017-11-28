<?php
include '../connection/conn.php';
?>
<?php
include 'topmenu.php';
?>	<!-- topbar ends -->
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
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a class="btn btn-info" href="viewtender.php">Back
                        <i class="icon-edit icon-white"></i></a> 
					</li>
					
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>Edit Tender</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
                    
                    <?php
include '../connection/conn.php';
$id=$_REQUEST['tid'];
$sql=mysql_query("select * from tender where tid='$id'");
while($row=mysql_fetch_array($sql))
{
 $tnumb=$row[1];
$tdisc=$row[2];
$tsd=$row[3];
$ted=$row[4];
$st=$row[5];

}
if(isset($_POST['submit']))
{
$tn=$_POST['tno'];
$tdescription=$_POST['description'];
$sdate=$_POST['startdate'];
$edate=$_POST['enddate'];
$statuss=$_POST['optionsRadios'];

mysql_query("update tender set tno='$tn',tdescription='$tdescription',tstartdate='$sdate',tenddate='$edate',status='$statuss' where tid='$id'");

header('location:viewtender.php?msg1=edt');
}
?>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="">
						  <fieldset>
                         
                          
                            
                            	<div class="control-group">
							  <label class="control-label" for="typeahead">Tender no. </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="tno" id="typeahead"   data-provide="typeahead" data-items="4" value="<?php echo $tnumb; ?>" >
								
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="textarea2">description</label>
							  <div class="controls">
								<textarea class="cleditor" name="description" id="textarea2" rows="3" value="<?php echo $tdisc; ?>"></textarea>
							  </div>
							</div>
                            
                            
                            	 
                          <div class="control-group">
							  <label class="control-label" for="date01">Tender Start Date</label>
							  <div class="controls" >
								<input type="text" class="input-xlarge datepicker" id="date01"  name="startdate" value="<?php echo $tsd; ?>">
                             
                             </div>
							</div>


 
                          <div class="control-group">
							  <label class="control-label" for="date01">Tender End Date</label>
							  <div class="controls" >
								<input type="text" class="input-xlarge datepicker" id="date02"  name="enddate" value="<?php echo $ted; ?>" >
                             
                             </div>
							</div>                            
                            <div class="control-group">
								<label class="control-label">Status</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="Allocate" <?php if($st=='Allocate'){?>checked="checked"<?php } ?>>
									Allocate
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="Nonallocate" <?php if($st=='Nonallocate'){?>checked="checked"<?php } ?>>
									Nonallocate
								  </label>
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