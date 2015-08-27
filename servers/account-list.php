<?php
	//session 
	if(!isset($_SESSION['username'])) { header('Location: /404.html'); exit;  }

	if ($_GET['server']) {
		$host_name  = $_GET['server'];
		$myDC = $SFTP_DATA[$host_name]['DC'];
		$sftp_ipaddr =  $SFTP_DATA[$host_name]['SFTP_HOST'];

		// get sftp data
		$sftp_Data = SoapFunction($sftp_ipaddr, $soap_login, $soap_password, "User");
		if ($sftp_Data == "SOAP_ERROR") { 
			echo "<div class='alert alert-danger'>";
				echo "<button data-dismiss='alert' class='close'>&times;</button>";
				echo "<i class='fa fa-times-circle'></i>";
				echo "<strong> SOAP ERROR!</strong> Please check Connectivity to SOAP Service or Code!";
			echo "</div>";
			exit;
		}
	} //if-loop

?>

<div class="row">	
		<div class="col-md-1"><h5>Select DC:<h5></div>
		<div class="col-sm-2">
		<form action="" method="get" id='get_rules'>		
				<select name='server' class="form-control" >
				<?php
				//	foreach ($DATACENTER as $key => $arr_ref) {
				//		//echo "$key = ".$DATACENTER[$key]['NAME'];
				//		echo "<option value='.$key.'>".$DATACENTER[$key]['NAME']."</option>";
				//	}
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
			<div class="col-sm-2"><button class="btn btn-primary btn-sm save-event" type="submit"> <i class="clip-list"></i> Get Accounts</button></div>
		</form>		
</div></br>

<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
	<thead>
		<tr>
			<th>SFTP User</th>
			<th class="hidden-xs">Customer Name</th>
			<th>DataCenter</th>
			<th>SFTP Home</th>
			<th>Shell</th>
			<th>RSA Key</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
		foreach($sftp_Data as $data) {
			list($user, $user_desc, $homedir, $shell, $sshkey_count, $sftp_home) = split(":", $data);
			//print "<br>OK-- $user, $user_desc, $homedir, $shell, $sshkey_count";
			echo "<tr>";
				echo "<td><a href='?type=update_user&server=".$host_name."&user=".$user."'>".$user."</a></td>";
				echo "<td class='hidden-xs'>".$user_desc."</td>";
				echo "<td>".$myDC."</td>";
				echo "<td>".$sftp_home."</td>";
				echo "<td>".$shell."</td>";
				echo "<td>".$sshkey_count."</td>";
				echo "<td><span class='label label-sm label-success'>OK</span></td>";
				echo "<td class='center'>";
				echo "<div class='visible-md visible-lg hidden-sm hidden-xs'>";
					echo "<a data-original-title='Edit' data-placement='top' class='btn btn-xs btn-teal tooltips' href='#'><i class='fa fa-edit'></i></a>&nbsp;";
					echo "<a data-original-title='Disable' data-placement='top' class='btn btn-xs btn-bricky tooltips' href='#'><i class='fa fa-times fa fa-white'></i></a>";
				echo "</div>";
				echo "</td>";
			echo "</tr>";
		}
	?>		
	</tbody>
</table>