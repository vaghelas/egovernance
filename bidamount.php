<?PHP
include "header.php";
?>


<div id="container">
  <div class="wrapper">
    <div id="content">
   			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>Bid Amount</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
                    <?php
					$id=$_REQUEST['id'];
					
					?>
					<div class="box-content">
						<form class="form-horizontal" method="post" enctype="multipart/form-data" action="insertbid.php?id=<?php echo $id;?>">
						  <fieldset>
                         

							
							 
                                  <?php
								  include("connection/conn.php");
								  
								   ?>
								  
							
                            
							<div class="control-group">
							  <label class="control-label" for="typeahead">Bid Amount</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  name="bamount" data-provide="typeahead" data-items="4" >
								
							  </div>
							</div>
                            
                            <div class="control-group">
								<label class="control-label">Document1</label>
								<div class="controls">
								  <input type="file" name="file" id="file">
               
								</div>
							  </div>
                          <div class="control-group">
								<label class="control-label">Document2</label>
								<div class="controls">
								  <input type="file" name="file1" id="file">
               
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