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
		<link rel="stylesheet" href="assets/plugins/css3-animation/animations.css">
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
					<div class="row">
						<div class="col-sm-12">
							<div class="alert alert-info">
								The CSS3 Animation is a set of preset, plug-and-play animations for your web projects. All you need to do is add the stylesheet to your website and apply the premade CSS classes to the elements you want animated.
							</div>
							<div class="animation-container center">
								<div id="object">
									<i class="clip-eye"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="animation-buttons center">
								<h2>Entrances</h2>
								<a class="btn btn-teal" id="slideUpBtn" href="#">
									Slide Up ↑
								</a>
								<a class="btn btn-teal" id="slideDownBtn" href="#">
									Slide Down ↓
								</a>
								<a class="btn btn-teal" id="slideLeftBtn" href="#">
									Slide Left ←
								</a>
								<a class="btn btn-teal" id="slideRightBtn" href="#">
									Slide Right →
								</a>
								<a class="btn btn-teal" id="slideExpandUpBtn" href="#">
									Slide Expand Up ↑
								</a>
								<a class="btn btn-teal" id="expandUpBtn" href="#">
									Expand Up ↑
								</a>
								<a class="btn btn-teal" id="fadeInBtn" href="#">
									Fade In
								</a>
								<a class="btn btn-teal" id="expandOpenBtn" href="#">
									Expand Open
								</a>
								<a class="btn btn-teal" id="bigEntranceBtn" href="#">
									Big Entrance
								</a>
								<a class="btn btn-teal" id="hatchBtn" href="#">
									Hatch
								</a>
								<h2>Misc</h2>
								<a class="btn btn-teal" id="bounceBtn" href="#">
									Bounce
								</a>
								<a class="btn btn-teal" id="pulseBtn" href="#">
									Pulse
								</a>
								<a class="btn btn-teal" id="floatBtn" href="#">
									Floating
								</a>
								<a class="btn btn-teal" id="tossingBtn" href="#">
									Tossing
								</a>
								<a class="btn btn-teal" id="pullUpBtn" href="#">
									Pull Up ↑
								</a>
								<a class="btn btn-teal" id="pullDownBtn" href="#">
									Pull Down ↓
								</a>
								<a class="btn btn-teal" id="stretchLeftBtn" href="#">
									Stretch Left ←
								</a>
								<a class="btn btn-teal" id="stretchRightBtn" href="#">
									Stretch Right →
								</a>
							</div>
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
		<script src="assets/js/ui-animation.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Animation.init();
			});
		</script>
	</body>
	<!-- end: BODY -->

</html>
