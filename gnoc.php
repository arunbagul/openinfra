<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
<?php
	include_once('header.php');
	include_once('javascripts.php');
	include_once('config_dc.php');
	include_once('vcenter/libvcenter.php');
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
				$PAGE_NAME = "GNOC";			
				include_once('sidebar.php');
			?>
			
			<!-- start: PAGE -->
			<div class="main-content">
				<div class="container">

				<!-- start: PAGE HEADER -->
				<div class="row">
					<div class="col-sm-12">
					
						<!-- start: PAGE TITLE & BREADCRUMB -->
						<ol class="breadcrumb">
							<li>
								<i class="clip-home-3"></i>
								<a href='dashboard.php'>Home</a>
							</li>

							<?php
								if ($_GET['child']) {
										echo "<li><a href='gnoc.php'>GNOC</a></li><li class='active'>".$_GET['child']."</li>";
								} else {  echo "<li class='active'>GNOC</li>"; }	
								
							?>
							
							<li class="search-box">
								<form class="sidebar-search">
									<div class="form-group">
										<input type="text" placeholder="Start Searching...">
										<button class="submit">
											<i class="clip-search-3"></i>
										</button>
									</div>
								</form>
							</li>
						</ol>
						<br>
						<!-- end: PAGE TITLE & BREADCRUMB -->
					</div>
				</div>
				<!-- end: PAGE HEADER -->


					<!-- start: PAGE CONTENT -->
					  <?php
						include_once('gnoc-body.php');
					  ?>

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
