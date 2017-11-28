<?php
include "header.php";
?>


<div id="container">
  <div class="wrapper">
    <div id="content">
   			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>Payment </h2>						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                            
						</div>
	
   
    
  
  <div id="content">
  <h5>Cart Information</h5>
  </div>
   <div class="content_text">
   <?php
include "connection/conn.php";
?>
 <?php
 session_start();
 echo $regid=$_SESSION['regid1'];


$tid=$_REQUEST['id'];
$sql=mysql_query("select * from orders where regid='$regid'");
echo "<table align='center' style='color:#3333FF' class='mytable'>";
echo "<tr  align='center' style='font-size:16px;'>";
echo "<th>";
echo "Event Name";
echo "</th>";
echo "<th>";
echo "Event Image";
echo "</th>";
echo "<th>";
//echo "cost";
echo "</th>";
echo "<th>";
echo "Delete";
echo "</th>";
echo "<th>";
echo "Approval";
echo "</th>";
echo "</tr>";
while($row=mysql_fetch_array($sql))
{
$cartid=$row[0];
echo "<tr  align='center'>";
echo "<td style='font-size:16px;'>";
$eid=$row[3];
$sql2=mysql_query("select * from sellerevent where eid='$eid'");
while($row2=mysql_fetch_array($sql2))
{
echo $eid=$row2[0];
echo $eventname=$row2[2];
}

echo "</td>";
echo "<td style='font-size:16px;'>";
 $id=$row[4];
$sql1=mysql_query("select * from sellerphotomapping where id='$id'");
while($row1=mysql_fetch_array($sql1))
{
$id=$row1[0];
echo "<img src='../seller/photomapping/$row1[3]' width='100' height='100' > ";

}
echo "</td>";
echo "<td style='font-size:16px;'>";
//echo $row[4];
echo "</td>";
echo "<td style='font-size:16px;'>";
echo "<a href='tmpcartdelete.php?cartid=$cartid'>delete</a>";
echo "</td>";
echo "<td style='font-size:16px;'>";
$sql3=mysql_query("select * from orders where orderid='$orderid' ");
while($row3=mysql_fetch_row($sql3))
{
	 $orderid=$row3[0];
	 $status=$row3[6];
	 echo "<a href='buyerapproval.php?sellerid=$sellerid&orderid=$orderid' class='label label-important'>".$row3[6]."</a>";

}

echo "</td>";
echo "</tr>";
}
echo "</table>";


?>

</div>
<div align="center">
 <div style="background:url(buy-btn.png) repeat-x 0 0; width:300px; height:30px;color:#FFF; margin:15px 0 0 100px; text-align:center; line-height:30px; font-size:15px; border-radius:10px;"><label>TOTAL AMOUNT &nbsp;&nbsp;:  &nbsp; &nbsp; </label><?php
    			 $sellerid=$_REQUEST['sellerid'];

	  
	   $result1=mysql_query("select sum(cost) from tmp_cart where sellerid='$sellerid'");
		while ($amount = mysql_fetch_array($result1)) {
		 $amount[0];
		echo  $_SESSION['totalcost']=$amount['sum(cost)'];
		}
		
	 
	   ?>
				
	</div>   

    <div align="center">
    <?php
echo "<form action='insertorder.php?sellerid=$sellerid&eid=$eid&id=$id' method='post'>";?> 
<input type="submit" name="submit" value="MAKE ORDER"  style="background:url(buy-btn.png) repeat-x 0 0; width:300px; height:30px;color:#FFF; margin:15px 0 0 0; text-align:center; line-height:30px; font-size:15px; border-radius:10px;" />
	</form>

    </div>

 </div>
     
    </div>
   
    
    
    
    

</div>
</div>
<div id="column">
      <div class="holder">
        <h2>Nullamlacus loborttis</h2>
        <ul id="latestnews">
          <li> <img class="imgl" src="images/demo/100x75.gif" alt="" />
            <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
            <p>Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
          </li>
          <li class="last"> <img class="imgl" src="images/demo/100x75.gif" alt="" />
            <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
            <p>Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
          </li>
        </ul>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<?php
include 'footer.php';

?>