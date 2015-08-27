<?php 
	 //session 
	 if(!isset($_SESSION['username'])) { header('Location: /404.html'); exit;  }
 
	if ($_GET['type'] == "add_sftp") { 
		echo "<h3 style='text-decoration:underline;'>Add Account</h3>";
	} else { 
		echo "<h3 style='text-decoration:underline;'>Update Account</h3>"; 
		if ($_GET['server']) {
			$host_name  = $_GET['server'];
			$myDC = $SFTP_DATA[$host_name]['DC'];
			$sftp_ipaddr =  $SFTP_DATA[$host_name]['SFTP_HOST'];
		}		
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
		// get user data //
		foreach($sftp_Data as $data) {
			list($user, $user_desc, $homedir, $shell, $sshkey_count, $sftp_home) = split(":", $data);
			if ($_GET['user'] == $user) { 
				$UserDesc = $user_desc;
				$UserShell = $shell;
				break;
			}
		}		
		// end-user data //	
	}
?>
				<form  action='sftp.php?type=add_sftp' method='POST' role="form" class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-1 control-label" for="form-field-1">SFTP User</label>
						<div class="col-sm-3">
							<?php 
								if ($_GET['type'] == "add_sftp") { 
									echo "<input type='text' name='username' placeholder='Text Field' id='form-field-1' class='form-control' >";
								} else { echo "<input type='text' name='username' placeholder='Text Field' id='form-field-1' class='form-control' value='".$_GET['user']."'READONLY>"; }
							?>	
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-1 control-label" for="form-field-2">Password</label>
						<div class="col-sm-5">
							<input type="password"  name='password' placeholder="Password" id="form-field-2" class="form-control">
						</div>
					</div>
										
					<div class="form-group">
						<label class="col-sm-1 control-label" for="form-field-2">Customer Name</label>
						<div class="col-sm-5">
							<input type="text" name='customer' placeholder="" id="form-field-2" class="form-control" value="<?php echo $UserDesc;?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-1 control-label" for="form-field-2">Shell</label>
						<div class="col-sm-2">
						<?php
							echo "<select name='shell' class='form-control' id='form-field-3'>";
							if ($UserShell == "/bin/bash") {
									echo "<option value='/bin/bash' SELECTED>/bin/bash</option>";
									echo "<option value='/sbin/nologin'>/sbin/nologin (recommended)</option>";
								} else { 
									echo "<option value='/bin/bash'>/bin/bash</option>";
									echo "<option value='/sbin/nologin' SELECTED>/sbin/nologin (recommended)</option>"; 
								}
							echo "</select>";
						?>	
						</div>
					</div>
					
					<div class="form-group has-success">
						<label class="col-sm-1 control-label" for="form-field-3" >DataCenter</label>
						<div class="col-sm-3">
							<?php
								if ($_GET['type'] == "add_sftp") {
									echo "<select name='datacenter' class='form-control' id='form-field-3'>";
								} else { echo "<select name='datacenter' class='form-control' id='form-field-3' disabled='disabled'>"; }	
								foreach ($SFTP_DATA as $sftp_host => $stp_ref) {
									$dc_name = $stp_ref['DC'];
									if ($host_name == $sftp_host) {
										echo "<option value='".$sftp_host."' SELECTED>".$DATACENTER[$dc_name]['NAME']." (".$sftp_host.") </option>";
									} else { echo "<option value='".$sftp_host."'>".$DATACENTER[$dc_name]['NAME']." (".$sftp_host.") </option>"; }
								}
								echo "</select>";
							?>
						</div>
					</div>
					<?php
					
					//if ($_GET['type'] == "update_user") { 
					//	echo "<div class='form-group'>";
					//	echo "<label class='col-sm-1 control-label' for='form-field-6'>RSA Keys</label>";
					//	echo "<div class='col-sm-5'>";							
					//		echo "<textarea name='rsakey' class='form-control' id='form-field-6'  READONLY></textarea>"; 
					//	echo "</div>";
					//	echo "</div>";						
					//}
					
					  echo "<div class='col-sm-10'>";
							if ($_GET['type'] == "add_sftp") {  
							   echo "<button type='submit' name='submit' value='add_sftp' class='btn btn-primary save-event'> <i class='fa fa-check'></i> Add Account </button>";
							 } else  {
					?>	 
									<div class="form-group has-success">
										<label class="col-sm-1 control-label" for="form-field-4" >Status</label></label>
										<div class="col-sm-1">
											<span id="form-field-4" class="label label-sm label-success">OK</span>
										</div>
									</div>							 
						<?	
							echo "<button type='submit' name='submit' value='update_user' class='btn btn-primary save-event'> <i class='fa fa-check'></i> Update </button>"; 
							}
						?>	
						<button type='submit' class='btn btn-default'> <i class='fa fa-update'></i> Cancel </button>
					</div>
											
				</form>	
