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
						<h2><i class="icon-edit"></i>Message   <a href='clear.php?id=<?php echo $regid;?>' style="border:1px solid;background: #3B5998;color:#fff;padding:5px;">clear</a></h2>
                       
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                            
						</div>
					</div>
                   
					<?php

include 'connection/conn.php';
 $regid=$_SESSION['regid1'];
 ?>
 <form>
                    <div>
							
</div>
</form>  
 <?php
 
$sql=mysql_query("select * from bid where regid='$regid'");
if(mysql_num_rows($sql)>=1)
{
while($row=mysql_fetch_array($sql))
{
$status=$row[6];
if($status==1)
{					
?>
 <div class="box-content">
						<form class="form-horizontal" method="post"  action="">
						  <fieldset>
                    <div class="form-actions">
                    <?php
					echo "You are selected for tender No." .$row[2] . " For next phase.Please Contact in office for furthure details.";
echo "If You are agree, click Here..";
					?>
                    <br/>
                    <br/>
                    
                    </div>
                    <div>
							 <a href='confirmmsg.php?id=<?php echo $row[0];?>' style="border:1px solid;background: #9933CC;color: #fff;padding:5px;">confirm</a>
							  <a href='viewtender.php' style="border:1px solid;background: #9933CC;color: #fff;padding:5px;">Cancel</a>
							</div>
                            
						  </fieldset>
						</form>   
                
					</div>
                   <?php
					}
					else if($status=="2")
					{
					echo "You are Confirm with us for tender no. " .$row[2] . " <br/>";
					
					}
				else
					{
					echo "";
					}
					}
					}
					?>
                    
			
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

