<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
<?php

	include_once('header.php');
	include_once('config_dc.php');
	// soap fuction
    include_once('sftp-code/soap-sftp.php');

	//login details
	$soap_login = "soapapi";
	$soap_password = "RjaR8n7_S6A9";	
?>

<!-- ------------------------------- POST DATA ------------------------------- -->
<?php

//echo "<br><br><br>username: ".$_POST['username'];
//echo "<br>password: ".$_POST['password'];
//echo "<br>customer: ".$_POST['customer'];
//echo "<br>datacenter: ".$_POST['datacenter'];
//echo "<br>rsakey: ".$_POST['rsakey'];
//echo "<br>ipaddr: ".$_POST['ipaddr'];
//echo "<br>rule_no: ".$_POST['rule_no'];
//echo "<br>shell: ".$_POST['shell'];
//echo "<br>submit: ".$_POST['submit'];
if ($_POST['username']) {
	//$STATUS = "SUCCESS";
	//$STATUS = "FAIL";
	//SSH Keys
	if ($_POST['submit'] == 'ssh_keys') {
		//send sshkeys
		$host_name = $_POST['datacenter'];
		$sftp_ipaddr =  $SFTP_DATA[$host_name]['SFTP_HOST'];
		if (($_POST['username']) && ($_POST['rsakey'])) {
			$RSAData = str_replace( chr(13),"\n", $_POST['rsakey']);
			$Result = SoapFunction($sftp_ipaddr, $soap_login, $soap_password, "SSH_Keys", $_POST['username'], "--editfile", $RSAData);
			list($Key,$Value) =  explode('=', $Result[0]);
			if ((trim($Key) == "Result") && (trim($Value) == "SUCCESS")) { $STATUS = "SUCCESS"; } else { $STATUS = "FAIL"; }
		} else { $STATUS = "FAIL";}
	}
	if ($_POST['submit'] == 'add_sftp') {
		//add_sftp
		$host_name = $_POST['datacenter'];
		$sftp_ipaddr =  $SFTP_DATA[$host_name]['SFTP_HOST'];
		if (($_POST['username']) && ($_POST['password'])) {
			$Result = SoapFunction($sftp_ipaddr, $soap_login, $soap_password, "Account", $_POST['username'], "--add", $_POST['password'], $_POST['customer'], $_POST['shell']);
			print "<br><br><br>Welcome-";
			print_r($Result);
			list($Key,$Value) =  explode(',', $Result[0]);
			print "<br>Test:".$Key;
			if ((trim($Key) == "Result") && (trim($Value) == "SUCCESS")) { $STATUS = "SUCCESS"; } else { $STATUS = "FAIL"; }
		} else { $STATUS = "FAIL";}
	}
	if ($_POST['submit'] == 'update_user') {
		//update_user
		$host_name = $_POST['datacenter'];
		$sftp_ipaddr =  $SFTP_DATA[$host_name]['SFTP_HOST'];
		if ($_POST['username']) {
			$Result = SoapFunction($sftp_ipaddr, $soap_login, $soap_password, "Account", $_POST['username'], "--edit", $_POST['password'], $_POST['customer'], $_POST['shell']);
			list($Key,$Value) =  explode('=', $Result[0]);
			if ((trim($Key) == "Result") && (trim($Value) == "SUCCESS")) { $STATUS = "SUCCESS"; } else { $STATUS = "FAIL"; }
		} else { $STATUS = "FAIL";}
	}
	
}

?>
<!-- ---------------------------------------------------------------------------- -->

	<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
	<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2.css" />
	<link rel="stylesheet" href="assets/plugins/DataTables/media/css/DT_bootstrap.css" />
	<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		
	<!-- start: BODY -->
	<body class='navigation-small'>

		<?php
			include_once('header-top.php');
		?>		
		
		<!-- start: MAIN CONTAINER -->
		<div class="main-container">
		
			<?php
				//page name
				$PAGE_NAME = "Servers";				
				include_once('sidebar.php');
			?>
			
			<!-- start: PAGE -->
			<div class="main-content">
				<div class="container">

				<!-- start: PAGE HEADER -->
				<div class="row">
					<div class="col-sm-12">
					
						<!-- start: PAGE TITLE & BREADCRUMB -->
						<ol class="breadcrumb">
							<li>
								<i class="clip-home-3"></i>
								<a href='dashboard.php'>Home</a>
							</li>
							<li><a href='sftp.php'>Server</a></li>							
							<li class='active'>SFTP</li>
							<li class="search-box">
								<form class="sidebar-search">
									<div class="form-group">
										<input type="text" placeholder="Start Searching...">
										<button class="submit">
											<i class="clip-search-3"></i>
										</button>
									</div>
								</form>
							</li>
						</ol>
						<br>
						<!-- end: PAGE TITLE & BREADCRUMB -->
					</div>
				</div>
				<!-- end: PAGE HEADER -->

					<!-- start: PAGE CONTENT -->
					<?php
						/////////////////////// add sftp account ////////////////////////
						if (($_POST['submit'] == 'add_sftp') && ($STATUS == "SUCCESS")) {
							echo "<div class='alert alert-success'><button class='close' data-dismiss='alert'>×</button>";
							echo "<i class='fa fa-check-circle'></i>";
							echo " User <strong>".$_POST['username']."</strong> (".$_POST['customer'].") added successfully!</div>";
						} elseif(($_POST['submit'] == 'add_sftp') && ($STATUS == "FAIL")) {
							echo "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>×</button>";
							echo "<i class='fa fa-times-circle'></i>";
							echo " Failed to Add User <strong>".$_POST['username']."</strong> (".$_POST['customer'].")</div>";
						}
						/////////////////////// update sftp account /////////////////////
						if (($_POST['submit'] == 'update_user') && ($STATUS == "SUCCESS")) {
							echo "<div class='alert alert-success'><button class='close' data-dismiss='alert'>×</button>";
							echo "<i class='fa fa-check-circle'></i>";
							echo " User <strong>".$_POST['username']."</strong> (".$_POST['customer'].") updated successfully!</div>";
						} elseif(($_POST['submit'] == 'update_user') && ($STATUS == "FAIL")) {
							echo "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>×</button>";
							echo "<i class='fa fa-times-circle'></i>";
							echo " Failed to Update User <strong>".$_POST['username']."</strong> (".$_POST['customer'].")</div>";
						}
						/////////////////////// add firewall account ////////////////////////
						if (($_POST['submit'] == 'add_rule') && ($STATUS == "SUCCESS")) {
							echo "<div class='alert alert-success'><button class='close' data-dismiss='alert'>×</button>";
							echo "<i class='fa fa-check-circle'></i>";
							echo " IPAddress <strong>".$_POST['ipaddr']."</strong> (".$_POST['username'].") Whitelisted successfully!</div>";
						} elseif(($_POST['submit'] == 'add_rule') && ($STATUS == "FAIL")) {
							echo "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>×</button>";
							echo "<i class='fa fa-times-circle'></i>";
							echo " Failed to Whitelist IPAddress <strong>".$_POST['ipaddr']."</strong> (".$_POST['username'].")</div>";
						}						
						///////////////////// update firewall account ///////////////////////
						if (($_POST['submit'] == 'update_rule') && ($STATUS == "SUCCESS")) {
							echo "<div class='alert alert-success'><button class='close' data-dismiss='alert'>×</button>";
							echo "<i class='fa fa-check-circle'></i>";
							echo " IPtables Rule NO: <strong> ".$_POST['rule_no']." (".$_POST['ipaddr'].")</strong> for ".$_POST['username']." Updated successfully!</div>";
						} elseif(($_POST['submit'] == 'update_rule') && ($STATUS == "FAIL")) {
							echo "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>×</button>";
							echo "<i class='fa fa-times-circle'></i>";
							echo " Failed to Update IPtables Rule NO: <strong> ".$_POST['rule_no']." (".$_POST['ipaddr'].")</strong> for ".$_POST['username']."</div>";
						}
						///////////////////// ssh keys ///////////////////////
						if (($_POST['submit'] == 'ssh_keys') && ($STATUS == "SUCCESS")) {
							echo "<div class='alert alert-success'><button class='close' data-dismiss='alert'>×</button>";
							echo "<i class='fa fa-check-circle'></i>";
							echo " Successfully added/updated SSH Public key for <strong>".$_POST['username']."</strong> user!</div>";
						} elseif(($_POST['submit'] == 'ssh_keys') && ($STATUS == "FAIL")) {
							echo "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>×</button>";
							echo "<i class='fa fa-times-circle'></i>";
							echo " Failed to add/update SSH Public key for <strong>".$_POST['username']."</strong> user!</div>";
						}									
						///////////////////// 												
						include_once('servers/sftp-body.php');
					?>
					<!-- end: PAGE CONTENT-->					
					
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
		
			<?php
				include_once('footer.php'); 
			?>
		
		<div id="event-management" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title">Event Management</h4>
					</div>
					<div class="modal-body"></div>
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-light-grey">
							Close
						</button>
						<button type="button" class="btn btn-danger remove-event no-display">
							<i class='fa fa-trash-o'></i> Delete Event
						</button>
						<button type='submit' class='btn btn-success save-event'>
							<i class='fa fa-check'></i> Save
						</button>
					</div>
				</div>
			</div>
		</div>
		
		<?php
			include_once('javascripts.php'); 
		?>
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
		<script type="text/javascript" src="assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>
		<script src="assets/js/table-data.js"></script>		
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				TableData.init();
			});
		</script>
		
	</body>
	<!-- end: BODY -->

</html>
