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
					<div class="row">
						<div class="col-md-12">
							<div class="alert alert-info">
								You can drag and drop to rearrange the order. It even works well on touch-screens.
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h3>Serialised Output (per list)</h3>
							<textarea id="nestable-output"></textarea>
							<textarea id="nestable2-output"></textarea>
							<div id="nestable-menu">
								<button type="button" data-action="expand-all" class="btn btn-blue">
									Expand All
								</button>
								<button type="button" data-action="collapse-all" class="btn btn-bricky">
									Collapse All
								</button>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<!-- start: DRAGGABLE HANDLES 1 PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-reorder"></i>
									Draggable Handles 1
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
									<div class="dd" id="nestable">
										<ol class="dd-list">
											<li class="dd-item" data-id="1">
												<div class="dd-handle">
													Item 1
												</div>
											</li>
											<li class="dd-item" data-id="2">
												<div class="dd-handle">
													Item 2
												</div>
												<ol class="dd-list">
													<li class="dd-item" data-id="3">
														<div class="dd-handle">
															Item 3
														</div>
													</li>
													<li class="dd-item" data-id="4">
														<div class="dd-handle">
															Item 4
														</div>
													</li>
													<li class="dd-item" data-id="5">
														<div class="dd-handle">
															Item 5
														</div>
														<ol class="dd-list">
															<li class="dd-item" data-id="6">
																<div class="dd-handle">
																	Item 6
																</div>
															</li>
															<li class="dd-item" data-id="7">
																<div class="dd-handle">
																	Item 7
																</div>
															</li>
															<li class="dd-item" data-id="8">
																<div class="dd-handle">
																	Item 8
																</div>
															</li>
														</ol>
													</li>
													<li class="dd-item" data-id="9">
														<div class="dd-handle">
															Item 9
														</div>
													</li>
													<li class="dd-item" data-id="10">
														<div class="dd-handle">
															Item 10
														</div>
													</li>
												</ol>
											</li>
											<li class="dd-item" data-id="11">
												<div class="dd-handle">
													Item 11
												</div>
											</li>
											<li class="dd-item" data-id="12">
												<div class="dd-handle">
													Item 12
												</div>
											</li>
										</ol>
									</div>
								</div>
							</div>
							<!-- end: DRAGGABLE HANDLES 1 PANEL -->
						</div>
						<div class="col-md-6">
							<!-- start: DRAGGABLE HANDLES 2 PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-reorder"></i>
									Draggable Handles 2
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
									<div class="dd" id="nestable2">
										<ol class="dd-list">
											<li class="dd-item" data-id="13">
												<div class="dd-handle">
													Item 13
												</div>
											</li>
											<li class="dd-item" data-id="14">
												<div class="dd-handle">
													Item 14
												</div>
											</li>
											<li class="dd-item" data-id="15">
												<div class="dd-handle">
													Item 15
												</div>
												<ol class="dd-list">
													<li class="dd-item" data-id="16">
														<div class="dd-handle">
															Item 16
														</div>
													</li>
													<li class="dd-item" data-id="17">
														<div class="dd-handle">
															Item 17
														</div>
													</li>
													<li class="dd-item" data-id="18">
														<div class="dd-handle">
															Item 18
														</div>
													</li>
												</ol>
											</li>
										</ol>
									</div>
								</div>
							</div>
							<!-- end: DRAGGABLE HANDLES 1 PANEL -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- start: DRAGGABLE HANDLES 3 PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-reorder"></i>
									Draggable Handles 3
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
									<div class="dd" id="nestable3">
										<ol class="dd-list">
											<li class="dd-item dd3-item" data-id="13">
												<div class="dd-handle dd3-handle"></div>
												<div class="dd3-content">
													Item 13
												</div>
											</li>
											<li class="dd-item dd3-item" data-id="14">
												<div class="dd-handle dd3-handle"></div>
												<div class="dd3-content">
													Item 14
												</div>
											</li>
											<li class="dd-item dd3-item" data-id="15">
												<div class="dd-handle dd3-handle"></div>
												<div class="dd3-content">
													Item 15
												</div>
												<ol class="dd-list">
													<li class="dd-item dd3-item" data-id="16">
														<div class="dd-handle dd3-handle"></div>
														<div class="dd3-content">
															Item 16
														</div>
													</li>
													<li class="dd-item dd3-item" data-id="17">
														<div class="dd-handle dd3-handle"></div>
														<div class="dd3-content">
															Item 17
														</div>
													</li>
													<li class="dd-item dd3-item" data-id="18">
														<div class="dd-handle dd3-handle"></div>
														<div class="dd3-content">
															Item 18
														</div>
													</li>
												</ol>
											</li>
										</ol>
									</div>
								</div>
							</div>
							<!-- end: DRAGGABLE HANDLES 3 PANEL -->
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
		<script src="assets/plugins/nestable/jquery.nestable.js"></script>
		<script src="assets/js/ui-nestable.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				UINestable.init();
			});
		</script>
	</body>
	<!-- end: BODY -->

</html>
