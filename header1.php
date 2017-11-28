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
      <h1><a href="#">E-GOVERNANCE</a></h1>
      <p>        <h2>
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
$_SESSION['regid1'];
}
  ?>
</h2>
</p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div id="topbar">
  <div class="wrapper">
    <div id="topnav">
      <ul>
        <li><a href="index1.php">HOME</a></li>
        <li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="suggestion.php">SUGGESTION</a></li>
        <li><a href="complain.php">COMPLAIN</a>
          <?php /*?><ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
          </ul><?php */?>
        </li>
        <li class="last"><a href="contact.php">CONTACT US</a></li>
        <li>
								<a href="viewmessage.php">Message(
							
						
                        
                     <?php
						session_start();
						include '../connection/conn.php';
						$regid=$_SESSION['regid1'];
						$sql=mysql_query("select * from bid where regid='$regid' and status='1'");
						echo mysql_num_rows($sql);
						
						?>
                        )
                        </a>
						</li>	
        <li><a href="userlogout.php">LOGOUT</a></li>
      </ul>
    </div>
    <div id="search">
      
    </div>
    <br class="clear" />
  </div>
</div>
