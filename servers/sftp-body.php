<?php
	 //session 
	 if(!isset($_SESSION['username'])) { header('Location: /404.html'); exit;  }
?>
<!-- start: PAGE CONTENT -->
<div class="row">
	<div class="col-md-12">
		
	<!-- <div class="page-header"> <h3>Add User<small>user profile page</small></h3></div> -->
		
		<!-- start: DYNAMIC TABLE PANEL -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-external-link-square"></i>
				SFTP Server
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

			<!-- sftp menu: start -->
			<div class="row">
			<div class="col-md-7">&nbsp;</div>
				<div class="col-md-5">
					<a style="text-decoration:underline;" href="?type=add_sftp" ><i class="clip-user"></i>Add Account</a> | 
					<a style="text-decoration:underline;" href="?type=firewall" ><i class="clip-network"></i>Firewall</a> | 
					<a style="text-decoration:underline;" href="?type=ssh_keys" ><i class="clip-key"></i>SSH Keys</a> | 
					<a style="text-decoration:underline;" href="?type=logs" ><i class="clip-stack"></i>Logs</a> | 
					<a style="text-decoration:underline;" href="?type=reports" ><i class="clip-health"></i>Reports</a>

				</div>
			</div><hr>
			<!-- sftp menu: end -->
											
		<?php
		  if (($_GET['type'] == 'add_sftp') or ($_GET['type'] == 'update_user')) {
			   include_once('account-form.php');
		  } else	if (($_GET['type'] == 'add_firewall') or ($_GET['type'] == 'update_firewall')) {
		  		include_once('firewall-form.php');
		  } elseif ($_GET['type'] == 'firewall') {
		  		include_once('firewall-list.php');
		  } elseif ($_GET['type'] == 'logs') {
		  		include_once('sftp-logs.php');
		  } elseif ($_GET['type'] == 'ssh_keys') {
		  		include_once('sftp-sshkeys.php');			  			  			  		
		  } else {
				include_once('account-list.php');
	     } 
	   ?>
				
			</div>
		</div>
		<!-- end: DYNAMIC TABLE PANEL -->
	</div>
</div>
<!-- end: PAGE CONTENT-->
