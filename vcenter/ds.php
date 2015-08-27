<?php
	 //session 
	 if(!isset($_SESSION['username'])) { header('Location: /404.html'); exit;  }
	 
	 
//// Local Functions ////
	
	function display_ds($mydata, $myDC = null) {
		echo "<thead>";
				echo "<th>DC</th>";
				echo "<th style='width: 15%;'>DatastoreName</th>";
				echo "<th>DSType</th>";
				echo "<th>DSSize(GB)</th>";
				echo "<th>DSFree(GB)</th>";
				echo "<th>DSFree(%)</th>";
				echo "<th>DSStatus</th>";
				echo "<th>isMultiHost</th>";		
			echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
		//echo "<pre>"; print_r($mydata); echo "</pre>";
			foreach($mydata as $line) { 
				$Fields = explode(';',$line);
				$tmp = ($Fields[3] / $Fields[2]) * 100;
				$FreePer = round($tmp,2);
				echo "<tr>";
				if ($myDC) { echo "<td>".$myDC."</td>"; } else {  $myDC1 = array_pop($Fields); echo "<td>".$myDC1."</td>"; }
				echo "<td><a href='?child=ds&ds_name=".$Fields[0]."'>".$Fields[0]."</a></td>";
				echo "<td>".$Fields[1]."</td>";
				echo "<td>".$Fields[2]."</td>";
				echo "<td>".$Fields[3]."</td>";
				if ($FreePer < 25) {  echo "<td style='background-color: yellow;'>".$FreePer."</td>";  } else { echo "<td>".$FreePer."</td>"; }
				echo "<td>".$Fields[4]."</td>";
				echo "<td>".$Fields[5]."</td>";
				echo "</tr>";
			}
		echo "</tbody>";			
	}
?>
<!-- start: PAGE CONTENT -->
<div class="row">
	<div class="col-md-12">
		
	<!-- <div class="page-header"> <h3>Add User<small>user profile page</small></h3></div> -->
		
		<!-- start: DYNAMIC TABLE PANEL -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-external-link-square"></i>
				Datastore
				<div class="panel-tools">
					<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
					</a>
					<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
						<i class="fa fa-wrench"></i>
					</a>
					<a class="btn btn-xs btn-link panel-refresh" href="#">
						<i class="fa fa-refresh"></i>
					</a>
					<a class="btn btn-xs btn-link panel-expand" href="#">
						<i class="fa fa-resize-full"></i>
					</a>
					<a class="btn btn-xs btn-link panel-close" href="#">
						<i class="fa fa-times"></i>
					</a>
				</div>
			</div>
			
			<div class="panel-body">
			<!-- menu: start -->
			<div class="row">
			<div class="col-md-7">&nbsp;</div>
				<div class="col-md-5">
					<a style="text-decoration:underline;" href="?child=ds&type=dslist" ><i class="clip-user"></i>DSList</a> | 
					<a style="text-decoration:underline;" href="?child=ds&type=menu2" ><i class="clip-network"></i>Menu2</a> | 
					<a style="text-decoration:underline;" href="?child=ds&type=menu3" ><i class="clip-key"></i>Menu3</a> | 
					<a style="text-decoration:underline;" href="?child=ds&type=logs" ><i class="clip-stack"></i>Logs</a> | 
					<a style="text-decoration:underline;" href="?child=ds&type=reports" ><i class="clip-health"></i>Reports</a>

				</div>
			</div><hr>
			<!-- menu: end -->
					
			<div class="row">	
					<div class="col-md-1"><h5>Select DC:<h5></div>
					<div class="col-sm-2">
					<form action="" method="get" id='get_vms'>	
						<input type='hidden' name='child' value='ds'>
						<select name='dc' class="form-control" >
						<?php
						echo "<option value=''>Select Datacenter</option>";
						foreach ($vCENTER_DATA as $vc_host => $vc_ref) {
								$dc_name = $vc_ref['DC'];
								if ($_GET['dc'] == $vc_host) {
										echo "<option value='".$vc_host."' SELECTED>".$DATACENTER[$dc_name]['NAME']." (".$vc_host.") </option>";
										$DC=$vc_ref['DC'];
								} else { echo "<option value='".$vc_host."'>".$DATACENTER[$dc_name]['NAME']." (".$vc_host.") </option>"; }
						}
						?>
						</select>
					</div>
						<div class="col-sm-2"><button class="btn btn-primary btn-sm save-event" type="submit"> <i class="clip-list"></i> Get DS List</button></div>
					</form>		
			</div></br>

			<table style='font-size: 12px;' class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
			<?php
				if ((strtolower($_GET['child']) == "ds" ) and ((strtolower($_GET['type']) == "dslist" ))) {
					$content = DSList($DATACENTER,$vCENTER_DATA);
					display_ds($content);
				} else {
				   $GetDC = strtolower($_GET['dc']);
				   $myFile = "vcenter/".$GetDC."_ds".".csv";
				   if (file_exists($myFile)) {
				     $content = file($myFile);
				     //remove whitespace and empty lines
				     $content = array_map('trim', $content);
				     $content = array_filter($content);	
				     //delete header
				     unset($content[0]);
				     $myDC = $vCENTER_DATA[$GetDC]['DC'];
				     display_ds($content, $myDC);
				   } else { if(!empty($GetDC)) {echo "<br><font color='brown'>No Data, Please check backgroud job!</font><br><br>";}}
				}
			?> 
			</table>
			</div>
		</div>
		<!-- end: DYNAMIC TABLE PANEL -->
	</div>
</div>
<!-- end: PAGE CONTENT-->
