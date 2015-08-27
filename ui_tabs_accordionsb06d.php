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
						<div class="col-sm-12">
							<!-- start: PANLEL TABS -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-reorder"></i>
									Panel Tabs
								</div>
								<div class="panel-body">
									<div class="tabbable panel-tabs">
										<ul class="nav nav-tabs">
											<li class="active">
												<a data-toggle="tab" href="#panel_tab_example1">
													Tab 1
												</a>
											</li>
											<li>
												<a data-toggle="tab" href="#panel_tab_example2">
													Tab 2
												</a>
											</li>
											<li>
												<a data-toggle="tab" href="#panel_tab_example3">
													Tab 3
												</a>
											</li>
										</ul>
										<div class="tab-content">
											<div id="panel_tab_example1" class="tab-pane active">
												<p>
													Test1
												</p>
												<div class="alert alert-warning">
													<p>
														Test2
													</p>
													<p>
														Test3
													</p>
													<p>
														<a class="btn btn-red show-tab" href="#panel_tab_example2">
															Go to tab 2
														</a>
													</p>
												</div>
											</div>
											<div id="panel_tab_example2" class="tab-pane">
												<p>
													Test4
												</p>
												<p>
													<a target="_blank" href="ui_tabs_accordions132b.php?tabId=panel_tab_example2" class="btn btn-purple">
														Activate this tab via URL
													</a>
												</p>
											</div>
											<div id="panel_tab_example3" class="tab-pane">
												<p>
													Test5
												</p>
												<p>
													<a target="_blank" href="ui_tabs_accordionsb06d.php?tabId=panel_tab_example3" class="btn btn-blue">
														Activate this tab via URL
													</a>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end: PANLEL TABS -->
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<!-- start: INLINE TABS PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-reorder"></i>
									Inline Tabs
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
									<div class="row">
										<div class="col-sm-6">
											<div class="tabbable">
												<ul id="myTab" class="nav nav-tabs tab-bricky">
													<li class="active">
														<a href="#panel_tab2_example1" data-toggle="tab">
															<i class="green fa fa-home"></i> Tab 1
														</a>
													</li>
													<li>
														<a href="#panel_tab2_example2" data-toggle="tab">
															Tab 2 <span class="badge badge-danger">4</span>
														</a>
													</li>
													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">
															Dropdown &nbsp; <i class="fa fa-caret-down width-auto"></i>
														</a>
														<ul class="dropdown-menu dropdown-info">
															<li>
																<a href="#panel_tab2_example3" data-toggle="tab">
																	Dropdown 1
																</a>
															</li>
															<li>
																<a href="#panel_tab2_example4" data-toggle="tab">
																	Dropdown 2
																</a>
															</li>
														</ul>
													</li>
												</ul>
												<div class="tab-content">
													<div class="tab-pane in active" id="panel_tab2_example1">
														<p>
															Test6
														</p>
														<div class="alert alert-info">
															<p>
																Test7
															</p>
															<p>
																<a href="#panel_tab2_example2" class="btn btn-teal show-tab">
																	Go to tab 2
																</a>
															</p>
														</div>
													</div>
													<div class="tab-pane" id="panel_tab2_example2">
														<p>
															Test8
														</p>
														<p>
															<a href="#panel_tab2_example3" class="btn btn-red show-tab">
																Go to Dropdown 1
															</a>
														</p>
													</div>
													<div class="tab-pane" id="panel_tab2_example3">
														<p>
															Test9
														</p>
														<p>
															Test10
														</p>
														<p>
															<a href="#panel_tab2_example4" class="btn btn-purple show-tab">
																Go to Dropdown 2
															</a>
														</p>
													</div>
													<div class="tab-pane" id="panel_tab2_example4">
														<p>
															Test11
														</p>
														<p>
															<a href="#panel_tab2_example1" class="btn btn-purple show-tab">
																Return to tab 1
															</a>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="tabbable">
												<ul id="myTab4" class="nav nav-tabs tab-padding tab-space-3 tab-blue">
													<li class="active">
														<a href="#panel_tab3_example1" data-toggle="tab">
															Tab 1
														</a>
													</li>
													<li>
														<a href="#panel_tab3_example2" data-toggle="tab">
															Tab 2
														</a>
													</li>
													<li>
														<a href="#panel_tab3_example3" data-toggle="tab">
															Tab 3
														</a>
													</li>
												</ul>
												<div class="tab-content">
													<div class="tab-pane in active" id="panel_tab3_example1">
														<p>
															Test12
														</p>
														<p>
															Test13
														</p>
													</div>
													<div class="tab-pane" id="panel_tab3_example2">
														<p>
															Test13
														</p>
														<p>
															<a href="#panel_tab3_example3" class="btn btn-blue show-tab">
																Go to tab 3
															</a>
														</p>
													</div>
													<div class="tab-pane" id="panel_tab3_example3">
														<p>
															Test14
														</p>
														<p>
															<a href="#panel_tab3_example1" class="btn btn-purple show-tab">
																Return to tab 1
															</a>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="tabbable tabs-left">
												<ul id="myTab3" class="nav nav-tabs tab-green">
													<li class="active">
														<a href="#panel_tab4_example1" data-toggle="tab">
															<i class="pink fa fa-dashboard"></i> Tab 1
														</a>
													</li>
													<li class="">
														<a href="#panel_tab4_example2" data-toggle="tab">
															<i class="blue fa fa-user"></i> Tab 2
														</a>
													</li>
													<li class="">
														<a href="#panel_tab4_example3" data-toggle="tab">
															<i class="fa fa-rocket"></i> Tab 3
														</a>
													</li>
												</ul>
												<div class="tab-content">
													<div class="tab-pane active" id="panel_tab4_example1">
														<p>
															Test15
														</p>
														<p>
															Test16
														</p>
													</div>
													<div class="tab-pane" id="panel_tab4_example2">
														<p>
															Test17
														</p>
														<p>
															<a href="#panel_tab4_example3" class="btn btn-green show-tab">
																Go to tab 3
															</a>
														</p>
													</div>
													<div class="tab-pane" id="panel_tab4_example3">
														<p>
															Test18
														</p>
														<p>
															<a href="#panel_tab4_example1" class="btn btn-purple show-tab">
																Return to tab 1
															</a>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="tabbable tabs-below">
												<div class="tab-content">
													<div class="tab-pane active" id="panel_tab5_example1">
														<p>
															Test19
														</p>
														<p>
															Test20
														</p>
													</div>
													<div class="tab-pane" id="panel_tab5_example2">
														<p>
															Test20
														</p>
														<p>
															<a href="#panel_tab5_example3" class="btn btn-yellow show-tab">
																Go to tab 3
															</a>
														</p>
													</div>
													<div class="tab-pane" id="panel_tab5_example3">
														<p>
															Test21
														</p>
														<p>
															<a href="#panel_tab5_example1" class="btn btn-purple show-tab">
																Return to tab 1
															</a>
														</p>
													</div>
												</div>
												<ul id="myTab2" class="nav nav-tabs tab-purple">
													<li class="active">
														<a href="#panel_tab5_example1" data-toggle="tab">
															Tab 1
														</a>
													</li>
													<li class="">
														<a href="#panel_tab5_example2" data-toggle="tab">
															Tab 2
														</a>
													</li>
													<li class="">
														<a href="#panel_tab5_example3" data-toggle="tab">
															Tab 3
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end: INLINE TABS PANEL -->
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<!-- start: ACCORDION PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-reorder"></i>
									Accordions
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
									<div class="panel-group accordion-custom accordion-teal" id="accordion">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
													<i class="icon-arrow"></i>
													Collapsible Group Item #1
												</a></h4>
											</div>
											<div id="collapseOne" class="panel-collapse collapse in">
												<div class="panel-body">
													Test22
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
													<i class="icon-arrow"></i>
													Collapsible Group Item #2
												</a></h4>
											</div>
											<div id="collapseTwo" class="panel-collapse collapse">
												<div class="panel-body">
													Test23
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
													<i class="icon-arrow"></i>
													Collapsible Group Item #3
												</a></h4>
											</div>
											<div id="collapseThree" class="panel-collapse collapse">
												<div class="panel-body">
													Test33
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end: ACCORDION PANEL -->
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
