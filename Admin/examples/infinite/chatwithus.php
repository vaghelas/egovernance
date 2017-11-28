<?php
include 'topmenu.php';
?>
<meta http-equiv="refresh" content="10"> 
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
						<a class="btn btn-info" href="../../chatlist.php">Back
                        <i class="icon-edit icon-white"></i></a> 
					</li>
					
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> chat</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
                             <section class="module">
  
  <header class="top-bar">
    
    <div class="left">
      
      <h1><?php
						include('connection/conn.php');
                       $regid1=$_REQUEST['id'];
	 $sql4=mysql_query("select * from register where regid='$regid1'");
while($row4=mysql_fetch_array($sql4))
{
  echo $usern=$row4[4];
}

?></h1>
    </div>
    
    <div class="right">
      <span class="icon typicons-minus"></span>
      <span class="icon typicons-times"></span>
    </div>
    
  </header>
    
  <ol class="discussion">
  <?php
	
	
	 if(!isset($_SESSION['adm']))
	{
	header('location:../../login.php');
	}
	else
	{
		
	// echo "Welcome,".  $_SESSION['adm'];
	 $uid=$_SESSION['regid2'];
	 }
	 
	  $regid=$_REQUEST['id'];
	 $sql2=mysql_query("select * from register where regid='$regid'");
while($row2=mysql_fetch_array($sql2))
{
  $userid=$row2[0];
}
if(isset($_POST['submit']))
{

 $rid=$_SESSION['regid2'];

$content=mysql_real_escape_string($_POST['content']);
//$ip=mysql_real_escape_string($_SERVER['REMOTE_ADDR']);
mysql_query("insert into webchat(text,ts,fromu,tou,status) values ('$content',now(),'$rid','$regid','0')");
}


$sql= mysql_query("SELECT * FROM webchat where fromu='$uid' and tou='$userid' or fromu='$userid' and tou='$uid' order by id asc");
while($row=mysql_fetch_array($sql))
{
$toid=$row[3];

$sql1= mysql_query("SELECT * FROM register where regid='$toid'");
while($row1=mysql_fetch_array($sql1))
{
$rol=$row1[2];
	  if($rol=="4")
	  {
	  ?>
    <li class="other">
      <div class="avatar">
       <img src="../../../profilepic/<?php echo $row1[5]; ?>" />
      </div>
      
      <div class="messages">
        <p><?php  echo $row[1]; ?></p>
        <time datetime="2009-11-13T20:00"><?php echo $row[2]; ?></time>
      </div>
    </li>
    <?php
	
	}
	else
	{
	?>
    <li class="self">
      <div class="avatar">
        <img src="../../../admin/upload/<?php echo $row1[5]; ?>" />
      </div>
      <div class="messages">
        <p><?php  echo $row[1]; ?></p>
       
        <time datetime="2009-11-13T20:14"><?php echo $row[2]; ?></time>
      </div>
    </li>
    <?php
	}
	}
	}
	$uid=$_REQUEST['id'];
	$sql=mysql_query("select * from register");
	while($row=mysql_fetch_array($sql))
	{
	$rgid=$row[0];
	if(isset($_REQUEST['id'])==$rgid)
			{
			mysql_query("update webchat set status='1' where fromu='$uid'");
			}
     }
	
	 ?>
    
  </ol>
  
</section>
 
                            	
							
							<div class="form-actions">
							   
                <form  method="post" action="">
<textarea style="width:350px;float:left; font-size:14px; height:20px; font-weight:bold; resize:none; background:#CCC; padding:15px; border-radius:15px; box-shadow:inset 0px 0px 10px #666666; margin:15px 5px;" name="content" id="content" ></textarea><br />
<input type="submit" value="Send" name="submit" style="background:#97D0F2; border-radius:5px; width:70px; height:30px; box-shadow:inset 0px 0px 5px #78BADA;"/>
</form>
							</div>
						  </fieldset>
						

					</div>
				</div><!--/span-->

			</div><!--/row-->


			
<?php
include 'footer.php';
?>


