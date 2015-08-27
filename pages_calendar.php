<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
<?php
	include_once('header.php');
?>

		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link href="assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
		<link href="assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css">
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		
	<!-- start: BODY -->
	<body class='navigation-small'>

		<?php
			include_once('header-top.php');
		?>		
		
		<!-- start: MAIN CONTAINER -->
		<div class="main-container">
		
			<?php
				include_once('sidebar.php');
			?>
			
			<!-- start: PAGE -->
			<div class="main-content">
				<div class="container">
					<?php
						include_once('header-menu.php');
					?>
					<!-- start: PAGE CONTENT -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
							<!-- start: FULL CALENDAR PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-calendar"></i>
									Full Calendar
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
									<div class="col-sm-9">
										<div id='calendar'></div>
									</div>
									<div class="col-sm-3">
										<h4>Draggable categories</h4>
										<div id="event-categories">
											<div class="event-category label-green" data-class="label-green">
												<i class="fa fa-move"></i>
												Home
											</div>
											<div class="event-category label-default" data-class="label-default">
												<i class="fa fa-move"></i>
												Work
											</div>
											<div class="event-category label-purple" data-class="label-purple">
												<i class="fa fa-move"></i>
												Holidays
											</div>
											<div class="event-category label-orange" data-class="label-orange">
												<i class="fa fa-move"></i>
												Party
											</div>
											<div class="event-category label-yellow" data-class="label-yellow">
												<i class="fa fa-move"></i>
												Birthday
											</div>
											<div class="event-category label-teal" data-class="label-teal">
												<i class="fa fa-move"></i>
												Generic
											</div>
											<div class="event-category label-beige" data-class="label-beige">
												<i class="fa fa-move"></i>
												To Do
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" class="grey" id="drop-remove" />
													Remove after drop
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end: FULL CALENDAR PANEL -->
						</div>
					</div>
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
		<script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
		<script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
		<script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.js"></script>
		<script src="assets/js/form-calendar.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Calendar.init();
			});
		</script>
		
	</body>
	<!-- end: BODY -->

</html>
