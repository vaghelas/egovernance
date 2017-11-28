<?php
include "header.php";
?>

<div id="container">
  <div class="wrapper">
    <div id="content">
   			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Profile</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                            
                             <?php
						  include("connection/conn.php");
						  
						  $regid=$_SESSION['regid1'];
						  ?>
                          <table>
                              <tr>
								<td class="center">
									
									<a class="btn btn-info" href="editregister.php?regid=<?php echo $regid; ?>">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									
								</td>
							</tr>
                           
                           </table>
						</div>
					</div>
                     
                   <div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						 
							
                          <?php
						  $sql=mysql_query("select * from register where regid='$regid'");
						  while($row=mysql_fetch_array($sql))
						  {
						  $id=$row[0];
						  ?>
							<tr>
                            
                              <th>area</th>
                              
                              
                            <td><?php $aid=$row[3];
							$sql1=mysql_query("select * from area where aid='$aid'");
						  while($row1=mysql_fetch_array($sql1))
						  {
						  echo $row1[2];
						  }
							 ?></td></tr>
                             <tr>
                             <td>Name</td>
                            <td><?php echo $row[4]; ?></td></tr>
                            <tr>
                             <td>image</td>
                            <td> <img src="profilepic/<?php echo $row[5]; ?>" height="100" width="100"/></td></tr>
                           <tr> 
                           <td>contactno</td>
                           <td><?php echo $row[6]; ?></td></tr>
                            <tr>
                             <td>Gender</td>
                            <td><?php echo $row[7]; ?></td></tr>
								<tr>
                                <td>Address</td>
                                <td><?php echo $row[8]; ?></td></tr>
								<tr>
                                 <td>Email</td>
                                <td><?php echo $row[9]; ?></td></tr>
                                <tr>
                                <td>username</td>
                                <td><?php echo $row[10]; ?></td></tr>
                                <tr>
                                 <td>password</td>
                                <td><?php echo $row[11]; ?></td></tr>
                               
                            <?php
							}
							?>
													  
					  </table>            
					</div>
                    </div>
				</div><!--/span-->
			
			</div><!--/row-->
    
    
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