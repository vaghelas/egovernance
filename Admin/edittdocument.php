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
						<h2><i class="icon-edit"></i>Tender Document</h2>
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
 $tnumber=$row[1];
$tdoc=$row[2];
$cdt=$row[3];
$udt=$row[4];


}
if(isset($_POST['submit']))
{
$tn=$_POST['tno'];
$doc=$_POST['document'];
$cdate=$_POST['cdate'];
$udate=$_POST['udate'];


mysql_query("update tdocument set tno='$tn',document='$doc',cdate='$cdate',udate='$udate' where tdid='$id'");

header('location:viewtdocument.php?msg1=edt');
}
?>        
					<div class="box-content">
						<form class="form-horizontal" method="post" action="">
						  <fieldset>
                         
                          
                            
                            	<div class="control-group">
							  <label class="control-label" for="typeahead">Tender no. </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="tno" id="typeahead"   data-provide="typeahead" data-items="4" value="<?php echo  $tnumber; ?>" >
								
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="textarea2">Document</label>
							  <div class="controls">
								<textarea class="cleditor" name="document" id="textarea2" rows="3" value="<?php echo $tdoc; ?>"></textarea>
							  </div>
							</div>
                            
                            
                            	 
                          <div class="control-group">
							  <label class="control-label" for="date01">CDate</label>
							  <div class="controls" >
								<input type="text" class="input-xlarge datepicker" id="date01"  name="cdate" value="02/16/12<?php echo $cdt; ?>">
                             
                             </div>
							</div>


 
                          <div class="control-group">
							  <label class="control-label" for="date01"> UDate</label>
							  <div class="controls" >
								<input type="text" class="input-xlarge datepicker" id="date02"  name="udate" value="02/16/12<?php echo $udt; ?>">
                             
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