
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Egovernance</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="refresh" content="10"> 
<style>
/*@import url(http://weloveiconfonts.com/api/?family=typicons);*/
[class*="typicons-"]:before {
  font-family: 'Typicons', sans-serif;
}

.module {
  width: 300px;
  margin: 20px auto;
}

.top-bar {
  background: #666;
  color: white;
  padding: 0.5rem;
  position: relative;
  overflow: hidden;
}
.top-bar h1 {
  display: inline;
  font-size: 1.1rem;
}
.top-bar .typicons-message {
  display: inline-block;
  padding: 4px 5px 2px 5px;
}
.top-bar .typicons-minus {
  position: relative;
  top: 3px;
}
.top-bar .left {
  float: left;
}
.top-bar .right {
  float: right;
  padding-top: 5px;
}
.top-bar > * {
  position: relative;
}
.top-bar::before {
  content: "";
  position: absolute;
  top: -100%;
  left: 0;
  right: 0;
  bottom: -100%;
  opacity: 0.25;
  background: radial-gradient(#ffffff, #CC3333);
  
}

.discussion {
  list-style: none;
  background: #e5e5e5;
  margin: 0;
  padding: 0 0 50px 0;
}
.discussion li {
  padding: 0.5rem;
  overflow: hidden;
  display: flex;
}
.discussion .avatar {
  width: 40px;
  position: relative;
}
.discussion .avatar img {
  display: block;
  width: 100%;
}

.other .avatar:after {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  width: 0;
  height: 0;
  border: 5px solid white;
  border-left-color: transparent;
  border-bottom-color: transparent;
}

.self {
  justify-content: flex-end;
  align-items: flex-end;
}
.self .messages {
  order: 1;
  border-bottom-right-radius: 0;
}
.self .avatar {
  order: 2;
}
.self .avatar:after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 0;
  border: 5px solid white;
  border-right-color: transparent;
  border-top-color: transparent;
  box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
}

.messages {
  background: white;
  padding: 10px;
  border-radius: 2px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}
.messages p {
  font-size: 0.8rem;
  margin: 0 0 0.2rem 0;
}
.messages time {
  font-size: 0.7rem;
  color: #ccc;
}

@keyframes pulse {
  from {
    opacity: 0;
  }

  to {
    opacity: 0.5;
  }
}

</style>

<link rel="stylesheet" href="../../styles/layout.css" type="text/css" />
<script type="text/javascript" src="../../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../../scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../../scripts/jquery.hoverIntent.js"></script>
<script type="text/javascript" src="../../scripts/jquery.hslides.1.0.js"></script>
<script type="text/javascript" src="../../scripts/jquery.hslides.setup.js"></script>
</head>
<body id="top">
<div id="header">
  <div class="wrapper">
    <div class="fl_left">
      <h1><a href="#" style="font-size:25px;">E-GOVERNANCE</a></h1>
      <p style="margin: -27px -254px 22px 544px;
color: #fff;
font-size: 16px;">
      <a href="../../index.php" style="color:#fff;">Home</a>&nbsp;&nbsp;
      <a href="../../aboutus.php" style="color:#fff;">About Us</a>&nbsp;&nbsp;
      <a href="../../contact.php" style="color:#fff;">Contact Us</a>&nbsp;&nbsp;

      </p>
      <?php
if(isset($_SESSION['username']))
{
echo "";
}
else
{
?>
 <a href="../../registration.php" style="color:#fff;">Sign Up</a>&nbsp;&nbsp;
<?php
}
?>

      <p style="margin: -45px -251px 22px 795px;
color: #fff;
font-size: 16px;">      

	  <?php
    session_start();
	mysql_connect("localhost","root","");
mysql_select_db("egovernance");
if(!isset($_SESSION['username']))
{
echo "welcome Guest";
}
else
{
echo "Welcome," .$_SESSION['username'];

}
  ?>

</p>
    </div>
    
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div id="topbar">
  <div class="wrapper">
    <div id="topnav">
<?php
if(isset($_SESSION['username']))
{

?>

      <ul>
       <li><a href="../../profile.php">PROFILE</a></li>
              
               <li><a href="../../suggestion.php">SUGGESTION</a></li>
        <li><a href="../../complain.php">COMPLAIN</a>
        <ul>
            
            <li><a href="../../viewcomplain.php">viewcomplain</a></li>
           
          </ul>
        </li>
          <li class="last"><a href="chatwithus.php?id=2">Chat</a></li>
         <li class="last"><a href="../../viewtender.php">TENDER</a></li>
        <?php
		$regid=$_SESSION['regid1'];
        $sql1=mysql_query("select * from bid where regid='$regid'");
		while($row1=mysql_fetch_array($sql1))
		{
		$rid=$row1[1];
		}
		if(isset($rid))
		{
		?>
        <li>
								<a href="../../viewmessage.php">Message(
							
						
                        
                     <?php
						
						
						$sql=mysql_query("select * from bid where regid='$regid' and status='1'");
						echo mysql_num_rows($sql);
						
						?>
                        )
                        </a>
						</li>
                        <?php
						}
						else
						{
						?>	
                        <li>
                        </li>
                        <?php
						}
						?>
        <li><a href="../../userlogout.php">LOGOUT</a></li>
      </ul>
    </div>
    
    <?php
	}
	else
	{
	?>
   
    
      <ul>
       <li><a href="../../index1.php">HOME</a></li>
        <li><a href="../../aboutus.php">ABOUT US</a></li>
        
          
        
        <li class="last"><a href="../../contact.php">CONTACT US</a></li>
        <li class="last"><a href="../../userlogin.php">LOGIN</a></li>
        
        </ul>
        
    <?php
	}
	?>
    </div></div></div>


<div id="container">
  <div class="wrapper">
    <div id="content">
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
                     <section class="module">
  
  <header class="top-bar">
    
    <div class="left">
      
      <h1><?php
						include('connection/conn.php');
                       $regid2=$_REQUEST['id'];
	 $sql4=mysql_query("select * from register where rid='$regid2'");
while($row4=mysql_fetch_array($sql4))
{
   $usern=$row4[0];
   $sql5=mysql_query("select * from register where regid='$usern'");
while($row5=mysql_fetch_array($sql5))
{
echo $row5[4];
}
}

?>
	</h1>
    </div>
    
    <div class="right">
      <span class="icon typicons-minus"></span>
      <span class="icon typicons-times"></span>
    </div>
    
  </header>
    
  <ol class="discussion">
  <?php
	
	
	if(!isset($_SESSION['username']))
	{
	header('location:../../userlogin.php');
	}
	else
	{
		
	// echo "Welcome,".  $_SESSION['username'];
	 $uid=$_SESSION['regid1'];
	 }
	  $roleid=$_REQUEST['id'];
	 $sql2=mysql_query("select * from register where rid='$roleid'");
while($row2=mysql_fetch_array($sql2))
{
  $spid=$row2[0];
}
if(isset($_POST['submit']))
{

 $rid=$_SESSION['regid1'];

$content=mysql_real_escape_string($_POST['content']);
//$ip=mysql_real_escape_string($_SERVER['REMOTE_ADDR']);
mysql_query("insert into webchat(text,ts,fromu,tou,status) values ('$content',now(),'$rid','$spid','0')");
}


$sql= mysql_query("SELECT * FROM webchat where fromu='$uid' and tou='$spid' or fromu='$spid' and tou='$uid' order by id asc");
while($row=mysql_fetch_array($sql))
{
$toid=$row[3];

$sql1= mysql_query("SELECT * FROM register where regid='$toid'");
while($row1=mysql_fetch_array($sql1))
{
$rol=$row1[2];
	  if($rol=="2")
	  {
	  ?>
    <li class="other">
      <div class="avatar">
         <img src="../../Admin/upload/<?php echo $row1[5]; ?>" />
      </div>
      
      <div class="messages">
        <p><?php  echo $row[1]; ?></p>
        <time datetime="2009-11-13T20:00"><?php echo $row[2]; ?></time>
      </div>
    </li>
     <?php
     
	
	}
	elseif($rol!="2")
	{
	?>
    <li class="self">
      <div class="avatar">
        <img src="../../profilepic/<?php echo $row1[5]; ?>" />
      </div>
      <div class="messages">
        <p><?php  echo $row[1]; ?></p>
       
        <time datetime="2009-11-13T20:14"><?php echo $row[2]; ?></time><br/>
       <time datetime="2009-11-13T20:14"><?php if($row[5]=="1"){echo "read";}else
		  {echo "Unread";} ?></time><br/>
      </div>
         
    </li>
    <?php
	}
	
   
	}
	}
	
	?>
    <li>
    <div>

    </div>
    </li> 
    
  </ol>
  
</section>
                   <form  method="post" action="">
<textarea style="width:350px;float:left; font-size:14px; height:20px; font-weight:bold; resize:none; background:#CCC; padding:15px; border-radius:15px; box-shadow:inset 0px 0px 10px #666666; margin:15px 5px;" name="content" id="content" ></textarea><br />
<input type="submit" value="Send" name="submit" style="background:#97D0F2; border-radius:5px; width:70px; height:30px; box-shadow:inset 0px 0px 5px #78BADA;"/>

</form>
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
<!-- ####################################################################################################### -->
<div id="footer">
  <div class="wrapper">
    <div id="newsletter">
      <h2>Stay In The Know !</h2>
      <p>Please enter your email to join our mailing list</p>
      <form action="action/insertsubscribe.php" method="post">
        <fieldset>
          <legend>News Letter</legend>
          <input type="text" name="textemail" value="Enter Email Here&hellip;"  onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
          <input type="submit" name="submit"  class="sbtn"  value="subscribe" />
          <input type="submit" name="submit1" class="unsbtn"  value="UnSubcribe" />
        </fieldset>
      </form>
      
    </div>
    <div class="footbox">
    <h2>Follow us on</h2>
     <ul>
      <li><a href="https://www.facebook.com"><img src="../../profilepic/f1.jpg" height="25" width="25" style="float:left;margin:3px 0px 0px 4px;"/></a></li>
        <li><a href="https://www.twitter.com"><img src="../../profilepic/t1.jpg" height="25" width="25" style="float:left;margin:3px 0px 0px 4px;"/></a></li>
        <li><a href="https://mail.google.com/intl/en/mail/help/about.html"><img src="../../profilepic/g1.jpg" height="25" width="25" style="float:left;margin:3px 0px 0px 4px;"/></a></li>
        
        
        </ul>
    </div>
   
    <div class="footbox">
     <h2>PAGES</h2>
      <ul>
        <li><a href="../../suggestion.php">SUGGESTION</a></li>
         <li><a href="../../tender1.php">TENDER</a></li>
        <li><a href="../../userlogin.php">LOGIN</a></li>
       </ul>
    </div>
    <div class="footbox">
     
 <h2>PAGES</h2>
      <ul>
        <li><a href="../../index.php">HOME</a></li>
        <li><a href="../../aboutus.php">ABOUT US</a></li>
        <li><a href="../../contact.php">CONTACT US</a></li>
       
      </ul>    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
</body>
</html>
