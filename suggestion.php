<?PHP
include "header.php";
?>


<div id="container">
  <div class="wrapper">
    <div id="content">
   			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Suggestion</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="action/insertsuggestion.php">
						  <fieldset>
                         

							
							 
                                  <?php
								  include("connection/conn.php");
								  
								   ?>
								  
							
      <div class="control-group">
								<label class="control-label" for="selectError3">Department</label>
								<div class="controls">
								  <select id="selectError3" name="did">
									 <option value="">--Select Department--</option>
                                  <?php
								  	
								  $sql=mysql_query("select * from department group by departmentname");
								  while($row=mysql_fetch_array($sql))
								  {
									?>
                                    <option value="<?php echo $row[0]; ?>"><?php echo $row[2]; ?></option>								  
								
								 
								  <?php } ?>
								  </select>
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
                                    <option value="<?php echo $row[0]; ?>"><?php echo $row[2]; ?></option>								  
								
								 
								  <?php } ?>
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