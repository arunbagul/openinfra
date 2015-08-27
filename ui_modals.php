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
						<div class="col-md-12">
							<div class="alert alert-info">
								Extends Bootstrap's native modals to provide additional functionality. Introduces a ModalManager class that operates behind the scenes to handle multiple modals by listening on their events.
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- start: BOOTSTRAP EXTENDED MODALS PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link"></i>
									Extended Modals
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										<a class="btn btn-xs btn-link panel-refresh" href="#">
											<i class="fa fa-refresh"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-hover table-striped table-bordered">
										<tbody>
											<tr>
												<td>Responsive</td>
												<td>
												<a href="#responsive" data-toggle="modal" class="demo btn btn-blue">
													View Demo
												</a></td>
											</tr>
											<tr>
												<td>Stackable</td>
												<td>
												<a href="#stack1" data-toggle="modal" class="demo btn btn-green">
													View Demo
												</a></td>
											</tr>
											<tr>
												<td>AJAX (via jQuery.load)</td>
												<td class="ajax">
												<a data-toggle="modal" id="modal_ajax_demo_btn" class="demo btn btn-bricky">
													View Demo
												</a></td>
											</tr>
											<tr>
												<td>Static Background with Animation</td>
												<td>
												<a href="#static" data-toggle="modal" class="demo btn btn-yellow">
													View Demo
												</a></td>
											</tr>
											<tr>
												<td>Full Width</td>
												<td>
												<a href="#full-width" data-toggle="modal" class="demo btn btn-purple">
													View Demo
												</a></td>
											</tr>
											<tr>
												<td>Long Modals</td>
												<td>
												<a href="#long" data-toggle="modal" class="demo btn btn-teal">
													View Demo
												</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- end: BOOTSTRAP EXTENDED MODALS PANEL -->
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
		
		<!-- start: BOOTSTRAP EXTENDED MODALS -->
		<div id="responsive" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Responsive</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<h4>Some Input</h4>
						<p>
							<input class="form-control" type="text">
						</p>
						<p>
							<input class="form-control" type="text">
						</p>
						<p>
							<input class="form-control" type="text">
						</p>
						<p>
							<input class="form-control" type="text">
						</p>
						<p>
							<input class="form-control" type="text">
						</p>
						<p>
							<input class="form-control" type="text">
						</p>
						<p>
							<input class="form-control" type="text">
						</p>
					</div>
					<div class="col-md-6">
						<h4>Some More Input</h4>
						<p>
							<input class="form-control" type="text">
						</p>
						<p>
							<input class="form-control" type="text">
						</p>
						<p>
							<input class="form-control" type="text">
						</p>
						<p>
							<input class="form-control" type="text">
						</p>
						<p>
							<input class="form-control" type="text">
						</p>
						<p>
							<input class="form-control" type="text">
						</p>
						<p>
							<input class="form-control" type="text">
						</p>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Close
				</button>
				<button type="button" class="btn btn-blue">
					Save changes
				</button>
			</div>
		</div>
		<div id="stack1" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Stack One</h4>
			</div>
			<div class="modal-body">
				<p>
					One fine body...
				</p>
				<p>
					One fine body...
				</p>
				<p>
					One fine body...
				</p>
				<input class="form-control" data-tabindex="1" type="text">
				<input class="form-control" data-tabindex="2" type="text">
				<a class="btn btn-default" data-toggle="modal" href="#stack2">
					Launch modal
				</a>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-default">
					Close
				</button>
				<button type="button" class="btn btn-primary">
					Ok
				</button>
			</div>
		</div>
		<div id="stack2" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Stack Two</h4>
			</div>
			<div class="modal-body">
				<p>
					One fine body...
				</p>
				<p>
					One fine body...
				</p>
				<input class="form-control" data-tabindex="1" type="text">
				<input class="form-control" data-tabindex="2" type="text">
				<a class="btn btn-default" data-toggle="modal" href="#stack3">
					Launch modal
				</a>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-default">
					Close
				</button>
				<button type="button" class="btn btn-primary">
					Ok
				</button>
			</div>
		</div>
		<div id="stack3" class="modal fade" tabindex="-1" data-focus-on="input:first" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Stack Three</h4>
			</div>
			<div class="modal-body">
				<p>
					One fine body...
				</p>
				<input class="form-control" data-tabindex="1" type="text">
				<input class="form-control" data-tabindex="2" type="text">
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-default">
					Close
				</button>
				<button type="button" class="btn btn-primary">
					Ok
				</button>
			</div>
		</div>
		<div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" style="display: none;">
			<div class="modal-body">
				<p>
					Would you like to continue with some arbitrary task?
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-default">
					Cancel
				</button>
				<button type="button" data-dismiss="modal" class="btn btn-primary">
					Continue Task
				</button>
			</div>
		</div>
		<div id="full-width" class="modal container fade" tabindex="-1" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Full Width</h4>
			</div>
			<div class="modal-body">
				<p>
					This modal will resize itself to the same dimensions as the container class.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin ipsum ac ante fermentum suscipit. In ac augue non purus accumsan lobortis id sed nibh. Nunc egestas hendrerit ipsum, et porttitor augue volutpat non. Aliquam erat volutpat. Vestibulum scelerisque lobortis pulvinar. Aenean hendrerit risus neque, eget tincidunt leo. Vestibulum est tortor, commodo nec cursus nec, vestibulum vel nibh. Morbi elit magna, ornare placerat euismod semper, dignissim vel odio. Phasellus elementum quam eu ipsum euismod pretium.
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-default">
					Close
				</button>
				<button type="button" class="btn btn-primary">
					Save changes
				</button>
			</div>
		</div>
		<div id="long" class="modal fade" tabindex="-1" data-replace="true" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">A Fairly Long Modal</h4>
			</div>
			<div class="modal-body">
				<img style="height: 800px" src="http://i.imgur.com/KwPYo.jpg" alt="long image">
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-default">
					Close
				</button>
			</div>
		</div>
		<div id="ajax-modal" class="modal fade" tabindex="-1" style="display: none;"></div>
		<!-- end: BOOTSTRAP EXTENDED MODALS -->

		
		<?php
			include_once('javascripts.php'); 
		?>
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
		<script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
		<script src="assets/js/ui-modals.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				UIModals.init();
			});
		</script>
	</body>
	<!-- end: BODY -->

</html>
