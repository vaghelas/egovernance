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
			<!-- content starts -->
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
						<h2><i class="icon-edit"></i> event</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
</div>

	
    				<div class="box-content">
						<form class="form-horizontal" method="post" action="action/insertevent.php">
						  <fieldset>
                          
                          
                         <?php /*?> <div class="control-group">
							  <label class="control-label" for="date01">Resolve Date</label>
							  <div class="controls" >
								<input type="text" class="input-xlarge datepicker" id="date01"  name="resolvedate">
                              
                             </div>
							</div>
<?php */?>                            
                            
							 <div class="control-group">
							  <label class="control-label" for="textarea2">event</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="event"></textarea>
							  </div>
							</div>
							
							<div class="form-actions">
							  <input type="submit" class="btn btn-primary" name="submit"  value="submit">
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

			
		