
<?php
session_start();
mysqli_connect("localhost","root","","egovernance");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Egovernance</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.hoverIntent.js"></script>
<script type="text/javascript" src="scripts/jquery.hslides.1.0.js"></script>
<script type="text/javascript" src="scripts/jquery.hslides.setup.js"></script>
</head>
<body id="top">
<div id="header">
  <div class="wrapper">
    <div class="fl_left">
      <h1><a href="#" style="font-size:25px;">E-GOVERNANCE</a></h1>
      <p style="margin: -25px 0px 23px 435px;
color: #fff;
font-size: 16px;">
      <a href="index.php" style="color:#fff;">Home</a> &nbsp;&nbsp;
      <a href="aboutus.php" style="color:#fff;">About Us</a>&nbsp;&nbsp;
      <a href="contact.php" style="color:#fff;">Contact Us</a>&nbsp;&nbsp;
<?php
if(isset($_SESSION['username']))
{
echo "";
}
else
{
?>
 <a href="registration.php" style="color:#fff;">Sign Up</a>&nbsp;&nbsp;
<?php
}
?>
      </p>
      <p style="margin: -45px -251px 22px 795px;
color: #fff;
font-size: 16px;">      
<?php   
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
       <li><a href="profile.php">PROFILE</a></li>
              
               <li><a href="suggestion.php">SUGGESTION</a></li>
        <li><a href="complain.php">COMPLAIN</a>
        <ul>
            
            <li><a href="viewcomplain.php">viewcomplain</a></li>
           
          </ul>
        </li>
          <li class="last"><a href="examples/infinite/chatwithus.php?id=2">Chat</a></li>
         <li class="last"><a href="viewtender.php">TENDER</a></li>
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
								<a href="viewmessage.php">Message(   
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
        <li><a href="userlogout.php">LOGOUT</a></li>
      </ul>
    </div>
    
    <?php
	}
	else
	{
	?>
   
    
      <ul>
       <li><a href="index.php">HOME</a></li>
        <li><a href="aboutus.php">ABOUT US</a></li>
        
          
        
        <li class="last"><a href="contact.php">CONTACT US</a></li>
        <li class="last"><a href="userlogin.php">LOGIN</a></li>
        
        </ul>
        
    <?php
	}
	
	?>
    </div></div></div>
