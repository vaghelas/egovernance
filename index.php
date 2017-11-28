<?php
include 'header.php';
?>
 <?php
 
		include("connection/conn.php");
		?>
<!-- ####################################################################################################### -->
<?php

include 'slider2.php';
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
<div id="homecontent">
  <div class="wrapper">
    
     <?php /*?> <li>
        <h2 class="title"><img src="images/demo/60x60.gif" alt="" />Nullamlacus dui ipsum conseque loborttis</h2>
        <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </li>
      <li>
        <h2 class="title"><img src="images/demo/60x60.gif" alt="" />Nullamlacus dui ipsum conseque loborttis</h2>
        <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </li>
      <li class="last">
        <h2 class="title"><img src="images/demo/60x60.gif" alt="" />Nullamlacus dui ipsum conseque loborttis</h2>
        <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </li><?php */?>
      <h2 class="wrapperr" style="background-color:rgba(123, 151, 231, 1);">Welcome To AMC</h2>
      <div style="margin:-1px -1px -2px -20px;">
  
          <?php
		  
						  $sql=mysql_query("select * from home");
						  while($row=mysql_fetch_array($sql))
						  {
						  echo $row[1];
						  }
		  ?>

      </div>
       <div style="margin:-1px -1px -2px -20px;">
      <?php
		
						  $sql=mysql_query("select * from home");
						  while($row=mysql_fetch_array($sql))
						  {
						  echo $row[2];
						  }
		  ?>
     </div>
     
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div id="container">
  <div class="wrapper">
    <div id="content">
     
					  <div style="width:200px;margin:-85px 269px 0px 0px;width:328px;float:right;border-radius:5px;height:239px;">
        <div style="color:#fff;background:none repeat scroll 0% 0% #3B5998;font-size:25px;border-radius:5px;border-radius:6px 6px 0px 0px;height:27px;padding:6px 2px 0px 3px;" align="center">
        Historical Places        </div>
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
    <div id="column">
      <div class="holder">
        
       <div class="box-content">
						<table class="table">
						  <thead  class="thead1">
							  <tr>
								  <th style="width:115px;background:#3B5998;">Tender No</th>
								  
								  <th style="width:115px;background:#3B5998;">Teder Description</th>
                                  <th style="width:115px;background:#3B5998;">start Date</th>
                                  <th style="width:115px;background:#3B5998;">End date</th>
                                  <th style="width:115px;background:#3B5998;">Status</th>
                                 
							  </tr>
						  </thead>   
						  <tbody>
                          <?php
						  
						  include("connection/conn.php");
						  $sql=mysql_query("select * from tender");
						  while($row=mysql_fetch_array($sql))
						  {
						  $id=$row[0];
						  ?>
                          
                          
							<tr>
								<td><?php echo $row[1]; ?></td>
								<td><?php echo $row[2]; ?></td>
                                <td><?php echo $row[3]; ?></td>
                                <td><?php echo $row[4]; ?></td>
                                <td><?php echo $row[5]; ?></td>
								
							</tr>
                            <?php
							}
							?>
													  </tbody>
					  </table>            
					</div>
      </div>
    </div><br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<?php
include 'footer.php';
?>