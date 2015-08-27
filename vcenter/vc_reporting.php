<?php
	 //session 
	 if(!isset($_SESSION['username'])) { header('Location: /404.html'); exit;  }
?>

<!-- start: PAGE CONTENT -->
	<div class="row">

			<!-- menu: start --
			<div class="row">
			<div class="col-md-7">&nbsp;</div>
				<div class="col-md-5">
					<a style="text-decoration:underline;" href="?child=reporting&type=dc" ><i class="clip-stats"></i> Datacenter Reporting</a> | 
					<a style="text-decoration:underline;" href="?child=reporting&type=cluster" ><i class="clip-bars"></i> Cluster Reporting</a>
				</div>
			</div><hr>
			-- menu: end -->	
	<?php 
	echo "<div class='col-md-12'><ul class='nav nav-tabs'>";
		if(strtolower($_GET['type']) == "cls" ) {
			echo "<li><a href='?child=reporting'>Datacenter Wise</a></li>";
			echo "<li class='active'><a href='?child=reporting&type=cls'>Cluster Wise</a></li>";			
		} else {
			echo "<li class='active'><a href='?child=reporting'>Datacenter Wise</a></li>";
			echo "<li ><a href='?child=reporting&type=cls'>Cluster Wise</a></li>";		
		}
	echo "</ul></div>";
	
	//get reports from csv files
	$VC_TOTAL = array();
	list($DCArray,$ClsArray)= vClusterStats($DATACENTER,$vCENTER_DATA);
	/// DC wise summary
	$VC_TOTAL['DC']['HOST'] = 0;
	$VC_TOTAL['DC']['CPU'] = 0;
	$VC_TOTAL['DC']['MEM'] = 0;
	$VC_TOTAL['DC']['VMS'] = 0;
	$VC_TOTAL['DC']['VM_CPU'] = 0;
	$VC_TOTAL['DC']['VM_MEM'] = 0;
	$VC_TOTAL['DC']['VM_ON'] = 0;
	$VC_TOTAL['DC']['VM_OFF'] = 0;
	$VC_TOTAL['DC']['CAPACITY'] = 0;
	foreach($DCArray as $key => $line) {
		$myDC = $DATACENTER[$key]['NAME'];
		$VC_TOTAL['DC']['HOST'] = $VC_TOTAL['DC']['HOST'] + $line['HOST'];
		$VC_TOTAL['DC']['CPU'] = $VC_TOTAL['DC']['CPU'] + $line['CPU']; 
		$VC_TOTAL['DC']['MEM'] = $VC_TOTAL['DC']['MEM'] + $line['MEM'];
		$VC_TOTAL['DC']['VMS'] = $VC_TOTAL['DC']['VMS'] + $line['VM_COUNT'];
		$VC_TOTAL['DC']['VM_CPU'] = $VC_TOTAL['DC']['VM_CPU'] + $line['VM_CPU'];
		$VC_TOTAL['DC']['VM_MEM'] = $VC_TOTAL['DC']['VM_MEM'] + $line['VM_MEM'];
		$VC_TOTAL['DC']['VM_ON'] = $VC_TOTAL['DC']['VM_ON'] + $line['VM_POWERON'];
		$VC_TOTAL['DC']['VM_OFF'] = $VC_TOTAL['DC']['VM_OFF'] + $line['VM_POWEROFF'];
		$VC_TOTAL['DC']['CAPACITY'] = $VC_TOTAL['DC']['CAPACITY'] + $line['VM_CP'];
	}
	/// cluster wise summary ///
	$VC_TOTAL['CLS']['HOST'] = 0;
	$VC_TOTAL['CLS']['CPU'] = 0;
	$VC_TOTAL['CLS']['MEM'] = 0;
	$VC_TOTAL['CLS']['VMS'] = 0;
	$VC_TOTAL['CLS']['VM_CPU'] = 0;
	$VC_TOTAL['CLS']['VM_MEM'] = 0;
	$VC_TOTAL['CLS']['VM_ON'] = 0;
	$VC_TOTAL['CLS']['VM_OFF'] = 0;
	$VC_TOTAL['CLS']['CAPACITY'] = 0;
	//echo "<pre>"; print_r($DCArray); echo "</pre>";
	foreach($ClsArray as $key => $line) {
		foreach($line as $myCLS => $ClsData) {
			$VC_TOTAL['CLS']['HOST'] = $VC_TOTAL['CLS']['HOST'] + $ClsData['HOST'];
			$VC_TOTAL['CLS']['CPU'] = $VC_TOTAL['CLS']['CPU'] + $ClsData['CPU']; 
			$VC_TOTAL['CLS']['MEM'] = $VC_TOTAL['CLS']['MEM'] + $ClsData['MEM'];
			$VC_TOTAL['CLS']['VMS'] = $VC_TOTAL['CLS']['VMS'] + $ClsData['VM_COUNT'];
			$VC_TOTAL['CLS']['VM_CPU'] = $VC_TOTAL['CLS']['VM_CPU'] + $ClsData['VM_CPU'];
			$VC_TOTAL['CLS']['VM_MEM'] = $VC_TOTAL['CLS']['VM_MEM'] + $ClsData['VM_MEM'];
			$VC_TOTAL['CLS']['VM_ON'] = $VC_TOTAL['CLS']['VM_ON'] + $ClsData['VM_POWERON'];
			$VC_TOTAL['CLS']['VM_OFF'] = $VC_TOTAL['CLS']['VM_OFF'] + $ClsData['VM_POWEROFF'];
			$VC_TOTAL['CLS']['CAPACITY'] = $VC_TOTAL['CLS']['CAPACITY'] + $ClsData['VM_CP'];
		}
	}
	
	//get DS reports from csv files
	list($DSSArray,)= DSStats($DATACENTER,$vCENTER_DATA);
	//echo "<pre>"; print_r($DSSArray); echo "</pre>";
	$TOTAL_DS_SIZE = 0;
	$TOTAL_DS_FREE = 0;
	$TOTAL_DS_COUNT = 0;
	foreach($DSSArray as $key => $line) {
		$TOTAL_DS_SIZE =  $TOTAL_DS_SIZE + $DSSArray[$key]['SIZE'];
		$TOTAL_DS_FREE =  $TOTAL_DS_FREE + $DSSArray[$key]['FREE'];
		$TOTAL_DS_COUNT =  $TOTAL_DS_COUNT + $DSSArray[$key]['COUNT'];
	}
	?>
	
	<div class="col-md-6">
		<!-- start: GLOBALSTATS PANEL -->
		<div class="panel panel-default">
			<div class="panel-heading"><i class="fa fa-eye"></i>Global Stats</div>
			<div class="panel-body">

				<div class="tabbable panel-tabs">
					<div class="tab-content">
							<?php 
							if(strtolower($_GET['type']) == "cls" ) {
								include_once('vcenter/global-chart-cls1.php');
								echo "<div id='global_vms1' style='width: 500px; height: 600px; margin: 0 auto'></div>";

								include_once('vcenter/global-chart-cls2.php');
								echo "<br><div id='global_esxi1' style='width: 500px; height: 600px; margin: 0 auto'></div>";

								include_once('vcenter/global-chart-cls3.php');
								echo "<br><div id='global_ds1' style='width: 500px; height: 300px; margin: 0 auto'></div>";
								
								include_once('vcenter/global-chart-cls4.php');
								echo "<br><div id='global_mem1' style='width: 500px; height: 250px; margin: 0 auto'></div>";
								
								include_once('vcenter/global-chart-cls5.php');
								echo "<br><div id='global_cpu1' style='width: 500px; height: 250px; margin: 0 auto'></div>";		
							} else {
								include_once('vcenter/global-chart-dc1.php');
								echo "<div id='global_vms' style='width: 500px; height: 300px; margin: 0 auto'></div>";
								//<div class='col-md-6' id='global_vms' style='min-width: 500px; height: 300px; margin: 0 auto'></div> -->
								
								include_once('vcenter/global-chart-dc2.php');
								echo "<br><div id='global_esxi' style='width: 500px; height: 300px; margin: 0 auto'></div>";

								include_once('vcenter/global-chart-dc3.php');
								echo "<br><div id='global_ds' style='width: 500px; height: 300px; margin: 0 auto'></div>";
								
								include_once('vcenter/global-chart-dc4.php');
								echo "<br><div id='global_mem' style='width: 500px; height: 250px; margin: 0 auto'></div>";
								
								include_once('vcenter/global-chart-dc5.php');
								echo "<br><div id='global_cpu' style='width: 500px; height: 250px; margin: 0 auto'></div>";
							}
							?>	
						
					</div>
				</div>			
			</div>
		</div>
		<!-- end: GLOBALSTATS PANEL -->
	</div>
	
	
	<div class="col-md-6">
		<!-- start: CapacityPlanning PANEL -->
		<div class="panel panel-default">
			<div class="panel-heading"><i class="fa fa-eye"></i>Capacity Planning (vCenter)</div>
			<div class="panel-body">

				<div class="tabbable panel-tabs">
					<div class="tab-content">
							<?php 
							if(strtolower($_GET['type']) == "cls" ) {
								include_once('vcenter/vc-capacity-chart1.php');
								echo "<div class='col-md-6' id='my_chart01' style='width: 250px; height: 250px; margin: 0 auto'></div>";
								include_once('vcenter/vc-capacity-chart2.php');
								echo "<div class='col-md-6' id='my_chart02' style='width: 250px; height: 250px; margin: 0 auto'></div>";
								include_once('vcenter/vc-capacity-chart-cls1.php');
								echo "<div class='col-md-6' id='capacity_vm1' style='min-width: 600px; max-width: 650px; height: 400px; margin: 0 auto'></div>";
								include_once('vcenter/vc-capacity-chart-cls2.php');
								echo "<div class='col-md-6' id='capacity_ds1' style='min-width: 600px; max-width: 650px; height: 350px; margin: 0 auto'></div>";
								include_once('vcenter/vc-capacity-chart-cls3.php');
								echo "<div class='col-md-6' id='esxi_cpumem1' style='min-width: 600px; height: 350px; margin: 0 auto'></div>";								
							} else {
								include_once('vcenter/vc-capacity-chart1.php');
								echo "<div class='col-md-6' id='my_chart01' style='width: 250px; height: 250px; margin: 0 auto'></div>";
								include_once('vcenter/vc-capacity-chart2.php');
								echo "<div class='col-md-6' id='my_chart02' style='width: 250px; height: 250px; margin: 0 auto'></div>";
								include_once('vcenter/vc-capacity-chart-dc1.php');
								echo "<div class='col-md-6' id='capacity_vm' style='min-width: 600px; max-width: 650px; height: 500px; margin: 0 auto'></div>";
								include_once('vcenter/vc-capacity-chart-dc2.php');
								echo "<div class='col-md-6' id='capacity_ds' style='min-width: 600px; max-width: 650px; height: 500px; margin: 0 auto'></div>";				include_once('vcenter/vc-capacity-chart-dc3.php');
								echo "<div class='col-md-6' id='esxi_cpumem' style='min-width: 600px; height: 350px; margin: 0 auto'></div>";
							}
							?>
					</div>
				</div>			
			</div>
		</div>
		<!-- end: CapacityPlanning PANEL -->
	</div>						
		
</div>
<!-- end: PAGE CONTENT-->	
