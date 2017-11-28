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
						<h2><i class="icon-edit"></i>View Schedule </h2>						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                            
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">

						  <thead>
							  <tr> 
								 
                                  <th>complain</th>
								  
								  <th>resolvedate</th>
                                  <th>resolvestarttime</th>

									<th>resolveendtime</th>

                                   

							  </tr>
						  </thead>   
						  <tbody>
                          <?php
						  
						  include("../connection/conn.php");
						 $redid=$_SESSION['regid1'];
						 $sql=mysql_query("select * from schedule where regid='$redid'");
						  while($row=mysql_fetch_array($sql))
						  {
						  $id=$row[0];
						  ?>
							<tr>
								
								<td><?php $comp=$row[2]; 
								$sql1=mysql_query("select * from complain where cid='$comp'");
						  while($row1=mysql_fetch_array($sql1))
						  {
						  echo $row1[3];
						  }
								?></td>
                                <td><?php echo $row[3]; ?></td>
                                <td><?php echo $row[4]; ?></td>
                                <td><?php echo $row[5]; ?></td>
                               
                                
								
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