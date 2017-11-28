

<?php
include 'topmenu.php';
?>

		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
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
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Tables</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i>Details</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
                     <?php
					include("../connection/conn.php");
					$id=$_REQUEST['id'];
					$sql=mysql_query("select * from complain where cid='$id'");
					if($row=mysql_fetch_array($sql))
					{
					$status=$row[6];
					}
					if(isset($_POST['submit']))
					{
					$sts=$_POST['status'];
					mysql_query("update complain set status='$sts' where cid='$id'");
					}
					?>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="">
						  <fieldset>	
                      
                            
							<div class="control-group">
							  <label class="control-label" for="typeahead">Status</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  name="status" data-provide="typeahead" data-items="4" value="<?php echo $status; ?>">
								
							  </div>
                              
							</div>
                            
                           
							
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			
			
    
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
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
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>
<?php
include 'footer.php';
?>
		