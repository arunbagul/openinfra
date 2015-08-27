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
		<link rel="stylesheet" href="assets/plugins/jQuery-File-Upload/css/jquery.fileupload-ui.css">
		<!-- CSS adjustments for browsers with JavaScript disabled -->
		<noscript>
			<link rel="stylesheet" href="assets/plugins/jQuery-File-Upload/css/jquery.fileupload-ui-noscript.css">
		</noscript>
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
							<!-- start: MULTIPLE FILE UPLOAD -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Multiple File Upload
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
										<p>
											File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery.
											<br>
											Supports cross-domain, chunked and resumable file uploads and client-side image resizing.
											<br>
											Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.
										</p>
									</div>
									<form id="fileupload" action="http://jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
										<!-- Redirect browsers with JavaScript disabled to the origin page -->
										<noscript>
											<input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/">
										</noscript>
										<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
										<div class="row fileupload-buttonbar">
											<div class="col-lg-7">
												<!-- The fileinput-button span is used to style the file input field as button -->
												<span class="btn btn-success fileinput-button"> <i class="glyphicon glyphicon-plus"></i> <span>Add files...</span>
													<input type="file" name="files[]" multiple>
												</span>
												<button type="submit" class="btn btn-primary start">
													<i class="glyphicon glyphicon-upload"></i>
													<span>Start upload</span>
												</button>
												<button type="reset" class="btn btn-warning cancel">
													<i class="glyphicon glyphicon-ban-circle"></i>
													<span>Cancel upload</span>
												</button>
												<button type="button" class="btn btn-danger delete">
													<i class="glyphicon glyphicon-trash"></i>
													<span>Delete</span>
												</button>
												<input type="checkbox" class="toggle">
												<!-- The loading indicator is shown during file processing -->
												<span class="fileupload-loading"></span>
											</div>
											<!-- The global progress information -->
											<div class="col-lg-5 fileupload-progress fade">
												<!-- The global progress bar -->
												<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
													<div class="progress-bar progress-bar-success" style="width:0%;"></div>
												</div>
												<!-- The extended global progress information -->
												<div class="progress-extended">
													&nbsp;
												</div>
											</div>
										</div>
										<!-- The table listing the files available for upload/download -->
										<table role="presentation" class="table table-striped">
											<tbody class="files"></tbody>
										</table>
									</form>
								</div>
							</div>
							<!-- end: MULTIPLE FILE UPLOAD -->
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
		<!-- The basic File Upload plugin -->
		<!-- The template to display files available for upload -->
		<script id="template-upload" type="text/x-tmpl">
			{% for (var i=0, file; file=o.files[i]; i++) { %}
			<tr class="template-upload fade">
			<td>
			<span class="preview"></span>
			</td>
			<td>
			<p class="name">{%=file.name%}</p>
			{% if (file.error) { %}
			<div><span class="label label-danger">Error</span> {%=file.error%}</div>
			{% } %}
			</td>
			<td>
			<p class="size">{%=o.formatFileSize(file.size)%}</p>
			{% if (!o.files.error) { %}
			<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
			{% } %}
			</td>
			<td>
			{% if (!o.files.error && !i && !o.options.autoUpload) { %}
			<button class="btn btn-primary start">
			<i class="glyphicon glyphicon-upload"></i>
			<span>Start</span>
			</button>
			{% } %}
			{% if (!i) { %}
			<button class="btn btn-warning cancel">
			<i class="glyphicon glyphicon-ban-circle"></i>
			<span>Cancel</span>
			</button>
			{% } %}
			</td>
			</tr>
			{% } %}
		</script>
		<!-- The template to display files available for download -->
		<script id="template-download" type="text/x-tmpl">
			{% for (var i=0, file; file=o.files[i]; i++) { %}
			<tr class="template-download fade">
			<td>
			<span class="preview">
			{% if (file.thumbnailUrl) { %}
			<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
			{% } %}
			</span>
			</td>
			<td>
			<p class="name">
			{% if (file.url) { %}
			<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
			{% } else { %}
			<span>{%=file.name%}</span>
			{% } %}
			</p>
			{% if (file.error) { %}
			<div><span class="label label-danger">Error</span> {%=file.error%}</div>
			{% } %}
			</td>
			<td>
			<span class="size">{%=o.formatFileSize(file.size)%}</span>
			</td>
			<td>
			{% if (file.deleteUrl) { %}
			<button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
			<i class="glyphicon glyphicon-trash"></i>
			<span>Delete</span>
			</button>
			<input type="checkbox" name="delete" value="1" class="toggle">
			{% } else { %}
			<button class="btn btn-warning cancel">
			<i class="glyphicon glyphicon-ban-circle"></i>
			<span>Cancel</span>
			</button>
			{% } %}
			</td>
			</tr>
			{% } %}
		</script>
		<script src="assets/plugins/jQuery-File-Upload/js/vendor/jquery.ui.widget.js"></script>
		<!-- The Templates plugin is included to render the upload/download listings -->
		<script src="assets/plugins/jQuery-File-Upload/js/tmpl.min.js"></script>
		<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
		<script src="assets/plugins/jQuery-File-Upload/js/load-image.min.js"></script>
		<!-- The Canvas to Blob plugin is included for image resizing functionality -->
		<script src="assets/plugins/jQuery-File-Upload/js/canvas-to-blob.min.js"></script>
		<!-- blueimp Gallery script -->
		<script src="assets/plugins/jQuery-File-Upload/js/jquery.blueimp-gallery.min.js"></script>
		<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
		<script src="assets/plugins/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
		<!-- The basic File Upload plugin -->
		<script src="assets/plugins/jQuery-File-Upload/js/jquery.fileupload.js"></script>
		<!-- The File Upload processing plugin -->
		<script src="assets/plugins/jQuery-File-Upload/js/jquery.fileupload-process.js"></script>
		<!-- The File Upload image preview & resize plugin -->
		<script src="assets/plugins/jQuery-File-Upload/js/jquery.fileupload-image.js"></script>
		<!-- The File Upload audio preview plugin -->
		<script src="assets/plugins/jQuery-File-Upload/js/jquery.fileupload-audio.js"></script>
		<!-- The File Upload video preview plugin -->
		<script src="assets/plugins/jQuery-File-Upload/js/jquery.fileupload-video.js"></script>
		<!-- The File Upload validation plugin -->
		<script src="assets/plugins/jQuery-File-Upload/js/jquery.fileupload-validate.js"></script>
		<!-- The File Upload user interface plugin -->
		<script src="assets/plugins/jQuery-File-Upload/js/jquery.fileupload-ui.js"></script>
		<!-- The main application script -->
		<script src="assets/plugins/jQuery-File-Upload/js/main.js"></script>
		<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
		<!--[if (gte IE 8)&(lt IE 10)]>
		<script src="js/cors/jquery.xdr-transport.js"></script>
		<![endif]-->
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
			});
		</script>
	</body>
	<!-- end: BODY -->

</html>
