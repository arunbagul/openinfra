<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
<?php
	include_once('header.php');
?>
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
						<div class="col-md-12">
							<!-- start: TIMELINE PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Timeline
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
									<div id="timeline" class="demo1">
										<div class="timeline">
											<div class="spine"></div>
											<div class="date_separator">
												<span>NOVEMBER 2013</span>
											</div>
											<ul class="columns">
												<li>
													<div class="timeline_element teal">
														<div class="timeline_title">
															<span class="timeline_label">Event Title</span><span class="timeline_date">03 November 2013</span>
														</div>
														<div class="content">
															<b>TEST</b> TEST11nly five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
														</div>
														<div class="readmore">
															<a href="#" class="btn btn-info">
																Read More <i class="fa fa-arrow-circle-right"></i>
															</a>
														</div>
													</div>
												</li>
												<li>
													<div class="timeline_element green">
														<div class="timeline_title">
															<span class="timeline_label">Event Title</span><span class="timeline_date">11 November 2013</span>
														</div>
														<div class="content">
															<b>TEST</b> TEST11nly five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
														</div>
														<div class="readmore">
															<a href="#" class="btn btn-bricky">
																Read More <i class="fa fa-arrow-circle-right"></i>
															</a>
														</div>
													</div>
												</li>
											</ul>
											<div class="date_separator">
												<span>DECEMBER 2013</span>
											</div>
											<ul class="columns">
												<li>
													<div class="timeline_element bricky">
														<div class="timeline_title">
															<span class="timeline_label">Event Title</span><span class="timeline_date">08 December 2013</span>
														</div>
														<div class="content">
															<b>TEST</b> TEST11nly five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
														</div>
														<div class="readmore">
															<a href="#" class="btn btn-warning">
																Read More <i class="fa fa-arrow-circle-right"></i>
															</a>
														</div>
													</div>
												</li>
												<li>
													<div class="timeline_element purple">
														<div class="timeline_title">
															<span class="timeline_label">Event Title</span><span class="timeline_date">12 December 2013</span>
														</div>
														<div class="content">
															<b>TEST</b> TEST11
														</div>
														<div class="readmore">
															<a href="#" class="btn btn-dark-grey">
																Read More <i class="fa fa-arrow-circle-right"></i>
															</a>
														</div>
													</div>
												</li>
												<li>
													<div class="timeline_element">
														<div class="timeline_title">
															<span class="timeline_label">Event Title</span><span class="timeline_date">16 December 2013</span>
														</div>
														<div class="content">
															<b>TEST</b> TEST1
														</div>
														<div class="readmore">
															<a href="#" class="btn btn-info">
																Read More <i class="fa fa-arrow-circle-right"></i>
															</a>
														</div>
													</div>
												</li>
												<li>
													<div class="timeline_element teal">
														<div class="timeline_title">
															<span class="timeline_label">Event Title</span><span class="timeline_date">18 December 2013</span>
														</div>
														<div class="content">
															<b>TEST</b> TEST1\
														</div>
														<div class="readmore">
															<a href="#" class="btn btn-dark-beige">
																Read More <i class="fa fa-arrow-circle-right"></i>
															</a>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- end: TIMELINE PANEL -->
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
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
			});
		</script>
		
	</body>
	<!-- end: BODY -->

</html>
