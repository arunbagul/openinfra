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
							<!-- start: INLINE EDITOR PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Inline Editor
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
									<div class="alert alert-info">
										Click on the different parts of the following sample (including titles) to edit them in-place.
									</div>
									<div class="demo-main">
										<div id="inline-container">
											<div id="inline-header" class="row">
												<div id="inline-headerLeft" class="col-sm-6">
													<h2 id="inline-sampleTitle" contenteditable="true">TEST10</h2>
													<h3 contenteditable="true">TEST0
													TEST5</h3>
												</div>
												<div id="inline-headerRight" class="col-sm-6">
													<div contenteditable="true">
														<p> TEST1
														</p>
														<p>TEST2
														</p>
													</div>
												</div>
											</div>
											<hr>
											<div id="inline-columns" class="row">
												<div id="inline-column1" class="col-sm-6">
													<div contenteditable="true">
														<h3>Test</h3>
														<p>
															<strong>Test Test2</strong>
														</p>
														<p>TEST11
															<a href="#">
																Ok ok
															</a>TEST33
														</p>
														<blockquote>
															<p>TEST22
															</p>
														</blockquote>
														<blockquote>
															<p>TEST44
															</p>
														</blockquote>
														<p>TEST55
														</p>
														<p>
															<strike>TEST56</strike>
														</p>
													</div>
												</div>
												<div id="inline-column2" class="col-sm-6">
													<div contenteditable="true">
														<h3>TEST1</h3>
														<p>
															<strong>TEST1</strong>TEST
															<a
															href="#">TEST2
															</a>TEST1
														</p>
														<p>TEST1
														</p>
														<p>TEST1
														</p>
													
														<h3>TEST</h3>
														<p>TEST44
														</p>
														<p style="margin-left: 40px;">TEST55
															<a href="#">TEST66
															</a>
															TEST88
														</p>
														<p>TEST99
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end: INLINE EDITOR PANEL -->
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
		<script src="assets/plugins/ckeditor/ckeditor.js"></script>
		<script src="assets/plugins/ckeditor/adapters/jquery.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
			});
		</script>
		
	</body>
	<!-- end: BODY -->

</html>
