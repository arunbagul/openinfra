<?php
	 //session 
	 if(!isset($_SESSION['username'])) { header('Location: /404.html'); exit;  }
?>

<?php 

//// Local Functions ////
	
	function display_esxi($mydata, $myDC = null) {
	
				echo "<thead><tr>";
					echo "<th>DataCenter</th>";
					echo "<th>Cluster</th>";
					echo "<th>HostName</th>";
					echo "<th>Manufacture</th>";
					echo "<th>Serial Number</th>";
					echo "<th>ESXi Version</th>";
					echo "<th>CPU Model</th>";
					echo "<th>CPU Core</th>";
					echo "<th>Memory(GB)</th>";
					echo "<th>NICs</th>";
					echo "<th>CPUUsage</th>";
					echo "<th>MemUsage(GB)</th>";
					echo "<th>Status</th>";
					echo "<th>vSphere HA State</th>";
				echo "</tr></thead>";

				echo "<tbody>";
				foreach($mydata as $line) {
					$Fields = explode(';',$line);
					echo "<tr>";
					echo "<td>".$Fields[0]."</td>";
					if ($myDC) { echo "<td><a href='?child=cluster&dc=".$myDC."&cluster=".$Fields[1]."'>".$Fields[1]."</a></td>"; }
					else { echo "<td>".$Fields[1]."</td>"; }
					echo "<td><a href='?child=esxi&host=".$Fields[2]."'>".$Fields[2]."</a></td>";
					echo "<td>".$Fields[3]."</td>"; echo "<td>".$Fields[4]."</td>"; 
					echo "<td>".$Fields[5]."</td>";
					echo "<td>".$Fields[6]."</td>";
					echo "<td>".$Fields[7]."</td>";
					echo "<td>".$Fields[8]."</td>";
					echo "<td>".$Fields[9]."</td>";
					echo "<td>".$Fields[10]."</td>";
					echo "<td>".$Fields[11]."</td>";
					echo "<td>".$Fields[12]."</td>";
					if ($Fields[13] == "green" ) {	echo "<td>".$Fields[13]."</td>"; } else { echo "<td>".$Fields[13]."</td>";  }
					echo "</tr>";
				}
				echo "</tbody>";
	}
	//end of function

?>

<!-- start: PAGE CONTENT -->
<div class="row">
	<div class="col-md-12">
		
	<!-- <div class="page-header"> <h3>Add User<small>user profile page</small></h3></div> -->
		
		<!-- start: DYNAMIC TABLE PANEL -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-external-link-square"></i>
				ESXi Hosts (ESXi)
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
					<a style="text-decoration:underline;" href="?child=esxi&type=host" ><i class="clip-screen"></i>Esxi Host</a> | 
					<a style="text-decoration:underline;" href="?child=esxi&type=menu1" ><i class="clip-network"></i>Menu1</a> | 
					<a style="text-decoration:underline;" href="?child=esxi&type=menu2" ><i class="clip-data"></i>Menu2</a> | 
					<a style="text-decoration:underline;" href="?child=esxi&type=logs" ><i class="clip-stack"></i>Logs</a> | 
					<a style="text-decoration:underline;" href="?child=esxi&type=reports" ><i class="clip-health"></i>Reports</a>

				</div>
			</div><hr>
			<!-- menu: end -->
											
			<div class="row">	
					<div class="col-md-1"><h5>Select DC:<h5></div>
					<div class="col-sm-2">
					<form action="" method="get" id='get_esxi'>	
						<input type='hidden' name='child' value='esxi'>
						<select name='dc' class="form-control" >
						<?php
						echo "<option value=''>Select Datacenter</option>";
						foreach ($vCENTER_DATA as $vc_host => $vc_ref) {
								$dc_name = $vc_ref['DC'];
								if ($_GET['dc'] == $vc_host) {
										echo "<option value='".$vc_host."' SELECTED>".$DATACENTER[$dc_name]['NAME']." (".$vc_host.") </option>";
								} else { echo "<option value='".$vc_host."'>".$DATACENTER[$dc_name]['NAME']." (".$vc_host.") </option>"; }
						}
						?>
						</select>
					</div>
						<div class="col-sm-2"><button class="btn btn-primary btn-sm save-event" type="submit"> <i class="clip-list"></i> Get ESXi Hosts List</button></div>
					</form>		
			</div></br>
			<table style='font-size: 12px;' class='table table-striped table-bordered table-hover table-full-width' id='sample_1'>
			<?php
			
			if ((strtolower($_GET['child']) == "esxi" ) and ((strtolower($_GET['type']) == "host" ))) {
				$content = ESXiList($DATACENTER,$vCENTER_DATA);
				//echo "<pre>"; print_r($content); echo "</pre>";
				display_esxi($content);
			} else {
				$GetDC = strtolower($_GET['dc']);
				$myFile = "vcenter/".$GetDC."_esxi".".csv";
				if(file_exists($myFile)) {
				  $content = file($myFile);
				  //remove whitespace and empty lines
				  $content = array_map('trim', $content);
				  $content = array_filter($content);
				  // delete header
				  unset($content[0]); 
				  display_esxi($content, $GetDC);
				} else { if(!empty($GetDC)) {echo "<br><font color='brown'>No Data, Please check backgroud job!</font><br><br>";}}
			} //end of if-loop
			
			?>
			</table>
			</div>
		</div>
		<!-- end: DYNAMIC TABLE PANEL -->
	</div>
</div>
<!-- end: PAGE CONTENT-->
