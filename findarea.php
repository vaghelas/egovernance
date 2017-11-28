<?php $countryid=intval($_GET['country']);
$stateid=intval($_GET['state']);
$cityid=intval($_GET['city']);

$link = mysql_connect('localhost', 'root', ''); //change the configuration in required

if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("homework")or die("Could Not Connect To Database");
$query="SELECT * FROM area WHERE countryid='$countryid' AND stateid='$stateid' AND cityid='$cityid'" ;
$result=mysql_query($query);

?>
<select name="area" >
<option value="0"  >Select area</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option value="<?php echo $row['id']?>"><?php echo $row['areaname'];?></option>

<?php } ?>
</select>
