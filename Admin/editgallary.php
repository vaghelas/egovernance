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
						<a class="btn btn-info" href="viewarea.php">Back
                        <i class="icon-edit icon-white"></i></a> 
					
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>Edit Gallary </h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
                    
                    <?php
include '../connection/conn.php';
$id=$_REQUEST['gid'];
$sql=mysql_query("select * from gallary where gid='$id'");
while($row=mysql_fetch_array($sql))
{
 $inam=$row[1];
$imag=$row[2];

}
if(isset($_POST['submit']))
{
$in=$_POST['iname'];
$img=$_FILES['file']['name'];
$tmpfile=$_FILES['file']['tmp_name'];
move_uploaded_file($tmpfile,"upload/".$img);
mysql_query("update gallary set iname='$in',image='$img' where gid='$id'");

header('location:viewgallary.php?msg1=edt');
}
?>

					<div class="box-content">
						<form class="form-horizontal" enctype="multipart/form-data" method="post" action="">
						  <fieldset>
                          
                    
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  name="iname"  value="<?php echo $inam; ?>" data-provide="typeahead" data-items="4" >
								
							  </div>
							</div>
							

						<div class="control-group">
								<label class="control-label">Image</label>
								<div class="controls">
								  <input type="file" name="file" id="file" value="<?php echo $imag; ?>">
               <img src="upload/<?php echo $imag; ?>">
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