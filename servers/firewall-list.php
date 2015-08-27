<?php
	 //session 
	 if(!isset($_SESSION['username'])) { header('Location: /404.html'); exit;  }
	 
	if ($_GET['server']) {
		$host_name  = $_GET['server'];
		$myDC = $SFTP_DATA[$host_name]['DC'];
		$sftp_ipaddr =  $SFTP_DATA[$host_name]['SFTP_HOST'];		
		// get iptables rule
		$rule_list = SoapFunction($sftp_ipaddr, $soap_login, $soap_password, "IPTables");
		if ($rule_list == "SOAP_ERROR") { 
			echo "<div class='alert alert-danger'>";
				echo "<button data-dismiss='alert' class='close'>&times;</button>";
				echo "<i class='fa fa-times-circle'></i>";
				echo "<strong> SOAP ERROR!</strong> Please check Connectivity to SOAP Service or Code!";
			echo "</div>";
		exit;
		}
	}
	
?>
<div class="row">
		<form action="" method="get" id='get_rules'>
			<input type='hidden' name='type' value='firewall'>
		<div class="col-md-1"><h5> Select DC:<h5></div>
		<div class="col-sm-2">
				<select name='server' class="form-control" >
				<?php
					//foreach ($DATACENTER as $key => $arr_ref) {
						//echo "$key = ".$DATACENTER[$key]['NAME'];
					//	echo "<option value='.$key.'>".$DATACENTER[$key]['NAME']."</option>";
					//}
					echo "<option value=''>Select Datacenter</option>";
					foreach ($SFTP_DATA as $sftp_host => $stp_ref) {
						$dc_name = $stp_ref['DC'];
						if ($host_name == $sftp_host) {
							echo "<option value='".$sftp_host."' SELECTED>".$DATACENTER[$dc_name]['NAME']." (".$sftp_host.") </option>";
						} else { echo "<option value='".$sftp_host."'>".$DATACENTER[$dc_name]['NAME']." (".$sftp_host.") </option>"; }
					}					
				?>
				</select>
		</div>
		<div class="col-sm-1"><button class="btn btn-primary btn-sm save-event" type="submit"> <i class="clip-list"></i> Get Rules</button></div>		
		</form>
		<form action="" method="get" id='add_firewall'>
			<input type='hidden' name='type' value='add_firewall'>
			<div class="col-sm-1"><button class="btn btn-primary btn-sm save-event" type="submit"> <i class="clip-plus-circle-2"></i> Add Rule </button></div>
		</form>			
</div></br>

<?php
	$table_start = 0;
	foreach($rule_list as $data) {
		if (preg_match("/Chain/i", $data)) {
			if ($table_start == 2) { print "</tbody></table>"; }
			print "<br><br><span class='label label-info'>".$data."</span>"; 
			$table_start = 1;
			$myChain = preg_split("/[\s]+/", $data);
			//print "<br>Chain=".$myChain[1];
			
		//} elseif (!preg_match("/num\s+target\s+prot\s+opt\s+source\s+destination/i", $data)) {
		} else {
			if ($table_start == 1) { 
			  print "<table class='table table-striped table-bordered table-hover' style='width:80%'>";
					print "<thead>";
						print "<tr>";
							print "<th>Rule NO</th>";
							print "<th>Target</th>";
							print "<th>Protocol</th>";
							print "<th class='hidden-sm'>Whitelisted IPadddr or Network</th>";
							print "<th>Customer/Comment</th>";
							print "<th>Action</th>";
						print "</tr>";
					print "</thead>";
					print "<tbody>";
			  $table_start = 2;
			} else { 
				$rule_arr = preg_split("/[\s]+/", $data);
				$cust_temp = preg_split("|/\*|", $data);
				$Customer = preg_split("|\*/|", $cust_temp[1]);
				//print_r($rule_arr);
				print "<tr>";
				print "<td><a href='?type=update_firewall&server=".$host_name."&chain=".$myChain[1]."&rule_no=".$rule_arr[0]."'>".$rule_arr[0]."</a></td>";
				print "<td>".$rule_arr[1]."</td>";
				print "<td>".$rule_arr[2]."</td>";
				print "<td>".$rule_arr[4]."</td>";
				print "<td>".$Customer[0]."</td>";
					echo "<td class='center'>";
						echo "<div class='visible-md visible-lg hidden-sm hidden-xs'>";
							echo "<a data-original-title='Edit' data-placement='top' class='btn btn-xs btn-teal tooltips' href='#'><i class='fa fa-edit'></i></a>&nbsp;";
							echo "<a data-original-title='Disable' data-placement='top' class='btn btn-xs btn-bricky tooltips' href='#'><i class='fa fa-times fa fa-white'></i></a>";
						echo "</div>";
					echo "</td>";
				print "</tr>";
			}	
		}
	}	
?>					
</tbody></table>
