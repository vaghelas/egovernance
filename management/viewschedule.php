<?php
include 'topmenu.php';
?>

		<div class="container-fluid">
		<div class="row-fluid">
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
			<?php
			if(isset($_REQUEST['msg'])=="delet")
			{
			echo "Record Delete successfully";
			}
			if(isset($_REQUEST['msg1'])=='edt')
{
echo "Record edited";
}

			?>

			<div>
				<ul class="breadcrumb">
					<li>
						<a class="btn btn-info" href="viewcomplain.php">Back
                        <i class="icon-edit icon-white"></i></a>					</li>

					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i>Schedule</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
                    		<br />
                            <div class="box-content">

									<form class="form-horizontal" method="post" action="">
						  <fieldset>
                          
                          
                           <div class="control-group">
								<label class="control-label" for="selectError3">Superviser </label>
								<div class="controls">
								  <select id="selectError3" name="regid" onchange="submit();">
                                  <option value="">--Select superviser--</option>
                                   
									
                                  <?php
								  include("../connection/conn.php");
								  $did=$_SESSION['did3'];
							  $sql=mysql_query("select * from register where rid='5' and did='$did'");
								  while($row=mysql_fetch_array($sql))
								  {
								  
									?>
                             <option value="<?php echo $row[0]; ?>" 
							 <?php if($_POST['regid']==$row[0]) {echo 'selected'; }?>><?php echo $row[4]; ?></option>		
                            
								  <?php } ?>
								  </select>
                                  </div>
							  </div>
                               </fieldset>
						
                        </form>   

 
					
                             
							
                            
                           <?php
							if(isset($_POST['regid']))
							{
							$supid=$_POST['regid'];
							
							$sql=mysql_query("select * from schedule where regid='$supid'");
                             if(mysql_num_rows($sql)==0)
							 {
							 echo "There is no schedule.";
							 }
							 else
							 {
							?>
                             <table border="1">
                            <tr>
                            <td>
                            Superwiser Name
                            </td>
                            <td>
                            Complain Id
                            </td>
                            <td>
                            Complain Resolve Date
                            </td>
                            <td>
                            Start Time
                            </td>
                            <td>
                            End Time
                            </td>
                             <td>
                            Action
                            </td>
                            </tr>
                            <?php
							while($row=mysql_fetch_array($sql))
							{
							
							
							?>
                           
                            
                            <tr>
                            <td>
							<?php $regid=$row[1];
							$sql1=mysql_query("select * from register where regid='$regid'");
							while($row1=mysql_fetch_array($sql1))
							{
							echo $row1[4];
							}
							 ?></td>
							<td><?php echo  $row[2]; ?> </td>
							<td> <?php echo $row[3]; ?> </td>
							<td> <?php echo $row[4]; ?> </td>
							<td> <?php echo $row[5]; ?> </td>
                            
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a>
									<a class="btn btn-info" href="editschedule.php?sdlid=<?php echo $id; ?>">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="action/deleteschedule.php?id=<?php echo $id; ?>">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
							</tr>
                           <?php
                            }
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