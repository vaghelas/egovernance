<?php
include "header.php";
include("connection/conn.php");
?>


<div id="container">
  <div class="wrapper">
    <div id="content">
   			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>Tender</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Tender No</th>
								  
								  <th>Teder Description</th>
                                  <th>start Date</th>
                                  <th>End date</th>
                                  <th>Status</th>
                                 
							  </tr>
						  </thead>   
						  <tbody>
                          <?php
						  
						  
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
				</div><!--/span-->

			</div><!--/row-->  
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