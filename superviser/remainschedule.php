<?php
include '../connection/conn.php';
?>
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
		
<?php
$id=$_REQUEST['sdlid'];

?>

			<div>
				<ul class="breadcrumb">
					<li>
						<a class="btn btn-info" href="viewcomplain.php">Back
                        <i class="icon-edit icon-white"></i></a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Schedule</h2>
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
								  
								  <th>cid</th>
                                  <th>Resolvedate</th>
                                  <th>Resolve start time</th>
                                  <th>Resolve end time</th>
                                  <th>comment</th>
                                    
                                  
							  </tr>
						  </thead>   
						  <tbody>
                          <?php
						  $sql=mysql_query("select * from schedule where sdlid='$id'");
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
								<td><?php $cid=$row[2];
								$sql2=mysql_query("select * from complain where cid='$cid'");
								while($row2=mysql_fetch_array($sql2))
						  {
						  echo $row2[3];
						  }
						  ?></td>
                                <td><?php echo $row[3]; ?></td>
                                <td><?php echo $row[4]; ?></td>
                               <td><?php echo $row[5];?></td>
                               <td><?php echo $row[6];?></td>
                           
                                
                   </tr>
                    <?php
							}
							?>
													  </tbody>
					  </table>            
					</div>
				</div><!--/

<?php
mysql_query("update schedule set viewstatus='1' where sdlid='$id'");



?>
<?php
include 'footer.php';
?>
