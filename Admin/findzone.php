<?php  $areaid=intval($_GET['zone']);
$link = mysql_connect('localhost', 'root', ''); //change the configuration in required

if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("egovernance")or die("Could Not Connect To Database");

 								  
 ?>
 

<select name="aid" id="selectError3">
	<option value="">--Select Department--</option>
         <?php
			$sql=mysql_query("select * from department where aid='$areaid'");
			while($row=mysql_fetch_array($sql))
			{
			?>
     <option value="<?php echo $row[0]; ?>"><?php echo $row[2]; ?></option>								  <?php } ?>
	</select>

