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
			if(isset($_REQUEST['msg'])=="delet")
			{
			echo "Record Delete successfully";
			}
			if(isset($_REQUEST['msg1'])=='edt')
{
echo "Record edit";
}

			?>

			<div>
				<ul class="breadcrumb">
					<li>
						<a class="btn btn-info" href="area.php">Back
                        <i class="icon-edit icon-white"></i></a> 
					</li>
					
						
				</ul>
			</div>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i>About Us</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  
                                  <th>text1</th>
								  <th>text2</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                          <?php
						  
						  include("../connection/conn.php");
						  $sql=mysql_query("select * from home");
						  while($row=mysql_fetch_array($sql))
						  {
						  $id=$row[0];
						  ?>
							<tr>
								<td><?php echo $row[1]; ?></td>
								<td><?php echo $row[2]; ?></td>
								<td class="center">
									
									<a class="btn btn-info" href="edithome.php?id=<?php echo $id; ?>">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="action/deletehome.php?id=<?php echo $id; ?>">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
							</tr>
                            <?php
							}
							?>
													  </tbody>
					  </table>            
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