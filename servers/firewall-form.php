<?php 
	 //session 
	 if(!isset($_SESSION['username'])) { header('Location: /404.html'); exit;  }

	if ($_GET['type'] == "add_firewall") { 
		echo "<h3 style='text-decoration:underline;'>Add Firewall Rule</h3>";
	} else { 
		echo "<h3 style='text-decoration:underline;'>Update Rule</h3>"; 
		if ($_GET['server']) {
			$host_name  = $_GET['server'];
			$myDC = $SFTP_DATA[$host_name]['DC'];
			$sftp_ipaddr =  $SFTP_DATA[$host_name]['SFTP_HOST'];
		}		
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
		// get user data //
		
		foreach($rule_list as $data) {
			if (preg_match("/Chain/i", $data)) {
				$myChain = preg_split("/[\s]+/", $data);
			} else {
					$rule_arr = preg_split("/[\s]+/", $data);
					$cust_temp = preg_split("|/\*|", $data);
					$Customer = preg_split("|\*/|", $cust_temp[1]);
					if ($myChain[1] == $_GET['chain'] && $rule_arr[0] == $_GET['rule_no']) {
						//print "<br>myChain=".$myChain[1];
						//print "<br>RuleNo=".$rule_arr[0];
						//print "<br>Dest=".$rule_arr[1];
						//print "<br>IP=".$rule_arr[4];
						//print "<br>Customer=".$Customer[0];
						break;
					}
			}
		}		
		// end-user data //		
	} //main-if

	
?>

<script language="javascript" type="text/javascript">
	<!-- Ajax start -->
	function fnGetAJAXrequestobject()
	{
		var browser = navigator.appName;
		if(browser == "Microsoft Internet Explorer")
		{
			return new ActiveXObject("Microsoft.XMLHTTP");
		}
		else
		{
			return new XMLHttpRequest();
		}
	}
	<!-- Ajax end -->
	<!-- select datacenter -->
	function select_dc(optionId) {
		var myselect = document.getElementById('datacenter').value;
	    /* alert(myselect); */
		if( myselect == "") {
		 document.getElementById('username').style.display= 'none';
		 return;
		}
		var ajax_request = fnGetAJAXrequestobject();
		strparams = "type=users&sftp_server=" + myselect ;
		var sUrl="myajax.php?"+strparams;

			ajax_request.onreadystatechange = function()
			{
					if(ajax_request.readyState == 4)
					{
							/* alert(ajax_request.responseText); */
							document.getElementById('username').style.display= 'block';
							document.getElementById('username').innerHTML='';
							document.getElementById('username').innerHTML=ajax_request.responseText;
					}
			}
			ajax_request.open("GET", sUrl, true);
			ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			ajax_request.send();
	}
	<!-- select datacenter end -->
	
</script>

				<form action='sftp.php' method='POST' role="form" class="form-horizontal">
					
					<div class="form-group has-success">
						<label class="col-sm-1 control-label" for="form-field-3" >DataCenter</label>
						<div class="col-sm-3">
								<?php
									if ($_GET['type'] == "update_firewall") { 
										print "<select name='datacenter' class='form-control' id='datacenter' onChange='select_dc(this.formValueId)' disabled='disabled'>";
									} else { print "<select name='datacenter' class='form-control' id='datacenter' onChange='select_dc(this.formValueId)'>"; }
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
					</div>
										
					<div class="form-group">
						<label class="col-sm-1 control-label" for="form-field-1">SFTP User</label>
						<div id="username" class="col-sm-3" style='display: block'>
								<select name='username' class="form-control" >
								</select>
						</div>
						<span class="help-block"><i class="fa fa-info-circle"></i> sftp user name will be appended to comment</span>
					</div>
					
					<div class="form-group">
						<label class="col-sm-1 control-label" for="form-field-2">Comment</label>
						<div class="col-sm-5">
							<input type="text"  name='comment' placeholder="Comment" id="form-field-2" class="form-control" value="<?php echo $Customer[0]; ?>">
						</div>
					</div>
										
					<div class="form-group">
						<label class="col-sm-1 control-label" for="form-field-2">IPAddress</label>
						<div class="col-sm-4">
							<input type="text" name='ipaddr' placeholder="ipaddr" id="form-field-2" class="form-control" value="<?php echo $rule_arr[4]; ?>">
							<span class="help-block"><i class="fa fa-info-circle"></i> Source IPAddr to whitelist like A.B.C.D/24</span>
						</div>						
					</div>

					<div class="form-group">
						<label class="col-sm-1 control-label" for="form-field-1">Target</label>
						<div id="target" class="col-sm-2">
							<select name='target' class="form-control" >
							<?php 
								if ($rule_arr[1] == "REJECT") {
									print "<option value='DROP'>DROP</option>";
									print "<option value='ACCEPT'>ACCEPT</option>";
									print "<option value='REJECT' SELECTED>REJECT</option>";
								} elseif ($rule_arr[1] == "ACCEPT") {
									print "<option value='DROP'>DROP</option>";
									print "<option value='ACCEPT' SELECTED>ACCEPT</option>";
									print "<option value='REJECT'>REJECT</option>";
								} else {
									print "<option value='DROP' SELECTED>DROP</option>";
									print "<option value='ACCEPT'>ACCEPT</option>";
									print "<option value='REJECT'>REJECT</option>";
								}
							?>	
							</select>
						</div>
					</div><br>
					
					<div class="col-sm-10">
						
						<?php 
							if ($_GET['type'] == "add_firewall") {  
							   echo "<button type='submit' name='submit' value='add_rule' class='btn btn-primary save-event'> <i class='fa fa-check'></i> Add Rule </button>";
							 } elseif ($_GET['type'] == "update_firewall")  {
							   echo "<span><b>Rule NO: </b>".$_GET['rule_no']."</span><br>";
							   echo "<span><b>ChainName: </b>".$_GET['chain']."</span><br><br>";
							   echo "<input type='hidden' name='rule_no' class='form-control' value=".$_GET['rule_no'].">";
							   echo "<input type='hidden' name='chain' class='form-control' value=".$_GET['chain'].">";
							   echo "<button type='submit' name='submit' value='update_rule' class='btn btn-primary save-event'> <i class='fa fa-check'></i> Update Rule</button>&nbsp;"; 
							   echo "<button type='submit' name='submit' value='remove_rule' class='btn btn-primary btn-bricky'> <i class='clip-remove'></i> Remove Rule</button>"; 
							}
						?>	
						<button type='submit' class='btn btn-default'> <i class='fa fa-update'></i> Cancel </button>
					</div>
											
				</form>	
