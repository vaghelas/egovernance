
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
						<h2><i class="icon-edit"></i>About Us </h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
                    <?php
include '../connection/conn.php';
$id=$_REQUEST['id'];
$sql=mysql_query("select * from home where hid='$id'");
while($row=mysql_fetch_array($sql))
{
 $txt1=$row[1];
$txt2=$row[2];

}
if(isset($_POST['submit']))
{
$t1=$_POST['text1'];
$t2=$_POST['text2'];

mysql_query("update aboutus set text1='$t1',text2='$t2' where hid='$id'");

header('location:viewhome.php?msg1=edt');
}
?>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="">
						  <fieldset>
                          
                          
							
							    
                            <div class="control-group">
							  <label class="control-label" for="textarea2">Text1</label>
							  <div class="controls">
								<textarea class="cleditor" name="text1" id="text1" rows="3" value="<?php echo $txt1; ?>"></textarea>
							  </div>
							</div>
							
                            <div class="control-group">
							  <label class="control-label" for="textarea2">Text2</label>
                            <div class="controls">
								<textarea class="cleditor" name="text2" id="text2" rows="3" value="<?php echo $txt2; ?>"></textarea>
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