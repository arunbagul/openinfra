<?php
	 //session 
	 if(!isset($_SESSION['username'])) { header('Location: /404.html'); exit;  }
	
	// dc and soap fuction
	include_once('config_dc.php');
    include_once('sftp-code/soap-sftp.php');

if ($_GET['type'] == "users") {
	// list Users using ajax
	//login details
	$soap_login = "soapapi";
	$soap_password = "RjaR8n7_S6A9";			
	$host_name  = $_GET['sftp_server'];
	$myDC = $SFTP_DATA[$host_name]['DC'];
	$sftp_ipaddr =  $SFTP_DATA[$host_name]['SFTP_HOST'];

	// get sftp data
	$sftp_Data = SoapFunction($sftp_ipaddr, $soap_login, $soap_password, "User");
	if ($sftp_Data == "SOAP_ERROR") { 
		echo "<span id='datacenter'><strong> SOAP ERROR!</strong> Please check Connectivity to SOAP Service or Code! </span>";
		exit;
	}
	// I got data from soap user
	echo "<select id='sftp_user' name='username' class='form-control'>";
	foreach($sftp_Data as $data) {
		list($user, $user_desc, $homedir, $shell, $sshkey_count, $sftp_home) = explode(":", $data);
		if ($user_desc != NULL) {
			echo "<option value=".$user.">".$user." (".$user_desc.")</option>";
		} else { echo "<option value=".$user.">".$user."</option>"; }
	}
	echo "</select>";
	
} elseif  ($_GET['type'] == "ssh_keys") {
	// get ssh key for user using ajax
	//login details
	$soap_login = "soapapi";
	$soap_password = "RjaR8n7_S6A9";			
	$host_name  = $_GET['sftp_server'];
	$myDC = $SFTP_DATA[$host_name]['DC'];
	$sftp_ipaddr =  $SFTP_DATA[$host_name]['SFTP_HOST'];
	//get sshkeys
	$Ssh_key = SoapFunction($sftp_ipaddr, $soap_login, $soap_password, "SSH_Keys", $_GET['user'], "--catfile", "key");
	if ($Ssh_key == "SOAP_ERROR") { 
		echo "<span id='datacenter'><strong> SOAP ERROR!</strong> Please check Connectivity to SOAP Service or Code! </span>";
		exit;
	}
	$KeyFilePath = $Ssh_key[0];
	unset($Ssh_key[0]);
	$RSAKey = implode("\n", $Ssh_key); 
	//echo "<div id='KEY_TEXT'  style='display: block' class='col-sm-20'>";
		echo "<span><b>RSA ".$KeyFilePath."</b></span>";
		echo "<textarea name='rsakey' class='form-control'  id='form-field-6' style='width: 900px; height: 250px;'>".$RSAKey."</textarea>";
	//echo "</div>";	
}
	
?>
