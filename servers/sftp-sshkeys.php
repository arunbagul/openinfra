<?php
	//session 
	if(!isset($_SESSION['username'])) { header('Location: /404.html'); exit;  }

	if ($_GET['type'] == "ssh_keys") { 
		echo "<h3 style='text-decoration:underline;'>Add SSH Keys</h3>";
	} else { echo "<h3 style='text-decoration:underline;'>Update SSH Keys</h3>"; }

	if ($_GET['server']) {
		$host_name  = $_GET['server'];
	}
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
		 document.getElementById('GET_KEYS').style.display= 'none';
		 document.getElementById('KEY_TEXT').style.display= 'none';
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
							document.getElementById('GET_KEYS').style.display= 'block';
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

	<!-- get ssh key file -->
	function ssh_keyFile(optionId) {
		var myselect = document.getElementById('datacenter').value;
		var myuser = document.getElementById('sftp_user').value;
		var ajax_request = fnGetAJAXrequestobject();
		strparams = "type=ssh_keys&sftp_server=" + myselect + '&user=' + myuser;
		var sUrl="myajax.php?"+strparams;

			ajax_request.onreadystatechange = function()
			{
					if(ajax_request.readyState == 4)
					{
							/* alert(ajax_request.responseText); */
							 document.getElementById('KEY_TEXT').style.display= 'block';
							document.getElementById('KEY_TEXT').innerHTML='';
							document.getElementById('KEY_TEXT').innerHTML=ajax_request.responseText;
					}
			}
			ajax_request.open("GET", sUrl, true);
			ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			ajax_request.send();
	}
	<!-- get ssh key file end -->
	
</script>


			<form action='sftp.php?type=ssh_keys' method='POST' role="form" class="form-horizontal">
				<div class="form-group">
					<label class="col-sm-1 control-label" for="form-field-3" >Select DC</label>
					<div class="col-sm-2">
							<select name='datacenter' class="form-control" id="datacenter" onChange="select_dc(this.formValueId)">
							<?php
								//foreach ($DATACENTER as $key => $arr_ref) {
									//echo "$key = ".$DATACENTER[$key]['NAME'];
									//echo "<option value='.$key.'>".$DATACENTER[$key]['NAME']."</option>";
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
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label" for="form-field-3" >Select User</label>
					<div id="username" class="col-sm-3" style='display: none'>
						<select name='username' class="form-control" >
						</select>
					</div>
				</div>

				<div class="form-group">
				<label class="col-sm-1 control-label" for="form-field-6">&nbsp;</label>
				<div  id='GET_KEYS' style='display: none' class="col-sm-2"><a class="btn btn-primary btn-sm save-event" onClick="ssh_keyFile(this.formValueId)"> <i class="fa fa-download"></i> Get SSH Keys</a></div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-1 control-label" for="form-field-6">RSA Keys</label>
					<div id='KEY_TEXT'  style='display: none' class="col-sm-5">
						<span>RSA Keys File: </span>
						<textarea name='rsakey' class="form-control" style='width: 900px; height: 250px;'></textarea>
					</div>	
				</div>

				<div class="col-sm-10">								 
					<button type='submit' name='submit' value='ssh_keys' class='btn btn-primary save-event'> <i class='fa fa-check'></i> Update </button>
					<button type='submit' class='btn btn-default'> <i class='fa fa-update'></i> Cancel </button>
				</div>
										
			</form>	
