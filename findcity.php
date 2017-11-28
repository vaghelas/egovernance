<?php $countryid=intval($_GET['country']);
$stateid=intval($_GET['state']);
$link = mysql_connect('localhost', 'root', ''); //change the configuration in required

if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("homework")or die("Could Not Connect To Database");
$query="SELECT * FROM city WHERE countryid='$countryid' AND stateid='$stateid'";
$result=mysql_query($query);

?>
<select name="city" onchange="getarea(<?php echo $countryid; ?>,<?php echo $stateid;?>,this.value)">
<option value="0">Select City</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option value="<?php echo $row['id']?>"><?php echo $row['cityname'];?></option>
<?php } ?>
</select>
