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
							<!-- start: ALERTS PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-bullhorn"></i>
									Alerts
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
									<div class="alert alert-success">
										<button data-dismiss="alert" class="close">
											&times;
										</button>
										<i class="fa fa-check-circle"></i>
										<strong>Well done!</strong> You successfully read this important alert message.
									</div>
									<div class="alert alert-info">
										<button data-dismiss="alert" class="close">
											&times;
										</button>
										<i class="fa fa-info-circle"></i>
										<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
									</div>
									<div class="alert alert-warning">
										<button data-dismiss="alert" class="close">
											&times;
										</button>
										<i class="fa fa-exclamation-triangle"></i>
										<strong>Warning!</strong> Best check yo self, you're not looking too good.
									</div>
									<div class="alert alert-danger">
										<button data-dismiss="alert" class="close">
											&times;
										</button>
										<i class="fa fa-times-circle"></i>
										<strong>Oh snap!</strong> Change a few things up and try submitting again.
									</div>
								</div>
							</div>
							<!-- end: ALERTS PANEL -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<!-- start: NOTIFICATION PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-bell"></i>
									Notifications
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
									<div class="alert alert-block alert-danger fade in">
										<button data-dismiss="alert" class="close" type="button">
											&times;
										</button>
										<h4 class="alert-heading"><i class="fa fa-times-circle"></i> Error!</h4>
										<p>
											Duis mollis, est non commodo luctus,
											nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
										</p>
										<p>
											<a href="#" class="btn btn-bricky">
												Take this action
											</a>
											<a href="#" class="btn btn-light-grey">
												Or do this
											</a>
										</p>
									</div>
									<div class="alert alert-block alert-success fade in">
										<button data-dismiss="alert" class="close" type="button">
											&times;
										</button>
										<h4 class="alert-heading"><i class="fa fa-check-circle"></i> Success!</h4>
										<p>
											Duis mollis, est non commodo luctus,
											nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
										</p>
										<p>
											<a href="#" class="btn btn-green">
												Take this action
											</a>
											<a href="#" class="btn btn-light-grey">
												Or do this
											</a>
										</p>
									</div>
									<div class="alert alert-block alert-info fade in">
										<button data-dismiss="alert" class="close" type="button">
											&times;
										</button>
										<h4 class="alert-heading"><i class="fa fa-info-circle"></i> Info!</h4>
										<p>
											Duis mollis, est non commodo luctus,
											nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
										</p>
										<p>
											<a href="#" class="btn btn-blue">
												Take this action
											</a>
											<a href="#" class="btn btn btn-light-grey">
												Or do this
											</a>
										</p>
									</div>
									<div class="alert alert-block alert-warning fade in">
										<button data-dismiss="alert" class="close" type="button">
											&times;
										</button>
										<h4 class="alert-heading"><i class="fa fa-exclamation-triangle"></i> Warning!</h4>
										<p>
											Duis mollis, est non commodo luctus,
											nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
										</p>
										<p>
											<a href="#" class="btn btn-yellow">
												Take this action
											</a>
											<a href="#" class="btn btn-light-grey">
												Or do this
											</a>
										</p>
									</div>
								</div>
							</div>
							<!-- end: NOTIFICATION PANEL -->
							<!-- start: GRITTER NOTIFICATION PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-bell"></i>
									Gritter Notifications
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
									<h4>Click on below buttons to check it out.</h4>
									<ul class="list-unstyled">
										<li class="space10">
											<a class="btn btn-teal" id="add-regular" href="#">
												Regular notification
											</a>
											<p>
												Fades out after a certain amount of time, can be set for each notification.
											</p>
										</li>
										<li class="space10">
											<a class="btn btn-teal" id="add-sticky" href="#">
												Sticky notification
											</a>
											<p>
												Doesn't run on a fade timer.  Just sits there until the user manually removes it by clicking on the (X).
											</p>
										</li>
										<li class="space10">
											<a class="btn btn-teal" id="add-without-image" href="#">
												Notification without image
											</a>
										</li>
										<li class="space10">
											<a class="btn btn-teal" id="add-gritter-light" href="#">
												White notification
											</a>
											<p>
												has a 'gritter-light' class_name applied to it.
											</p>
										</li>
										<li class="space10">
											<a class="btn btn-teal" id="add-with-callbacks" href="#">
												Notification (with callbacks)
											</a>
										</li>
										<li class="space10">
											<a class="btn btn-teal" id="add-sticky-with-callbacks" href="#">
												Sticky notification (with callbacks)
											</a>
										</li>
										<li class="space10">
											<a class="btn btn-teal" id="add-max" href="#">
												Notification with max of 3
											</a>
											<p>
												If there are 3 messages already on screen, it won't show another one.
											</p>
										</li>
										<li class="space10">
											<a class="btn btn-teal" id="remove-all" href="#">
												Remove all notifications
											</a>
										</li>
										<li class="space10">
											<a class="btn btn-teal" id="remove-all-with-callbacks" href="#">
												Remove all (with callbacks)
											</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- end: GRITTER NOTIFICATION PANEL -->
							<!-- start: MODAL PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link"></i>
									Modal Dialogs
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
									<h5>Click on below buttons to check it out.</h5>
									<!-- Button to trigger modal -->
									<a data-toggle="modal" class="btn btn-primary" role="button" href="#myModal1">
										Modal Dialog
									</a>
									<a data-toggle="modal" class="btn btn-danger" role="button" href="#myModal2">
										Alert
									</a>
									<a data-toggle="modal" class="btn btn-warning" role="button" href="#myModal3">
										Confirm
									</a>
									<!-- Modal -->
									<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														&times;
													</button>
													<h4 class="modal-title">Modal title</h4>
												</div>
												<div class="modal-body">
													<p>
														Body goes here...
													</p>
												</div>
												<div class="modal-footer">
													<button aria-hidden="true" data-dismiss="modal" class="btn btn-default">
														Close
													</button>
													<button class="btn btn-default">
														Save
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														&times;
													</button>
													<h4 class="modal-title">Alert title</h4>
												</div>
												<div class="modal-body">
													<p>
														Body goes here...
													</p>
												</div>
												<div class="modal-footer">
													<button class="btn btn-default" data-dismiss="modal">
														OK
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														&times;
													</button>
													<h4 class="modal-title">Confirm title</h4>
												</div>
												<div class="modal-body">
													<p>
														Body goes here...
													</p>
												</div>
												<div class="modal-footer">
													<button aria-hidden="true" data-dismiss="modal" class="btn btn-default">
														Close
													</button>
													<button class="btn btn-default" data-dismiss="modal">
														Confirm
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end: MODAL PANEL -->
							<!-- start: TOOLTIPS PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-cogs"></i>
									Tooltips
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
										Tight pants next level keffiyeh
										<a data-original-title="Default tooltip" class="tooltips" href="#">
											you probably
										</a>
										haven't heard of them.
										Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel
										<a data-original-title="Another tooltip" class="tooltips" href="#">
											have a
										</a>
										terry richardson vinyl chambray.
										<a data-original-title="12" title="" class="tooltips" href="#">
											twitter handle
										</a>
										freegan cred raw denim single-origin coffee viral.
									</p>
									<p>
										<button data-original-title="Tooltip in top" data-placement="top" class="btn tooltips">
											Top
										</button>
										<button data-original-title="Tooltip in left" data-placement="left" class="btn tooltips">
											Left
										</button>
										<button data-original-title="Tooltip in right" data-placement="right" class="btn tooltips">
											Right
										</button>
										<button data-original-title="Tooltip in bottom" data-placement="bottom" class="btn tooltips">
											Bottom
										</button>
									</p>
								</div>
							</div>
							<!-- end: TOOLTIPS PANEL -->
							<!-- start: POPOVERS PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-cogs"></i>
									Popovers
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
										Tight pants next level keffiyeh
										<a data-original-title="Default Popover" data-content="Popover body goes here! Popover body goes here!" class="popovers" href="javascript:;">
											trigger me on click
										</a>
										haven't heard of them.
										Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel
										<a data-original-title="Another Popover" data-content="Popover body goes here! Popover body goes here!" data-trigger="hover" class="popovers" href="javascript:;">
											trigger me on hover
										</a>
										terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa.
									</p>
									<p>
										<button data-original-title="Popover in top" data-content="Popover body goes here! Popover body goes here!" data-placement="top" data-trigger="hover" id="test" class="btn popovers">
											Top
										</button>
										<button data-original-title="Popover in left" data-content="Popover body goes here! Popover body goes here!" data-placement="left" data-trigger="hover" class="btn popovers">
											Left
										</button>
										<button data-original-title="Popover in right" data-content="Popover body goes here! Popover body goes here!" data-placement="right" data-trigger="hover" class="btn popovers">
											Right
										</button>
										<button data-original-title="Popover in bottom" data-content="Popover body goes here! Popover body goes here!" data-placement="bottom" data-trigger="hover" class="btn popovers">
											Bottom
										</button>
									</p>
								</div>
							</div>
							<!-- end: POPOVERS PANEL -->
							<!-- start: PULSATE PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-eye"></i>
									Pulsate
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
									<h5>Pulsate any page elements.</h5>
									<div id="pulsate-regular" style="padding:5px;">
										Repeating Pulsate
									</div>
									<div class="space20"></div>
									<span class="label label-info"> NOTE!</span>
									<span> Pulsate works in Chrome, Safari and Firefox. Prettiest in Firefox since it supports Outline-radius </span>
								</div>
							</div>
							<!-- end: PULSATE PANEL -->
						</div>
						<div class="col-md-6">
							<!-- start: PROGRESS BARS PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-tasks"></i>
									Progress Bars
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
									<div class="alert alert-block alert-warning">
										Progress bars use CSS3 gradients, transitions, and animations to achieve all their effects. These features are not supported in IE7-9 or older versions of Firefox. Versions earlier than Internet Explorer 10 and Opera 12 do not support animations.
									</div>
									<h3>Basic</h3>
									<div class="progress progress-xs">
										<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
											<span class="sr-only"> 60% Complete</span>
										</div>
									</div>
									<div class="progress progress-sm">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
											<span class="sr-only"> 40% Complete (success)</span>
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
											<span class="sr-only"> 20% Complete</span>
										</div>
									</div>
									<div class="progress progress-sm">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only"> 60% Complete (warning)</span>
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											<span class="sr-only"> 80% Complete</span>
										</div>
									</div>
									<h3>Striped</h3>
									<div class="progress progress-striped progress-xs">
										<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only"> 60% Complete (success)</span>
										</div>
									</div>
									<div class="progress progress-striped progress-sm">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
											<span class="sr-only"> 40% Complete (success)</span>
										</div>
									</div>
									<div class="progress progress-striped">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
											<span class="sr-only"> 20% Complete</span>
										</div>
									</div>
									<div class="progress progress-striped progress-sm">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only"> 60% Complete (warning)</span>
										</div>
									</div>
									<div class="progress progress-striped">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											<span class="sr-only"> 80% Complete (danger)</span>
										</div>
									</div>
									<h3>Animated</h3>
									<div class="progress progress-striped active progress-xs">
										<div class="progress-bar"  role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only"> 60% Complete</span>
										</div>
									</div>
									<div class="progress progress-striped active progress-sm">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
											<span class="sr-only"> 40% Complete (success)</span>
										</div>
									</div>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
											<span class="sr-only"> 20% Complete</span>
										</div>
									</div>
									<div class="progress progress-striped active progress-sm">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only"> 60% Complete (warning)</span>
										</div>
									</div>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											<span class="sr-only"> 80% Complete (danger)</span>
										</div>
									</div>
									<h3>Stacked</h3>
									<div class="progress">
										<div class="progress-bar progress-bar-success" style="width: 35%">
											<span class="sr-only"> 35% Complete (success)</span>
										</div>
										<div class="progress-bar progress-bar-warning" style="width: 20%">
											<span class="sr-only"> 20% Complete (warning)</span>
										</div>
										<div class="progress-bar progress-bar-danger" style="width: 10%">
											<span class="sr-only"> 10% Complete (danger)</span>
										</div>
									</div>
								</div>
							</div>
							<!-- end: PROGRESS BARS PANEL -->
							<!-- start: LABELS AND BADGES PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-tags"></i>
									Labels and Badges
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
									<h3>Available labels</h3>
									<table class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>Labels</th>
												<th>Class</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><span class="label label-default"> Default</span></td>
												<td><code> label label-default </code></td>
											</tr>
											<tr>
												<td><span class="label label-success"> Success</span></td>
												<td><code> label label-success </code></td>
											</tr>
											<tr>
												<td><span class="label label-warning"> Warning</span></td>
												<td><code> label label-warning; </code></td>
											</tr>
											<tr>
												<td><span class="label label-danger"> Danger</span></td>
												<td><code> label label-danger </code></td>
											</tr>
											<tr>
												<td><span class="label label-info"> Info</span></td>
												<td><code> label label-info </code></td>
											</tr>
											<tr>
												<td><span class="label label-inverse"> Inverse</span></td>
												<td><code> label label-inverse </code></td>
											</tr>
										</tbody>
									</table>
									<h3>Available badges</h3>
									<table class="table table-bordered table-striped">
										<thead>
											<tr>
												<th class="hidden-xs">Name</th>
												<th>Example</th>
												<th>Class</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="hidden-xs"> Default </td>
												<td><span class="badge"> 1</span></td>
												<td><code> badge badge-default </code></td>
											</tr>
											<tr>
												<td class="hidden-xs"> Success </td>
												<td><span class="badge badge-success"> 2</span></td>
												<td><code> badge badge-success </code></td>
											</tr>
											<tr>
												<td class="hidden-xs"> Warning </td>
												<td><span class="badge badge-warning"> 4</span></td>
												<td><code> badge badge-warning </code></td>
											</tr>
											<tr>
												<td class="hidden-xs"> Danger </td>
												<td><span class="badge badge-danger"> 6</span></td>
												<td><code> badge badge-danger </code></td>
											</tr>
											<tr>
												<td class="hidden-xs"> Info </td>
												<td><span class="badge badge-info"> 8</span></td>
												<td><code> badge badge-info </code></td>
											</tr>
											<tr>
												<td class="hidden-xs"> Inverse </td>
												<td><span class="badge badge-inverse"> 10</span></td>
												<td><code> badge badge-inverse </code></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- end: LABELS AND BADGES PANEL -->
							<!-- start: PAGINATION PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-sort-numeric-asc"></i>
									Pagination
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
									<div>
										<ul class="pagination pagination-lg">
											<li>
												<a href="#">
													Prev
												</a>
											</li>
											<li>
												<a href="#">
													1
												</a>
											</li>
											<li>
												<a href="#">
													2
												</a>
											</li>
											<li>
												<a href="#">
													3
												</a>
											</li>
											<li>
												<a href="#">
													Next
												</a>
											</li>
										</ul>
									</div>
									<div>
										<ul class="pagination">
											<li>
												<a href="#">
													Prev
												</a>
											</li>
											<li>
												<a href="#">
													1
												</a>
											</li>
											<li>
												<a href="#">
													2
												</a>
											</li>
											<li>
												<a href="#">
													3
												</a>
											</li>
											<li>
												<a href="#">
													4
												</a>
											</li>
											<li>
												<a href="#">
													Next
												</a>
											</li>
										</ul>
									</div>
									<div>
										<ul class="pagination pagination-sm">
											<li>
												<a href="#">
													Prev
												</a>
											</li>
											<li>
												<a href="#">
													1
												</a>
											</li>
											<li>
												<a href="#">
													2
												</a>
											</li>
											<li>
												<a href="#">
													3
												</a>
											</li>
											<li>
												<a href="#">
													4
												</a>
											</li>
											<li>
												<a href="#">
													Next
												</a>
											</li>
										</ul>
									</div>
									<div>
										<ul class="pagination pagination-teal">
											<li class="disabled">
												<a href="#"><i class="fa fa-chevron-left"></i></a>
											</li>
											<li class="active">
												<a href="#">
													1
												</a>
											</li>
											<li>
												<a href="#">
													2
												</a>
											</li>
											<li>
												<a href="#">
													3
												</a>
											</li>
											<li>
												<a href="#">
													4
												</a>
											</li>
											<li>
												<a href="#"><i class="fa fa-chevron-right"></i></a>
											</li>
										</ul>
									</div>
									<div>
										<ul class="pagination pagination-green">
											<li class="disabled">
												<a href="#"><i class="fa fa-chevron-left"></i></a>
											</li>
											<li class="active">
												<a href="#">
													1
												</a>
											</li>
											<li>
												<a href="#">
													2
												</a>
											</li>
											<li>
												<a href="#">
													3
												</a>
											</li>
											<li>
												<a href="#">
													4
												</a>
											</li>
											<li>
												<a href="#"><i class="fa fa-chevron-right"></i></a>
											</li>
										</ul>
									</div>
									<div>
										<ul class="pagination pagination-bricky">
											<li class="disabled">
												<a href="#"><i class="fa fa-chevron-left"></i></a>
											</li>
											<li class="active">
												<a href="#">
													1
												</a>
											</li>
											<li>
												<a href="#">
													2
												</a>
											</li>
											<li>
												<a href="#">
													3
												</a>
											</li>
											<li>
												<a href="#">
													4
												</a>
											</li>
											<li>
												<a href="#"><i class="fa fa-chevron-right"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- end: PAGINATION PANEL -->
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<!-- start: DYNAMIC PAGINATION PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-tags"></i>
									Dynamic Pagination
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
									<h4>page-clicked Event</h4>
									<div id="paginator-content-1" class="alert alert-info">
										Click on the pages to trigger the page-clicked event.
									</div>
									<ul id="paginator-example-1" class="pagination-purple"></ul>
									<h4>page-changed Event</h4>
									<div id="paginator-content-2" class="alert alert-info">
										Click on the pages to trigger the page-clicked event.
									</div>
									<ul id="paginator-example-2"></ul>
									<div>
										Go to page:
										<select id="paginator-changed-select">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>
							</div>
							<!-- end: DYNAMIC PAGINATION PANEL -->
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
		<script src="assets/plugins/bootstrap-paginator/src/bootstrap-paginator.js"></script>
		<script src="assets/plugins/jquery.pulsate/jquery.pulsate.min.js"></script>
		<script src="assets/plugins/gritter/js/jquery.gritter.min.js"></script>
		<script src="assets/js/ui-elements.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				UIElements.init();
			});
		</script>
	</body>
	<!-- end: BODY -->

</html>
