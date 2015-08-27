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
		<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2.css" />
		<link rel="stylesheet" href="assets/plugins/DataTables/media/css/DT_bootstrap.css" />
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
							<!-- start: DYNAMIC TABLE PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Dynamic Table
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
									<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
										<thead>
											<tr>
												<th>Browser</th>
												<th class="hidden-xs">Creator</th>
												<th>Cost (
												USD)</th>
												<th class="hidden-xs"> Software license</th>
												<th>Current
												layout engine</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Amaya</td>
												<td class="hidden-xs">W3C,
												INRIA</td>
												<td>Free</td>
												<td class="hidden-xs">W3C</td>
												<td>Amaya</td>
											</tr>
											<tr>
												<td>AOL Explorer</td>
												<td class="hidden-xs">America Online, Inc</td>
												<td>Free</td>
												<td class="hidden-xs">Proprietary</td>
												<td>Trident</td>
											</tr>
											<tr>
												<td>Arora</td>
												<td class="hidden-xs">Benjamin C. Meyer</td>
												<td>Free</td>
												<td class="hidden-xs">GPL</td>
												<td>WebKit</td>
											</tr>
											<tr>
												<td>Avant</td>
												<td class="hidden-xs">Avant Force</td>
												<td>Free</td>
												<td class="hidden-xs">Proprietary</td>
												<td>Tri-engine</td>
											</tr>
											<tr>
												<td>Camino</td>
												<td class="hidden-xs">The Camino Project</td>
												<td>Free</td>
												<td class="hidden-xs">tri-license</td>
												<td>Gecko</td>
											</tr>
											<tr>
												<td>Chromium</td>
												<td class="hidden-xs">Google</td>
												<td>Free</td>
												<td class="hidden-xs">BSD</td>
												<td>WebKit</td>
											</tr>
											<tr>
												<td>Dillo</td>
												<td class="hidden-xs">The Dillo team</td>
												<td>Free</td>
												<td class="hidden-xs">GPL</td>
												<td>Dillo</td>
											</tr>
											<tr>
												<td>Dooble</td>
												<td class="hidden-xs">Dooble Team</td>
												<td>Free</td>
												<td class="hidden-xs">GPL</td>
												<td>WebKit</td>
											</tr>
											<tr>
												<td>ELinks</td>
												<td class="hidden-xs">Baudis, Fonseca, <i>et al.</i></td>
												<td>Free</td>
												<td class="hidden-xs">GPL</td>
												<td>built-in</td>
											</tr>
											<tr>
												<td>Web</td>
												<td class="hidden-xs">Marco Pesenti Gritti</td>
												<td>Free</td>
												<td class="hidden-xs">GPL</td>
												<td>WebKit</td>
											</tr>
											<tr>
												<td>Flock</td>
												<td class="hidden-xs">Flock Inc</td>
												<td>Free</td>
												<td class="hidden-xs">Proprietary</td>
												<td>WebKit</td>
											</tr>
											<tr>
												<td>Galeon</td>
												<td class="hidden-xs">Marco Pesenti Gritti</td>
												<td>Free</td>
												<td class="hidden-xs">GPL</td>
												<td>Gecko</td>
											</tr>
											<tr>
												<td>Google Chrome</td>
												<td class="hidden-xs">Google</td>
												<td>Free</td>
												<td class="hidden-xs">Google Chrome Terms of Service</td>
												<td>Blink</td>
											</tr>
											<tr>
												<td>GNU IceCat</td>
												<td class="hidden-xs">GNU</td>
												<td>Free</td>
												<td class="hidden-xs">MPL</td>
												<td>Gecko</td>
											</tr>
											<tr>
												<td>iCab</td>
												<td class="hidden-xs">Alexander Clauss</td>
												<td>$20 (Pro)</td>
												<td class="hidden-xs">Proprietary</td>
												<td>WebKit</td>
											</tr>
											<tr>
												<td>Internet Explorer</td>
												<td class="hidden-xs">Microsoft,
												<br>
												Spyglass</td>
												<td>comes with Windows</td>
												<td class="hidden-xs">Proprietary</td>
												<td>Trident</td>
											</tr>
											<tr>
												<td>Internet Explorer for Mac (terminated)</td>
												<td class="hidden-xs">Microsoft</td>
												<td>Free</td>
												<td class="hidden-xs">Proprietary</td>
												<td>Tasman</td>
											</tr>
											<tr>
												<td>K-Meleon</td>
												<td class="hidden-xs">Dorian, KKO, <i>et al.</i></td>
												<td>Free</td>
												<td class="hidden-xs">GPL</td>
												<td>Gecko</td>
											</tr>
											<tr>
												<td>Konqueror</td>
												<td class="hidden-xs">KDE</td>
												<td>Free</td>
												<td class="hidden-xs">GPL</td>
												<td>KHTML</td>
											</tr>
											<tr>
												<td>Links</td>
												<td class="hidden-xs">Patocka, <i>et al.</i></td>
												<td>Free</td>
												<td class="hidden-xs">GPL</td>
												<td>built-in</td>
											</tr>
											<tr>
												<td>Lunascape</td>
												<td class="hidden-xs">Lunascape Corporation</td>
												<td>Free</td>
												<td class="hidden-xs">Proprietary</td>
												<td>Tri-engine</td>
											</tr>
											<tr>
												<td>Lynx</td>
												<td class="hidden-xs">Montulli, Grobe, Rezac, <i>et al.</i></td>
												<td>Free</td>
												<td class="hidden-xs">GPL</td>
												<td>built-in</td>
											</tr>
											<tr>
												<td>Maxthon</td>
												<td class="hidden-xs">Maxthon International Limited</td>
												<td>Free</td>
												<td class="hidden-xs">Proprietary</td>
												<td>Trident</td>
											</tr>
											<tr>
												<td>Midori</td>
												<td class="hidden-xs">Christian Dywan, et al.</td>
												<td>Free</td>
												<td class="hidden-xs">LGPL</td>
												<td>WebKit</td>
											</tr>
											<tr>
												<td>Mosaic</td>
												<td class="hidden-xs">Marc Andreessen and
												Eric Bina,
												NCSA</td>
												<td>non-commercial use</td>
												<td class="hidden-xs">Proprietary</td>
												<td>built-in</td>
											</tr>
											<tr>
												<td>Mozilla Application Suite</td>
												<td class="hidden-xs">Mozilla Foundation</td>
												<td>Free</td>
												<td class="hidden-xs">tri-license</td>
												<td>Gecko</td>
											</tr>
											<tr>
												<td>Mozilla Firefox</td>
												<td class="hidden-xs">Mozilla Foundation</td>
												<td>Free</td>
												<td class="hidden-xs">MPL</td>
												<td>Gecko</td>
											</tr>
											<tr>
												<td>Netscape (v.6-7) </td>
												<td class="hidden-xs">Netscape Communications Corporation,
												AOL</td>
												<td>Free</td>
												<td class="hidden-xs">Proprietary</td>
												<td>Gecko</td>
											</tr>
											<tr>
												<td>Netscape Browser (v.8)[note 2]</td>
												<td class="hidden-xs">Mercurial Communications for
												AOL</td>
												<td>Free</td>
												<td class="hidden-xs">Proprietary</td>
												<td>Gecko, Trident</td>
											</tr>
											<tr>
												<td>Netscape Communicator (v.4)[note 2]</td>
												<td class="hidden-xs">Netscape Communications</td>
												<td>Free</td>
												<td class="hidden-xs">Proprietary</td>
												<td>Mosaic</td>
											</tr>
											<tr>
												<td>Netscape Navigator (v.1-4)[note 2]</td>
												<td class="hidden-xs">Netscape Communications</td>
												<td>Free</td>
												<td class="hidden-xs">Proprietary</td>
												<td>Mosaic</td>
											</tr>
											<tr>
												<td>Netscape Navigator 9[note 2]</td>
												<td class="hidden-xs">Netscape Communications
												<br>
												(division of AOL)</td>
												<td>Free</td>
												<td class="hidden-xs">Proprietary</td>
												<td>Gecko</td>
											</tr>
											<tr>
												<td>NetSurf</td>
												<td class="hidden-xs">The NetSurf Developers</td>
												<td>Free</td>
												<td class="hidden-xs">GPL</td>
												<td>NetSurf built-in</td>
											</tr>
											<tr>
												<td>OmniWeb</td>
												<td class="hidden-xs">The Omni Group</td>
												<td>Free</td>
												<td class="hidden-xs">Proprietary</td>
												<td>WebKit</td>
											</tr>
											<tr>
												<td>Opera</td>
												<td class="hidden-xs">Opera Software</td>
												<td>Free</td>
												<td class="hidden-xs">Proprietary</td>
												<td>Presto</td>
											</tr>
											<tr>
												<td>Opera Mobile</td>
												<td class="hidden-xs">Opera Software</td>
												<td>Free</td>
												<td class="hidden-xs">Proprietary</td>
												<td>Presto</td>
											</tr>
											<tr>
												<td>Origyn Web Browser</td>
												<td class="hidden-xs">Sand-labs</td>
												<td>Free</td>
												<td class="hidden-xs">BSD</td>
												<td>WebKit</td>
											</tr>
											<tr>
												<td>QupZilla</td>
												<td class="hidden-xs">David Rosca</td>
												<td>Free</td>
												<td class="hidden-xs">GNU GPLv3</td>
												<td>WebKit</td>
											</tr>
											<tr>
												<td>Safari</td>
												<td class="hidden-xs">Apple Inc.</td>
												<td>Free</td>
												<td class="hidden-xs">Proprietary</td>
												<td>WebKit</td>
											</tr>
											<tr>
												<td>SeaMonkey</td>
												<td class="hidden-xs">SeaMonkey Council</td>
												<td>Free</td>
												<td class="hidden-xs">tri-license</td>
												<td>Gecko</td>
											</tr>
											<tr>
												<td>Shiira</td>
												<td class="hidden-xs">Happy Macintosh Developing Team</td>
												<td>Free</td>
												<td class="hidden-xs">BSD</td>
												<td>WebKit</td>
											</tr>
											<tr>
												<td>Sleipnir</td>
												<td class="hidden-xs">Fenrir Inc.</td>
												<td>Free</td>
												<td class="hidden-xs">Proprietary</td>
												<td>Trident</td>
											</tr>
											<tr>
												<td>Torch Browser</td>
												<td class="hidden-xs">Torch Media</td>
												<td>Free</td>
												<td class="hidden-xs">Proprietary</td>
												<td>Webkit</td>
											</tr>
											<tr>
												<td>Uzbl</td>
												<td class="hidden-xs">Dieter Plaetinck</td>
												<td>Free</td>
												<td class="hidden-xs">GNU GPLv3</td>
												<td>Webkit</td>
											</tr>
											<tr>
												<td>WorldWideWeb (Later renamed Nexus)</td>
												<td class="hidden-xs">Tim Berners-Lee</td>
												<td>Free</td>
												<td class="hidden-xs">Public domain</td>
												<td>NeXTSTEP built-in</td>
											</tr>
											<tr>
												<td>w3m</td>
												<td class="hidden-xs">Akinori Ito</td>
												<td>Free</td>
												<td class="hidden-xs">MIT</td>
												<td>-</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- end: DYNAMIC TABLE PANEL -->
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
		<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
		<script type="text/javascript" src="assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>
		<script src="assets/js/table-data.js"></script>

		<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
		<script type="text/javascript" src="assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>
		<script src="assets/js/table-data.js"></script>		
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				TableData.init();
			});
		</script>
		
	</body>
	<!-- end: BODY -->

</html>
