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
						<a class="btn btn-info" href="viewtender.php">Back
                        <i class="icon-edit icon-white"></i></a> 
					</li>
					
						
				</ul>
			</div>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i>Bid</h2>
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
								  <th>Regid</th>
								  
								  <th>Tender id</th>
                                  <th>Bidamount</th>
                                  <th>Document1</th>
                                   <th>Document2</th>
                                  
                                  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                          <?php
						  
						  include("../connection/conn.php");
						  $sql=mysql_query("select * from bid");
						  while($row=mysql_fetch_array($sql))
						  {
						  $id=$row[0];
						  ?>
							<tr>
								<td><?php $regid=$row[1];
								 $sql1=mysql_query("select * from register where regid=$regid");
						  while($row1=mysql_fetch_array($sql1))
						  {
						  echo $row1[4];
						  }
						   ?></td>
								<td><?php echo $row[2]; ?></td>
                                <td><?php echo $row[3]; ?></td>
                                <td><a href="../download.php?filename=<?php echo $row[4];?>">Download</a></td>
                                <td><a href="../download1.php?filename=<?php echo $row[5];?>">Download</a></td>
                                
								<td class="center">
									
									
									<a class="btn btn-danger" href="action/deletebidamount.php?id=<?php echo $id; ?>">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
                                    <a class="btn btn-success" href="allocatetender.php?id=<?php echo $id; ?>">
										<i class="icon-edit icon-white"></i>  
										Allocate                                            
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