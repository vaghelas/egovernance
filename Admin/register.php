<?php
include '../connection/conn.php';
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

<?php
include 'topmenu.php';
?>	<!-- topbar ends -->
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
						<a class="btn btn-info" href="viewregister.php">Back
                        <i class="icon-edit icon-white"></i></a> 
					</li>
					
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Register</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal"  enctype="multipart/form-data" method="post" action="action/insertregister.php">
						  <fieldset>
                         
                         <div class="control-group">
								<label class="control-label" for="selectError3">Area </label>
								<div class="controls">
								  <select id="selectError3" name="aid" onChange="getzone(this.value)">
									<option value="">--Select area--</option>
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
							

                         
                          <div class="control-group">
								<label class="control-label" for="selectError3">Department</label>
								<div class="controls" id="zonediv">
								  <select id="selectError3" name="did">
                                  <option value="">--Select Department--</option>
                                  <?php
								  $sql=mysql_query("select * from department");
								  while($row=mysql_fetch_array($sql))
								  {
									?>
                                    <option value="<?php echo $row[0]; ?>"><?php echo $row[2]; ?></option>								  
								
								 
								  <?php } ?>
									
								  </select>
								</div>
							  </div>
                            
  <div class="control-group">
								<label class="control-label" for="selectError3">Role </label>
								<div class="controls">
								  <select id="selectError3" name="rid">
									<option value="">--Select role--</option>
                                  <?php
								  $sql=mysql_query("select * from role where rid!='4' and rid!='5'");
								  while($row=mysql_fetch_array($sql))
								  {
									?>
                                    <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>								  
								
								 
								  <?php } ?>
								  </select>
								</div>
							  </div>
                              
                              							<div class="control-group">
							  <label class="control-label" for="typeahead"> Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="name" id="typeahead"  data-provide="typeahead" data-items="4" >
								
							  </div>
							</div>
                            <div class="control-group">
								<label class="control-label">Image</label>
								<div class="controls">
								  <input type="file" name="file" id="file">
               
								</div>
                            	<div class="control-group">
							  <label class="control-label" for="typeahead">Contact no. </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="contactno" id="typeahead"   data-provide="typeahead" data-items="4" >
								
							  </div>
							</div>
                            
                             <div class="control-group">
								<label class="control-label">Gender</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="optionsRadios1" id="optionsRadios1" value="Male" checked="">
									Male
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="optionsRadios1" id="optionsRadios2" value="Female">
									Female
								  </label>
								</div>
							  </div>
                            
                            	
                            
                            <div class="control-group">
							  <label class="control-label" for="textarea2">Address</label>
							  <div class="controls">
								<textarea class="cleditor" name="address" id="textarea2" rows="3"></textarea>
							  </div>
							</div>
                            
                            	<div class="control-group">
							  <label class="control-label" for="typeahead">Email </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="email" id="typeahead"  data-provide="typeahead" data-items="4" >
								
							  </div>
							</div>
                            
                            	<div class="control-group">
							  <label class="control-label" for="typeahead">User Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="username" id="typeahead"   data-provide="typeahead" data-items="4" >
								
							  </div>
							</div>
                            
                            	<div class="control-group">
							  <label class="control-label" for="typeahead">Password </label>
							  <div class="controls">
								<input type="password" class="span6 typeahead" name="password" id="typeahead"    data-provide="typeahead" data-items="4" >
								
							  </div>
							</div>
                            
                            <div class="control-group">
								<label class="control-label">Status</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
									Active
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
									Inactive
								  </label>
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