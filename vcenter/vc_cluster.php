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
				vCluster
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

			<h4>OverAll vCenter Stats</h4>
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
			</table><br>
			<h4>OverAll vCluster Wise Stats</h4>
			<table style='font-size: 12px; width: 80%;' class='table table-striped table-bordered table-hover' id='sample-table-1'>
			<?php
				$TOTAL1_CLS = 0;
				$TOTAL1_HOST = 0;
				$TOTAL1_CPU = 0; 
				$TOTAL1_MEM = 0;
				$TOTAL1_VMS = 0;
				$TOTAL1_VM_CPU = 0;
				$TOTAL1_VM_MEM = 0;
				$TOTAL1_VM_ON = 0;
				$TOTAL1_VM_OFF = 0;				
				display_cluster();
				echo "<tbody>";
				foreach($ClsArr as $myDC => $clsRef) {
					foreach($clsRef as $ClsName => $line) {
						$myDesc = $DATACENTER[$myDC]['NAME'];
						echo "<tr>";
						echo "<td>".$myDesc."</td>";
						echo "<td>".$ClsName."</td>";
						echo "<td>".$line['HOST']."</td>";
						echo "<td>".$line['CPU']."</td>";
						echo "<td>".$line['MEM']."</td>";
						echo "<td>".$line['VM_COUNT']."</td>";
						echo "<td>".$line['VM_CPU']."</td>";
						echo "<td>".$line['VM_MEM']."</td>";
						echo "<td>".$line['VM_POWERON']."</td>";
						echo "<td>".$line['VM_POWEROFF']."</td>";
						echo "</tr>";
						$TOTAL1_CLS = $TOTAL1_CLS + 1;
						$TOTAL1_HOST = $TOTAL1_HOST + $line['HOST'];
						$TOTAL1_CPU = $TOTAL1_CPU + $line['CPU']; 
						$TOTAL1_MEM = $TOTAL1_MEM + $line['MEM'];
						$TOTAL1_VMS = $TOTAL1_VMS + $line['VM_COUNT'];
						$TOTAL1_VM_CPU = $TOTAL1_VM_CPU + $line['VM_CPU'];
						$TOTAL1_VM_MEM = $TOTAL1_VM_MEM + $line['VM_MEM'];
						$TOTAL1_VM_ON = $TOTAL1_VM_ON + $line['VM_POWERON'];
						$TOTAL1_VM_OFF = $TOTAL1_VM_OFF + $line['VM_POWEROFF'];						
					}//cls loop
				}			
				//total of all Clusters
				$VM_DIFF = $TOTAL_VMS - $TOTAL1_VMS;
				echo "<tr>";
				echo "<td><b>OVERALL TOTAL</b></td>";
				echo "<td>".$TOTAL1_CLS."</td>";
				if ($TOTAL1_HOST == $TOTAL_HOST) { echo "<td style='background-color: green;'><b>".$TOTAL1_HOST."</b></td>"; } else { echo "<td>".$TOTAL1_HOST."</td>"; }
				if ($TOTAL1_CPU == $TOTAL_CPU) { echo "<td style='background-color: green;'><b>".$TOTAL1_CPU."</b></td>"; } else { echo "<td>".$TOTAL1_CPU."</td>"; }
				if ($TOTAL1_MEM == $TOTAL_MEM) { echo "<td style='background-color: green;'><b>".$TOTAL1_MEM."</b></td>"; } else { echo "<td>".$TOTAL1_MEM."</td>"; }
				if ($TOTAL1_VMS == $TOTAL_VMS) { echo "<td style='background-color: green;'><b>".$TOTAL1_VMS."</b></td>"; } else { echo "<td>".$TOTAL1_VMS." (diff-".$VM_DIFF.")</td>"; }
				if ($TOTAL1_VM_CPU == $TOTAL_VM_CPU) { echo "<td style='background-color: green;'><b>".$TOTAL1_VM_CPU."</b></td>"; } else { echo "<td>".$TOTAL1_VM_CPU."</td>"; }
				if ($TOTAL1_VM_MEM == $TOTAL_VM_MEM) { echo "<td style='background-color: green;'><b>".$TOTAL1_VM_MEM."</b></td>"; } else { echo "<td>".$TOTAL1_VM_MEM."</td>"; }
				if ($TOTAL1_VM_ON == $TOTAL_VM_ON) { echo "<td style='background-color: green;'><b>".$TOTAL1_VM_ON."</b></td>"; } else { echo "<td>".$TOTAL1_VM_ON."</td>"; }
				if ($TOTAL1_VM_OFF == $TOTAL_VM_OFF) { echo "<td style='background-color: green;'><b>".$TOTAL1_VM_OFF."</b></td>"; } else { echo "<td>".$TOTAL1_VM_OFF."</td>"; }
/* 				echo "<td>".$TOTAL1_VM_CPU."</td>";
				echo "<td>".$TOTAL1_VM_MEM."</td>";
				echo "<td>".$TOTAL1_VM_ON."</td>";
				echo "<td>".$TOTAL1_VM_OFF."</td>"; */
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
