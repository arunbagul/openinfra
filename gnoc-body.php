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
					    echo "GNOC / ".ucfirst($_GET['type']);
					} elseif (isset($_GET['services'])) {
					    echo "GNOC / Service: ".$_GET['services'];
					} else { echo "GNOC / SLA Report";}
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

			<?php include_once('gnoc-chart1.php'); ?>
			<div class='col-md-12' id='gnoc_chart' style='min-width: 300px; height: 450px; margin: 0 auto'></div>

			<br><h4>OverAll SLA Status</h4>
			<table style='font-size: 12px; width: 70%;' class='table table-striped table-bordered table-hover' id='sample-table-1'>
			<?php
				list($DCArr,$ClsArr)= vClusterStats($DATACENTER,$vCENTER_DATA);
				//echo "<pre>"; print_r($DCArr); echo "</pre><br><br>";
				//echo "<pre>"; print_r($ClsArr); echo "</pre>";
				echo "<thead><tr>";
					echo "<th>Datacenter</th>";
					echo "<th>Host#</th>";
					echo "<th>HostCPU#</th>";
					echo "<th>HostMemory(GB)#</th>";
					echo "<th>TotalVMs</th>";
					echo "<th>VMvCPU#</th>";
					echo "<th>VMMem (GB)#</th>";
					echo "<th>PowerOn_VMs</th>";
					echo "<th>PowerOff_VMs</th>";					
				echo "</tr></thead>";
				echo "<tbody>";
				$TOTAL_HOST = 0;
				$TOTAL_CPU = 0; 
				$TOTAL_MEM = 0;
				$TOTAL_VMS = 0;
				$TOTAL_VM_CPU = 0;
				$TOTAL_VM_MEM = 0;
				$TOTAL_VM_ON = 0;
				$TOTAL_VM_OFF = 0;
				foreach($DCArr as $key => $line) {
					$myDC = $DATACENTER[$key]['NAME'];
					echo "<tr>";
					echo "<td>".$myDC."</td>";
					echo "<td>".$line['HOST']."</td>";
					echo "<td>".$line['CPU']."</td>";
					echo "<td>".$line['MEM']."</td>";
					echo "<td>".$line['VM_COUNT']."</td>";
					echo "<td>".$line['VM_CPU']."</td>";
					echo "<td>".$line['VM_MEM']."</td>";
					echo "<td>".$line['VM_POWERON']."</td>";
					echo "<td>".$line['VM_POWEROFF']."</td>";					
					echo "</tr>";
					$TOTAL_HOST = $TOTAL_HOST + $line['HOST'];
					$TOTAL_CPU = $TOTAL_CPU + $line['CPU']; 
					$TOTAL_MEM = $TOTAL_MEM + $line['MEM'];
					$TOTAL_VMS = $TOTAL_VMS + $line['VM_COUNT'];
					$TOTAL_VM_CPU = $TOTAL_VM_CPU + $line['VM_CPU'];
					$TOTAL_VM_MEM = $TOTAL_VM_MEM + $line['VM_MEM'];
					$TOTAL_VM_ON = $TOTAL_VM_ON + $line['VM_POWERON'];
					$TOTAL_VM_OFF = $TOTAL_VM_OFF + $line['VM_POWEROFF'];					
				}
				//total of all DCs
				echo "<tr style='background-color: yellow;'>";
				echo "<td><b>OVERALL TOTAL</b></td>";
				echo "<td>".$TOTAL_HOST."</td>";
				echo "<td>".$TOTAL_CPU."</td>";
				echo "<td>".$TOTAL_MEM."</td>";
				echo "<td>".$TOTAL_VMS."</td>";
				echo "<td>".$TOTAL_VM_CPU."</td>";
				echo "<td>".$TOTAL_VM_MEM."</td>";
				echo "<td>".$TOTAL_VM_ON."</td>";
				echo "<td>".$TOTAL_VM_OFF."</td>";
				echo "</tr>";				
				echo "</tbody>";				
			?>
			</table>
			</div>
		</div>
		<!-- end: DYNAMIC TABLE PANEL -->
	</div>
</div>
<!-- end: PAGE CONTENT-->
