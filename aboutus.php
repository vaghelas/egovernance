<?PHP
include "header.php";
?>



<?php
mysqli_connect("localhost","root","","egovernance");
include 'slider2.php';
include("connection/conn.php");
?>
 <div style="width:200px;margin:-240px 154px 0px 0px;width:328px;float:right;border-radius:5px;height:239px;">
        <div style="color:#fff;background:none repeat scroll 0% 0% #3B5998;font-size:25px;border-radius:5px;border-radius:6px 6px 0px 0px;" align="center">
        City Event
        </div>
        <div style="color:#fff;background:none repeat scroll 0% 0% rgba(103, 138, 212, 1);height: 211px;
border-radius: 0px 0px 6px 6px;">
<marquee direction="up">
<ul>
<?php


						  $sql2=mysql_query("select * from event");
						  while($row2=mysql_fetch_array($sql2))
						  {
						  ?>
                          <li>
						  <?php
						  echo $row2[1];
						 
						  ?>
        
        </li><br /> <?php                 
		}
		?> 
        
        </ul>       
        </marquee>
        </div>
        </div>

<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div id="container">
  <div class="wrapper">
    <div id="content">
    <br/><br/>
      <h2 align="center" style="background-color:rgba(123, 151, 231, 1);margin:-33px 0px 0px -22px;">About Ahmedabad Municipal corporation</h2>
       <p>
          <?php
		  
						  $sql=mysql_query("select * from aboutus");
						  while($row=mysql_fetch_array($sql))
						  {
						  echo $row[1];
						  }
		  ?>
          </p>
          <p>
          <?php
		   $sql=mysql_query("select * from aboutus");
						  while($row=mysql_fetch_array($sql))
						  {
						  echo $row[2];
						  }
		  ?>
         </p>
     
    </div>
     <div id="column">
      <div class="holder">
        
        <div style="width:200px;margin:-33px 0px 0px 0px;width:328px;float:right;border-radius:5px;height:239px;">
        <div style="color:#fff;background:none repeat scroll 0% 0% #3B5998;font-size:25px;border-radius:5px;border-radius:6px 6px 0px 0px;height:27px;padding:6px 2px 0px 3px;" align="center">
       Historical Places
        </div>
        <div style="color:#fff;background: none repeat scroll 0% 0% rgba(103, 138, 212, 1);height: 211px;
border-radius: 0px 0px 6px 6px;">
<marquee direction="up">
       
         <ul>
        <li>Kankaria Lake</li><br/>
        <li>Gandhi Ashram</li><br/>
        <li>Rani sipri's Masjid</li><br/>
        <li>Sardar Patel Stadium</li><br/>
        <li>Sarkhej Roja</li><br/>
        <li>Sidisaid Jali</li><br/>
        </ul>

        </marquee>
        </div>
        </div>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<?php
include 'footer.php';
?>