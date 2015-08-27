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
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<!-- start: INBOX PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-envelope-o"></i>
									Inbox
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
								<div class="panel-body messages">
									<ul class="messages-list">
										<li class="messages-search">
											<form action="#" class="form-inline">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Search messages...">
													<div class="input-group-btn">
														<button class="btn btn-primary" type="button">
															<i class="fa fa-search"></i>
														</button>
													</div>
												</div>
											</form>
										</li>
										<li class="messages-item">
											<span title="Mark as starred" class="messages-item-star"><i class="fa fa-star"></i></span>
											<img alt="" src="assets/images/user-small.png" class="messages-item-avatar">
											<span class="messages-item-from">Arun Bagul</span>
											<div class="messages-item-time">
												<span class="text">10:23 PM</span>
												<div class="messages-item-actions">
													<a data-toggle="dropdown" title="Reply" href="#"><i class="fa fa-mail-reply"></i></a>
													<div class="dropdown">
														<a data-toggle="dropdown" title="Move to folder" href="#"><i class="fa fa-folder-open"></i></a>
														<ul class="dropdown-menu pull-right">
															<li>
																<a href="#">
																	<i class="fa fa-pencil"></i>
																	Mark as Read
																</a>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-ban"></i>
																	Spam
																</a>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-trash-o"></i>
																	Delete
																</a>
															</li>
														</ul>
													</div>
													<div class="dropdown">
														<a data-toggle="dropdown" title="Attach to tag" href="#"><i class="fa fa-tag"></i></a>
														<ul class="dropdown-menu pull-right">
															<li>
																<a href="#"><i class="tag-icon red"></i>Important</a>
															</li>
															<li>
																<a href="#"><i class="tag-icon teal"></i>Work</a>
															</li>
															<li>
																<a href="#"><i class="tag-icon green"></i>Home</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<span class="messages-item-subject">Test Message ...</span>
											<span class="messages-item-preview">Test Messages</span>
										</li>
										<li class="messages-item active starred">
											<span title="Remove star" class="messages-item-star"><i class="fa fa-star"></i></span>
											<img alt="" src="assets/images/user-small.png" class="messages-item-avatar">
											<span class="messages-item-from">Admin</span>
											<div class="messages-item-time">
												<span class="text">08:46 PM</span>
												<div class="messages-item-actions">
													<a data-toggle="dropdown" title="Reply" href="#"><i class="fa fa-mail-reply"></i></a>
													<div class="dropdown">
														<a data-toggle="dropdown" title="Move to folder" href="#"><i class="fa fa-folder-open"></i></a>
														<ul class="dropdown-menu pull-right">
															<li>
																<a href="#">
																	<i class="fa fa-pencil"></i>
																	Mark as Read
																</a>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-ban"></i>
																	Spam
																</a>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-trash-o"></i>
																	Delete
																</a>
															</li>
														</ul>
													</div>
													<div class="dropdown">
														<a data-toggle="dropdown" title="Attach to tag" href="#"><i class="fa fa-tag"></i></a>
														<ul class="dropdown-menu pull-right">
															<li>
																<a href="#"><i class="tag-icon red"></i>Important</a>
															</li>
															<li>
																<a href="#"><i class="tag-icon teal"></i>Work</a>
															</li>
															<li>
																<a href="#"><i class="tag-icon green"></i>Home</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<span class="messages-item-subject">Test Messages...</span>
											<span class="messages-item-preview">Test Messages</span>
										</li>
										<li class="messages-item">
											<span title="Mark as starred" class="messages-item-star"><i class="fa fa-star"></i></span>
											<span class="messages-item-attachment"><i class="fa fa-paperclip"></i></span>
											<img alt="" src="assets/images/user-small.png" class="messages-item-avatar">
											<span class="messages-item-from">SFTP</span>
											<div class="messages-item-time">
												<span class="text">04:03 PM</span>
												<div class="messages-item-actions">
													<a data-toggle="dropdown" title="Reply" href="#"><i class="fa fa-mail-reply"></i></a>
													<div class="dropdown">
														<a data-toggle="dropdown" title="Move to folder" href="#"><i class="fa fa-folder-open"></i></a>
														<ul class="dropdown-menu pull-right">
															<li>
																<a href="#">
																	<i class="fa fa-pencil"></i>
																	Mark as Read
																</a>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-ban"></i>
																	Spam
																</a>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-trash-o"></i>
																	Delete
																</a>
															</li>
														</ul>
													</div>
													<div class="dropdown">
														<a data-toggle="dropdown" title="Attach to tag" href="#"><i class="fa fa-tag"></i></a>
														<ul class="dropdown-menu pull-right">
															<li>
																<a href="#"><i class="tag-icon red"></i>Important</a>
															</li>
															<li>
																<a href="#"><i class="tag-icon teal"></i>Work</a>
															</li>
															<li>
																<a href="#"><i class="tag-icon green"></i>Home</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<span class="messages-item-subject">Test Msg</span>
											<span class="messages-item-preview">Test Msg...</span>
										</li>

									</ul>
									<div class="messages-content">
										<div class="message-header">
											<div class="message-time">
												11 NOV 2013, 11:46 PM
											</div>
											<div class="message-from">
												Arun&lt;contact@indiangnu.org&gt;
											</div>
											<div class="message-to">
												To: Admin
											</div>
											<div class="message-subject">
												New frontend layout
											</div>
											<div class="message-actions">
												<a title="Move to trash" href="#"><i class="fa fa-trash-o"></i></a>
												<a title="Reply" href="#"><i class="fa fa-reply"></i></a>
												<a title="Reply to all" href="#"><i class="fa fa-reply-all"></i></a>
												<a title="Forward" href="#"><i class="fa fa-long-arrow-right"></i></a>
											</div>
										</div>
										<div class="message-content">
											<p>
												<strong>openinfra</strong> welcome to Infra.
											</p>
											<p>Welcome to openlsm
											</p>
											<p>welcome to could dashboard
											</p>
										</div>
									</div>
								</div>
							</div>
							<!-- end: INBOX PANEL -->
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
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
			});
		</script>
		
	</body>
	<!-- end: BODY -->

</html>
