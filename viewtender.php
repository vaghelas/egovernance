<?php
include "header.php";
   if(!isset($_SESSION['username']))
{
header('location:userlogin.php');
}
?>


<div id="container">
  <div class="wrapper">
    <div id="content">
   			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>Bid Amount</h2>
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
								  <th>Tender No</th>
								  
								  <th>Teder Description</th>
                                  <th>start Date</th>
                                  <th>End date</th>
                                  <th>Status</th>
                                  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                          <?php
						  include("connection/conn.php");
						  $regid=$_SESSION['regid1'];
						  $sql=mysql_query("select * from tender where status='Nonallocate'");
						  while($row=mysql_fetch_array($sql))
						  {
						  $id=$row[0];
						  ?>
						<tr>
								<td><?php echo $row[1]; ?></td>
								<td><?php echo $tid=$row[2]; ?></td>
                                <td><?php echo $row[3]; ?></td>
                                <td><?php echo $row[4]; ?></td>
                                <td><?php echo $row[5]; ?></td>
								<td class="center">
                       <?php
                       $sql1=mysql_query("select * from bid where regid='$regid' and tid='$id'");
if(mysql_num_rows($sql1)==1)
{
echo "Already Bid";			
}
else
{		   
					   ?>
                   <a class="btn btn-danger" href="bidamount.php?id=<?php echo $id; ?>">
										<i class="icon-trash icon-white"></i> 
										Bid
								</a>
                               <?php
                                }
								?>
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