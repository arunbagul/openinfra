<?php
	 //session 
	 if(!isset($_SESSION['username'])) { header('Location: /404.html'); exit;  }
?>

<?php 

//// Local Functions ////
	
	function display_cluster() {
	
				echo "<thead><tr>";
					echo "<th>Datacenter</th>";
					echo "<th>Cluster</th>";
					echo "<th>Host#</th>";
					echo "<th>HostCPU#</th>";
					echo "<th>HostMemory(GB)#</th>";
					echo "<th>TotalVMs</th>";
					echo "<th>VMvCPU#</th>";
					echo "<th>VMMem#</th>";
					echo "<th>PowerOn_VMs</th>";
					echo "<th>PowerOff_VMs</th>";
				echo "</tr></thead>";
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
				<?php
					if (isset($_GET['type'])) {
					    echo "Orchestrator/Inventory (Chef) ".ucfirst($_GET['type']);
					} elseif (isset($_GET['services'])) {
					    echo "Orchestrator/Inventory (Chef) ".$_GET['services'];
					} else { echo "Orchestrator/Inventory (Chef)";}
				?>
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

			<?php 
			$Content = file_get_contents("vcenter/inventory.json");
			$obj = json_decode($Content,true);
			//echo "<pre>"; print_r($obj['rows']) ;echo "</pre>";

			echo "<table style='font-size: 12px; width: 95%;' class='table table-striped table-bordered table-hover' id='sample-table-1'>";
			echo "<thead><tr>";
			echo "<th>HostName</th>";
			echo "<th>Platform</th>";
			echo "<th>Kernel</th>";
			echo "<th>Arch</th>";
			echo "<th>OS</th>";
			echo "<th>Memory</th>";
			echo "<th>CPU</th>";
			echo "<th>Hardware</th>";
			echo "<th>Network</th>";
			echo "</tr></thead>";
			echo "<tbody>";
			foreach($obj['rows'] as $name => $arrRef) {
			foreach($arrRef as $host => $arrRef1) {
			 echo "<tr>";
			  echo "<td>".$host."</td>";
			  echo "<td>".strtoupper($arrRef1['platform_family'])."</td>";
			  echo "<td>".$arrRef1['kernel.release']."</td>";
			  echo "<td>".$arrRef1['kernel.machine']."</td>";
			  echo "<td>".ucfirst($arrRef1['platform'])."-".$arrRef1['platform_version']."</td>";
			  echo "<td>".$arrRef1['memory']['total']."</td>";
			  echo "<td>".$arrRef1['cpu']['0']['model_name']." (".$arrRef1['cpu']['total'].")</td>";
			  echo "<td>".$arrRef1['dmi.system.all_records']['0']['Manufacturer']." Serial Number:".$arrRef1['dmi.system.all_records']['0']['Serial Number']."</td>";
			  $eth_state = strtoupper($arrRef1['network']['interfaces']['eth0']['state']);
			  $eth_gw = $arrRef1['network']['default_gateway'];
			  $eth_addr = '';
			  $eth_netmask = '';
			  //echo "<pre>"; print_r($arrRef1['network']['interfaces']['eth0']['addresses']) ;echo "</pre>";
			  foreach($arrRef1['network']['interfaces']['eth0']['addresses'] as $ipaddr => $val) {
			     if($val['family'] == 'inet') {
				$eth_addr = $ipaddr;
			 	$eth_netmask = $val['netmask']; 
			  	//echo "<br>OK(".$ipaddr.")=".$val['netmask'];
			     }
			  }
			  echo "<td>eth0 (".$eth_state.") IP:".$eth_addr." Netmask:".$eth_netmask." GW:".$eth_gw."</td>";
			  echo "</tr>";
			}}
			echo "</tbody>";				
			echo "</table>";
			?>
			</div>
		</div>
		<!-- end: DYNAMIC TABLE PANEL -->
	</div>
</div>
<!-- end: PAGE CONTENT-->
