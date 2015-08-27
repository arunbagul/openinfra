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
							<!-- start: BASIC TABLE PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Basic table
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
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>Browser</th>
												<th class="hidden-xs">Creator</th>
												<th>Software license</th>
												<th class="hidden-xs">Current layout engine</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="center">1</td>
												<td class="hidden-xs">Google Chrome</td>
												<td>Google</td>
												<td>
												<a href="#" rel="nofollow" target="_blank">
													Terms of Service
												</a></td>
												<td class="hidden-xs">Blink</td>
												<td class="center">
												<div class="visible-md visible-lg hidden-sm hidden-xs">
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
													<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group">
														<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center">2</td>
												<td>Internet Explorer</td>
												<td class="hidden-xs">Microsoft, Spyglass</td>
												<td>
												<a href="#" rel="nofollow" target="_blank">
													Proprietary
												</a></td>
												<td class="hidden-xs">Trident</td>
												<td class="center">
												<div class="visible-md visible-lg hidden-sm hidden-xs">
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
													<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group">
														<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center">3</td>
												<td>Mozilla Firefox</td>
												<td class="hidden-xs">Mozilla Foundation</td>
												<td>
												<a href="#" rel="nofollow" target="_blank">
													MPR
												</a></td>
												<td class="hidden-xs">Gecko</td>
												<td class="center">
												<div class="visible-md visible-lg hidden-sm hidden-xs">
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
													<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group">
														<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center">4</td>
												<td>Safari</td>
												<td class="hidden-xs">Apple Inc.</td>
												<td>
												<a href="#" rel="nofollow" target="_blank">
													Proprietary
												</a></td>
												<td class="hidden-xs">WebKit</td>
												<td class="center">
												<div class="visible-md visible-lg hidden-sm hidden-xs">
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
													<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group">
														<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center">5</td>
												<td>Opera</td>
												<td class="hidden-xs">Opera Software</td>
												<td>
												<a href="#" rel="nofollow" target="_blank">
													Proprietary
												</a></td>
												<td class="hidden-xs">Presto</td>
												<td class="center">
												<div class="visible-md visible-lg hidden-sm hidden-xs">
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
													<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group">
														<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- end: BASIC TABLE PANEL -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- start: TABLE WITH IMAGES PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Table with images
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
									<table class="table table-striped table-bordered table-hover" id="sample-table-2">
										<thead>
											<tr>
												<th class="center">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></th>
												<th class="center">Photo</th>
												<th>Full Name</th>
												<th class="hidden-xs">Role</th>
												<th class="hidden-xs">Email</th>
												<th class="hidden-xs">Phone</th>
												<th></th>
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
												<td class="center"><img src="assets/images/user-small.png" alt="image"/></td>
												<td>Admin</td>
												<td class="hidden-xs">UI Designer</td>
												<td class="hidden-xs">
												<a href="#" rel="nofollow" target="_blank">
													admin@example.com
												</a></td>
												<td class="hidden-xs">+91</td>
												<td class="center">
												<div class="visible-md visible-lg hidden-sm hidden-xs">
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
													<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group">
														<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td class="center"><img src="assets/images/user-small.png" alt="image"/></td>
												<td>SFTP Mgmr</td>
												<td class="hidden-xs">Content Designer</td>
												<td class="hidden-xs">
												<a href="#" rel="nofollow" target="_blank">
													sftp@example.com
												</a></td>
												<td class="hidden-xs">+91</td>
												<td class="center">
												<div class="visible-md visible-lg hidden-sm hidden-xs">
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
													<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group">
														<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td class="center"><img src="assets/images/user-small.png" alt="image"/></td>
												<td>Web</td>
												<td class="hidden-xs">Visual Designer</td>
												<td class="hidden-xs">
												<a href="#" rel="nofollow" target="_blank">
													contact@example.com
												</a></td>
												<td class="hidden-xs">+001</td>
												<td class="center">
												<div class="visible-md visible-lg hidden-sm hidden-xs">
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
													<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group">
														<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td class="center"><img src="assets/images/user-small.png" alt="image"/></td>
												<td>Ella Patterson</td>
												<td class="hidden-xs">Web Editor</td>
												<td class="hidden-xs">
												<a href="#" rel="nofollow" target="_blank">
													ella@example.com
												</a></td>
												<td class="hidden-xs">(799)-994-9999</td>
												<td class="center">
												<div class="visible-md visible-lg hidden-sm hidden-xs">
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
													<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group">
														<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td class="center"><img src="assets/images/user-small.png" alt="image"/></td>
												<td>Kenneth Ross</td>
												<td class="hidden-xs">Senior Designer</td>
												<td class="hidden-xs">
												<a href="#" rel="nofollow" target="_blank">
													kenneth@example.com
												</a></td>
												<td class="hidden-xs">(111)-114-1173</td>
												<td class="center">
												<div class="visible-md visible-lg hidden-sm hidden-xs">
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
													<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group">
														<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- end: TABLE WITH IMAGES PANEL -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<!-- start: CONDENSED TABLE PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Condensed table
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
									<table class="table table-condensed table-hover" id="sample-table-3">
										<thead>
											<tr>
												<th class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></th>
												<th>Domain</th>
												<th class="hidden-xs">Clicks</th>
												<th><i class="fa fa-time"></i> Update </th>
												<th class="hidden-xs">Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													alpha.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Feb 13</td>
												<td class="hidden-xs"><span class="label label-sm label-warning">Expiring</span></td>
											</tr>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													beta.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Jen 15</td>
												<td class="hidden-xs"><span class="label label-sm label-success">Active</span></td>
											</tr>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													gamma.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Mar 09</td>
												<td class="hidden-xs"><span class="label label-sm label-danger">Expired</span></td>
											</tr>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													delta.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Feb 10</td>
												<td class="hidden-xs"><span class="label label-sm label-inverse">Flagged</span></td>
											</tr>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													epsilon.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Feb 18</td>
												<td class="hidden-xs"><span class="label label-sm label-success">Active</span></td>
											</tr>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													zeta.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Feb 13</td>
												<td class="hidden-xs"><span class="label label-sm label-warning">Expiring</span></td>
											</tr>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													eta.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Jen 15</td>
												<td class="hidden-xs"><span class="label label-sm label-success">Active</span></td>
											</tr>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													theta.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Mar 09</td>
												<td class="hidden-xs"><span class="label label-sm label-danger">Expired</span></td>
											</tr>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													iota.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Feb 10</td>
												<td class="hidden-xs"><span class="label label-sm label-inverse">Flagged</span></td>
											</tr>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													kappa.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Feb 18</td>
												<td class="hidden-xs"><span class="label label-sm label-success">Active</span></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- end: CONDENSED TABLE PANEL -->
						</div>
						<div class="col-md-6">
							<!-- start: BORDERED TABLE PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Bordered Table
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
									<table class="table table-bordered table-hover" id="sample-table-4">
										<thead>
											<tr>
												<th class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></th>
												<th>Domain</th>
												<th class="hidden-xs">Clicks</th>
												<th><i class="fa fa-time"></i> Update </th>
												<th class="hidden-xs">Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													alpha.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Feb 13</td>
												<td class="hidden-xs"><span class="label label-sm label-warning">Expiring</span></td>
											</tr>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													beta.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Jen 15</td>
												<td class="hidden-xs"><span class="label label-sm label-success">Active</span></td>
											</tr>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													gamma.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Mar 09</td>
												<td class="hidden-xs"><span class="label label-sm label-danger">Expired</span></td>
											</tr>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													delta.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Feb 10</td>
												<td class="hidden-xs"><span class="label label-sm label-inverse">Flagged</span></td>
											</tr>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													epsilon.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Feb 18</td>
												<td class="hidden-xs"><span class="label label-sm label-success">Active</span></td>
											</tr>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													zeta.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Feb 13</td>
												<td class="hidden-xs"><span class="label label-sm label-warning">Expiring</span></td>
											</tr>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													eta.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Jen 15</td>
												<td class="hidden-xs"><span class="label label-sm label-success">Active</span></td>
											</tr>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													theta.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Mar 09</td>
												<td class="hidden-xs"><span class="label label-sm label-danger">Expired</span></td>
											</tr>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													iota.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Feb 10</td>
												<td class="hidden-xs"><span class="label label-sm label-inverse">Flagged</span></td>
											</tr>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
												<a href="#">
													kappa.com
												</a></td>
												<td class="hidden-xs">3,330</td>
												<td>Feb 18</td>
												<td class="hidden-xs"><span class="label label-sm label-success">Active</span></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- end: BORDERED TABLE PANEL -->
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
