<?PHP
include "header.php";
?>

<?php /*?><script language="javascript" type="text/javascript">

function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getzone(zoneId) {		
		
		var strURL="findzone.php?zone="+zoneId;
		
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
				
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('zonediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}
		
			}	
			
			req.open("GET", strURL, true);
			req.send(null);
		
}		
	}
	</script>
<?php */?><div id="container">
  <div class="wrapper">
    <div id="content">
   			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>Review </h2>						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                            
						</div>
					</div>
                    <?php
 $id=$_REQUEST['id'];
$sql=mysql_query("select * from complain where cid='$id'");
while($row=mysql_fetch_array($sql))
{
 $ara=$row[5];
 $cid=$row[0];
 $deptid=$row[2];

}
?>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="action/insertreview.php?aid=<?php echo $ara; ?>&cid=<?php echo $cid; ?>&deptid=<?php echo $deptid; ?>">
						  <fieldset>	
                          
                              
                               
							 <div class="control-group">
							  <label class="control-label" for="textarea2">Review</label>
							  <div class="controls">
								<textarea class="cleditor" name="review" id="textarea2" rows="3"></textarea>
							  </div>
							</div>

							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->  
    </div>
    <?php
include "side.php";
?>
    <br class="clear" />
  </div>
</div>

<!-- ####################################################################################################### -->
<?php
include 'footer.php';

?>