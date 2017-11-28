<?php
include "connection/conn.php";
?>


<?php
include "header.php";
?>


<div id="container">
  <div class="wrapper">
    <div id="content">
   			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>complain </h2>						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                            
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">

						  <thead>
							  <tr>
								  
								  
								  <th>Did</th>
                                  <th>Title</th>
                                  <th>Description</th>
                                  <th>Area</th>
                                  <th>Status</th>
                                    <th>Action</th>
                                  
							  </tr>
						  </thead>   
						  <tbody>
                          <?php
						  
						  
						  
						  $regid=$_SESSION['regid1'];
						  
						  $sql=mysql_query("select * from complain where regid='$regid'");
						  
						  
						  while($row=mysql_fetch_array($sql))
						  {
						  $id=$row[0];
						  
						  ?>
							<tr>
								
								<td><?php $diid=$row[2];
								$sql2=mysql_query("select * from department where did='$diid'");
								while($row2=mysql_fetch_array($sql2))
						  {
						  echo $row2[2];
						  }
						  
						   ?></td>
                                <td><?php echo $row[3]; ?></td>
                                <td><?php echo $row[4]; ?></td>
                                
                                
                                <td><?php $aidd=$row[5];
								$sql3=mysql_query("select * from area where aid='$aidd'");
								while($row3=mysql_fetch_array($sql3))
						  {
						  echo $row3[2];
						  } 
						  
						   ?></td>
                                
                                <td><?php echo $row[6]; ?></td>
                                <td>
								                <a class="btn btn-danger" href="review.php?id=<?php echo $row[0]; ?>">
										  
										Review
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
			
			

			
			
    
					<!-- content ends -->
				

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