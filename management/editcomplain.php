<?php
include '../connection/conn.php';
?>
<?php
include 'topmenu.php';
?>

		<div class="container-fluid">
		<div class="row-fluid">
	<?php include("leftmenu.php");?>			
			
			<script language="javascript" type="text/javascript">

function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getzone(zoneId) {		
		
		var strURL="findzone.php?zone="+zoneId;
		
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
				
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('zonediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}
		
			}	
			
			req.open("GET", strURL, true);
			req.send(null);
		
}		
	}
	</script>

            
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
						<a class="btn btn-info" href="viewcomplain.php">Back
                        <i class="icon-edit icon-white"></i></a>					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Complain</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
                    <?php
include '../connection/conn.php';
$id=$_REQUEST['cid'];
$sql=mysql_query("select * from complain where cid='$id'");
while($row=mysql_fetch_array($sql))
{
$reggid=$row[1];
$diid=$row[2];
$ttl=$row[3];
$dscptnn=$row[4];
$areaa=$row[5];
$stts=$row[6];

}
if(isset($_POST['submit']))
{
$rid=$_SESSION['regid'];
$deptid=$_POST['did'];
$ttle=$_POST['title'];
$dscrptn=$_POST['description'];
$ara=$_POST['aid'];


mysql_query("update complain set regid='$rid',did='$deptid',title='$ttle',description='$dscrptn',area='$ara',status='' where cid='$id'");

header('location:viewcomplain.php?msg1=edt');
}
?>
                    

                    
					<div class="box-content">
						<form class="form-horizontal" method="post" action="">
						  <fieldset>
                          
                           <div class="control-group">
								<label class="control-label" for="selectError3">customer id </label>
								<div class="controls">
								  <select id="selectError3" name="regid">
									<option value="">--Select customerid--</option>
                                  <?php
								  $sql=mysql_query("select * from register");
								  while($row=mysql_fetch_array($sql))
								  {
									?>
                                    <option value="<?php echo $row[0]; ?>" <?php if($reggid==$rid){ echo 'selected'; }?>><?php echo $row[4]; ?></option>								  
								
								 
								  <?php } ?>
								  </select>
								</div>
							  </div>
 
                          
                         <div class="control-group">
								<label class="control-label" for="selectError3">Department id </label>
								<div class="controls">
								  <select id="selectError3" name="did">
									 <option value="">--Select Department--</option>
                                  <?php
								  	include("connection/conn.php");
								  $sql=mysql_query("select * from department");
								  while($row=mysql_fetch_array($sql))
								  {
									?>
                                    <option value="<?php echo $row[0]; ?>" <?php if($diid==$deptid){ echo 'selected'; }?>><?php echo $row[2]; ?></option>								  
								
								 
								  <?php } ?>
								  </select>
								</div>
							  </div>
							
                            
							<div class="control-group">
							  <label class="control-label" for="typeahead">Title</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  name="title" value="<?php echo $ttl; ?>" data-provide="typeahead" data-items="4" >
								
							  </div>
							</div>
                            
                             <div class="control-group">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="description" id="textarea2"  value="<?php echo $dscptnn; ?>" rows="3"></textarea>
							  </div>
							</div>
                            <div class="control-group">
								<label class="control-label" for="selectError3">Area </label>
								<div class="controls" id="area">
								  <select id="selectError3" name="aid" onChange="getzone(this.value)">
									 <option value="">--Select Area--</option>
                                  <?php
								  						  
								  $sql=mysql_query("select * from area");
								  while($row=mysql_fetch_array($sql))
								  {
									?>
                                    <option value="<?php echo $row[0]; ?>" <?php if($areaa==$ara){ echo 'selected'; }?>><?php echo $row[2]; ?></option>								  
								
								 
								  <?php } ?>
								  </select>
								</div>
							  </div>
                              
                              
                               <div class="control-group" >
								<label class="control-label" for="selectError3"> </label>
								<div class="controls" id="zonediv">
								No Zone Selected.Please select area for automatic getting zone.
								</div>
							  </div>
							
							
								<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


			
					
	<?php
	include 'footer.php';
	?>