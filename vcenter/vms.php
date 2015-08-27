<?php
	 //session 
	 if(!isset($_SESSION['username'])) { header('Location: /404.html'); exit;  }
	 
//// Local Functions ////
	
	function display_vms($mydata, $myDC = null) {
	
			echo "<thead><tr>";
					//echo "<th>DataCenter</th>";
					echo "<th>Name</th>";
					echo "<th>ESXiHost</th>";
					echo "<th>CPU</th>";
					echo "<th>Mem(MB)</th>";
					echo "<th>OS</th>";
					echo "<th>State</th>";
					echo "<th>DataStore</th>";
					echo "<th>Disk#</th>";
					echo "<th>Disk(GB)</th>";
					echo "<th>IPAddr</th>";
					echo "<th>IPAddr</th>";
					echo "<th>IPAddr</th>";		
			echo "</tr></thead>";
			echo "<tbody>";
			foreach($mydata as $line) {
				$Fields = explode(';',$line);
				echo "<tr>";
				echo "<td><a href='?child=vms&vm=".$Fields[0]."'>".$Fields[0]."</a></td>";
				if ($myDC) { echo "<td><a href='?child=vms&dc=".$myDC."&host_name=".$Fields[1]."'>".$Fields[1]."</a></td>"; } 
				else { echo "<td>".$Fields[1]."</td>"; }
				echo "<td>".$Fields[2]."</td>";
				echo "<td>".$Fields[3]."</td>";
				echo "<td>".$Fields[4]."</td>";
				echo "<td>".$Fields[5]."</td>";
				if ($myDC) { echo "<td><a href='?child=vms&dc=".$myDC."&ds_name=".$Fields[6]."'>".$Fields[6]."</a></td>"; } 
				else { echo "<td>".$Fields[6]."</td>"; }
				echo "<td>".$Fields[7]."</td>";
				echo "<td>".$Fields[8]."</td>";
				echo "<td>".$Fields[10]."<br>(".$Fields[9].")</td>";
				echo "<td>".$Fields[12]."<br>(".$Fields[11].")</td>";
				echo "<td>".$Fields[14]."<br>(".$Fields[13].")</td>";
				//echo "<td>".$Fields[7]."</td>";
				//echo "<td>".$Fields[8]."</td>";
				//echo "<td>".$Fields[9]."</td>";
				//echo "<td>".$Fields[10]."</td>";
				//echo "<td>".$Fields[11]."</td>";
				//echo "<td>".$Fields[12]."</td>";
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
				Virtual Machines(VMs)
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
					<a style="text-decoration:underline;" href="?child=vms&type=linux" ><i class="clip-user"></i>Linux</a> | 
					<a style="text-decoration:underline;" href="?child=vms&type=windows" ><i class="clip-network"></i>Windows</a> | 
					<a style="text-decoration:underline;" href="?child=vms&type=poweroff" ><i class="clip-key"></i>PowerOff</a> | 
					<a style="text-decoration:underline;" href="?child=vms&type=logs" ><i class="clip-stack"></i>Logs</a> | 
					<a style="text-decoration:underline;" href="?child=vms&type=reports" ><i class="clip-health"></i>Reports</a>

				</div>
			</div><hr>
			<!-- menu: end -->
											
			<div class="row">	
					<div class="col-md-1"><h5>Select DC:<h5></div>
					<div class="col-sm-2">
					<form action="" method="get" id='get_vms'>	
						<input type='hidden' name='child' value='vms'>
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
						<div class="col-sm-2"><button class="btn btn-primary btn-sm save-event" type="submit"> <i class="clip-list"></i> Get VM List</button></div>
					</form>		
			</div></br>

			<table style='font-size: 12px;' class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
				
			<?php 
				if ((strtolower($_GET['child']) == "vms" ) and ((strtolower($_GET['type']) == "linux" ))) {
					$content = LinuxVMs($DATACENTER,$vCENTER_DATA);
					//echo "<pre>"; print_r($content); echo "</pre>";
					display_vms($content);
				} elseif ((strtolower($_GET['child']) == "vms" ) and ((strtolower($_GET['type']) == "windows" ))) {
					$content = WindowsVMs($DATACENTER,$vCENTER_DATA);
					display_vms($content);
				} elseif ((strtolower($_GET['child']) == "vms" ) and ((strtolower($_GET['type']) == "poweroff" ))) {
					$content = PowerOffVMs($DATACENTER,$vCENTER_DATA);
					display_vms($content);
				} elseif ((strtolower($_GET['child']) == "vms" ) and (isset($_GET['ds_name']))) {
					$content = VMsByDS(strtolower($_GET['dc']), $_GET['ds_name']);
					display_vms($content);
				} elseif ((strtolower($_GET['child']) == "vms" ) and (isset($_GET['host_name']))) {
					$content = VMsByHost(strtolower($_GET['dc']), $_GET['host_name']);
					display_vms($content);					
				} else {
				   $GetDC = strtolower($_GET['dc']);
				   $myFile = "vcenter/".$GetDC.".csv";
				   if(file_exists($myFile)) {
					$content = file($myFile);
					//remove whitespace and empty lines
					$content = array_map('trim', $content);
					$content = array_filter($content);
					//delete header
					unset($content[0]);				
					display_vms($content, $GetDC);
				   } else { if(!empty($GetDC)) {echo "<br><font color='brown'>No Data, Please check backgroud job!</font><br><br>";}}
				} //end of if-loop
			
			?> 
				</tbody>
			</table>			


			
			</div>
		</div>
		<!-- end: DYNAMIC TABLE PANEL -->
	</div>
</div>
<!-- end: PAGE CONTENT-->
