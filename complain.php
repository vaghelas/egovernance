<?PHP
include "header.php";
?>
<?php   
if(!isset($_SESSION['username']))
{
header('location:userlogin.php');
}
?>
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
<div id="container">
  <div class="wrapper">
    <div id="content">
   			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>Complain </h2>						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                            
						</div>
					</div>
                    <?php
					if(isset($_REQUEST['msg'])=="success")
					{
					echo "Your complain sent to authority";
					}
					?>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="action/insertcomplain.php">
						  <fieldset>	
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
                                    <option value="<?php echo $row[0]; ?>"><?php echo $row[2]; ?></option>								  

								  <?php } ?>
								  </select>
								</div>
							  </div>
                              
                              
                               <div class="control-group" >
								<label class="control-label" for="selectError3"> </label>
								<div class="controls" id="zonediv">
								No Zone Selected.Please select area for automatic getting zone.
								<br/>
                                <select name="did">
	<option value="">--Select Department--</option>
        
   
	</select>
                                </div>
							  </div>
                           
                            
							<div class="control-group">
							  <label class="control-label" for="typeahead">Title</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  name="title" data-provide="typeahead" data-items="4" >
								
							  </div>
							</div>
                            
                             <div class="control-group">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="description" id="textarea2" rows="3"></textarea>
							  </div>
							</div>

							
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

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