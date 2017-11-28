
<?php include("topmenu.php");?>
	<!-- topbar ends -->
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
						<a class="btn btn-info" href="viewarea.php">Back
                        <i class="icon-edit icon-white"></i></a> 
					</li>
					
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Area </h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="action/insertarea.php">
						  <fieldset>
                          
                          <div class="control-group">
								<label class="control-label" for="selectError3">Zone id </label>
								<div class="controls">
								  <select id="selectError3" name="zoneid">
									<option value="0">--Please Select Zone---</option>
                                    <option value="1">East</option>
									<option value="2">West</option>
									<option value="3">North</option>
									<option value="4">South</option>
									
								  </select>
								</div>
							  </div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Area Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  name="areaname" data-provide="typeahead" data-items="4" >
								
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