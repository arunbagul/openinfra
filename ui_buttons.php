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
		<link rel="stylesheet" href="assets/plugins/ladda-bootstrap/dist/ladda-themeless.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-social-buttons/social-buttons-3.css">
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
						<div class="col-sm-6">
							<!-- start: BUTTONS PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Buttons
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
								<div class="panel-body buttons-widget">
									<p>
										<!-- Standard grey button with gradient -->
										<button type="button" class="btn btn-default">
											Default
										</button>
										<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
										<button type="button" class="btn btn-primary">
											Primary
										</button>
										<!-- Indicates a successful or positive action -->
										<button type="button" class="btn btn-success">
											Success
										</button>
										<!-- Contextual button for informational alert messages -->
										<button type="button" class="btn btn-info">
											Info
										</button>
									</p>
									<p>
										<!-- Indicates caution should be taken with this action -->
										<button type="button" class="btn btn-warning">
											Warning
										</button>
										<!-- Indicates a dangerous or potentially negative action -->
										<button type="button" class="btn btn-danger">
											Danger
										</button>
										<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
										<button type="button" class="btn btn-link">
											Link
										</button>
									</p>
									<p>
										<button type="button" class="btn btn-teal">
											Teal
										</button>
										<button type="button" class="btn btn-beige">
											Beige
										</button>
										<button type="button" class="btn btn-dark-beige">
											Dark beige
										</button>
										<button type="button" class="btn btn-orange">
											Orange
										</button>
									</p>
									<p>
										<button type="button" class="btn btn-bricky">
											Bricky
										</button>
										<button type="button" class="btn btn-green">
											Green
										</button>
										<button type="button" class="btn btn-blue">
											Blue
										</button>
										<button type="button" class="btn btn-yellow">
											Yellow
										</button>
									</p>
									<p>
										<button type="button" class="btn btn-purple">
											Purple
										</button>
										<button type="button" class="btn btn-dark-grey">
											Dark grey
										</button>
										<button type="button" class="btn btn-med-grey">
											Medium grey
										</button>
										<button type="button" class="btn btn-light-grey">
											Light grey
										</button>
									</p>
									<p>
										<!-- Standard grey button with gradient -->
										<button type="button" class="btn btn-default btn-squared">
											Squared
										</button>
										<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
										<button type="button" class="btn btn-primary btn-squared">
											Squared
										</button>
										<!-- Indicates a successful or positive action -->
										<button type="button" class="btn btn-success btn-squared btn-lg">
											Squared
										</button>
										<!-- Contextual button for informational alert messages -->
										<button type="button" class="btn btn-info btn-squared btn-lg">
											Squared <i class="fa fa-arrow-circle-right"></i>
										</button>
									</p>
									<p>
										<button type="button" class="btn btn-primary" disabled="disabled">
											Disabled
										</button>
										<button type="button" class="btn btn-teal" disabled="disabled">
											Disabled
										</button>
										<button type="button" class="btn btn-beige" disabled="disabled">
											Disabled
										</button>
									</p>
									<p>
										<button type="button" class="btn btn-bricky btn-lg">
											Large button
										</button>
										<button type="button" class="btn btn-green btn-sm">
											Small button
										</button>
										<button type="button" class="btn btn-blue btn-xs">
											Extra small button
										</button>
									</p>
									<p>
										<button class="btn btn-purple">
											Button <i class="fa fa-arrow-circle-right"></i>
										</button>
										<input type="submit" value="Submit" class="btn btn-bricky">
										<a class="btn btn-dark-grey" href="#">
											Go to link <i class="fa fa-arrow-circle-right"></i>
										</a>
									</p>
									<div class="space12">
										<div class="btn-group btn-group-lg">
											<a class="btn btn-default active" href="javascript:;">
												Tools
											</a>
											<a class="btn btn-default hidden-xs" href="javascript:;">
												Settings
											</a>
											<a class="btn btn-default" href="javascript:;">
												Help
											</a>
											<a class="btn btn-default" href="javascript:;">
												Contact
											</a>
										</div>
									</div>
									<div class="space12">
										<div class="btn-group">
											<a class="btn btn-teal active" href="javascript:;">
												Tools
											</a>
											<a class="btn btn-teal hidden-xs" href="javascript:;">
												Settings
											</a>
											<a class="btn btn-teal" href="javascript:;">
												Help
											</a>
											<a class="btn btn-teal" href="javascript:;">
												Contact
											</a>
										</div>
									</div>
									<div class="space12">
										<div class="btn-group btn-group-sm">
											<a class="btn btn-bricky active" href="javascript:;">
												Tools
											</a>
											<a class="btn btn-bricky" href="javascript:;">
												Settings
											</a>
											<a class="btn btn-bricky" href="javascript:;">
												Help
											</a>
											<a class="btn btn-bricky" href="javascript:;">
												Contact
											</a>
										</div>
									</div>
									<div class="space12">
										<div class="btn-group btn-group-xs">
											<a class="btn btn-green active" href="javascript:;">
												Tools
											</a>
											<a class="btn btn-green" href="javascript:;">
												Settings
											</a>
											<a class="btn btn-green" href="javascript:;">
												Help
											</a>
											<a class="btn btn-green" href="javascript:;">
												Contact
											</a>
										</div>
									</div>
									<div class="space12">
										<div class="btn-group-vertical">
											<a class="btn btn-orange" href="javascript:;">
												Tools
											</a>
											<a class="btn btn-orange active" href="javascript:;">
												Settings
											</a>
											<a class="btn btn-orange" href="javascript:;">
												Help
											</a>
											<a class="btn btn-orange" href="javascript:;">
												Contact
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- end: BUTTONS PANEL-->
							<!-- start: BUTTONS WITH ICONS PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Buttons with icons
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
								<div class="panel-body buttons-widget">
									<p>
										Examples to use buttons with font awesome icons.
									</p>
									<p>
										<a class="btn btn-primary" href="#"><i class="fa fa-share"></i></a>
										<a class="btn btn-bricky" href="#"><i class="fa fa-times fa fa-white"></i></a>
										<a class="btn btn-blue" href="#"><i class="fa fa-arrow-circle-right"></i></a>
										<a class="btn btn-green" href="#"><i class="fa fa-user fa fa-white"></i></a>
									</p>
									<p>
										Examples to use buttons with glyphicon halflings icons.
									</p>
									<p>
										<a class="btn btn-primary" href="#"><i class="glyphicon glyphicon-log-in"></i></a>
										<a class="btn btn-bricky" href="#"><i class="glyphicon glyphicon-remove-circle"></i></a>
										<a class="btn btn-blue" href="#"><i class="glyphicon glyphicon-thumbs-up"></i></a>
										<a class="btn btn-green" href="#"><i class="glyphicon glyphicon-ok-sign"></i></a>
									</p>
									<p>
										Buttons with both text and icon.
									</p>
									<p>
										<a class="btn btn-xs btn-bricky" href="#"><i class="fa fa-trash-o"></i>
											Delete Item</a>
										<a class="btn btn-primary" href="#"><i class="fa fa-plus"></i>
											Add Item</a>
										<a class="btn btn-purple">
											Listen <i class="fa fa-headphones"></i>
										</a>
									</p>
									<p>
										<a class="btn btn-blue" href="#"><i class="fa fa-plus"></i>
											Submit Entry</a>
										<a class="btn btn-purple btn-lg">
											pricing options <i class="fa fa-arrow-circle-right"></i>
										</a>
									</p>
									<p>
										Navigation icons.
									</p>
									<p>
										<a class="btn btn-light-grey" href="#"><i class="fa fa-arrow-circle-left"></i></a>
										<a class="btn btn-green" href="#"><i class="fa fa-arrow-circle-right"></i></a>
										<a class="btn btn-blue" href="#"><i class="fa fa-arrow-circle-up"></i></a>
										<a class="btn btn-dark-grey" href="#"><i class="fa fa-arrow-circle-down"></i></a>
									</p>
									<p>
										<a class="btn btn-light-grey btn-lg" href="#"><i class="fa fa-arrow-circle-left"></i></a>
										<a class="btn btn-green btn-lg" href="#"><i class="fa fa-arrow-circle-right"></i></a>
										<a class="btn btn-blue btn-lg" href="#"><i class="fa fa-arrow-circle-up"></i></a>
										<a class="btn btn-dark-grey btn-lg" href="#"><i class="fa fa-arrow-circle-down"></i></a>
									</p>
									<p>
										Toolbar icon example
									</p>
									<div class="space12">
										<div class="btn-group">
											<button class="btn btn-primary">
												<i class="fa fa-step-backward"></i>
											</button>
											<button class="btn btn-primary hidden-xs">
												<i class="fa fa-fast-backward"></i>
											</button>
											<button class="btn btn-primary">
												<i class="fa fa-backward"></i>
											</button>
											<button class="btn btn-primary">
												<i class="fa fa-play"></i>
											</button>
											<button class="btn btn-primary">
												<i class="fa fa-stop"></i>
											</button>
											<button class="btn btn-primary">
												<i class="fa fa-forward"></i>
											</button>
											<button class="btn btn-primary hidden-xs">
												<i class="fa fa-fast-forward"></i>
											</button>
											<button class="btn btn-primary">
												<i class="fa fa-step-forward"></i>
											</button>
										</div>
									</div>
									<p>
										Star Rating Example
									</p>
									<div>
										<span class="rating"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></span>
									</div>
								</div>
							</div>
							<!-- end: BUTTONS WITH ICONS PANEL -->
						</div>
						<div class="col-sm-6">
							<!-- start: BUTTONS WITH LOADING INDICATOR PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Buttons with loading indicator
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										<a class="btn btn-xs btn-link panel-expand" href="#">
											<i class="fa fa-resize-full"></i>
										</a>
									</div>
								</div>
								<div class="panel-body buttons-widget">
									<h4>Click the buttons to see the effect</h4>
									<p>
										<button data-style="expand-left" class="btn btn-teal ladda-button">
											<span class="ladda-label"> expand </span>
											<i class="fa fa-arrow-circle-left"></i>
											<span class="ladda-spinner"></span>
										</button>
										<button data-style="expand-right" class="btn btn-teal ladda-button">
											<span class="ladda-label"> expand </span>
											<i class="fa fa-arrow-circle-right"></i>
											<span class="ladda-spinner"></span>
										</button>
										<button data-style="expand-up" class="btn btn-teal ladda-button">
											<span class="ladda-label"> expand </span>
											<i class="fa fa-arrow-circle-up"></i>
											<span class="ladda-spinner"></span>
											<span class="ladda-progress" style="width: 0px;"></span>
										</button>
										<button data-style="expand-down" class="btn btn-teal ladda-button">
											<span class="ladda-label"> expand </span>
											<i class="fa fa-arrow-circle-down"></i>
											<span class="ladda-spinner"></span>
											<span class="ladda-progress" style="width: 0px;"></span>
										</button>
									</p>
									<p>
										<button data-style="zoom-in" class="btn btn-info ladda-button">
											<span class="ladda-label"> zoom-in </span>
											<span class="ladda-spinner"></span>
											<span class="ladda-progress" style="width: 0px;"></span>
										</button>
										<button data-style="zoom-out" class="btn btn-info ladda-button">
											<span class="ladda-label"> zoom-out </span>
											<span class="ladda-spinner"></span>
											<span class="ladda-progress" style="width: 0px;"></span>
										</button>
									</p>
									<p>
										<button data-style="slide-left" class="btn btn-warning ladda-button">
											<span class="ladda-label"> slide-left </span>
											<span class="ladda-spinner"></span><span class="ladda-progress" style="width: 0px;"></span>
										</button>
										<button data-style="slide-right" class="btn btn-warning ladda-button">
											<span class="ladda-label"> slide-right </span>
											<span class="ladda-spinner"></span>
											<span class="ladda-progress" style="width: 0px;"></span>
										</button>
										<button data-style="slide-up" class="btn btn-warning ladda-button">
											<span class="ladda-label"> slide-up </span>
											<span class="ladda-spinner"></span>
											<span class="ladda-progress" style="width: 0px;"></span>
										</button>
										<button data-style="slide-down" class="btn btn-warning ladda-button">
											<span class="ladda-label"> slide-down </span>
											<span class="ladda-spinner"></span>
											<span class="ladda-progress" style="width: 0px;"></span>
										</button>
									</p>
								</div>
							</div>
							<!-- end: BUTTONS WITH LOADING INDICATOR PANEL -->
							<!-- start: SWITCH PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Switch Buttons
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
								<div class="panel-body buttons-widget">
									<div class="make-switch" data-on="primary" data-off="info">
										<input type="checkbox" checked>
									</div>
									<div class="make-switch" data-on="info" data-off="success">
										<input type="checkbox" checked>
									</div>
									<div class="make-switch" data-on="success" data-off="warning">
										<input type="checkbox" checked>
									</div>
									<div class="make-switch" data-on="warning" data-off="danger">
										<input type="checkbox" checked>
									</div>
									<div class="make-switch" data-on="danger" data-off="default">
										<input type="checkbox" checked>
									</div>
									<div class="make-switch" data-on="default" data-off="primary">
										<input type="checkbox" checked>
									</div>
									<div id="change-color-switch" class="make-switch switch-large" data-on="default" data-off="primary">
										<input type="checkbox" checked>
									</div>
									<div class="make-switch switch-large" data-on-label="<i class='fa fa-check fa-white'></i>" data-off-label="<i class='fa fa-times'></i>">
										<input type="checkbox" checked />
									</div>
									<div class="make-switch switch-large" data-label-icon="fa fa-youtube fa-large" data-on-label="<i class='fa fa-thumbs-up fa-white'></i>" data-off-label="<i class='fa fa-thumbs-down'></i>">
										<input type="checkbox" checked>
									</div>
								</div>
							</div>
							<!-- end: SWITCH PANEL -->
							<!-- start: BLOCK BUTTONS PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Block level buttons
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
										<button class="btn btn-blue btn-block">
											Button <i class="fa fa-arrow-circle-right"></i>
										</button>
										<input type="submit" value="Submit" class="btn btn-blue btn-block">
										<a class="btn btn-blue btn-block" href="#">
											Link <i class="fa fa-arrow-circle-right"></i>
										</a>
									</p>
									<p>
										<button class="btn btn-green btn-lg btn-block">
											Button (big) <i class="fa fa-arrow-circle-right"></i>
										</button>
										<input type="submit" value="Submit (big)" class="btn btn-green btn-lg btn-block">
										<a class="btn btn-green btn-lg btn-block" href="#">
											Link (big) <i class="fa fa-arrow-circle-right"></i>
										</a>
									</p>
									<div class="space12">
										<div class="btn-group btn-group-justified">
											<a class="btn btn-purple" href="javascript:;">
												Tools
											</a>
											<a class="btn btn-green active" href="javascript:;">
												Help
											</a>
											<a class="btn btn-blue" href="javascript:;">
												Contact
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- end: BLOCK BUTTONS PANEL -->
							<!-- start: DROPDOWNS PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Dropdown
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
									<h4>Dropdown buttons</h4>
									<div class="btn-group">
										<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
											Tools <span class="caret"></span>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li role="presentation">
												<a href="#" tabindex="-1" role="menuitem">
													Action
												</a>
											</li>
											<li role="presentation">
												<a href="#" tabindex="-1" role="menuitem">
													Another action
												</a>
											</li>
											<li role="presentation">
												<a href="#" tabindex="-1" role="menuitem">
													Something else here
												</a>
											</li>
											<li class="divider" role="presentation"></li>
											<li role="presentation">
												<a href="#" tabindex="-1" role="menuitem">
													Separated link
												</a>
											</li>
										</ul>
									</div>
									<div class="btn-group">
										<button data-toggle="dropdown" class="btn btn-bricky dropdown-toggle">
											Help <span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li>
												<a href="#">
													Action
												</a>
											</li>
											<li>
												<a href="#">
													Another action
												</a>
											</li>
											<li>
												<a href="#">
													Something else here
												</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="#">
													Separated link
												</a>
											</li>
										</ul>
									</div>
									<div class="btn-group">
										<button data-toggle="dropdown" class="btn btn-purple dropdown-toggle">
											Tools <span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li>
												<a href="#">
													Action
												</a>
											</li>
											<li>
												<a href="#">
													Another action
												</a>
											</li>
											<li>
												<a href="#">
													Something else here
												</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="#">
													Separated link
												</a>
											</li>
										</ul>
									</div>
									<h4>Split button dropdowns</h4>
									<div class="btn-group">
										<button type="button" class="btn btn-danger">
											Tools
										</button>
										<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li>
												<a href="#">
													Action
												</a>
											</li>
											<li>
												<a href="#">
													Another action
												</a>
											</li>
											<li>
												<a href="#">
													Something else here
												</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="#">
													Separated link
												</a>
											</li>
										</ul>
									</div>
									<div class="btn-group">
										<button type="button" class="btn btn-purple">
											Help
										</button>
										<button type="button" class="btn btn-purple dropdown-toggle" data-toggle="dropdown">
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li>
												<a href="#">
													Action
												</a>
											</li>
											<li>
												<a href="#">
													Another action
												</a>
											</li>
											<li>
												<a href="#">
													Something else here
												</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="#">
													Separated link
												</a>
											</li>
										</ul>
									</div>
									<div class="btn-group">
										<button type="button" class="btn btn-green">
											Tools
										</button>
										<button type="button" class="btn btn-green dropdown-toggle" data-toggle="dropdown">
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li>
												<a href="#">
													Action
												</a>
											</li>
											<li>
												<a href="#">
													Another action
												</a>
											</li>
											<li>
												<a href="#">
													Something else here
												</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="#">
													Separated link
												</a>
											</li>
										</ul>
									</div>
									<h4>Dropdown button with icons</h4>
									<div class="btn-group">
										<button data-toggle="dropdown" class="btn btn-bricky dropdown-toggle">
											<i class="fa fa-user"></i>
											User <span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li>
												<a href="#">
													<i class="fa fa-pencil"></i>
													Edit
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-trash-o"></i>
													Delete
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-ban"></i>
													Ban
												</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="#">
													<i class="i"></i>
													Make admin
												</a>
											</li>
										</ul>
									</div>
									<div class="btn-group">
										<button type="button" class="btn btn-purple">
											<i class="fa fa-wrench"></i>
											Setting
										</button>
										<button data-toggle="dropdown" class="btn btn-purple dropdown-toggle">
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li>
												<a href="#">
													<i class="fa fa-pencil"></i>
													Edit
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-trash-o"></i>
													Delete
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-ban"></i>
													Ban
												</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="#">
													<i class="i"></i>
													Make admin
												</a>
											</li>
										</ul>
									</div>
									<h4>Dropdowns button groups</h4>
									<div class="space12">
										<div class="btn-group">
											<div class="btn-group">
												<button type="button" class="btn btn-teal dropdown-toggle" data-toggle="dropdown">
													Dropdown <span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li>
														<a href="#">
															Dropdown link
														</a>
													</li>
													<li>
														<a href="#">
															Dropdown link
														</a>
													</li>
												</ul>
											</div>
											<div class="btn-group hidden-xs">
												<button type="button" class="btn btn-teal dropdown-toggle" data-toggle="dropdown">
													Dropdown <span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li>
														<a href="#">
															Dropdown link
														</a>
													</li>
													<li>
														<a href="#">
															Dropdown link
														</a>
													</li>
												</ul>
											</div>
											<div class="btn-group">
												<button type="button" class="btn btn-teal dropdown-toggle" data-toggle="dropdown">
													Dropdown <span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li>
														<a href="#">
															Dropdown link
														</a>
													</li>
													<li>
														<a href="#">
															Dropdown link
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="space12">
										<div class="btn-group-vertical">
											<div class="btn-group">
												<button type="button" class="btn btn-dark-grey dropdown-toggle" data-toggle="dropdown">
													Dropdown <span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li>
														<a href="#">
															Dropdown link
														</a>
													</li>
													<li>
														<a href="#">
															Dropdown link
														</a>
													</li>
												</ul>
											</div>
											<div class="btn-group">
												<button type="button" class="btn btn-dark-grey dropdown-toggle" data-toggle="dropdown">
													Dropdown <span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li>
														<a href="#">
															Dropdown link
														</a>
													</li>
													<li>
														<a href="#">
															Dropdown link
														</a>
													</li>
												</ul>
											</div>
											<div class="btn-group">
												<button type="button" class="btn btn-dark-grey dropdown-toggle" data-toggle="dropdown">
													Dropdown <span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li>
														<a href="#">
															Dropdown link
														</a>
													</li>
													<li>
														<a href="#">
															Dropdown link
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<h4>Dropdown with checkboxes.</h4>
									<div class="space10">
										<div class="btn-group">
											<div class="btn-group">
												<button type="button" class="btn btn-green dropdown-toggle" data-toggle="dropdown">
													Dropdown <span class="caret"></span>
												</button>
												<div class="dropdown-menu dropdown-enduring dropdown-checkboxes">
													<label>
														<input type="checkbox">
														Option 1
													</label>
													<label>
														<input type="checkbox">
														Option 2
													</label>
													<label>
														<input type="checkbox">
														Option 3
													</label>
													<label>
														<input type="checkbox">
														Option 4
													</label>
													<label>
														<input type="checkbox">
														Option 5
													</label>
												</div>
											</div>
											<div class="btn-group">
												<button type="button" class="btn btn-green dropdown-toggle" data-toggle="dropdown">
													Dropdown <span class="caret"></span>
												</button>
												<div class="dropdown-menu dropdown-enduring dropdown-checkboxes">
													<label>
														<input type="checkbox">
														Option 1
													</label>
													<label>
														<input type="checkbox">
														Option 2
													</label>
													<label>
														<input type="checkbox">
														Option 3
													</label>
													<label>
														<input type="checkbox">
														Option 4
													</label>
													<label>
														<input type="checkbox">
														Option 5
													</label>
												</div>
											</div>
										</div>
									</div>
									<p>
										<span class="label label-success"> NOTE: </span>
										&nbsp;
										By adding <code> dropdown-enduring </code>
										class you can avoid closing the dropdown on click
									</p>
									<h4>Dropup menu options.</h4>
									<div class="space10">
										<!-- /btn-group -->
										<div class="btn-group dropup">
											<button type="button" class="btn btn-dark-beige dropdown-toggle" data-toggle="dropdown">
												Dropup <span class="caret"></span>
											</button>
											<ul class="dropdown-menu">
												<li>
													<a href="#">
														Dropup link
													</a>
												</li>
												<li>
													<a href="#">
														Dropup link
													</a>
												</li>
											</ul>
										</div>
										<!-- /btn-group -->
										<div class="btn-group dropup">
											<button type="button" class="btn btn-bricky">
												Dropup
											</button>
											<button type="button" class="btn btn-bricky dropdown-toggle" data-toggle="dropdown">
												<span class="caret"></span>
											</button>
											<ul class="dropdown-menu">
												<li>
													<a href="#">
														Dropup link
													</a>
												</li>
												<li>
													<a href="#">
														Dropup link
													</a>
												</li>
											</ul>
										</div>
										<!-- /btn-group -->
									</div>
									<p>
										<span class="label label-success"> NOTE: </span>
										&nbsp;
										By adding <code> dropup </code>
										class you make dropup menu.
									</p>
								</div>
							</div>
							<!-- end: DROPDOWNS PANEL -->
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<!-- start: SOCIAL NETWORK BUTTONS -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Social Network Buttons
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
											<i class="fa fa-wrench"></i>
										</a>
										<a class="btn btn-xs btn-link panel-expand" href="#">
											<i class="fa fa-resize-full"></i>
										</a>
									</div>
								</div>
								<div class="panel-body buttons-widget">
									<button class="btn btn-facebook">
										<i class="fa fa-facebook"></i>
										| Connect with Facebook
									</button>
									<button class="btn btn-twitter">
										<i class="fa fa-twitter"></i>
										| Connect with Twitter
									</button>
									<button class="btn btn-github">
										<i class="fa fa-github"></i>
										| Connect with Github
									</button>
									<button class="btn btn-pinterest">
										<i class="fa fa-pinterest"></i>
										| Connect with Pinterest
									</button>
									<button class="btn btn-linkedin">
										<i class="fa fa-linkedin"></i>
										| Connect with LinkedIn
									</button>
									<button class="btn btn-google-plus">
										<i class="fa fa-google-plus"></i>
										| Connect with Google Plus
									</button>
									<button class="btn btn-instagram">
										<i class="fa fa-camera-retro"></i>
										| Connect with Instagram
									</button>
									<button class="btn btn-dropbox">
										<i class="fa fa-dropbox"></i>
										| Connect with Dropbox
									</button>
									<button class="btn btn-bitbucket">
										<i class="fa fa-bitbucket"></i>
										| Connect with Bitbucket
									</button>
									<button class="btn btn-dribbble">
										<i class="fa fa-dribbble"></i>
										| Connect with Dribbble
									</button>
									<button class="btn btn-flickr">
										<i class="fa fa-flickr"></i>
										| Connect with Flickr
									</button>
									<button class="btn btn-foursquare">
										<i class="fa fa-foursquare"></i>
										| Connect with Foursquare
									</button>
									<button class="btn btn-renren">
										<i class="fa fa-renren"></i>
										| Connect with Renren
									</button>
									<button class="btn btn-skype">
										<i class="fa fa-skype"></i>
										| Connect with Skype
									</button>
									<button class="btn btn-stackexchange">
										<i class="fa fa-stackexchange"></i>
										| Connect with Stack Exchange
									</button>
									<button class="btn btn-trello">
										<i class="fa fa-trello"></i>
										| Connect with Trello
									</button>
									<button class="btn btn-tumblr">
										<i class="fa fa-tumblr"></i>
										| Connect with Tumblr
									</button>
									<button class="btn btn-vk">
										<i class="fa fa-vk"></i>
										| Connect with VK
									</button>
									<button class="btn btn-weibo">
										<i class="fa fa-weibo"></i>
										| Connect with Weibo
									</button>
									<button class="btn btn-xing">
										<i class="fa fa-xing"></i>
										| Connect with XING
									</button>
									<button class="btn btn-youtube">
										<i class="fa fa-youtube"></i>
										| Connect with YouTube
									</button>
									<button class="btn btn-instagram">
										<i class="fa fa-camera-retro"></i>
										| Connect with Instagram
									</button>
								</div>
							</div>
							<!-- end: SOCIAL NETWORK BUTTONS -->
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<!-- start: RESPONSIVE ICONS BUTTONS PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Responsive Icons Buttons
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
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
										<div class="col-sm-2">
											<button class="btn btn-icon btn-block">
												<i class="fa fa-group"></i>
												Users <span class="badge badge-primary"> 4 </span>
											</button>
										</div>
										<div class="col-sm-4">
											<button class="btn btn-icon btn-block">
												<i class="fa fa-comments-o"></i>
												Comments <span class="badge badge-danger"> 4 </span>
											</button>
										</div>
										<div class="col-sm-3">
											<button class="btn btn-icon btn-block">
												<i class="fa fa-shopping-cart"></i>
												Orders <span class="badge badge-danger"> 4 </span>
											</button>
										</div>
										<div class="col-sm-3">
											<button class="btn btn-icon btn-block">
												<i class="fa fa-barcode"></i>
												Products <span class="badge badge-warning"> 4 </span>
											</button>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<button class="btn btn-icon btn-block">
												<i class="fa fa-calendar"></i>
												Calendar <span class="badge badge-success"> 4 </span>
											</button>
										</div>
										<div class="col-sm-3">
											<button class="btn btn-icon btn-block">
												<i class="fa fa-heart-o"></i>
												Favorites <span class="badge badge-danger"> 4 </span>
											</button>
										</div>
										<div class="col-sm-2">
											<button class="btn btn-icon btn-block">
												<i class="fa fa-thumbs-up"></i>
												Likes <span class="badge badge-warning"> 4 </span>
											</button>
										</div>
										<div class="col-sm-4">
											<button class="btn btn-icon btn-block">
												<i class="fa fa-exclamation-triangle"></i>
												Warning <span class="badge badge-success"> 4 </span>
											</button>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-2">
											<button class="btn btn-icon btn-block">
												<i class="fa fa-tasks"></i>
												Tasks <span class="badge badge-danger"> 4 </span>
											</button>
										</div>
										<div class="col-sm-2">
											<button class="btn btn-icon btn-block">
												<i class="fa fa-check"></i>
												To Do <span class="badge badge-success"> 4 </span>
											</button>
										</div>
										<div class="col-sm-2">
											<button class="btn btn-icon btn-block">
												<i class="fa fa-list"></i>
												Tickets <span class="badge badge-warning"> 4 </span>
											</button>
										</div>
										<div class="col-sm-2">
											<button class="btn btn-icon btn-block">
												<i class="fa fa-picture-o"></i>
												Pictures <span class="badge badge-danger"> 4 </span>
											</button>
										</div>
										<div class="col-sm-2">
											<button class="btn btn-icon btn-block">
												<i class="fa fa-upload"></i>
												Upload <span class="badge badge-success"> 4 </span>
											</button>
										</div>
										<div class="col-sm-2">
											<button class="btn btn-icon btn-block">
												<i class="fa fa-tags"></i>
												Tags <span class="badge badge-danger"> 4 </span>
											</button>
										</div>
									</div>
								</div>
							</div>
							<!-- end: RESPONSIVE ICONS BUTTONS PANEL -->
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="widget">
								<h4><i class="fa fa-thumbs-up"></i> Clip-Font pictographic font </h4>
								<div class="body icons">
									<p>
										390 icons in pictographic font form. Add <code> .clip-* </code>
										class to <code> &lt;i&gt; </code>
										to display icon.
									</p>
									<div class="row">
										<div class="col-sm-3">
											<ul class="the-icons list-unstyled">
												<li>
													<i class="clip-settings"></i>
													clip-settings
												</li>
												<li>
													<i class="clip-camera"></i>
													clip-camera
												</li>
												<li>
													<i class="clip-tag"></i>
													clip-tag
												</li>
												<li>
													<i class="clip-bulb"></i>
													clip-bulb
												</li>
												<li>
													<i class="clip-paperplane"></i>
													clip-paperplane
												</li>
												<li>
													<i class="clip-bubble"></i>
													clip-bubble
												</li>
												<li>
													<i class="clip-banknote"></i>
													clip-banknote
												</li>
												<li>
													<i class="clip-music"></i>
													clip-music
												</li>
												<li>
													<i class="clip-data"></i>
													clip-data
												</li>
												<li>
													<i class="clip-t-shirt"></i>
													clip-t-shirt
												</li>
												<li>
													<i class="clip-clip"></i>
													clip-clip
												</li>
												<li>
													<i class="clip-calendar"></i>
													clip-calendar
												</li>
												<li>
													<i class="clip-vynil"></i>
													clip-vynil
												</li>
												<li>
													<i class="clip-truck"></i>
													clip-truck
												</li>
												<li>
													<i class="clip-note"></i>
													clip-note
												</li>
												<li>
													<i class="clip-world"></i>
													clip-world
												</li>
												<li>
													<i class="clip-key"></i>
													clip-key
												</li>
												<li>
													<i class="clip-pencil"></i>
													clip-pencil
												</li>
												<li>
													<i class="clip-pencil-2"></i>
													clip-pencil-2
												</li>
												<li>
													<i class="clip-images"></i>
													clip-images
												</li>
												<li>
													<i class="clip-images-2"></i>
													clip-images-2
												</li>
												<li>
													<i class="clip-list"></i>
													clip-list
												</li>
												<li>
													<i class="clip-earth"></i>
													clip-earth
												</li>
												<li>
													<i class="clip-pictures"></i>
													clip-pictures
												</li>
												<li>
													<i class="clip-cog"></i>
													clip-cog
												</li>
												<li>
													<i class="clip-home"></i>
													clip-home
												</li>
												<li>
													<i class="clip-home-2"></i>
													clip-home-2
												</li>
												<li>
													<i class="clip-pencil-3"></i>
													clip-pencil-3
												</li>
												<li>
													<i class="clip-images-3"></i>
													clip-images-3
												</li>
												<li>
													<i class="clip-eyedropper"></i>
													clip-eyedropper
												</li>
												<li>
													<i class="clip-droplet"></i>
													clip-droplet
												</li>
												<li>
													<i class="clip-droplet-2"></i>
													clip-droplet-2
												</li>
												<li>
													<i class="clip-image"></i>
													clip-image
												</li>
												<li>
													<i class="clip-music-2"></i>
													clip-music-2
												</li>
												<li>
													<i class="clip-camera-2"></i>
													clip-camera-2
												</li>
												<li>
													<i class="clip-camera-3"></i>
													clip-camera-3
												</li>
												<li>
													<i class="clip-headphones"></i>
													clip-headphones
												</li>
												<li>
													<i class="clip-headphones-2"></i>
													clip-headphones-2
												</li>
												<li>
													<i class="clip-gamepad"></i>
													clip-gamepad
												</li>
												<li>
													<i class="clip-podcast"></i>
													clip-podcast
												</li>
												<li>
													<i class="clip-connection"></i>
													clip-connection
												</li>
												<li>
													<i class="clip-connection-2"></i>
													clip-connection-2
												</li>
												<li>
													<i class="clip-new"></i>
													clip-new
												</li>
												<li>
													<i class="clip-book"></i>
													clip-book
												</li>
												<li>
													<i class="clip-file"></i>
													clip-file
												</li>
												<li>
													<i class="clip-file-2"></i>
													clip-file-2
												</li>
												<li>
													<i class="clip-file-plus"></i>
													clip-file-plus
												</li>
												<li>
													<i class="clip-file-minus"></i>
													clip-file-minus
												</li>
												<li>
													<i class="clip-file-check"></i>
													clip-file-check
												</li>
												<li>
													<i class="clip-file-remove"></i>
													clip-file-remove
												</li>
												<li>
													<i class="clip-file-3"></i>
													clip-file-3
												</li>
												<li>
													<i class="clip-copy"></i>
													clip-copy
												</li>
												<li>
													<i class="clip-copy-2"></i>
													clip-copy-2
												</li>
												<li>
													<i class="clip-copy-3"></i>
													clip-copy-3
												</li>
												<li>
													<i class="clip-copy-4"></i>
													clip-copy-4
												</li>
												<li>
													<i class="clip-paste"></i>
													clip-paste
												</li>
												<li>
													<i class="clip-stack"></i>
													clip-stack
												</li>
												<li>
													<i class="clip-stack-2"></i>
													clip-stack-2
												</li>
												<li>
													<i class="clip-folder"></i>
													clip-folder
												</li>
												<li>
													<i class="clip-folder-upload"></i>
													clip-folder-upload
												</li>
												<li>
													<i class="clip-folder-download"></i>
													clip-folder-download
												</li>
												<li>
													<i class="clip-folder-remove"></i>
													clip-folder-remove
												</li>
												<li>
													<i class="clip-folder-plus"></i>
													clip-folder-plus
												</li>
												<li>
													<i class="clip-folder-2"></i>
													clip-folder-2
												</li>
												<li>
													<i class="clip-folder-open"></i>
													clip-folder-open
												</li>
												<li>
													<i class="clip-cc"></i>
													clip-cc
												</li>
												<li>
													<i class="clip-tag-2"></i>
													clip-tag-2
												</li>
												<li>
													<i class="clip-barcode"></i>
													clip-barcode
												</li>
												<li>
													<i class="clip-cart"></i>
													clip-cart
												</li>
												<li>
													<i class="clip-phone-hang-up"></i>
													clip-phone-hang-up
												</li>
												<li>
													<i class="clip-phone"></i>
													clip-phone
												</li>
												<li>
													<i class="clip-phone-2"></i>
													clip-phone-2
												</li>
												<li>
													<i class="clip-location"></i>
													clip-location
												</li>
												<li>
													<i class="clip-compass"></i>
													clip-compass
												</li>
												<li>
													<i class="clip-map"></i>
													clip-map
												</li>
												<li>
													<i class="clip-alarm"></i>
													clip-alarm
												</li>
												<li>
													<i class="clip-clock"></i>
													clip-clock
												</li>
												<li>
													<i class="clip-history"></i>
													clip-history
												</li>
												<li>
													<i class="clip-stopwatch"></i>
													clip-stopwatch
												</li>
												<li>
													<i class="clip-keyboard"></i>
													clip-keyboard
												</li>
												<li>
													<i class="clip-screen"></i>
													clip-screen
												</li>
												<li>
													<i class="clip-laptop"></i>
													clip-laptop
												</li>
												<li>
													<i class="clip-mobile"></i>
													clip-mobile
												</li>
												<li>
													<i class="clip-mobile-2"></i>
													clip-mobile-2
												</li>
												<li>
													<i class="clip-tablet"></i>
													clip-tablet
												</li>
												<li>
													<i class="clip-mobile-3"></i>
													clip-mobile-3
												</li>
												<li>
													<i class="clip-rotate"></i>
													clip-rotate
												</li>
												<li>
													<i class="clip-rotate-2"></i>
													clip-rotate-2
												</li>
												<li>
													<i class="clip-redo"></i>
													clip-redo
												</li>
												<li>
													<i class="clip-undo"></i>
													clip-undo
												</li>
												<li>
													<i class="clip-database"></i>
													clip-database
												</li>
												<li>
													<i class="clip-bubble-2"></i>
													clip-bubble-2
												</li>
												<li>
													<i class="clip-bubbles"></i>
													clip-bubbles
												</li>
												<li>
													<i class="clip-bubble-3"></i>
													clip-bubble-3
												</li>
												<li>
													<i class="clip-bubble-4"></i>
													clip-bubble-4
												</li>
												<li>
													<i class="clip-bubble-dots"></i>
													clip-bubble-dots
												</li>
												<li>
													<i class="clip-bubble-dots-2"></i>
													clip-bubble-dots-2
												</li>
												<li>
													<i class="clip-bubbles-2"></i>
													clip-bubbles-2
												</li>
											</ul>
										</div>
										<div class="col-sm-3">
											<ul class="the-icons list-unstyled">
												<li>
													<i class="clip-bubbles-3"></i>
													clip-bubbles-3
												</li>
												<li>
													<i class="clip-user"></i>
													clip-user
												</li>
												<li>
													<i class="clip-users"></i>
													clip-users
												</li>
												<li>
													<i class="clip-user-plus"></i>
													clip-user-plus
												</li>
												<li>
													<i class="clip-user-minus"></i>
													clip-user-minus
												</li>
												<li>
													<i class="clip-user-cancel"></i>
													clip-user-cancel
												</li>
												<li>
													<i class="clip-user-block"></i>
													clip-user-block
												</li>
												<li>
													<i class="clip-user-2"></i>
													clip-user-2
												</li>
												<li>
													<i class="clip-user-3"></i>
													clip-user-3
												</li>
												<li>
													<i class="clip-users-2"></i>
													clip-users-2
												</li>
												<li>
													<i class="clip-user-4"></i>
													clip-user-4
												</li>
												<li>
													<i class="clip-user-5"></i>
													clip-user-5
												</li>
												<li>
													<i class="clip-hanger"></i>
													clip-hanger
												</li>
												<li>
													<i class="clip-quotes-left"></i>
													clip-quotes-left
												</li>
												<li>
													<i class="clip-quotes-right"></i>
													clip-quotes-right
												</li>
												<li>
													<i class="clip-busy"></i>
													clip-busy
												</li>
												<li>
													<i class="clip-spinner"></i>
													clip-spinner
												</li>
												<li>
													<i class="clip-spinner-2"></i>
													clip-spinner-2
												</li>
												<li>
													<i class="clip-spinner-3"></i>
													clip-spinner-3
												</li>
												<li>
													<i class="clip-spinner-4"></i>
													clip-spinner-4
												</li>
												<li>
													<i class="clip-spinner-5"></i>
													clip-spinner-5
												</li>
												<li>
													<i class="clip-spinner-6"></i>
													clip-spinner-6
												</li>
												<li>
													<i class="clip-microscope"></i>
													clip-microscope
												</li>
												<li>
													<i class="clip-search"></i>
													clip-search
												</li>
												<li>
													<i class="clip-zoom-in"></i>
													clip-zoom-in
												</li>
												<li>
													<i class="clip-zoom-out"></i>
													clip-zoom-out
												</li>
												<li>
													<i class="clip-search-2"></i>
													clip-search-2
												</li>
												<li>
													<i class="clip-key-2"></i>
													clip-key-2
												</li>
												<li>
													<i class="clip-key-3"></i>
													clip-key-3
												</li>
												<li>
													<i class="clip-keyhole"></i>
													clip-keyhole
												</li>
												<li>
													<i class="clip-wrench"></i>
													clip-wrench
												</li>
												<li>
													<i class="clip-wrench-2"></i>
													clip-wrench-2
												</li>
												<li>
													<i class="clip-cog-2"></i>
													clip-cog-2
												</li>
												<li>
													<i class="clip-cogs"></i>
													clip-cogs
												</li>
												<li>
													<i class="clip-health"></i>
													clip-health
												</li>
												<li>
													<i class="clip-stats"></i>
													clip-stats
												</li>
												<li>
													<i class="clip-inject"></i>
													clip-inject
												</li>
												<li>
													<i class="clip-bars"></i>
													clip-bars
												</li>
												<li>
													<i class="clip-rating"></i>
													clip-rating
												</li>
												<li>
													<i class="clip-rating-2"></i>
													clip-rating-2
												</li>
												<li>
													<i class="clip-rating-3"></i>
													clip-rating-3
												</li>
												<li>
													<i class="clip-leaf"></i>
													clip-leaf
												</li>
												<li>
													<i class="clip-balance"></i>
													clip-balance
												</li>
												<li>
													<i class="clip-atom"></i>
													clip-atom
												</li>
												<li>
													<i class="clip-atom-2"></i>
													clip-atom-2
												</li>
												<li>
													<i class="clip-lamp"></i>
													clip-lamp
												</li>
												<li>
													<i class="clip-remove"></i>
													clip-remove
												</li>
												<li>
													<i class="clip-puzzle"></i>
													clip-puzzle
												</li>
												<li>
													<i class="clip-puzzle-2"></i>
													clip-puzzle-2
												</li>
												<li>
													<i class="clip-cube"></i>
													clip-cube
												</li>
												<li>
													<i class="clip-cube-2"></i>
													clip-cube-2
												</li>
												<li>
													<i class="clip-pyramid"></i>
													clip-pyramid
												</li>
												<li>
													<i class="clip-puzzle-3"></i>
													clip-puzzle-3
												</li>
												<li>
													<i class="clip-puzzle-4"></i>
													clip-puzzle-4
												</li>
												<li>
													<i class="clip-clipboard"></i>
													clip-clipboard
												</li>
												<li>
													<i class="clip-switch"></i>
													clip-switch
												</li>
												<li>
													<i class="clip-list-2"></i>
													clip-list-2
												</li>
												<li>
													<i class="clip-list-3"></i>
													clip-list-3
												</li>
												<li>
													<i class="clip-list-4"></i>
													clip-list-4
												</li>
												<li>
													<i class="clip-list-5"></i>
													clip-list-5
												</li>
												<li>
													<i class="clip-list-6"></i>
													clip-list-6
												</li>
												<li>
													<i class="clip-grid"></i>
													clip-grid
												</li>
												<li>
													<i class="clip-grid-2"></i>
													clip-grid-2
												</li>
												<li>
													<i class="clip-grid-3"></i>
													clip-grid-3
												</li>
												<li>
													<i class="clip-grid-4"></i>
													clip-grid-4
												</li>
												<li>
													<i class="clip-grid-5"></i>
													clip-grid-5
												</li>
												<li>
													<i class="clip-grid-6"></i>
													clip-grid-6
												</li>
												<li>
													<i class="clip-menu"></i>
													clip-menu
												</li>
												<li>
													<i class="clip-menu-2"></i>
													clip-menu-2
												</li>
												<li>
													<i class="clip-circle-small"></i>
													clip-circle-small
												</li>
												<li>
													<i class="clip-tree"></i>
													clip-tree
												</li>
												<li>
													<i class="clip-menu-3"></i>
													clip-menu-3
												</li>
												<li>
													<i class="clip-menu-4"></i>
													clip-menu-4
												</li>
												<li>
													<i class="clip-cloud"></i>
													clip-cloud
												</li>
												<li>
													<i class="clip-download"></i>
													clip-download
												</li>
												<li>
													<i class="clip-upload"></i>
													clip-upload
												</li>
												<li>
													<i class="clip-download-2"></i>
													clip-download-2
												</li>
												<li>
													<i class="clip-upload-2"></i>
													clip-upload-2
												</li>
												<li>
													<i class="clip-globe"></i>
													clip-globe
												</li>
												<li>
													<i class="clip-upload-3"></i>
													clip-upload-3
												</li>
												<li>
													<i class="clip-download-3"></i>
													clip-download-3
												</li>
												<li>
													<i class="clip-earth-2"></i>
													clip-earth-2
												</li>
												<li>
													<i class="clip-network"></i>
													clip-network
												</li>
												<li>
													<i class="clip-link"></i>
													clip-link
												</li>
												<li>
													<i class="clip-link-2"></i>
													clip-link-2
												</li>
												<li>
													<i class="clip-link-3"></i>
													clip-link-3
												</li>
												<li>
													<i class="clip-link-4"></i>
													clip-link-4
												</li>
												<li>
													<i class="clip-attachment"></i>
													clip-attachment
												</li>
												<li>
													<i class="clip-attachment-2"></i>
													clip-attachment-2
												</li>
												<li>
													<i class="clip-eye"></i>
													clip-eye
												</li>
												<li>
													<i class="clip-eye-2"></i>
													clip-eye-2
												</li>
												<li>
													<i class="clip-windy"></i>
													clip-windy
												</li>
												<li>
													<i class="clip-bookmark"></i>
													clip-bookmark
												</li>
												<li>
													<i class="clip-bookmark-2"></i>
													clip-bookmark-2
												</li>
												<li>
													<i class="clip-brightness-high"></i>
													clip-brightness-high
												</li>
												<li>
													<i class="clip-brightness-medium"></i>
													clip-brightness-medium
												</li>
												<li>
													<i class="clip-star"></i>
													clip-star
												</li>
												<li>
													<i class="clip-star-2"></i>
													clip-star-2
												</li>
											</ul>
										</div>
										<div class="col-sm-3">
											<ul class="the-icons list-unstyled">
												<li>
													<i class="clip-star-3"></i>
													clip-star-3
												</li>
												<li>
													<i class="clip-star-4"></i>
													clip-star-4
												</li>
												<li>
													<i class="clip-star-5"></i>
													clip-star-5
												</li>
												<li>
													<i class="clip-star-6"></i>
													clip-star-6
												</li>
												<li>
													<i class="clip-heart"></i>
													clip-heart
												</li>
												<li>
													<i class="clip-thumbs-up"></i>
													clip-thumbs-up
												</li>
												<li>
													<i class="clip-thumbs-up-2"></i>
													clip-thumbs-up-2
												</li>
												<li>
													<i class="clip-cursor"></i>
													clip-cursor
												</li>
												<li>
													<i class="clip-stack-empty"></i>
													clip-stack-empty
												</li>
												<li>
													<i class="clip-question"></i>
													clip-question
												</li>
												<li>
													<i class="clip-notification"></i>
													clip-notification
												</li>
												<li>
													<i class="clip-notification-2"></i>
													clip-notification-2
												</li>
												<li>
													<i class="clip-question-2"></i>
													clip-question-2
												</li>
												<li>
													<i class="clip-plus-circle"></i>
													clip-plus-circle
												</li>
												<li>
													<i class="clip-plus-circle-2"></i>
													clip-plus-circle-2
												</li>
												<li>
													<i class="clip-minus-circle"></i>
													clip-minus-circle
												</li>
												<li>
													<i class="clip-minus-circle-2"></i>
													clip-minus-circle-2
												</li>
												<li>
													<i class="clip-info"></i>
													clip-info
												</li>
												<li>
													<i class="clip-info-2"></i>
													clip-info-2
												</li>
												<li>
													<i class="clip-cancel-circle"></i>
													clip-cancel-circle
												</li>
												<li>
													<i class="clip-cancel-circle-2"></i>
													clip-cancel-circle-2
												</li>
												<li>
													<i class="clip-checkmark-circle"></i>
													clip-checkmark-circle
												</li>
												<li>
													<i class="clip-checkmark-circle-2"></i>
													clip-checkmark-circle-2
												</li>
												<li>
													<i class="clip-close"></i>
													clip-close
												</li>
												<li>
													<i class="clip-close-2"></i>
													clip-close-2
												</li>
												<li>
													<i class="clip-close-3"></i>
													clip-close-3
												</li>
												<li>
													<i class="clip-checkmark"></i>
													clip-checkmark
												</li>
												<li>
													<i class="clip-checkmark-2"></i>
													clip-checkmark-2
												</li>
												<li>
													<i class="clip-close-4"></i>
													clip-close-4
												</li>
												<li>
													<i class="clip-wave"></i>
													clip-wave
												</li>
												<li>
													<i class="clip-wave-2"></i>
													clip-wave-2
												</li>
												<li>
													<i class="clip-arrow-up-left"></i>
													clip-arrow-up-left
												</li>
												<li>
													<i class="clip-arrow-up"></i>
													clip-arrow-up
												</li>
												<li>
													<i class="clip-arrow-up-right"></i>
													clip-arrow-up-right
												</li>
												<li>
													<i class="clip-arrow-right"></i>
													clip-arrow-right
												</li>
												<li>
													<i class="clip-arrow-down-right"></i>
													clip-arrow-down-right
												</li>
												<li>
													<i class="clip-arrow-down"></i>
													clip-arrow-down
												</li>
												<li>
													<i class="clip-arrow-down-left"></i>
													clip-arrow-down-left
												</li>
												<li>
													<i class="clip-arrow-left"></i>
													clip-arrow-left
												</li>
												<li>
													<i class="clip-arrow-up-left-2"></i>
													clip-arrow-up-left-2
												</li>
												<li>
													<i class="clip-arrow-up-2"></i>
													clip-arrow-up-2
												</li>
												<li>
													<i class="clip-arrow-up-right-2"></i>
													clip-arrow-up-right-2
												</li>
												<li>
													<i class="clip-arrow-right-2"></i>
													clip-arrow-right-2
												</li>
												<li>
													<i class="clip-arrow-down-right-2"></i>
													clip-arrow-down-right-2
												</li>
												<li>
													<i class="clip-arrow-down-2"></i>
													clip-arrow-down-2
												</li>
												<li>
													<i class="clip-arrow-down-left-2"></i>
													clip-arrow-down-left-2
												</li>
												<li>
													<i class="clip-arrow-left-2"></i>
													clip-arrow-left-2
												</li>
												<li>
													<i class="clip-arrow"></i>
													clip-arrow
												</li>
												<li>
													<i class="clip-arrow-2"></i>
													clip-arrow-2
												</li>
												<li>
													<i class="clip-arrow-3"></i>
													clip-arrow-3
												</li>
												<li>
													<i class="clip-arrow-4"></i>
													clip-arrow-4
												</li>
												<li>
													<i class="clip-arrow-up-3"></i>
													clip-arrow-up-3
												</li>
												<li>
													<i class="clip-arrow-right-3"></i>
													clip-arrow-right-3
												</li>
												<li>
													<i class="clip-arrow-down-3"></i>
													clip-arrow-down-3
												</li>
												<li>
													<i class="clip-arrow-left-3"></i>
													clip-arrow-left-3
												</li>
												<li>
													<i class="clip-checkbox-unchecked"></i>
													clip-checkbox-unchecked
												</li>
												<li>
													<i class="clip-checkbox"></i>
													clip-checkbox
												</li>
												<li>
													<i class="clip-checkbox-checked"></i>
													clip-checkbox-checked
												</li>
												<li>
													<i class="clip-checkbox-unchecked-2"></i>
													clip-checkbox-unchecked-2
												</li>
												<li>
													<i class="clip-square"></i>
													clip-square
												</li>
												<li>
													<i class="clip-checkbox-partial"></i>
													clip-checkbox-partial
												</li>
												<li>
													<i class="clip-checkbox-partial-2"></i>
													clip-checkbox-partial-2
												</li>
												<li>
													<i class="clip-checkbox-checked-2"></i>
													clip-checkbox-checked-2
												</li>
												<li>
													<i class="clip-checkbox-unchecked-3"></i>
													clip-checkbox-unchecked-3
												</li>
												<li>
													<i class="clip-radio-checked"></i>
													clip-radio-checked
												</li>
												<li>
													<i class="clip-radio-unchecked"></i>
													clip-radio-unchecked
												</li>
												<li>
													<i class="clip-circle"></i>
													clip-circle
												</li>
												<li>
													<i class="clip-circle-2"></i>
													clip-circle-2
												</li>
												<li>
													<i class="clip-new-tab"></i>
													clip-new-tab
												</li>
												<li>
													<i class="clip-popout"></i>
													clip-popout
												</li>
												<li>
													<i class="clip-embed"></i>
													clip-embed
												</li>
												<li>
													<i class="clip-code"></i>
													clip-code
												</li>
												<li>
													<i class="clip-seven-segment-0"></i>
													clip-seven-segment-0
												</li>
												<li>
													<i class="clip-seven-segment-1"></i>
													clip-seven-segment-1
												</li>
												<li>
													<i class="clip-seven-segment-2"></i>
													clip-seven-segment-2
												</li>
												<li>
													<i class="clip-seven-segment-3"></i>
													clip-seven-segment-3
												</li>
												<li>
													<i class="clip-seven-segment-4"></i>
													clip-seven-segment-4
												</li>
												<li>
													<i class="clip-seven-segment-5"></i>
													clip-seven-segment-5
												</li>
												<li>
													<i class="clip-seven-segment-6"></i>
													clip-seven-segment-6
												</li>
												<li>
													<i class="clip-seven-segment-7"></i>
													clip-seven-segment-7
												</li>
												<li>
													<i class="clip-seven-segment-8"></i>
													clip-seven-segment-8
												</li>
												<li>
													<i class="clip-seven-segment-9"></i>
													clip-seven-segment-9
												</li>
												<li>
													<i class="clip-share"></i>
													clip-share
												</li>
												<li>
													<i class="clip-google"></i>
													clip-google
												</li>
												<li>
													<i class="clip-google-plus"></i>
													clip-google-plus
												</li>
												<li>
													<i class="clip-facebook"></i>
													clip-facebook
												</li>
												<li>
													<i class="clip-twitter"></i>
													clip-twitter
												</li>
												<li>
													<i class="clip-feed"></i>
													clip-feed
												</li>
												<li>
													<i class="clip-youtube"></i>
													clip-youtube
												</li>
												<li>
													<i class="clip-youtube-2"></i>
													clip-youtube-2
												</li>
												<li>
													<i class="clip-vimeo"></i>
													clip-vimeo
												</li>
												<li>
													<i class="clip-flickr"></i>
													clip-flickr
												</li>
												<li>
													<i class="clip-picassa"></i>
													clip-picassa
												</li>
												<li>
													<i class="clip-dribbble"></i>
													clip-dribbble
												</li>
												<li>
													<i class="clip-forrst"></i>
													clip-forrst
												</li>
												<li>
													<i class="clip-deviantart"></i>
													clip-deviantart
												</li>
												<li>
													<i class="clip-steam"></i>
													clip-steam
												</li>
												<li>
													<i class="clip-github"></i>
													clip-github
												</li>
											</ul>
										</div>
										<div class="col-sm-3">
											<ul class="the-icons list-unstyled">
												<li>
													<i class="clip-github-2"></i>
													clip-github-2
												</li>
												<li>
													<i class="clip-wordpress"></i>
													clip-wordpress
												</li>
												<li>
													<i class="clip-blogger"></i>
													clip-blogger
												</li>
												<li>
													<i class="clip-tumblr"></i>
													clip-tumblr
												</li>
												<li>
													<i class="clip-yahoo"></i>
													clip-yahoo
												</li>
												<li>
													<i class="clip-tux"></i>
													clip-tux
												</li>
												<li>
													<i class="clip-apple"></i>
													clip-apple
												</li>
												<li>
													<i class="clip-finder"></i>
													clip-finder
												</li>
												<li>
													<i class="clip-android"></i>
													clip-android
												</li>
												<li>
													<i class="clip-windows"></i>
													clip-windows
												</li>
												<li>
													<i class="clip-windows8"></i>
													clip-windows8
												</li>
												<li>
													<i class="clip-soundcloud"></i>
													clip-soundcloud
												</li>
												<li>
													<i class="clip-skype"></i>
													clip-skype
												</li>
												<li>
													<i class="clip-reddit"></i>
													clip-reddit
												</li>
												<li>
													<i class="clip-linkedin"></i>
													clip-linkedin
												</li>
												<li>
													<i class="clip-lastfm"></i>
													clip-lastfm
												</li>
												<li>
													<i class="clip-stumbleupon"></i>
													clip-stumbleupon
												</li>
												<li>
													<i class="clip-stackoverflow"></i>
													clip-stackoverflow
												</li>
												<li>
													<i class="clip-pinterest"></i>
													clip-pinterest
												</li>
												<li>
													<i class="clip-xing"></i>
													clip-xing
												</li>
												<li>
													<i class="clip-foursquare"></i>
													clip-foursquare
												</li>
												<li>
													<i class="clip-paypal"></i>
													clip-paypal
												</li>
												<li>
													<i class="clip-paypal-2"></i>
													clip-paypal-2
												</li>
												<li>
													<i class="clip-libreoffice"></i>
													clip-libreoffice
												</li>
												<li>
													<i class="clip-file-pdf"></i>
													clip-file-pdf
												</li>
												<li>
													<i class="clip-file-openoffice"></i>
													clip-file-openoffice
												</li>
												<li>
													<i class="clip-file-word"></i>
													clip-file-word
												</li>
												<li>
													<i class="clip-file-excel"></i>
													clip-file-excel
												</li>
												<li>
													<i class="clip-file-zip"></i>
													clip-file-zip
												</li>
												<li>
													<i class="clip-file-powerpoint"></i>
													clip-file-powerpoint
												</li>
												<li>
													<i class="clip-file-xml"></i>
													clip-file-xml
												</li>
												<li>
													<i class="clip-file-css"></i>
													clip-file-css
												</li>
												<li>
													<i class="clip-html5"></i>
													clip-html5
												</li>
												<li>
													<i class="clip-css3"></i>
													clip-css3
												</li>
												<li>
													<i class="clip-chrome"></i>
													clip-chrome
												</li>
												<li>
													<i class="clip-firefox"></i>
													clip-firefox
												</li>
												<li>
													<i class="clip-IE"></i>
													clip-IE
												</li>
												<li>
													<i class="clip-opera"></i>
													clip-opera
												</li>
												<li>
													<i class="clip-safari"></i>
													clip-safari
												</li>
												<li>
													<i class="clip-IcoMoon"></i>
													clip-IcoMoon
												</li>
												<li>
													<i class="clip-fullscreen-exit-alt"></i>
													clip-fullscreen-exit-alt
												</li>
												<li>
													<i class="clip-fullscreen"></i>
													clip-fullscreen
												</li>
												<li>
													<i class="clip-fullscreen-alt"></i>
													clip-fullscreen-alt
												</li>
												<li>
													<i class="clip-fullscreen-exit"></i>
													clip-fullscreen-exit
												</li>
												<li>
													<i class="clip-transfer"></i>
													clip-transfer
												</li>
												<li>
													<i class="clip-left-quote"></i>
													clip-left-quote
												</li>
												<li>
													<i class="clip-right-quote"></i>
													clip-right-quote
												</li>
												<li>
													<i class="clip-heart-2"></i>
													clip-heart-2
												</li>
												<li>
													<i class="clip-study"></i>
													clip-study
												</li>
												<li>
													<i class="clip-wand"></i>
													clip-wand
												</li>
												<li>
													<i class="clip-zoom-in-2"></i>
													clip-zoom-in-2
												</li>
												<li>
													<i class="clip-zoom-out-2"></i>
													clip-zoom-out-2
												</li>
												<li>
													<i class="clip-search-3"></i>
													clip-search-3
												</li>
												<li>
													<i class="clip-user-6"></i>
													clip-user-6
												</li>
												<li>
													<i class="clip-users-3"></i>
													clip-users-3
												</li>
												<li>
													<i class="clip-archive"></i>
													clip-archive
												</li>
												<li>
													<i class="clip-keyboard-2"></i>
													clip-keyboard-2
												</li>
												<li>
													<i class="clip-paperclip"></i>
													clip-paperclip
												</li>
												<li>
													<i class="clip-home-3"></i>
													clip-home-3
												</li>
												<li>
													<i class="clip-chevron-up"></i>
													clip-chevron-up
												</li>
												<li>
													<i class="clip-chevron-right"></i>
													clip-chevron-right
												</li>
												<li>
													<i class="clip-chevron-left"></i>
													clip-chevron-left
												</li>
												<li>
													<i class="clip-chevron-down"></i>
													clip-chevron-down
												</li>
												<li>
													<i class="clip-error"></i>
													clip-error
												</li>
												<li>
													<i class="clip-add"></i>
													clip-add
												</li>
												<li>
													<i class="clip-minus"></i>
													clip-minus
												</li>
												<li>
													<i class="clip-alert"></i>
													clip-alert
												</li>
												<li>
													<i class="clip-pictures-2"></i>
													clip-pictures-2
												</li>
												<li>
													<i class="clip-atom-3"></i>
													clip-atom-3
												</li>
												<li>
													<i class="clip-eyedropper-2"></i>
													clip-eyedropper-2
												</li>
												<li>
													<i class="clip-warning"></i>
													clip-warning
												</li>
												<li>
													<i class="clip-expand"></i>
													clip-expand
												</li>
												<li>
													<i class="clip-clock-2"></i>
													clip-clock-2
												</li>
												<li>
													<i class="clip-target"></i>
													clip-target
												</li>
												<li>
													<i class="clip-loop"></i>
													clip-loop
												</li>
												<li>
													<i class="clip-refresh"></i>
													clip-refresh
												</li>
												<li>
													<i class="clip-spin-alt"></i>
													clip-spin-alt
												</li>
												<li>
													<i class="clip-exit"></i>
													clip-exit
												</li>
												<li>
													<i class="clip-enter"></i>
													clip-enter
												</li>
												<li>
													<i class="clip-locked"></i>
													clip-locked
												</li>
												<li>
													<i class="clip-unlocked"></i>
													clip-unlocked
												</li>
												<li>
													<i class="clip-arrow-5"></i>
													clip-arrow-5
												</li>
												<li>
													<i class="clip-music-3"></i>
													clip-music-3
												</li>
												<li>
													<i class="clip-droplet-3"></i>
													clip-droplet-3
												</li>
												<li>
													<i class="clip-credit"></i>
													clip-credit
												</li>
												<li>
													<i class="clip-phone-3"></i>
													clip-phone-3
												</li>
												<li>
													<i class="clip-phone-4"></i>
													clip-phone-4
												</li>
												<li>
													<i class="clip-map-2"></i>
													clip-map-2
												</li>
												<li>
													<i class="clip-clock-3"></i>
													clip-clock-3
												</li>
												<li>
													<i class="clip-calendar-2"></i>
													clip-calendar-2
												</li>
												<li>
													<i class="clip-calendar-3"></i>
													clip-calendar-3
												</li>
												<li>
													<i class="clip-pie"></i>
													clip-pie
												</li>
												<li>
													<i class="clip-airplane"></i>
													clip-airplane
												</li>
												<li>
													<i class="clip-tree-2"></i>
													clip-tree-2
												</li>
												<li>
													<i class="clip-sun"></i>
													clip-sun
												</li>
												<li>
													<i class="clip-bubble-paperclip"></i>
													clip-bubble-paperclip
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<!-- start: FONT AWESOME -->
							<div class="widget">
								<h4><i class="fa fa-thumbs-up"></i> Font Awesome pictographic font </h4>
								<div class="body icons">
									<p>
										370 icons in pictographic font form. Add <code> .fa fa-* </code>
										class to <code> &lt;i&gt; </code>
										to display icon.
										Provided by
										<a href="http://fortawesome.github.com/Font-Awesome/" target="_blank">
											Font Awesome.
										</a>
									</p>
									<div id="icons-web-app">
										<div class="row">
											<div class="col-sm-12">
												<h2>New Icons in 4.0</h2>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-rub"></i> fa-rub
													</li>
													<li>
														<i class="fa fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-rouble"></i> fa-rouble <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-pagelines"></i> fa-pagelines
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-stack-exchange"></i> fa-stack-exchange
													</li>
													<li>
														<i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right
													</li>
													<li>
														<i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left
													</li>
													<li>
														<i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-dot-circle-o"></i> fa-dot-circle-o
													</li>
													<li>
														<i class="fa fa-wheelchair"></i> fa-wheelchair
													</li>
													<li>
														<i class="fa fa-vimeo-square"></i> fa-vimeo-square
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-try"></i> fa-try
													</li>
													<li>
														<i class="fa fa-turkish-lira"></i> fa-turkish-lira <span class="text-muted">(alias)</span>
													</li>
												</ul>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<h2>Web Application Icons</h2>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-adjust"></i> fa-adjust
													</li>
													<li>
														<i class="fa fa-anchor"></i> fa-anchor
													</li>
													<li>
														<i class="fa fa-archive"></i> fa-archive
													</li>
													<li>
														<i class="fa fa-asterisk"></i> fa-asterisk
													</li>
													<li>
														<i class="fa fa-ban"></i> fa-ban
													</li>
													<li>
														<i class="fa fa-bar-chart-o"></i> fa-bar-chart-o
													</li>
													<li>
														<i class="fa fa-barcode"></i> fa-barcode
													</li>
													<li>
														<i class="fa fa-beer"></i> fa-beer
													</li>
													<li>
														<i class="fa fa-bell"></i> fa-bell
													</li>
													<li>
														<i class="fa fa-bell-o"></i> fa-bell-o
													</li>
													<li>
														<i class="fa fa-bolt"></i> fa-bolt
													</li>
													<li>
														<i class="fa fa-book"></i> fa-book
													</li>
													<li>
														<i class="fa fa-bookmark"></i> fa-bookmark
													</li>
													<li>
														<i class="fa fa-bookmark-o"></i> fa-bookmark-o
													</li>
													<li>
														<i class="fa fa-briefcase"></i> fa-briefcase
													</li>
													<li>
														<i class="fa fa-bug"></i> fa-bug
													</li>
													<li>
														<i class="fa fa-building"></i> fa-building
													</li>
													<li>
														<i class="fa fa-bullhorn"></i> fa-bullhorn
													</li>
													<li>
														<i class="fa fa-bullseye"></i> fa-bullseye
													</li>
													<li>
														<i class="fa fa-calendar"></i> fa-calendar
													</li>
													<li>
														<i class="fa fa-calendar-o"></i> fa-calendar-o
													</li>
													<li>
														<i class="fa fa-camera"></i> fa-camera
													</li>
													<li>
														<i class="fa fa-camera-retro"></i> fa-camera-retro
													</li>
													<li>
														<i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down
													</li>
													<li>
														<i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left
													</li>
													<li>
														<i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right
													</li>
													<li>
														<i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up
													</li>
													<li>
														<i class="fa fa-certificate"></i> fa-certificate
													</li>
													<li>
														<i class="fa fa-check"></i> fa-check
													</li>
													<li>
														<i class="fa fa-check-circle"></i> fa-check-circle
													</li>
													<li>
														<i class="fa fa-check-circle-o"></i> fa-check-circle-o
													</li>
													<li>
														<i class="fa fa-check-square"></i> fa-check-square
													</li>
													<li>
														<i class="fa fa-check-square-o"></i> fa-check-square-o
													</li>
													<li>
														<i class="fa fa-circle"></i> fa-circle
													</li>
													<li>
														<i class="fa fa-circle-o"></i> fa-circle-o
													</li>
													<li>
														<i class="fa fa-clock-o"></i> fa-clock-o
													</li>
													<li>
														<i class="fa fa-cloud"></i> fa-cloud
													</li>
													<li>
														<i class="fa fa-cloud-download"></i> fa-cloud-download
													</li>
													<li>
														<i class="fa fa-cloud-upload"></i> fa-cloud-upload
													</li>
													<li>
														<i class="fa fa-code"></i> fa-code
													</li>
													<li>
														<i class="fa fa-code-fork"></i> fa-code-fork
													</li>
													<li>
														<i class="fa fa-coffee"></i> fa-coffee
													</li>
													<li>
														<i class="fa fa-cog"></i> fa-cog
													</li>
													<li>
														<i class="fa fa-cogs"></i> fa-cogs
													</li>
													<li>
														<i class="fa fa-collapse-o"></i> fa-collapse-o
													</li>
													<li>
														<i class="fa fa-comment"></i> fa-comment
													</li>
													<li>
														<i class="fa fa-comment-o"></i> fa-comment-o
													</li>
													<li>
														<i class="fa fa-comments"></i> fa-comments
													</li>
													<li>
														<i class="fa fa-comments-o"></i> fa-comments-o
													</li>
													<li>
														<i class="fa fa-compass"></i> fa-compass
													</li>
													<li>
														<i class="fa fa-credit-card"></i> fa-credit-card
													</li>
													<li>
														<i class="fa fa-crop"></i> fa-crop
													</li>
													<li>
														<i class="fa fa-crosshairs"></i> fa-crosshairs
													</li>
													<li>
														<i class="fa fa-cutlery"></i> fa-cutlery
													</li>
													<li>
														<i class="fa fa-dashboard"></i> fa-dashboard <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-desktop"></i> fa-desktop
													</li>
													<li>
														<i class="fa fa-dot-circle-o"></i> fa-dot-circle-o
													</li>
													<li>
														<i class="fa fa-download"></i> fa-download
													</li>
													<li>
														<i class="fa fa-edit"></i> fa-edit <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-ellipsis-horizontal"></i> fa-ellipsis-horizontal
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-ellipsis-vertical"></i> fa-ellipsis-vertical
													</li>
													<li>
														<i class="fa fa-envelope"></i> fa-envelope
													</li>
													<li>
														<i class="fa fa-envelope-o"></i> fa-envelope-o
													</li>
													<li>
														<i class="fa fa-eraser"></i> fa-eraser
													</li>
													<li>
														<i class="fa fa-exchange"></i> fa-exchange
													</li>
													<li>
														<i class="fa fa-exclamation"></i> fa-exclamation
													</li>
													<li>
														<i class="fa fa-exclamation-circle"></i> fa-exclamation-circle
													</li>
													<li>
														<i class="fa fa-exclamation-triangle"></i> fa-exclamation-triangle
													</li>
													<li>
														<i class="fa fa-expand-o"></i> fa-expand-o
													</li>
													<li>
														<i class="fa fa-external-link"></i> fa-external-link
													</li>
													<li>
														<i class="fa fa-external-link-square"></i> fa-external-link-square
													</li>
													<li>
														<i class="fa fa-eye"></i> fa-eye
													</li>
													<li>
														<i class="fa fa-eye-slash"></i> fa-eye-slash
													</li>
													<li>
														<i class="fa fa-female"></i> fa-female
													</li>
													<li>
														<i class="fa fa-fighter-jet"></i> fa-fighter-jet
													</li>
													<li>
														<i class="fa fa-film"></i> fa-film
													</li>
													<li>
														<i class="fa fa-filter"></i> fa-filter
													</li>
													<li>
														<i class="fa fa-fire"></i> fa-fire
													</li>
													<li>
														<i class="fa fa-fire-extinguisher"></i> fa-fire-extinguisher
													</li>
													<li>
														<i class="fa fa-flag"></i> fa-flag
													</li>
													<li>
														<i class="fa fa-flag-checkered"></i> fa-flag-checkered
													</li>
													<li>
														<i class="fa fa-flag-o"></i> fa-flag-o
													</li>
													<li>
														<i class="fa fa-flash"></i> fa-flash <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-flask"></i> fa-flask
													</li>
													<li>
														<i class="fa fa-folder"></i> fa-folder
													</li>
													<li>
														<i class="fa fa-folder-o"></i> fa-folder-o
													</li>
													<li>
														<i class="fa fa-folder-open"></i> fa-folder-open
													</li>
													<li>
														<i class="fa fa-folder-open-o"></i> fa-folder-open-o
													</li>
													<li>
														<i class="fa fa-frown-o"></i> fa-frown-o
													</li>
													<li>
														<i class="fa fa-gamepad"></i> fa-gamepad
													</li>
													<li>
														<i class="fa fa-gavel"></i> fa-gavel
													</li>
													<li>
														<i class="fa fa-gear"></i> fa-gear <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-gears"></i> fa-gears <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-gift"></i> fa-gift
													</li>
													<li>
														<i class="fa fa-glass"></i> fa-glass
													</li>
													<li>
														<i class="fa fa-globe"></i> fa-globe
													</li>
													<li>
														<i class="fa fa-group"></i> fa-group
													</li>
													<li>
														<i class="fa fa-hdd"></i> fa-hdd
													</li>
													<li>
														<i class="fa fa-headphones"></i> fa-headphones
													</li>
													<li>
														<i class="fa fa-heart"></i> fa-heart
													</li>
													<li>
														<i class="fa fa-heart-o"></i> fa-heart-o
													</li>
													<li>
														<i class="fa fa-home"></i> fa-home
													</li>
													<li>
														<i class="fa fa-inbox"></i> fa-inbox
													</li>
													<li>
														<i class="fa fa-info"></i> fa-info
													</li>
													<li>
														<i class="fa fa-info-circle"></i> fa-info-circle
													</li>
													<li>
														<i class="fa fa-key"></i> fa-key
													</li>
													<li>
														<i class="fa fa-keyboard-o"></i> fa-keyboard-o
													</li>
													<li>
														<i class="fa fa-laptop"></i> fa-laptop
													</li>
													<li>
														<i class="fa fa-leaf"></i> fa-leaf
													</li>
													<li>
														<i class="fa fa-legal"></i> fa-legal <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-lemon-o"></i> fa-lemon-o
													</li>
													<li>
														<i class="fa fa-level-down"></i> fa-level-down
													</li>
													<li>
														<i class="fa fa-level-up"></i> fa-level-up
													</li>
													<li>
														<i class="fa fa-lightbulb-o"></i> fa-lightbulb-o
													</li>
													<li>
														<i class="fa fa-location-arrow"></i> fa-location-arrow
													</li>
													<li>
														<i class="fa fa-lock"></i> fa-lock
													</li>
													<li>
														<i class="fa fa-magic"></i> fa-magic
													</li>
													<li>
														<i class="fa fa-magnet"></i> fa-magnet
													</li>
													<li>
														<i class="fa fa-mail-forward"></i> fa-mail-forward <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-mail-reply"></i> fa-mail-reply <span class="text-muted">(alias)</span>
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-mail-reply-all"></i> fa-mail-reply-all
													</li>
													<li>
														<i class="fa fa-male"></i> fa-male
													</li>
													<li>
														<i class="fa fa-map-marker"></i> fa-map-marker
													</li>
													<li>
														<i class="fa fa-meh-o"></i> fa-meh-o
													</li>
													<li>
														<i class="fa fa-microphone"></i> fa-microphone
													</li>
													<li>
														<i class="fa fa-microphone-slash"></i> fa-microphone-slash
													</li>
													<li>
														<i class="fa fa-minus"></i> fa-minus
													</li>
													<li>
														<i class="fa fa-minus-circle"></i> fa-minus-circle
													</li>
													<li>
														<i class="fa fa-minus-square"></i> fa-minus-square
													</li>
													<li>
														<i class="fa fa-minus-square-o"></i> fa-minus-square-o
													</li>
													<li>
														<i class="fa fa-mobile"></i> fa-mobile
													</li>
													<li>
														<i class="fa fa-mobile-phone"></i> fa-mobile-phone <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-money"></i> fa-money
													</li>
													<li>
														<i class="fa fa-moon-o"></i> fa-moon-o
													</li>
													<li>
														<i class="fa fa-move"></i> fa-move
													</li>
													<li>
														<i class="fa fa-music"></i> fa-music
													</li>
													<li>
														<i class="fa fa-pencil"></i> fa-pencil
													</li>
													<li>
														<i class="fa fa-pencil-square"></i> fa-pencil-square
													</li>
													<li>
														<i class="fa fa-pencil-square-o"></i> fa-pencil-square-o
													</li>
													<li>
														<i class="fa fa-phone"></i> fa-phone
													</li>
													<li>
														<i class="fa fa-phone-square"></i> fa-phone-square
													</li>
													<li>
														<i class="fa fa-picture-o"></i> fa-picture-o
													</li>
													<li>
														<i class="fa fa-plane"></i> fa-plane
													</li>
													<li>
														<i class="fa fa-plus"></i> fa-plus
													</li>
													<li>
														<i class="fa fa-plus-circle"></i> fa-plus-circle
													</li>
													<li>
														<i class="fa fa-plus-square"></i> fa-plus-square
													</li>
													<li>
														<i class="fa fa-power-off"></i> fa-power-off
													</li>
													<li>
														<i class="fa fa-print"></i> fa-print
													</li>
													<li>
														<i class="fa fa-puzzle-piece"></i> fa-puzzle-piece
													</li>
													<li>
														<i class="fa fa-qrcode"></i> fa-qrcode
													</li>
													<li>
														<i class="fa fa-question"></i> fa-question
													</li>
													<li>
														<i class="fa fa-question-circle"></i> fa-question-circle
													</li>
													<li>
														<i class="fa fa-quote-left"></i> fa-quote-left
													</li>
													<li>
														<i class="fa fa-quote-right"></i> fa-quote-right
													</li>
													<li>
														<i class="fa fa-random"></i> fa-random
													</li>
													<li>
														<i class="fa fa-refresh"></i> fa-refresh
													</li>
													<li>
														<i class="fa fa-reorder"></i> fa-reorder
													</li>
													<li>
														<i class="fa fa-reply"></i> fa-reply
													</li>
													<li>
														<i class="fa fa-reply-all"></i> fa-reply-all
													</li>
													<li>
														<i class="fa fa-resize-horizontal"></i> fa-resize-horizontal
													</li>
													<li>
														<i class="fa fa-resize-vertical"></i> fa-resize-vertical
													</li>
													<li>
														<i class="fa fa-retweet"></i> fa-retweet
													</li>
													<li>
														<i class="fa fa-road"></i> fa-road
													</li>
													<li>
														<i class="fa fa-rocket"></i> fa-rocket
													</li>
													<li>
														<i class="fa fa-rss"></i> fa-rss
													</li>
													<li>
														<i class="fa fa-rss-square"></i> fa-rss-square
													</li>
													<li>
														<i class="fa fa-search"></i> fa-search
													</li>
													<li>
														<i class="fa fa-search-minus"></i> fa-search-minus
													</li>
													<li>
														<i class="fa fa-search-plus"></i> fa-search-plus
													</li>
													<li>
														<i class="fa fa-share"></i> fa-share
													</li>
													<li>
														<i class="fa fa-share-square"></i> fa-share-square
													</li>
													<li>
														<i class="fa fa-share-square-o"></i> fa-share-square-o
													</li>
													<li>
														<i class="fa fa-shield"></i> fa-shield
													</li>
													<li>
														<i class="fa fa-shopping-cart"></i> fa-shopping-cart
													</li>
													<li>
														<i class="fa fa-sign-in"></i> fa-sign-in
													</li>
													<li>
														<i class="fa fa-sign-out"></i> fa-sign-out
													</li>
													<li>
														<i class="fa fa-signal"></i> fa-signal
													</li>
													<li>
														<i class="fa fa-sitemap"></i> fa-sitemap
													</li>
													<li>
														<i class="fa fa-smile-o"></i> fa-smile-o
													</li>
													<li>
														<i class="fa fa-sort"></i> fa-sort
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-sort-alpha-asc"></i> fa-sort-alpha-asc
													</li>
													<li>
														<i class="fa fa-sort-alpha-desc"></i> fa-sort-alpha-desc
													</li>
													<li>
														<i class="fa fa-sort-amount-asc"></i> fa-sort-amount-asc
													</li>
													<li>
														<i class="fa fa-sort-amount-desc"></i> fa-sort-amount-desc
													</li>
													<li>
														<i class="fa fa-sort-asc"></i> fa-sort-asc
													</li>
													<li>
														<i class="fa fa-sort-desc"></i> fa-sort-desc
													</li>
													<li>
														<i class="fa fa-sort-down"></i> fa-sort-down <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-sort-numeric-asc"></i> fa-sort-numeric-asc
													</li>
													<li>
														<i class="fa fa-sort-numeric-desc"></i> fa-sort-numeric-desc
													</li>
													<li>
														<i class="fa fa-sort-up"></i> fa-sort-up <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-spinner"></i> fa-spinner
													</li>
													<li>
														<i class="fa fa-square"></i> fa-square
													</li>
													<li>
														<i class="fa fa-square-o"></i> fa-square-o
													</li>
													<li>
														<i class="fa fa-star"></i> fa-star
													</li>
													<li>
														<i class="fa fa-star-half"></i> fa-star-half
													</li>
													<li>
														<i class="fa fa-star-half-empty"></i> fa-star-half-empty <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-star-half-full"></i> fa-star-half-full <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-star-half-o"></i> fa-star-half-o
													</li>
													<li>
														<i class="fa fa-star-o"></i> fa-star-o
													</li>
													<li>
														<i class="fa fa-subscript"></i> fa-subscript
													</li>
													<li>
														<i class="fa fa-suitcase"></i> fa-suitcase
													</li>
													<li>
														<i class="fa fa-sun-o"></i> fa-sun-o
													</li>
													<li>
														<i class="fa fa-superscript"></i> fa-superscript
													</li>
													<li>
														<i class="fa fa-tablet"></i> fa-tablet
													</li>
													<li>
														<i class="fa fa-tachometer"></i> fa-tachometer
													</li>
													<li>
														<i class="fa fa-tag"></i> fa-tag
													</li>
													<li>
														<i class="fa fa-tags"></i> fa-tags
													</li>
													<li>
														<i class="fa fa-tasks"></i> fa-tasks
													</li>
													<li>
														<i class="fa fa-terminal"></i> fa-terminal
													</li>
													<li>
														<i class="fa fa-thumb-tack"></i> fa-thumb-tack
													</li>
													<li>
														<i class="fa fa-thumbs-down"></i> fa-thumbs-down
													</li>
													<li>
														<i class="fa fa-thumbs-o-down"></i> fa-thumbs-o-down
													</li>
													<li>
														<i class="fa fa-thumbs-o-up"></i> fa-thumbs-o-up
													</li>
													<li>
														<i class="fa fa-thumbs-up"></i> fa-thumbs-up
													</li>
													<li>
														<i class="fa fa-ticket"></i> fa-ticket
													</li>
													<li>
														<i class="fa fa-times"></i> fa-times
													</li>
													<li>
														<i class="fa fa-times-circle"></i> fa-times-circle
													</li>
													<li>
														<i class="fa fa-times-circle-o"></i> fa-times-circle-o
													</li>
													<li>
														<i class="fa fa-tint"></i> fa-tint
													</li>
													<li>
														<i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-trash-o"></i> fa-trash-o
													</li>
													<li>
														<i class="fa fa-trophy"></i> fa-trophy
													</li>
													<li>
														<i class="fa fa-truck"></i> fa-truck
													</li>
													<li>
														<i class="fa fa-umbrella"></i> fa-umbrella
													</li>
													<li>
														<i class="fa fa-unlock"></i> fa-unlock
													</li>
													<li>
														<i class="fa fa-unlock-o"></i> fa-unlock-o
													</li>
													<li>
														<i class="fa fa-unsorted"></i> fa-unsorted <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-upload"></i> fa-upload
													</li>
													<li>
														<i class="fa fa-user"></i> fa-user
													</li>
													<li>
														<i class="fa fa-video-camera"></i> fa-video-camera
													</li>
													<li>
														<i class="fa fa-volume-down"></i> fa-volume-down
													</li>
													<li>
														<i class="fa fa-volume-off"></i> fa-volume-off
													</li>
													<li>
														<i class="fa fa-volume-up"></i> fa-volume-up
													</li>
													<li>
														<i class="fa fa-warning"></i> fa-warning <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-wheelchair"></i> fa-wheelchair
													</li>
													<li>
														<i class="fa fa-wrench"></i> fa-wrench
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div id="icons-text-editor">
										<div class="row">
											<div class="col-sm-12">
												<h2>Form Control Icons</h2>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-check-square"></i> fa-check-square
													</li>
													<li>
														<i class="fa fa-check-square-o"></i> fa-check-square-o
													</li>
													<li>
														<i class="fa fa-circle"></i> fa-circle
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-circle-o"></i> fa-circle-o
													</li>
													<li>
														<i class="fa fa-dot-circle-o"></i> fa-dot-circle-o
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-minus-square"></i> fa-minus-square
													</li>
													<li>
														<i class="fa fa-minus-square-o"></i> fa-minus-square-o
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-square"></i> fa-square
													</li>
													<li>
														<i class="fa fa-square-o"></i> fa-square-o
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div id="icons-directional">
										<div class="row">
											<div class="col-sm-12">
												<h2>Currency Icons</h2>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-btc"></i> fa-btc
													</li>
													<li>
														<i class="fa fa-cny"></i> fa-cny <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-dollar"></i> fa-dollar <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-eur"></i> fa-eur
													</li>
													<li>
														<i class="fa fa-euro"></i> fa-euro <span class="text-muted">(alias)</span>
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-gbp"></i> fa-gbp
													</li>
													<li>
														<i class="fa fa-inr"></i> fa-inr
													</li>
													<li>
														<i class="fa fa-jpy"></i> fa-jpy
													</li>
													<li>
														<i class="fa fa-krw"></i> fa-krw
													</li>
													<li>
														<i class="fa fa-money"></i> fa-money
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-rmb"></i> fa-rmb <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-rouble"></i> fa-rouble <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-rub"></i> fa-rub
													</li>
													<li>
														<i class="fa fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-rupee"></i> fa-rupee <span class="text-muted">(alias)</span>
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-try"></i> fa-try
													</li>
													<li>
														<i class="fa fa-turkish-lira"></i> fa-turkish-lira <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-usd"></i> fa-usd
													</li>
													<li>
														<i class="fa fa-won"></i> fa-won <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-yen"></i> fa-yen <span class="text-muted">(alias)</span>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div id="icons-video-player">
										<div class="row">
											<div class="col-sm-12">
												<h2>Text Editor Icons</h2>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-align-center"></i> fa-align-center
													</li>
													<li>
														<i class="fa fa-align-justify"></i> fa-align-justify
													</li>
													<li>
														<i class="fa fa-align-left"></i> fa-align-left
													</li>
													<li>
														<i class="fa fa-align-right"></i> fa-align-right
													</li>
													<li>
														<i class="fa fa-bold"></i> fa-bold
													</li>
													<li>
														<i class="fa fa-chain"></i> fa-chain <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-chain-broken"></i> fa-chain-broken
													</li>
													<li>
														<i class="fa fa-clipboard"></i> fa-clipboard
													</li>
													<li>
														<i class="fa fa-columns"></i> fa-columns
													</li>
													<li>
														<i class="fa fa-copy"></i> fa-copy <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-cut"></i> fa-cut <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-dedent"></i> fa-dedent <span class="text-muted">(alias)</span>
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-eraser"></i> fa-eraser
													</li>
													<li>
														<i class="fa fa-file"></i> fa-file
													</li>
													<li>
														<i class="fa fa-file-o"></i> fa-file-o
													</li>
													<li>
														<i class="fa fa-file-text"></i> fa-file-text
													</li>
													<li>
														<i class="fa fa-file-text-o"></i> fa-file-text-o
													</li>
													<li>
														<i class="fa fa-files-o"></i> fa-files-o
													</li>
													<li>
														<i class="fa fa-floppy-o"></i> fa-floppy-o
													</li>
													<li>
														<i class="fa fa-font"></i> fa-font
													</li>
													<li>
														<i class="fa fa-indent"></i> fa-indent
													</li>
													<li>
														<i class="fa fa-italic"></i> fa-italic
													</li>
													<li>
														<i class="fa fa-link"></i> fa-link
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-list"></i> fa-list
													</li>
													<li>
														<i class="fa fa-list-alt"></i> fa-list-alt
													</li>
													<li>
														<i class="fa fa-list-ol"></i> fa-list-ol
													</li>
													<li>
														<i class="fa fa-list-ul"></i> fa-list-ul
													</li>
													<li>
														<i class="fa fa-outdent"></i> fa-outdent
													</li>
													<li>
														<i class="fa fa-paperclip"></i> fa-paperclip
													</li>
													<li>
														<i class="fa fa-paste"></i> fa-paste <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-repeat"></i> fa-repeat
													</li>
													<li>
														<i class="fa fa-rotate-left"></i> fa-rotate-left <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-rotate-right"></i> fa-rotate-right <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-save"></i> fa-save <span class="text-muted">(alias)</span>
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-scissors"></i> fa-scissors
													</li>
													<li>
														<i class="fa fa-strikethrough"></i> fa-strikethrough
													</li>
													<li>
														<i class="fa fa-table"></i> fa-table
													</li>
													<li>
														<i class="fa fa-text-height"></i> fa-text-height
													</li>
													<li>
														<i class="fa fa-text-width"></i> fa-text-width
													</li>
													<li>
														<i class="fa fa-th"></i> fa-th
													</li>
													<li>
														<i class="fa fa-th-large"></i> fa-th-large
													</li>
													<li>
														<i class="fa fa-th-list"></i> fa-th-list
													</li>
													<li>
														<i class="fa fa-underline"></i> fa-underline
													</li>
													<li>
														<i class="fa fa-undo"></i> fa-undo
													</li>
													<li>
														<i class="fa fa-unlink"></i> fa-unlink <span class="text-muted">(alias)</span>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div id="icons-social">
										<div class="row">
											<div class="col-sm-12">
												<h2>Directional Icons</h2>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-angle-double-down"></i> fa-angle-double-down
													</li>
													<li>
														<i class="fa fa-angle-double-left"></i> fa-angle-double-left
													</li>
													<li>
														<i class="fa fa-angle-double-right"></i> fa-angle-double-right
													</li>
													<li>
														<i class="fa fa-angle-double-up"></i> fa-angle-double-up
													</li>
													<li>
														<i class="fa fa-angle-down"></i> fa-angle-down
													</li>
													<li>
														<i class="fa fa-angle-left"></i> fa-angle-left
													</li>
													<li>
														<i class="fa fa-angle-right"></i> fa-angle-right
													</li>
													<li>
														<i class="fa fa-angle-up"></i> fa-angle-up
													</li>
													<li>
														<i class="fa fa-arrow-circle-down"></i> fa-arrow-circle-down
													</li>
													<li>
														<i class="fa fa-arrow-circle-left"></i> fa-arrow-circle-left
													</li>
													<li>
														<i class="fa fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down
													</li>
													<li>
														<i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right
													</li>
													<li>
														<i class="fa fa-arrow-circle-o-up"></i> fa-arrow-circle-o-up
													</li>
													<li>
														<i class="fa fa-arrow-circle-right"></i> fa-arrow-circle-right
													</li>
													<li>
														<i class="fa fa-arrow-circle-up"></i> fa-arrow-circle-up
													</li>
													<li>
														<i class="fa fa-arrow-down"></i> fa-arrow-down
													</li>
													<li>
														<i class="fa fa-arrow-left"></i> fa-arrow-left
													</li>
													<li>
														<i class="fa fa-arrow-right"></i> fa-arrow-right
													</li>
													<li>
														<i class="fa fa-arrow-up"></i> fa-arrow-up
													</li>
													<li>
														<i class="fa fa-caret-down"></i> fa-caret-down
													</li>
													<li>
														<i class="fa fa-caret-left"></i> fa-caret-left
													</li>
													<li>
														<i class="fa fa-caret-right"></i> fa-caret-right
													</li>
													<li>
														<i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left
													</li>
													<li>
														<i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right
													</li>
													<li>
														<i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up
													</li>
													<li>
														<i class="fa fa-caret-up"></i> fa-caret-up
													</li>
													<li>
														<i class="fa fa-chevron-circle-down"></i> fa-chevron-circle-down
													</li>
													<li>
														<i class="fa fa-chevron-circle-left"></i> fa-chevron-circle-left
													</li>
													<li>
														<i class="fa fa-chevron-circle-right"></i> fa-chevron-circle-right
													</li>
													<li>
														<i class="fa fa-chevron-circle-up"></i> fa-chevron-circle-up
													</li>
													<li>
														<i class="fa fa-chevron-down"></i> fa-chevron-down
													</li>
													<li>
														<i class="fa fa-chevron-left"></i> fa-chevron-left
													</li>
													<li>
														<i class="fa fa-chevron-right"></i> fa-chevron-right
													</li>
													<li>
														<i class="fa fa-chevron-up"></i> fa-chevron-up
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-hand-o-down"></i> fa-hand-o-down
													</li>
													<li>
														<i class="fa fa-hand-o-left"></i> fa-hand-o-left
													</li>
													<li>
														<i class="fa fa-hand-o-right"></i> fa-hand-o-right
													</li>
													<li>
														<i class="fa fa-hand-o-up"></i> fa-hand-o-up
													</li>
													<li>
														<i class="fa fa-long-arrow-down"></i> fa-long-arrow-down
													</li>
													<li>
														<i class="fa fa-long-arrow-left"></i> fa-long-arrow-left
													</li>
													<li>
														<i class="fa fa-long-arrow-right"></i> fa-long-arrow-right
													</li>
													<li>
														<i class="fa fa-long-arrow-up"></i> fa-long-arrow-up
													</li>
													<li>
														<i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div id="icons-social">
										<div class="row">
											<div class="col-sm-12">
												<h2>Video Player Icons</h2>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-backward"></i> fa-backward
													</li>
													<li>
														<i class="fa fa-eject"></i> fa-eject
													</li>
													<li>
														<i class="fa fa-fast-backward"></i> fa-fast-backward
													</li>
													<li>
														<i class="fa fa-fast-forward"></i> fa-fast-forward
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-forward"></i> fa-forward
													</li>
													<li>
														<i class="fa fa-fullscreen"></i> fa-fullscreen
													</li>
													<li>
														<i class="fa fa-pause"></i> fa-pause
													</li>
													<li>
														<i class="fa fa-play"></i> fa-play
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-play-circle"></i> fa-play-circle
													</li>
													<li>
														<i class="fa fa-play-circle-o"></i> fa-play-circle-o
													</li>
													<li>
														<i class="fa fa-resize-full"></i> fa-resize-full
													</li>
													<li>
														<i class="fa fa-resize-small"></i> fa-resize-small
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-step-backward"></i> fa-step-backward
													</li>
													<li>
														<i class="fa fa-step-forward"></i> fa-step-forward
													</li>
													<li>
														<i class="fa fa-stop"></i> fa-stop
													</li>
													<li>
														<i class="fa fa-youtube-play"></i> fa-youtube-play
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div id="icons-social">
										<div class="row">
											<div class="col-sm-12">
												<h2>Brand Icons</h2>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-adn"></i> fa-adn
													</li>
													<li>
														<i class="fa fa-android"></i> fa-android
													</li>
													<li>
														<i class="fa fa-apple"></i> fa-apple
													</li>
													<li>
														<i class="fa fa-bitbucket"></i> fa-bitbucket
													</li>
													<li>
														<i class="fa fa-bitbucket-square"></i> fa-bitbucket-square
													</li>
													<li>
														<i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span>
													</li>
													<li>
														<i class="fa fa-btc"></i> fa-btc
													</li>
													<li>
														<i class="fa fa-css3"></i> fa-css3
													</li>
													<li>
														<i class="fa fa-dribbble"></i> fa-dribbble
													</li>
													<li>
														<i class="fa fa-dropbox"></i> fa-dropbox
													</li>
													<li>
														<i class="fa fa-facebook"></i> fa-facebook
													</li>
													<li>
														<i class="fa fa-facebook-square"></i> fa-facebook-square
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-flickr"></i> fa-flickr
													</li>
													<li>
														<i class="fa fa-foursquare"></i> fa-foursquare
													</li>
													<li>
														<i class="fa fa-github"></i> fa-github
													</li>
													<li>
														<i class="fa fa-github-alt"></i> fa-github-alt
													</li>
													<li>
														<i class="fa fa-github-square"></i> fa-github-square
													</li>
													<li>
														<i class="fa fa-gittip"></i> fa-gittip
													</li>
													<li>
														<i class="fa fa-google-plus"></i> fa-google-plus
													</li>
													<li>
														<i class="fa fa-google-plus-square"></i> fa-google-plus-square
													</li>
													<li>
														<i class="fa fa-html5"></i> fa-html5
													</li>
													<li>
														<i class="fa fa-instagram"></i> fa-instagram
													</li>
													<li>
														<i class="fa fa-linkedin"></i> fa-linkedin
													</li>
													<li>
														<i class="fa fa-linkedin-square"></i> fa-linkedin-square
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-linux"></i> fa-linux
													</li>
													<li>
														<i class="fa fa-maxcdn"></i> fa-maxcdn
													</li>
													<li>
														<i class="fa fa-pagelines"></i> fa-pagelines
													</li>
													<li>
														<i class="fa fa-pinterest"></i> fa-pinterest
													</li>
													<li>
														<i class="fa fa-pinterest-square"></i> fa-pinterest-square
													</li>
													<li>
														<i class="fa fa-renren"></i> fa-renren
													</li>
													<li>
														<i class="fa fa-skype"></i> fa-skype
													</li>
													<li>
														<i class="fa fa-stack-exchange"></i> fa-stack-exchange
													</li>
													<li>
														<i class="fa fa-stack-overflow"></i> fa-stack-overflow
													</li>
													<li>
														<i class="fa fa-trello"></i> fa-trello
													</li>
													<li>
														<i class="fa fa-tumblr"></i> fa-tumblr
													</li>
													<li>
														<i class="fa fa-tumblr-square"></i> fa-tumblr-square
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-twitter"></i> fa-twitter
													</li>
													<li>
														<i class="fa fa-twitter-square"></i> fa-twitter-square
													</li>
													<li>
														<i class="fa fa-vimeo-square"></i> fa-vimeo-square
													</li>
													<li>
														<i class="fa fa-vk"></i> fa-vk
													</li>
													<li>
														<i class="fa fa-weibo"></i> fa-weibo
													</li>
													<li>
														<i class="fa fa-windows"></i> fa-windows
													</li>
													<li>
														<i class="fa fa-xing"></i> fa-xing
													</li>
													<li>
														<i class="fa fa-xing-square"></i> fa-xing-square
													</li>
													<li>
														<i class="fa fa-youtube"></i> fa-youtube
													</li>
													<li>
														<i class="fa fa-youtube-play"></i> fa-youtube-play
													</li>
													<li>
														<i class="fa fa-youtube-square"></i> fa-youtube-square
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div id="icons-social">
										<div class="row">
											<div class="col-sm-12">
												<h2>Medical Icons</h2>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-ambulance"></i> fa-ambulance
													</li>
													<li>
														<i class="fa fa-h-square"></i> fa-h-square
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-hospital"></i> fa-hospital
													</li>
													<li>
														<i class="fa fa-medkit"></i> fa-medkit
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-plus-square"></i> fa-plus-square
													</li>
													<li>
														<i class="fa fa-stethoscope"></i> fa-stethoscope
													</li>
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="the-icons list-unstyled">
													<li>
														<i class="fa fa-user-md"></i> fa-user-md
													</li>
													<li>
														<i class="fa fa-wheelchair"></i> fa-wheelchair
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end: FONT AWESOME -->
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
		<script src="assets/plugins/ladda-bootstrap/dist/spin.min.js"></script>
		<script src="assets/plugins/ladda-bootstrap/dist/ladda.min.js"></script>
		<script src="assets/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js"></script>
		<script src="assets/js/ui-buttons.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				UIButtons.init();
			});
		</script>
		
	</body>
	<!-- end: BODY -->

</html>
