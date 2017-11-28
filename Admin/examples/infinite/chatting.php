<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="10" />   
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
@import url(http://weloveiconfonts.com/api/?family=typicons);
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
  background: radial-gradient(#ffffff, #000000);
  animation: pulse 1s ease alternate infinite;
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


<section class="module">
  
  <header class="top-bar">
    
    <div class="left">
      <span class="icon typicons-message"></span>
      <h1>chat</h1>
    </div>
    
    <div class="right">
      <span class="icon typicons-minus"></span>
      <span class="icon typicons-times"></span>
    </div>
    
  </header>
    
  <ol class="discussion">
  <?php
	session_start();
	include('connection/conn.php');
	if(!isset($_SESSION['username']))
	{
	header('location:login.php');
	}
	else
	{
		
	 echo "Welcome,".  $_SESSION['adm'];
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
mysql_query("insert into webchat(text,ts,fromu,tou) values ('$content',now(),'$rid','$regid')");
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
	?>
    
    
  </ol>
 
  
</section>
 <form  method="post" action="">
<textarea style="width:350px;float:left; font-size:14px; height:20px; font-weight:bold; resize:none; background:#CCC; padding:15px; border-radius:15px; box-shadow:inset 0px 0px 10px #666666; margin:15px 5px;" name="content" id="content" ></textarea><br />
<input type="submit" value="Send" name="submit" style="background:#97D0F2; border-radius:5px; width:70px; height:30px; box-shadow:inset 0px 0px 5px #78BADA;"/>

</form>

</body>
</html>
