<?php  $areaid=intval($_GET['zone']);
$link = mysql_connect('localhost', 'root', ''); //change the configuration in required

if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("egovernance")or die("Could Not Connect To Database");
$query="SELECT * FROM area WHERE aid='$areaid' group by zid";
$result=mysql_query($query);
while($row=mysql_fetch_array($result)) { 
  $zid=$row['1'];
 if($zid=="1")
 {
 echo "You are at <span style='color:red;font-weight:bold;'> East </span>";
 }
 else if($zid=="2")
 {
 echo "You are at <span style='color:red;font-weight:bold;'> West </span>";
 }
 else if($zid=="3")
 {
 echo "You are at <span style='color:red;font-weight:bold;'> North </span>";
 }
 else if($zid=="4")
 {
 echo "You are at <span style='color:red;font-weight:bold;'> South </span>";
 }
 else
 {
 echo "No Zone Selected";
 }
 } 
 
 								  
 ?>
 
								<div class="controls">
<select name="did">
	<option value="">--Select Department--</option>
         <?php
			$sql=mysql_query("select * from department where aid='$areaid'");
			while($row=mysql_fetch_array($sql))
			{
			?>
     <option value="<?php echo $row[0]; ?>"><?php echo $row[2]; ?></option>								  <?php } ?>
	</select>
    </div>

