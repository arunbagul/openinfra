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
		<link href="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet"/>
		<link rel="stylesheet" href="assets/plugins/dynatree/src/skin-vista/ui.dynatree.css">
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
						<div class="col-md-6">
							<!-- start: DEFAULT TREE PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-sitemap"></i>
									Default Tree
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
									<p>
										This tree uses default options. It is initalized from a hidden <code>ul</code> element on this page.
									</p>
									<div id="tree">
										<ul id="treeData" style="display: none;">
											<li id="id1" title="Look, a tool tip!">
												item1 with key and tooltip
											<li id="id2">
												item2
											<li id="id3" class="folder">
												Folder with some children
												<ul>
													<li id="id3.1">
														Sub-item 3.1
														<ul>
															<li id="id3.1.1">
																Sub-item 3.1.1
															<li id="id3.1.2">
																Sub-item 3.1.2
														</ul>
													<li id="id3.2">
														Sub-item 3.2
														<ul>
															<li id="id3.2.1">
																Sub-item 3.2.1
															<li id="id3.2.2">
																Sub-item 3.2.2
														</ul>
												</ul>
											<li id="id4" class="expanded">
												Document with some children (expanded on init)
												<ul>
													<li id="id4.1"  class="active focused">
														Sub-item 4.1 (active and focus on init)
														<ul>
															<li id="id4.1.1">
																Sub-item 4.1.1
															<li id="id4.1.2">
																Sub-item 4.1.2
														</ul>
													<li id="id4.2">
														Sub-item 4.2
														<ul>
															<li id="id4.2.1">
																Sub-item 4.2.1
															<li id="id4.2.2">
																Sub-item 4.2.2
														</ul>
												</ul>
										</ul>
									</div>
								</div>
							</div>
							<!-- end: DEFAULT TREE PANEL -->
						</div>
						<div class="col-md-6">
							<!-- start: INIT FROM JS OBJECT PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-sitemap"></i>
									Init from JS object
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
									<p>
										This sample initializes the tree from a JavaScript object. An onActivate handler brings up an alert box when a node is selected.
									</p>
									<div id="tree2"></div>
								</div>
							</div>
							<!-- end: INIT FROM JS OBJECT PANEL -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<!-- start: EXTERNAL DATA PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-sitemap"></i>
									External data
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
									<p>
										This sample initializes the tree from a JSON request.
									</p>
									<div id="tree3"></div>
									<div class="widget">
										Active node: <span id="echoActive">-</span>
									</div>
								</div>
							</div>
							<!-- end: EXTERNAL DATA PANEL -->
						</div>
						<div class="col-md-6">
							<!-- start: TREEVIEW WITH CHECKBOXES PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-sitemap"></i>
									Checkbox
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
									<p>
										This tree has <b>checkoxes and selectMode 1 (single-selection)</b> enabled.
										<br>
										A double-click handler selects a <i>document</i> node (not folders).
										<br>
										A keydown handler selects on [space].
										<br>
										The <code>checkbox</code> class name was customized, to display radio
										buttons.
										<br>
									</p>
									<div id="tree4"></div>
									<div>
										Active node: <span id="echoActive1">-</span>
									</div>
									<div>
										Selection: <span id="echoSelection1">-</span>
									</div>
								</div>
							</div>
							<!-- end: TREEVIEW WITH CHECKBOXES PANEL -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<!-- start: MULTI-SELECTION PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-sitemap"></i>
									Multi-Selection
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
									<p>
										his tree has selectMode 2 (multi-selection) enabled.
										A single-click handler selects the node.
										A keydown handler selects on [space].
									</p>
									<div id="tree5"></div>
									<div>
										Selected keys: <span id="echoSelection3">-</span>
									</div>
								</div>
							</div>
							<!-- end: MULTI-SELECTION PANEL -->
						</div>
						<div class="col-md-6">
							<!-- start: DRAG AND DROP PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-sitemap"></i>
									Drag-and-drop
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
									<p class="description">
										This sample uses Dynatree's built-in drag-and-drop feature to move nodes.
										<br>
										- A node may only be dragged under it's original parent.
										<br>
										- When dropped, the node is moved to the target.
									</p>
									<div id="tree6"></div>
								</div>
							</div>
							<!-- end: DRAG AND DROP PANEL -->
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
		<script src="assets/plugins/dynatree/src/jquery.dynatree.js"></script>
		<script src="assets/js/ui-treeview.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				UITreeview.init();
			});
		</script>
		
	</body>
	<!-- end: BODY -->

</html>
