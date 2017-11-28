<?php
include "header.php";
?>

<div id="container">
  <div class="wrapper">
    <div id="content">
   			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>Edit Register</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                           
						</div>
					</div>
					
                    <?php
include 'connection/conn.php';
$id=$_REQUEST['regid'];
$sql=mysql_query("select * from register where regid='$id'");
while($row=mysql_fetch_array($sql))
{
 
$aiid=$row[3];
$nnam=$row[4];
$immg=$row[5];
$conno=$row[6];
$gd=$row[7];
$ad=$row[8];
$em=$row[9];
$un=$row[10];
$pd=$row[11];




}
if(isset($_POST['submit']))
{

$aaid=$_POST['aid'];
$nam=$_POST['name'];
$img1=$_FILES['file']['name'];
$tmpfile=$_FILES['file']['tmp_name'];
move_uploaded_file($tmpfile,"profilepic/".$img1);
$cno=$_POST['contactno'];
$gdr=$_POST['optionsRadios1'];
$add=$_POST['address'];
$eid=$_POST['email'];
$unam=$_POST['username'];
$pwd=$_POST['password'];

mysql_query("update register set aid='$aaid',name='$nam',image='$img1',contactno='$cno',gender='$gdr',address='$add',email='$eid',username='$unam',password='$pwd' where regid='$id'");

header('location:registration.php?msg1=edt');
}
?>

                    
                    <div class="box-content">
						<form class="form-horizontal" method="post" enctype="multipart/form-data" action="">
						  <fieldset>
                         
                         
                              
                              <div class="control-group">
								<label class="control-label" for="selectError3">Area </label>
								<div class="controls">
								  <select id="selectError3" name="aid">
									<option value="">--Select role--</option>
                                  <?php
								  $sql=mysql_query("select * from area");
								  while($row=mysql_fetch_array($sql))
								  {
									?>
                                    <option value="<?php echo $row[0]; ?>"><?php echo $row[2]; ?> <?php if($aiid=="$row"){ echo 'selected'; }?></option>								  
								
								 
								  <?php } ?>
								  </select>
								</div>
							  </div>                            
							
							<div class="control-group">
							  <label class="control-label" for="typeahead"> Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="name" id="typeahead" value="<?php echo $nnam; ?>" data-provide="typeahead" data-items="4" >
								
							  </div>
							</div>
                            <div class="control-group">
								<label class="control-label">Image</label>
								<div class="controls">
								  <input type="file" name="file" id="file" value="<?php echo $immg; ?>">
               
								</div>
                                </div>
                            
                            	<div class="control-group">
							  <label class="control-label" for="typeahead">Contact no. </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="contactno" id="typeahead"  value="<?php echo $conno; ?>" data-provide="typeahead" data-items="4" >
								
							  </div>
							</div>
                            
                             <div class="control-group">
								<label class="control-label">Gender</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="optionsRadios1" id="optionsRadios1" value="Male" <?php if($gd=='Male'){?>checked="checked"<?php } ?>>
									Male
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="optionsRadios1" id="optionsRadios2" value="Female" <?php if($gd=='Female'){?>checked="checked"<?php } ?>>
									Female
								  </label>
								</div>
							  </div>
                              
                            <div class="control-group">
							  <label class="control-label" for="textarea2">Address</label>
							  <div class="controls">
								<textarea class="cleditor" name="address" id="textarea2" rows="3" value="<?php echo $ad; ?>"></textarea>
							  </div>
							</div>
                            
                            	<div class="control-group">
							  <label class="control-label" for="typeahead">Email </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="email" id="typeahead" value="<?php echo $em; ?>" data-provide="typeahead" data-items="4" >
								
							  </div>
							</div>
                            
                            	<div class="control-group">
							  <label class="control-label" for="typeahead">User Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="username" id="typeahead"  value="<?php echo $un; ?>" data-provide="typeahead" data-items="4" >
								
							  </div>
							</div>
                            
                            	<div class="control-group">
							  <label class="control-label" for="typeahead">Password </label>
							  <div class="controls">
								<input type="password" class="span6 typeahead" name="password" id="typeahead"   value="<?php echo $pd; ?>" data-provide="typeahead" data-items="4" >
								
							  </div>
							</div>
                            
                           
                            
                            	
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
                    </div>
				</div><!--/span-->

			</div><!--/row-->
           <div id="column">
      <div class="holder">
       
      </div>
    </div>
    <br class="clear" />
  </div>
</div>

<?php
include 'footer.php';
?>