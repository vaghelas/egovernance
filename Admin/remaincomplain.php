<?php
include '../connection/conn.php';
?>
<?php
include 'topmenu.php';
?>
<?php
$id=$_REQUEST['id'];

?>
<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">

						  <thead>
							  <tr>
								  <th>Regid</th>
								  
								  <th>Did</th>
                                  <th>Title</th>
                                  <th>Description</th>
                                  <th>Area</th>
                                  <th>Status</th>
                                    
                                  
							  </tr>
						  </thead>   
						  <tbody>
                          <?php
						  
						  
						  
						  $diid=$_SESSION['did2'];
						  
						  $sql=mysql_query("select * from complain where cid='$id'");
						  while($row=mysql_fetch_array($sql))
						  {
						  $id=$row[0];
						  ?>
							<tr>
								<td><?php $regid=$row[1];
								$sql1=mysql_query("select * from register where regid='$regid'");
								while($row1=mysql_fetch_array($sql1))
						  {
						  echo $row1[4];
						  }
						  
								 ?></td>
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
                           <td>
                           <?php
						   echo $row[6];
						   ?>
                           </td>
                                
                   </tr>
                    <?php
							}
							?>
													  </tbody>
					  </table>            
					</div>
				</div><!--/

<?php
mysql_query("update complain set viewstatus='1' where cid='$id'");



?>
