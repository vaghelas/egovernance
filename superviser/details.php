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
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">

						  <thead>
							  <tr>
								  
                                  <th>Complain Title</th>
                                  <th>Complain Description</th>
                                  <th>Name</th>
                                  <th>Contact no</th>
                                  <th>Address</th>
                                  <th>Area</th>
                                  <th>Email</th>
                                  <th>Status</th>
                                  <th>Edit</th>
								 

									

							  </tr>
						  </thead>   
						  <tbody>
                          <?php
						  
						  include("../connection/conn.php");
						  ?>
						 <tr>
                         <?php  $cid=$_REQUEST['id'];
					
					$sql=mysql_query("select * from complain where cid='$cid'");
						  while($row=mysql_fetch_array($sql))
						  {
						  $regid=$row[1];
						 $sql1=mysql_query("select * from register where regid='$regid'");
								while($row1=mysql_fetch_array($sql1))
						  {
						  
					
							 ?>
							<td><?php echo  $row[3]; ?> </td>
							<td> <?php echo $row[4]; ?> </td>
                            <td> <?php echo $row1[4]; ?> </td>
                            <td> <?php echo $row1[6]; ?> </td>
                            <td> <?php echo $row1[8]; ?> </td>
							
                            <td> <?php $aid=$row1[3];
							$sql2=mysql_query("select * from area where aid='$aid'");
								while($row2=mysql_fetch_array($sql2))
						  {
						  echo $row2[2];
						  }
                          ?> </td>
                        
                            <td> <?php echo $row1[9]; ?> </td>
                              <td> <?php echo $row[6]; ?> </td>
								<td>
                                <a href="editcomplainstatus.php?id=<?php echo $cid; ?>">Edit</a>
                                </td>

                            									</tr>
                            <?php
							}
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
		