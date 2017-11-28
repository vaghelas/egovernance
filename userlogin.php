<?php
ob_start();

if(isset($_SESSION['username']))
{
header('location:complain.php');
}
if(isset($_SESSION['umana']))
{
header('location:management/register.php');
}
if(isset($_SESSION['tun']))
{
header('location:superviser/viewschedule.php');
}
?>


<script>
function validation()
{
var uname=document.getElementById('uname');
var spmsg1=document.getElementById('sp1');

var pass=document.getElementById('passw');
var spmsg2=document.getElementById('sp2');

if(IsEmpty(uname,spmsg1)){
if(IsEmpty(pass,spmsg2)){	
return true;
}
}
return false;
}

//Requrired field validation
function IsEmpty(elem,msg)
{
if(elem.value.length == 0 || elem.value=="" || elem.value==null)
{
msg.style.display="block";
elem.style.border="1px solid red";

elem.focus();
return false;
}
else
{
msg.style.display="none";
elem.style.border="1px solid green";
return true;
}
}
</script>
<?php
include "header.php";
?>
<!-- ####################################################################################################### -->

<div id="container">
  <div class="wrapper">
    <div id="content">
   			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="wraperr"></i>Login</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="">
						  <fieldset>
                         
                            	<div class="control-group">
							  <label class="control-label" for="typeahead">User Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="username" id="uname"   data-provide="typeahead" data-items="4" >
							<span style="color:red;font-size:14px;">*</span>
<span id="sp1" style="color:red;font-size:14px; display:none;">Please Enter User Name</span>
							  </div>
							</div>
                            
                            	<div class="control-group">
							  <label class="control-label" for="typeahead">Password </label>
							  <div class="controls">
								<input type="password" class="span6 typeahead" name="password" id="passw"    data-provide="typeahead" data-items="4" >
								     <span style="color:red;font-size:14px;">*</span>
                              <span id="sp2" style="color:red;font-size:14px; display:none;">Please Enter Password</span>
							  </div>
							</div>
                        	<div class="form-actions">
							  <input type="submit" class="btn btn-primary" name="submit" onclick="return validation();" value="Log In">
							  <!--<button type="reset" class="btn">Cancel</button>-->
							<a href="registration.php">Register Here</a>
                            </div>
						  </fieldset>
						</form> 
                          
<?php

mysqli_connect("localhost","root","","egovernance");

if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$sql=mysql_query("select * from register where username='$username' and password='$password'");
while($row=mysql_fetch_array($sql))
{
$role=$row[2];
if(mysql_num_rows($sql)==1 && $role=='4')
{
$_SESSION['username']=$_POST['username'];
$_SESSION['regid1']=$row[0];
$_SESSION['did']=$row[1];
$_SESSION['rid']=$row[2];
$_SESSION['arid']=$row[3];

header('location:complain.php');
}
else if(mysql_num_rows($sql)==1 && $role=='6')
{
$_SESSION['umana']=$_POST['username'];
$_SESSION['regid3']=$row[0];
$_SESSION['did3']=$row[1];
$_SESSION['rid3']=$row[2];
$_SESSION['arid3']=$row[3];

header('location:management/register.php');

}
else if(mysql_num_rows($sql)==1 && $role=='5')
{
$_SESSION['tun']=$_POST['username'];
$_SESSION['regid4']=$row[0];
$_SESSION['did4']=$row[1];
$_SESSION['rid4']=$row[2];
$_SESSION['arid4']=$row[3];

header('location:superviser/viewschedule.php');
}
else if(mysql_num_rows($sql)==1 && $role=='2')
{
echo $_SESSION['adm']=$_POST['username'];
echo $_SESSION['regid2']=$row[0];
echo $_SESSION['did2']=$row[1];
echo $_SESSION['rid2']=$row[2];
echo $_SESSION['arid2']=$row[3];
header('location:Admin/area.php');
}

else
{
echo "Invalid Usename/Password";
}
}
}
?>

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