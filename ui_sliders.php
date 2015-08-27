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
							<!-- start: RANGE SLIDERS PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Range Sliders
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
										A powerful slider for selecting value ranges, supporting dates and more.
									</div>
									<table class="table sliders table-striped">
										<tbody>
											<tr>
												<td style="width:15%">Basic</td>
												<td>
												<div class="example">
													<div id="slider_example_1" class="slider-teal"></div>
												</div></td>
											</tr>
											<tr>
												<td>Date slider</td>
												<td>
												<div class="example">
													<div id="slider_example_3" class="slider-purple"></div>
												</div></td>
											</tr>
											<tr>
												<td>Delay out</td>
												<td>
												<div class="example">
													<div id="slider_example_4" class="slider-green"></div>
												</div></td>
											</tr>
											<tr>
												<td>Duration in/out</td>
												<td>
												<div class="example">
													<div id="slider_example_5" class="slider-yellow"></div>
												</div></td>
											</tr>
											<tr>
												<td>Enabled</td>
												<td>
												<div class="example">
													<div id="slider_example_6" class="slider-teal"></div>
												</div></td>
											</tr>
											<tr>
												<td>Range</td>
												<td>
												<div class="example">
													<div id="slider_example_7" class="slider-blue"></div>
												</div></td>
											</tr>
											<tr>
												<td>Step</td>
												<td>
												<div class="example">
													<div id="slider_example_8" class="slider-green"></div>
												</div></td>
											</tr>
											<tr>
												<td>Edit slider</td>
												<td>
												<div class="example">
													<div id="slider_example_2" class="slider-bricky"></div>
												</div></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- end: RANGE SLIDERS PANEL -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- start: CIRCLE DIALS PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Circle Dials
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
										<div class="col-md-12">
											<div class="alert alert-info">
												Nice, downward compatible, touchable, jQuery dial
											</div>
										</div>
										<div class="col-md-4">
											<h4>&#215; Disable display input</h4>
											<input class="knob" data-width="100" data-displayInput=false value="35">
										</div>
										<div class="col-md-4">
											<h4>&#215; 'cursor' mode</h4>
											<input class="knob" data-width="150" data-cursor=true data-fgColor="#222222" data-thickness=.3 value="29">
										</div>
										<div class="col-md-4">
											<h4>&#215; Display previous value</h4>
											<input class="knob" data-width="200" data-min="-100" data-displayPrevious=true value="44">
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<h4>&#215; Angle offset</h4>
											<input class="knob" data-angleOffset=90 data-linecap=round value="35">
										</div>
										<div class="col-md-4">
											<h4>&#215; Angle offset and arc</h4>
											<input class="knob" data-angleOffset=-125 data-angleArc=250 data-fgColor="#66EE66" value="35">
										</div>
										<div class="col-md-4">
											<h4>&#215; 5-digit values, step 1000</h4>
											<input class="knob" data-min="-15000" data-displayPrevious=true data-max="15000" data-step="1000" value="-11000">
										</div>
									</div>
								</div>
							</div>
							<!-- end: CIRCLE DIALS PANEL -->
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
		<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
		<script src="assets/plugins/jQRangeSlider/jQAllRangeSliders-min.js"></script>
		<script src="assets/plugins/jQuery-Knob/js/jquery.knob.js"></script>
		<script src="assets/js/ui-sliders.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				UISliders.init();
			});
		</script>
	</body>
	<!-- end: BODY -->

</html>
