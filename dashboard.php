<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
<?php
	include_once('header.php');
	include_once('javascripts.php'); 
?>

	<!-- start: BODY -->
	<body class='navigation-small'>

		<?php
			include_once('header-top.php');
		?>		
		
		<!-- start: MAIN CONTAINER -->
		<div class="main-container">
		
			<?php
				//page name
				$PAGE_NAME = "Dashboard";
				include_once('sidebar.php');
			?>
			
			<!-- start: PAGE -->
			<div class="main-content">
			<div class="container">
					<?php
						include_once('header-menu.php');
					?>
					<!-- start: PAGE CONTENT -->
						<div class="row">
						<div class="col-md-6">
							<!-- start: NOTIFICATION PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-eye"></i>
									 Infrastructure
									<div class="panel-tools">
										<a href="#" class="btn btn-xs btn-link panel-collapse collapses">
										</a>
										<a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
											<i class="fa fa-wrench"></i>
										</a>
										<a href="#" class="btn btn-xs btn-link panel-refresh">
											<i class="fa fa-refresh"></i>
										</a>
										<a href="#" class="btn btn-xs btn-link panel-expand">
											<i class="fa fa-resize-full"></i>
										</a>
										<a href="#" class="btn btn-xs btn-link panel-close">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
									
									<?php include_once('infra-chart1.php'); ?>
									<div class='col-md-6' id='mychart_host' style='min-width: 200px; height: 200px; margin: 0 auto'></div>

									<?php include_once('infra-chart2.php'); ?>
									<div class='col-md-6' id='mychart_services' style='min-width: 200px; height: 200px; margin: 0 auto'></div>
				
								</div>
							</div>
							<!-- end: NOTIFICATION PANEL -->
							
							
								</div>
						
						
						<div class="col-md-6">
								<!-- start: PROGRESS BARS PANEL -->
								<div class="panel panel-default">
									<div class="panel-heading">
										<i class="fa fa-tasks"></i>
										Cloud Applications
										<div class="panel-tools">
											<a href="#" class="btn btn-xs btn-link panel-collapse collapses">
											</a>
											<a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
												<i class="fa fa-wrench"></i>
											</a>
											<a href="#" class="btn btn-xs btn-link panel-refresh">
												<i class="fa fa-refresh"></i>
											</a>
											<a href="#" class="btn btn-xs btn-link panel-expand">
												<i class="fa fa-resize-full"></i>
											</a>
											<a href="#" class="btn btn-xs btn-link panel-close">
												<i class="fa fa-times"></i>
											</a>
										</div>
									</div>
									<div class="panel-body">
	
										<?php include_once('apps-chart1.php'); ?>
									 	<div class='col-md-6' id='my_chart01' style='min-width: 200px; height: 200px; margin: 0 auto'></div>
				
										<?php include_once('apps-chart2.php'); ?>
										<div class='col-md-6' id='my_chart02' style='min-width: 200px; height: 200px; margin: 0 auto'></div>
								
									</div>
								</div>
								<!-- end: PROGRESS BARS PANEL -->
							</div>
														
							
					</div>
					<!-- end: PAGE CONTENT-->					
				

					<div class="row">
						<div class="col-sm-12">
							<!-- start: DYNAMIC PAGINATION PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-tags"></i>
									Foundational Services
									<div class="panel-tools">
										<a href="#" class="btn btn-xs btn-link panel-collapse collapses">
										</a>
										<a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
											<i class="fa fa-wrench"></i>
										</a>
										<a href="#" class="btn btn-xs btn-link panel-refresh">
											<i class="fa fa-refresh"></i>
										</a>
										<a href="#" class="btn btn-xs btn-link panel-expand">
											<i class="fa fa-resize-full"></i>
										</a>
										<a href="#" class="btn btn-xs btn-link panel-close">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">

									<?php include_once('myservices-mail.php'); ?>
									<div class='col-md-1' id='mychart_mail' style='min-width: 140px; height: 150px; margin: 0 auto'></div>
									<?php include_once('myservices-sftp.php'); ?>
									<div class='col-md-1' id='mychart_sftp' style='min-width: 140px; height: 150px; margin: 0 auto'></div>
									<?php include_once('myservices-ntp.php'); ?>
									<div class='col-md-1' id='mychart_ntp' style='min-width: 140px; height: 150px; margin: 0 auto'></div>
									<?php include_once('myservices-storage.php'); ?>
									<div class='col-md-1' id='mychart_storage' style='min-width: 140px; height: 150px; margin: 0 auto'></div>
									<?php include_once('myservices-fs.php'); ?>
									<div class='col-md-1' id='mychart_fs' style='min-width: 140px; height: 150px; margin: 0 auto'></div>
									<?php include_once('myservices-nfs.php'); ?>
									<div class='col-md-1' id='mychart_nfs' style='min-width: 140px; height: 150px; margin: 0 auto'></div>
									<?php include_once('myservices-db.php'); ?>
									<div class='col-md-1' id='mychart_db' style='min-width: 140px; height: 150px; margin: 0 auto'></div>
																	  
								</div>
							</div>
							<!-- end: DYNAMIC PAGINATION PANEL -->
						</div>

					
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
		
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="assets/plugins/flot/jquery.flot.js"></script>
		<script src="assets/plugins/flot/jquery.flot.pie.js"></script>
		<script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
		<script src="assets/plugins/jquery.sparkline/jquery.sparkline.js"></script>
		<script src="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.js"></script>
		<script src="assets/js/index.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Index.init();
			});
		</script>
	</body>
	<!-- end: BODY -->

</html>
