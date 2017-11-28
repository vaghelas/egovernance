<?php
	include 'topmenu.php';
	?>

	<!-- topbar ends -->
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
						<a class="btn btn-info" href="viewrole.php">Back
                        <i class="icon-edit icon-white"></i></a> 
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>Edit Role</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
                    <?php
include '../connection/conn.php';
$id=$_REQUEST['rid'];
$sql=mysql_query("select * from role where rid='$id'");
while($row=mysql_fetch_array($sql))
{
 
$rname=$row[1];

}
if(isset($_POST['submit']))
{

$rn=$_POST['rolename'];

mysql_query("update role set rolename='$rn' where rid='$id'");

header('location:viewrole.php?msg1=edt');
}
?>

                    
					<div class="box-content">
						<form class="form-horizontal" method="post" action="">
						  <fieldset>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Role Name</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="rolename" id="typeahead"  data-provide="typeahead" data-items="4" >
								
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


				
		<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary" >Save changes</a>
			</div>
		</div>

		
<?php
include 'footer.php';
?>