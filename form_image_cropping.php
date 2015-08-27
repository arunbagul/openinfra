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
		<link rel="stylesheet" href="assets/plugins/Jcrop/css/jquery.Jcrop.min.css">
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
						<div class="col-md-12">
							<!-- start: BASIC HANDLER PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Basic Handler
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
								<div class="panel-body crop-image">
									<div class="alert alert-success">
										<p>
											<b>Test1</b> Test2<em>onChange</em> Test3
										</p>
										<p>
											Test5
										</p>
									</div>
									<!-- This is the image we're attaching Jcrop to -->
									<img src="assets/plugins/Jcrop/demos/demo_files/sago.jpg" id="target" alt="[Jcrop Example]" />
									<!-- This is the form that our event handler fills -->
									<form id="coords"
									class="coords"
									onsubmit="return false;"
									action="post.php">
										<div class="inline-labels">
											<label>
												X1
												<input type="text" size="4" id="x1" name="x1" />
											</label>
											<label>
												Y1
												<input type="text" size="4" id="y1" name="y1" />
											</label>
											<label>
												X2
												<input type="text" size="4" id="x2" name="x2" />
											</label>
											<label>
												Y2
												<input type="text" size="4" id="y2" name="y2" />
											</label>
											<label>
												W
												<input type="text" size="4" id="w" name="w" />
											</label>
											<label>
												H
												<input type="text" size="4" id="h" name="h" />
											</label>
										</div>
									</form>
								</div>
							</div>
							<!-- end: BASIC HANDLER PANEL -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- start: PREVIEW PANE PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Preview Pane
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
								<div class="panel-body crop-image">
									<div class="alert alert-success">
										<p>
											<b>Test</b> Test4 Test5
										</p>
									</div>
									<img src="assets/plugins/Jcrop/demos/demo_files/pool.jpg" id="target2" alt="[Jcrop Example]" />
									<div id="preview-pane">
										<div class="preview-container">
											<img src="assets/plugins/Jcrop/demos/demo_files/pool.jpg" class="jcrop-preview" alt="Preview" />
										</div>
									</div>
								</div>
							</div>
							<!-- end: PREVIEW PANE PANEL -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- start: ANIMATION/TRANSITION PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Animations + Transitions
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
								<div class="panel-body crop-image">
									<div class="alert alert-success">
										<p>
											<b>Animation/Transitions.</b>
											Demonstration of animateTo API 
											<a href="color">
												Color
												Animations
											</a>
											plugin. If it is not included, colors will not fade.
										</p>
									</div>
									<div class="alert alert-warning" id="shadetxt" style="display:none; color:#900;">
										<b>Experimental shader active.</b>
										Jcrop now includes a shading mode that facilitates building
									</div>
									<div class="row">
										<div class="col-md-9">
											<img src="assets/plugins/Jcrop/demos/demo_files/sago.jpg" id="target3" alt="Jcrop Image" />
										</div>
										<div class="col-md-3" id="interface">
											<label class="checkbox">
												<input type="checkbox" id="fadetog" class="grey" checked="checked"/>
												Enable fading (bgFade: true)
											</label>
											<label class="checkbox">
												<input type="checkbox" id="shadetog" class="grey" />
												Use experimental shader (shade: true)
											</label>
										</div>
									</div>
								</div>
							</div>
							<!-- end: ANIMATION/TRANSITION PANEL -->
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
		<script src="assets/plugins/Jcrop/js/jquery.Jcrop.min.js"></script>
		<script src="assets/plugins/Jcrop/js/jquery.color.js"></script>
		<script src="assets/js/form-image-cropping.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				ImageCropping.init();
				
			});
		</script>
		
	</body>
	<!-- end: BODY -->

</html>
