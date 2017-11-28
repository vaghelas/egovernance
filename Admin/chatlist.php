<?php
include("topmenu.php");
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
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a class="btn btn-info" href="viewrole.php">Back
                        <i class="icon-edit icon-white"></i></a> 
					</li>
					
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>chatlist</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					
                    
                    <?php
					include('../connection/conn.php');
					$regid=$_SESSION['regid2'];
					$sql=mysql_query("select * from webchat group by fromu ");
					while($row=mysql_fetch_array($sql))
                    {
					$user=$row[3];
					$sql1=mysql_query("select * from register where regid=$user and rid!='2'");
					while($row1=mysql_fetch_array($sql1))
					{
					?>
					
						 <a href="examples/infinite/chatwithus.php?id=<?php echo $row[3]; ?>"><?php echo $row1[4];
					?>   </a>
					(
					<?php
                    $sql3=mysql_query("select * from webchat where status=0 and fromu='$user'");
					echo mysql_num_rows($sql3);
                    ?>)
					<br/>
                    <?php
					
					}
					}
					?>
                    
                    
				</div><!--/span-->

			</div><!--/row-->


				
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
				<a href="#" class="btn btn-primary" >Save changes</a>
			</div>
		</div>

		<?php
		include 'footer.php';
		?>