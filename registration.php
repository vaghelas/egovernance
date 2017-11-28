<?php
include "header.php";
?>

<div id="container">
  <div class="wrapper">
    <div id="content">
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
<script>
function validation()
{
var firstname=document.getElementById('typeahead');
var spmsg1=document.getElementById('sp1');
var alphaspmsg1=document.getElementById('alphasp1');

var upload=document.getElementById('file');
var spmsg14=document.getElementById('sp14');

var contactno=document.getElementById('typeahead1');
var spmsg9=document.getElementById('sp9');
var alphaspmsg9=document.getElementById('alphasp9');

var address=document.getElementById('textarea2');
var spmsg3=document.getElementById('sp3');

var area=document.getElementById('selectError3');
var spmsg6=document.getElementById('sp6');

var email=document.getElementById('typeahead2');
var spmsg10=document.getElementById('sp10');
var alphaspmsg10=document.getElementById('alphasp10');

var name=document.getElementById('typeahead3');
var spmsg12=document.getElementById('sp12');
var alphaspmsg12=document.getElementById('alphasp12');

var password=document.getElementById('typeahead4');
var spmsg11=document.getElementById('sp11');
var alphaspmsg11=document.getElementById('alphasp11');


if(IsEmpty(firstname,spmsg1)){
if(IsAlpha(firstname,alphaspmsg1)){
if(IsEmpty(upload,spmsg14)){	
if(IsEmpty(contactno,spmsg9)){
if(IsNumberCon1(contactno,alphaspmsg9)){
if(IsEmpty(address,spmsg3)){	
if(IsEmpty(gender,spmsg7)){
if(IsEmpty(area,spmsg6)){
if(IsEmpty(email,spmsg10)){
if(emaill(email,alphaspmsg10)){	
if(IsEmpty(name,spmsg12)){
if(IsAlpha1(name,alphaspmsg12)){
if(IsEmpty(password,spmsg11)){
if(passwordd(password,alphaspmsg11)){	
return true;
}
}
}
}
}
}
}
}
}
}
}
}
}
}
return false;
}
                  
//OnKey Fname
function onkeyvalidation()
{
var firstname1=document.getElementById('typeahead');
var spmsg11=document.getElementById('sp1');
var alphaspmsg11=document.getElementById('alphasp1');

if(IsEmpty(firstname1,spmsg11)){
if(IsAlpha(firstname1,alphaspmsg11)){
return true;

}
}
return false;
}

function IsAlpha(elem,msg)
{
var alpha=/^[a-zA-Z]+$/;
if(elem.value.match(alpha))
{
msg.style.display="none";
elem.style.border="1px solid red";
return true;
}
else
{
msg.style.display="block";
elem.style.border="1px solid green";
return false;
}
}


// OnKeyphoto
function onkeyvalidationupload()
{
var upload1=document.getElementById('file');
var spmsg114=document.getElementById('sp14');

if(IsEmpty(upload1,spmsg114)){
	msg.style.display="none";
elem.style.border="1px solid green";
return true;

}
msg.style.display="block";
elem.style.border="1px solid red";
return false;
}

// OnKeyMono
function onkeyvalidationcon()
{
var con1=document.getElementById('typeahead1');
var spmsg19=document.getElementById('sp9');
var alphasp9=document.getElementById('alphasp9');
if(IsEmpty(con1,spmsg19)){
if(IsNumberCon1(con1,alphasp9)){
	msg.style.display="none";
elem.style.border="1px solid green";
return true;
}
}
msg.style.display="block";
elem.style.border="1px solid red";
return false;
}

//contact no
function IsNumberCon1(elem,msg)
{
if(elem.value.length >10 || elem.value.length <10)
{
msg.style.display="block";
elem.style.border="1px solid red";
return false;
}
else
{
msg.style.display="none";
elem.style.border="1px solid green";
return true;
}
}



// OnKeyup Address
function onkeyvalidationadd()
{
var addr1=document.getElementById('textarea2');
var spmsg13=document.getElementById('sp3');

if(IsEmpty(addr1,spmsg13)){
	msg.style.display="none";
elem.style.border="1px solid green";
return true;

}
msg.style.display="block";
elem.style.border="1px solid red";
return false;
}

// OnKeyup area
function onkeyvalidationarea()
{
var area1=document.getElementById('selectError3');
var spmsg20=document.getElementById('sp20');

if(Isselect(area1,spmsg20)){
	msg.style.display="none";
elem.style.border="1px solid green";
return true;

}
msg.style.display="block";
elem.style.border="1px solid red";
return false;
}

// OnKeyemail
function onkeyvalidationemail()
{
var email1=document.getElementById('typeahead2');
var spmsg110=document.getElementById('sp10');
var alphasp10=document.getElementById('alphasp10');
if(IsEmpty(email1,spmsg110)){
if(emaill(email1,alphasp10)){
	msg.style.display="none";
elem.style.border="1px solid green";
return true;
}
}
msg.style.display="block";
elem.style.border="1px solid red";
return false;
}

function emaill(elem,msg)
{
var email=/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-Z0-9]{2,4}$/;
if(elem.value.match(email))
{
msg.style.display="none";
elem.style.border="1px solid green";
return true;
}
else
{
msg.style.display="block";
elem.style.border="1px solid red";
return false;
}
}

// OnKeyuname
function onkeyvalidationname()
{
var name1=document.getElementById('typeahead3');
var spmsg112=document.getElementById('sp12');

if(IsEmpty(name1,spmsg112)){
	msg.style.display="none";
elem.style.border="1px solid green";
return true;

}
msg.style.display="block";
elem.style.border="1px solid red";
return false;
}

function IsAlpha1(elem,msg)
{
var alpha=/^[a-zA-Z]+$/;
if(elem.value.match(alpha))
{
msg.style.display="none";
elem.style.border="1px solid green";
return true;
}
else
{
msg.style.display="block";
elem.style.border="1px solid red";
return false;
}
}

// OnKeypass
function onkeyvalidationpass()
{
var pass1=document.getElementById('typeahead4');
var spmsg111=document.getElementById('sp11');

if(IsEmpty(pass1,spmsg111)){
	msg.style.display="none";
elem.style.border="1px solid green";
return true;

}
msg.style.display="block";
elem.style.border="1px solid red";
return false;
}


function passwordd(elem,msg)
{
var pwd=/^[0-9a-zA-Z]+$/;
if(elem.value.match(pwd))
{
msg.style.display="block";   
elem.style.border="1px solid red";
return true;
}
else
{
msg.style.display="none";
elem.style.border="1px solid green";
return false;
}
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

//Requrired field validation
function Isselect(elem,msg)
{
if(elem.value == 0)
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
                    
                   
					<div class="box-content">
						<form class="form-horizontal" enctype="multipart/form-data" method="post" action="action/insertregister.php" onsubmit="return validation();">
						  <fieldset>
                         

							
							   
							<div class="control-group">
							  <label class="control-label" for="typeahead"> Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="name" id="typeahead"  data-provide="typeahead" data-items="4" onkeyup="return onkeyvalidation();">
                                <span style="color:red;font-size:14px;">*</span>
<span id="sp1" style="color:red;font-size:14px; display:none;">Please Enter First Name</span>
<span id="alphasp1" style="color:red;font-size:14px; display:none;">Please Enter Only Alphabet</span>

								
							  </div>
							</div>
                            
                            <div class="control-group">
								<label class="control-label">Image</label>
								<div class="controls">
								  <input type="file" name="file" id="file" onkeyup="return onkeyvalidationupload();">
                                    <span style="color:red;font-size:14px;">*</span>
                                     <span id="sp14" style="color:red;font-size:14px; display:none;">Please Choose Photo</span>
               
								</div>
                                </div>
                                
                            	<div class="control-group">
							  <label class="control-label" for="typeahead">Contact no. </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="contactno" id="typeahead1"   data-provide="typeahead" data-items="4" onkeyup="return onkeyvalidationcon();" >
                               <span style="color:red;font-size:14px;">*</span>
                               <span id="sp9" style="color:red;font-size:14px; display:none;">Please Enter Contact Number</span>
       <span id="alphasp9" style="color:red;font-size:14px; display:none;">Please Enter 10 Digit Number</span>

								
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
								<textarea class="cleditor" name="address" id="textarea2" rows="3" onkeyup="return onkeyvalidationadd();" ></textarea>
                                 <span style="color:red;font-size:14px;">*</span>
                                 <span id="sp3" style="color:red;font-size:14px; display:none;">Please Enter Address</span>

							  </div>
							</div>
                            <div class="control-group">
								<label class="control-label" for="selectError3">Area </label>
								<div class="controls">
								  <select id="selectError3" name="aid" onkeyup="return onkeyvalidationarea();">
									<option value="0">--Select area--</option>
                                    <span style="color:red;font-size:14px;">*</span>
<span id="sp5" style="color:red;font-size:14px; display:none;">Please Select area</span>

                                  <?php
								  $sql=mysql_query("select * from area");
								  while($row=mysql_fetch_array($sql))
								  {
									?>
                                    <option value="<?php echo $row[0]; ?>"><?php echo $row[2]; ?></option>								  
								
								 
								  <?php } ?>
								  </select>
                                   <span id="sp20" style="color:red;font-size:14px; display:none;">Please select area</span>
   
								</div>
							  </div>                            
							
                            	<div class="control-group">
							  <label class="control-label" for="typeahead">Email </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="email" id="typeahead2"  data-provide="typeahead" data-items="4" onkeyup="return onkeyvalidationemail();" >
                              <span style="color:red;font-size:14px;">*</span>
                               <span id="sp10" style="color:red;font-size:14px; display:none;">Please Enter Email</span>
       <span id="alphasp10" style="color:red;font-size:14px; display:none;">Please Enter Proper Email</span>


								
							  </div>
							</div>
                            
                            	<div class="control-group">
							  <label class="control-label" for="typeahead">User Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="username" id="typeahead3"   data-provide="typeahead" data-items="4" onkeyup="return onkeyvalidationname();" >
                                                                    <span style="color:red;font-size:14px;">*</span>
<span id="sp12" style="color:red;font-size:14px; display:none;">Please Enter User Name</span>
       <span id="alphasp12" style="color:red;font-size:14px; display:none;">Please Enter Only Alphabet</span>
								
							  </div>
							</div>
                            
                            	<div class="control-group">
							  <label class="control-label" for="typeahead">Password </label>
							  <div class="controls">
								<input type="password" class="span6 typeahead" name="password" id="typeahead4"    data-provide="typeahead" data-items="4" onkeyup="return onkeyvalidationpass();" >
                                                                    <span style="color:red;font-size:14px;">*</span>
                              <span id="sp11" style="color:red;font-size:14px; display:none;">Please Enter Password</span>
       <span id="alphasp11" style="color:red;font-size:14px; display:none;">Please Enter Proper password</span>

								
							  </div>
							</div>
                            
                            <div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
							  <button type="reset" class="btn">cancel</button>
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