<?php
	//session 
	if(!isset($_SESSION['username'])) { header('Location: /404.html'); exit;  }

	if ($_GET['server']) {
		$host_name  = $_GET['server'];
		$myDC = $SFTP_DATA[$host_name]['DC'];
		$sftp_ipaddr =  $SFTP_DATA[$host_name]['SFTP_HOST'];

		// get sftp logs
		$logs_secure = SoapFunction($sftp_ipaddr, $soap_login, $soap_password, "Logs-Secure");
		if ($logs_secure == "SOAP_ERROR") { 
			echo "<div class='alert alert-danger'>";
				echo "<button data-dismiss='alert' class='close'>&times;</button>";
				echo "<i class='fa fa-times-circle'></i>";
				echo "<strong> SOAP ERROR!</strong> Please check Connectivity to SOAP Service or Code!";
			echo "</div>";
			exit;
		}
		/////
		$logs_messages = SoapFunction($sftp_ipaddr, $soap_login, $soap_password, "Logs-Messages");
		if ($logs_messages == "SOAP_ERROR") { 
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
		<form action="sftp.php" method="get" id='logs'>
		<div class="col-md-1"><h5> Select DC:<h5></div>
		<div class="col-sm-2">
				<select name='server' class="form-control" >
				<?php
					//foreach ($DATACENTER as $key => $arr_ref) {
						//echo "$key = ".$DATACENTER[$key]['NAME'];
					//	echo "<option value='.$key.'>".$DATACENTER[$key]['NAME']."</option>";
					//}
					foreach ($SFTP_DATA as $sftp_host => $sftp_ref) {
						$dc_name = $sftp_ref['DC'];
						if ($host_name == $sftp_host) {
							echo "<option value='".$sftp_host."' SELECTED>".$DATACENTER[$dc_name]['NAME']." (".$sftp_host.") </option>";
						} else { echo "<option value='".$sftp_host."'>".$DATACENTER[$dc_name]['NAME']." (".$sftp_host.") </option>"; }
					}					
				?>
				</select>
		</div>
			<input type='hidden' name='type' value='logs'>
			<div class="col-sm-2"><button class="btn btn-primary btn-sm save-event" type="submit"> <i class="clip-list"></i> Get logs</button></div>
		</form>				
</div></br>

<?php
if ($_GET['server']) { 
	echo "<h4>Log File: /var/log/secure</h4>";
	echo "<pre style='width: 90%;'>";
	foreach($logs_secure as $data) {
		print "$data<br>";
	}	
	echo "</pre><br>";

	echo "<h4>Log File: /var/log/messages</h4>";
	echo "<pre style='width: 90%;'>";
	foreach($logs_messages as $data) {
		print "$data<br>";
	}
	echo "</pre>";
}	
?>
