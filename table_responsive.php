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
							<div class="alert alert-info">
								Please try to re-size your browser window in order to see the tables in responsive mode.
							</div>
							<!-- start: RESPONSIVE TABLE PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Responsive Table
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
									<div class="table-responsive">
										<table class="table table-bordered table-hover" id="sample-table-1">
											<thead>
												<tr>
													<th class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></th>
													<th>Domain</th>
													<th>Price</th>
													<th>Clicks</th>
													<th><i class="fa fa-time"></i> Update </th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													<a href="#">
														alpha.com
													</a></td>
													<td>$45</td>
													<td>3,330</td>
													<td>Feb 13</td>
													<td><span class="label label-sm label-warning">Expiring</span></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													<a href="#">
														beta.com
													</a></td>
													<td>$70</td>
													<td>3,330</td>
													<td>Jen 15</td>
													<td><span class="label label-sm label-success">Registered</span></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													<a href="#">
														gamma.com
													</a></td>
													<td>$25</td>
													<td>3,330</td>
													<td>Mar 09</td>
													<td><span class="label label-sm label-danger">Expired</span></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													<a href="#">
														delta.com
													</a></td>
													<td>$50</td>
													<td>3,330</td>
													<td>Feb 10</td>
													<td><span class="label label-sm label-inverse">Flagged</span></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													<a href="#">
														epsilon.com
													</a></td>
													<td>$35</td>
													<td>3,330</td>
													<td>Feb 18</td>
													<td><span class="label label-sm label-success">Registered</span></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													<a href="#">
														zeta.com
													</a></td>
													<td>$45</td>
													<td>3,330</td>
													<td>Feb 13</td>
													<td><span class="label label-sm label-warning">Expiring</span></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													<a href="#">
														eta.com
													</a></td>
													<td>$70</td>
													<td>3,330</td>
													<td>Jen 15</td>
													<td><span class="label label-sm label-success">Registered</span></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													<a href="#">
														theta.com
													</a></td>
													<td>$25</td>
													<td>3,330</td>
													<td>Mar 09</td>
													<td><span class="label label-sm label-danger">Expired</span></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													<a href="#">
														iota.com
													</a></td>
													<td>$50</td>
													<td>3,330</td>
													<td>Feb 10</td>
													<td><span class="label label-sm label-inverse">Flagged</span></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													<a href="#">
														kappa.com
													</a></td>
													<td>$35</td>
													<td>3,330</td>
													<td>Feb 18</td>
													<td><span class="label label-sm label-success">Registered</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- end: RESPONSIVE TABLE PANEL -->
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
