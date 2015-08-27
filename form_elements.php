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
		<link rel="stylesheet" href="assets/plugins/select2/select2.css">
		<link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
		<link rel="stylesheet" href="assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
		<link rel="stylesheet" href="assets/plugins/summernote/build/summernote.css">
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
						<div class="col-sm-12">
							<!-- start: TEXT FIELDS PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Text Fields
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
									<form role="form" class="form-horizontal">
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-1">
												Text Field
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Text Field" id="form-field-1" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-2">
												Password
											</label>
											<div class="col-sm-9">
												<input type="password" placeholder="Password" id="form-field-2" class="form-control">
											</div>
										</div>
										<div class="form-group has-success">
											<label class="col-sm-2 control-label" for="form-field-3" >
												Success Field
											</label>
											<div class="col-sm-9">
												<input type="text" id="form-field-3" class="form-control">
											</div>
										</div>
										<div class="form-group has-warning">
											<label class="col-sm-2 control-label" for="form-field-4" >
												Warning Field
											</label>
											<div class="col-sm-9">
												<input type="text" id="form-field-4" class="form-control">
											</div>
										</div>
										<div class="form-group has-error">
											<label class="col-sm-2 control-label" for="form-field-5" >
												Error Field
											</label>
											<div class="col-sm-9">
												<input type="text" id="form-field-5" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-6">
												Block Help
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Text Field" id="form-field-6" class="form-control">
												<span class="help-block"><i class="fa fa-info-circle"></i> A block of help text that breaks onto a new line and may extend beyond one line.</span>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-7">
												Inline Help
											</label>
											<div class="col-sm-7">
												<input type="text" placeholder="Text Field" id="form-field-7" class="form-control">
											</div>
											<span class="help-inline col-sm-2"> <i class="fa fa-info-circle"></i> Inline help text </span>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-8">
												Tooltip and Help Button
											</label>
											<div class="col-sm-9">
												<span class="input-help">
													<input id="form-field-8" class="form-control tooltips" type="text" data-placement="top" title="" placeholder="Tooltip on hover" data-rel="tooltip" data-original-title="Hello Tooltip!">
													<i class="help-button popovers" title="" data-content="More details." data-placement="right" data-trigger="hover" data-rel="popover" data-original-title="Popover on hover"></i> </span>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">
												Sizes
											</label>
											<div class="col-sm-2">
												<input type="text" placeholder="Text Field" id="form-field-9" class="form-control">
											</div>
											<div class="col-sm-3">
												<input type="text" placeholder="Text Field" id="form-field-10" class="form-control">
											</div>
											<div class="col-sm-4">
												<input type="text" placeholder="Text Field" id="form-field-11" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-12">
												Large Field
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Text Field" id="form-field-12" class="form-control input-lg">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-13">
												Small Field
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Text Field" id="form-field-13" class="form-control input-sm">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">
												Input with Icon
											</label>
											<div class="col-sm-3">
												<span class="input-icon">
													<input type="text" placeholder="Text Field" id="form-field-14" class="form-control">
													<i class="fa fa-user"></i> </span>
											</div>
											<div class="col-sm-3">
												<span class="input-icon">
													<input type="text" placeholder="Text Field" id="form-field-15" class="form-control">
													<i class="fa fa-quote-left"></i> </span>
											</div>
											<div class="col-sm-3">
												<span class="input-icon">
													<input type="text" placeholder="Text Field" id="form-field-16" class="form-control">
													<i class="fa fa-hand-o-right"></i> </span>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">
												Right Icon
											</label>
											<div class="col-sm-3">
												<span class="input-icon input-icon-right">
													<input type="text" placeholder="Text Field" id="form-field-17" class="form-control">
													<i class="fa fa-rocket"></i> </span>
											</div>
											<div class="col-sm-3">
												<span class="input-icon input-icon-right">
													<input type="text" placeholder="Text Field" id="form-field-18" class="form-control">
													<i class="fa fa-quote-right"></i> </span>
											</div>
											<div class="col-sm-3">
												<span class="input-icon input-icon-right">
													<input type="text" placeholder="Text Field" id="form-field-19" class="form-control">
													<i class="fa fa-hand-o-left"></i> </span>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-20">
												With Character Limit
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Text Field" id="form-field-20" class="form-control limited" maxlength="40">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-21">
												Disabled
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Text Field" id="form-field-21" class="form-control" disabled="disabled">
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- end: TEXT FIELDS PANEL -->
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<!-- start: TEXT AREA PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Text Area
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
									<div class="form-group">
										<label for="form-field-22">
											Default
										</label>
										<textarea placeholder="Default Text" id="form-field-22" class="form-control"></textarea>
									</div>
									<div class="form-group">
										<label for="form-field-23">
											With Character Limit
										</label>
										<textarea maxlength="50" id="form-field-23" class="form-control limited"></textarea>
									</div>
									<div>
										<label for="form-field-24">
											Autosize
										</label>
										<textarea class="autosize form-control" id="form-field-24" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 69px;"></textarea>
									</div>
								</div>
							</div>
							<!-- end: TEXT AREA PANEL -->
						</div>
						<div class="col-sm-6">
							<!-- start: SELECT BOX PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Select Box
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
									<div class="form-group">
										<label for="form-field-select-1">
											Default
										</label>
										<select id="form-field-select-1" class="form-control">
											<option value="">&nbsp;</option>
											<option value="AL">Alabama</option>
											<option value="AK">Alaska</option>
											<option value="AZ">Arizona</option>
											<option value="AR">Arkansas</option>
											<option value="CA">California</option>
											<option value="CO">Colorado</option>
											<option value="CT">Connecticut</option>
											<option value="DE">Delaware</option>
											<option value="FL">Florida</option>
											<option value="GA">Georgia</option>
											<option value="HI">Hawaii</option>
											<option value="ID">Idaho</option>
											<option value="IL">Illinois</option>
											<option value="IN">Indiana</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
											<option value="LA">Louisiana</option>
											<option value="ME">Maine</option>
											<option value="MD">Maryland</option>
											<option value="MA">Massachusetts</option>
											<option value="MI">Michigan</option>
											<option value="MN">Minnesota</option>
											<option value="MS">Mississippi</option>
											<option value="MO">Missouri</option>
											<option value="MT">Montana</option>
											<option value="NE">Nebraska</option>
											<option value="NV">Nevada</option>
											<option value="NH">New Hampshire</option>
											<option value="NJ">New Jersey</option>
											<option value="NM">New Mexico</option>
											<option value="NY">New York</option>
											<option value="NC">North Carolina</option>
											<option value="ND">North Dakota</option>
											<option value="OH">Ohio</option>
											<option value="OK">Oklahoma</option>
											<option value="OR">Oregon</option>
											<option value="PA">Pennsylvania</option>
											<option value="RI">Rhode Island</option>
											<option value="SC">South Carolina</option>
											<option value="SD">South Dakota</option>
											<option value="TN">Tennessee</option>
											<option value="TX">Texas</option>
											<option value="UT">Utah</option>
											<option value="VT">Vermont</option>
											<option value="VA">Virginia</option>
											<option value="WA">Washington</option>
											<option value="WV">West Virginia</option>
											<option value="WI">Wisconsin</option>
											<option value="WY">Wyoming</option>
										</select>
									</div>
									<div class="form-group">
										<label for="form-field-select-2">
											Multiple
										</label>
										<select multiple="multiple" id="form-field-select-2" class="form-control">
											<option value="AL">Alabama</option>
											<option value="AK">Alaska</option>
											<option value="AZ">Arizona</option>
											<option value="AR">Arkansas</option>
											<option value="CA">California</option>
											<option value="CO">Colorado</option>
											<option value="CT">Connecticut</option>
											<option value="DE">Delaware</option>
											<option value="FL">Florida</option>
											<option value="GA">Georgia</option>
											<option value="HI">Hawaii</option>
											<option value="ID">Idaho</option>
											<option value="IL">Illinois</option>
											<option value="IN">Indiana</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
											<option value="LA">Louisiana</option>
											<option value="ME">Maine</option>
											<option value="MD">Maryland</option>
											<option value="MA">Massachusetts</option>
											<option value="MI">Michigan</option>
											<option value="MN">Minnesota</option>
											<option value="MS">Mississippi</option>
											<option value="MO">Missouri</option>
											<option value="MT">Montana</option>
											<option value="NE">Nebraska</option>
											<option value="NV">Nevada</option>
											<option value="NH">New Hampshire</option>
											<option value="NJ">New Jersey</option>
											<option value="NM">New Mexico</option>
											<option value="NY">New York</option>
											<option value="NC">North Carolina</option>
											<option value="ND">North Dakota</option>
											<option value="OH">Ohio</option>
											<option value="OK">Oklahoma</option>
											<option value="OR">Oregon</option>
											<option value="PA">Pennsylvania</option>
											<option value="RI">Rhode Island</option>
											<option value="SC">South Carolina</option>
											<option value="SD">South Dakota</option>
											<option value="TN">Tennessee</option>
											<option value="TX">Texas</option>
											<option value="UT">Utah</option>
											<option value="VT">Vermont</option>
											<option value="VA">Virginia</option>
											<option value="WA">Washington</option>
											<option value="WV">West Virginia</option>
											<option value="WI">Wisconsin</option>
											<option value="WY">Wyoming</option>
										</select>
									</div>
									<div class="form-group">
										<label for="form-field-select-3">
											Select 2
										</label>
										<select id="form-field-select-3" class="form-control search-select">
											<option value="">&nbsp;</option>
											<option value="AL">Alabama</option>
											<option value="AK">Alaska</option>
											<option value="AZ">Arizona</option>
											<option value="AR">Arkansas</option>
											<option value="CA">California</option>
											<option value="CO">Colorado</option>
											<option value="CT">Connecticut</option>
											<option value="DE">Delaware</option>
											<option value="FL">Florida</option>
											<option value="GA">Georgia</option>
											<option value="HI">Hawaii</option>
											<option value="ID">Idaho</option>
											<option value="IL">Illinois</option>
											<option value="IN">Indiana</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
											<option value="LA">Louisiana</option>
											<option value="ME">Maine</option>
											<option value="MD">Maryland</option>
											<option value="MA">Massachusetts</option>
											<option value="MI">Michigan</option>
											<option value="MN">Minnesota</option>
											<option value="MS">Mississippi</option>
											<option value="MO">Missouri</option>
											<option value="MT">Montana</option>
											<option value="NE">Nebraska</option>
											<option value="NV">Nevada</option>
											<option value="NH">New Hampshire</option>
											<option value="NJ">New Jersey</option>
											<option value="NM">New Mexico</option>
											<option value="NY">New York</option>
											<option value="NC">North Carolina</option>
											<option value="ND">North Dakota</option>
											<option value="OH">Ohio</option>
											<option value="OK">Oklahoma</option>
											<option value="OR">Oregon</option>
											<option value="PA">Pennsylvania</option>
											<option value="RI">Rhode Island</option>
											<option value="SC">South Carolina</option>
											<option value="SD">South Dakota</option>
											<option value="TN">Tennessee</option>
											<option value="TX">Texas</option>
											<option value="UT">Utah</option>
											<option value="VT">Vermont</option>
											<option value="VA">Virginia</option>
											<option value="WA">Washington</option>
											<option value="WV">West Virginia</option>
											<option value="WI">Wisconsin</option>
											<option value="WY">Wyoming</option>
										</select>
									</div>
									<div class="form-group">
										<label for="form-field-select-4">
											Dropdown Multiple Select
										</label>
										<select multiple="multiple" id="form-field-select-4" class="form-control search-select">
											<option value="AL">Alabama</option>
											<option value="AK">Alaska</option>
											<option value="AZ">Arizona</option>
											<option value="AR">Arkansas</option>
											<option value="CA">California</option>
											<option value="CO">Colorado</option>
											<option value="CT">Connecticut</option>
											<option value="DE">Delaware</option>
											<option value="FL">Florida</option>
											<option value="GA">Georgia</option>
											<option value="HI">Hawaii</option>
											<option value="ID">Idaho</option>
											<option value="IL">Illinois</option>
											<option value="IN">Indiana</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
											<option value="LA">Louisiana</option>
											<option value="ME">Maine</option>
											<option value="MD">Maryland</option>
											<option value="MA">Massachusetts</option>
											<option value="MI">Michigan</option>
											<option value="MN">Minnesota</option>
											<option value="MS">Mississippi</option>
											<option value="MO">Missouri</option>
											<option value="MT">Montana</option>
											<option value="NE">Nebraska</option>
											<option value="NV">Nevada</option>
											<option value="NH">New Hampshire</option>
											<option value="NJ">New Jersey</option>
											<option value="NM">New Mexico</option>
											<option value="NY">New York</option>
											<option value="NC">North Carolina</option>
											<option value="ND">North Dakota</option>
											<option value="OH">Ohio</option>
											<option value="OK">Oklahoma</option>
											<option value="OR">Oregon</option>
											<option value="PA">Pennsylvania</option>
											<option value="RI">Rhode Island</option>
											<option value="SC">South Carolina</option>
											<option value="SD">South Dakota</option>
											<option value="TN">Tennessee</option>
											<option value="TX">Texas</option>
											<option value="UT">Utah</option>
											<option value="VT">Vermont</option>
											<option value="VA">Virginia</option>
											<option value="WA">Washington</option>
											<option value="WV">West Virginia</option>
											<option value="WI">Wisconsin</option>
											<option value="WY">Wyoming</option>
										</select>
									</div>
								</div>
							</div>
							<!-- end: SELECT BOX PANEL -->
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<!-- start: CHECKBOXES PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Checkboxes
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
										Inline Checkbox
									</p>
									<label class="checkbox-inline">
										<input type="checkbox" value="" class="grey">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="" class="grey">
										Checkbox 2
									</label>
									<p>
										Vertical Checkbox
									</p>
									<div class="checkbox">
										<label>
											<input type="checkbox" value="" class="grey">
											Checkbox 1
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" value="" class="grey">
											Checkbox 2
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" value="" class="grey">
											Checkbox 3
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" value="" class="grey" disabled="disabled">
											Disabled
										</label>
									</div>
									<p>
										Verious Colours
									</p>
									<label class="checkbox-inline">
										<input type="checkbox" class="red" value="" checked="checked">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="green" value="" checked="checked">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="teal" value="" checked="checked">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="orange" value="" checked="checked">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="purple" value="" checked="checked">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="yellow" value="" checked="checked">
										Checkbox 1
									</label>
									<p>
										Verious Styles
									</p>
									<label class="checkbox-inline">
										<input type="checkbox" class="square-black" value="" checked="checked">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="square-grey" value="" checked="checked">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="square-red" value="" checked="checked">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="square-green" value="" checked="checked">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="square-teal" value="" checked="checked">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="square-orange" value="" checked="checked">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="square-purple" value="" checked="checked">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="square-yellow" value="" checked="checked">
										Checkbox 1
									</label>
									<p>
										Verious Styles
									</p>
									<label class="checkbox-inline">
										<input type="checkbox" class="flat-black" value="" checked="checked">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="flat-grey" value="" checked="checked">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="flat-red" value="" checked="checked">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="flat-green" value="" checked="checked">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="flat-teal" value="" checked="checked">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="flat-orange" value="" checked="checked">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="flat-purple" value="" checked="checked">
										Checkbox 1
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" class="flat-yellow" value="" checked="checked">
										Checkbox 1
									</label>
								</div>
							</div>
							<!-- end: CHECKBOXES PANEL -->
						</div>
						<div class="col-sm-6">
							<!-- start: RADIO PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Radio
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
										Inline radio
									</p>
									<label class="radio-inline">
										<input type="radio" value="" name="optionsRadios" class="grey">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" value="" name="optionsRadios" class="grey">
										radio 2
									</label>
									<p>
										Vertical radio
									</p>
									<div class="radio">
										<label>
											<input type="radio" value="" name="optionsRadios2" class="grey">
											radio 1
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" value="" name="optionsRadios2" class="grey">
											radio 2
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" value="" name="optionsRadios2" class="grey">
											radio 3
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" value="" name="optionsRadios2" class="grey" disabled="disabled">
											Disabled
										</label>
									</div>
									<p>
										Verious Colours
									</p>
									<label class="radio-inline">
										<input type="radio" class="red" value="" checked="checked" name="optionsRadios3">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" class="green" value="" checked="checked" name="optionsRadios4">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" class="teal" value="" checked="checked" name="optionsRadios5">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" class="orange" value="" checked="checked" name="optionsRadios6">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" class="purple" value="" checked="checked" name="optionsRadios7">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" class="yellow" value="" checked="checked" name="optionsRadios8">
										radio 1
									</label>
									<p>
										Verious Styles
									</p>
									<label class="radio-inline">
										<input type="radio" class="square-black" value="" checked="checked" name="optionsRadios9">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" class="square-grey" value="" checked="checked" name="optionsRadios10">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" class="square-red" value="" checked="checked" name="optionsRadios11">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" class="square-green" value="" checked="checked" name="optionsRadios12">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" class="square-teal" value="" checked="checked" name="optionsRadios13">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" class="square-orange" value="" checked="checked" name="optionsRadios14">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" class="square-purple" value="" checked="checked" name="optionsRadios15">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" class="square-yellow" value="" checked="checked" name="optionsRadios16">
										radio 1
									</label>
									<p>
										Verious Styles
									</p>
									<label class="radio-inline">
										<input type="radio" class="flat-black" value="" checked="checked" name="optionsRadios17">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" class="flat-grey" value="" checked="checked" name="optionsRadios18">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" class="flat-red" value="" checked="checked" name="optionsRadios19">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" class="flat-green" value="" checked="checked" name="optionsRadios20">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" class="flat-teal" value="" checked="checked" name="optionsRadios21">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" class="flat-orange" value="" checked="checked" name="optionsRadios22">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" class="flat-purple" value="" checked="checked" name="optionsRadios23">
										radio 1
									</label>
									<label class="radio-inline">
										<input type="radio" class="flat-yellow" value="" checked="checked" name="optionsRadios24">
										radio 1
									</label>
								</div>
							</div>
							<!-- end: RADIO PANEL -->
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<!-- start: DATE/TIME PICKER PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Date/Time Picker
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
										Date Picker
									</p>
									<div class="input-group">
										<input type="text" data-date-format="dd-mm-yyyy" data-date-viewmode="years" class="form-control date-picker">
										<span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
									</div>
									<hr>
									<p>
										Time Picker
									</p>
									<div class="input-group input-append bootstrap-timepicker">
										<input type="text" class="form-control time-picker">
										<span class="input-group-addon add-on"><i class="fa fa-clock-o"></i></span>
									</div>
									<hr>
									<p>
										Date Range Picker
									</p>
									<div class="input-group">
										<span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
										<input type="text" class="form-control date-range">
									</div>
									<hr>
									<p>
										Date + Time Range Picker
									</p>
									<div class="input-group">
										<span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
										<input type="text" class="form-control date-time-range">
									</div>
								</div>
							</div>
							<!-- end: DATE/TIME PICKER PANEL -->
						</div>
						<div class="col-sm-6">
							<!-- start: MASKED INPUT PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Masked Input
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
										<label for="form-field-mask-1">
											Date <small class="text-success">99/99/9999</small>
										</label>
										<div class="input-group">
											<input type="text" id="form-field-mask-1" class="form-control input-mask-date">
											<span class="input-group-btn">
												<button type="button" class="btn btn-default">
													<i class="fa fa-calendar"></i>
													Go!
												</button> </span>
										</div>
									</div>
									<hr>
									<div>
										<label for="form-field-mask-2">
											Phone <small class="text-warning">(999) 999-9999</small>
										</label>
										<div class="input-group">
											<span class="input-group-addon"> <i class="fa fa-phone"></i> </span>
											<input type="text" id="form-field-mask-2" class="form-control input-mask-phone">
										</div>
									</div>
									<hr>
									<div>
										<label for="form-field-mask-3">
											Product Key <small class="text-error">a*-999-a999</small>
										</label>
										<div class="input-group">
											<input type="text" id="form-field-mask-3" class="form-control input-mask-product">
											<span class="input-group-addon"> <i class="fa fa-key"></i> </span>
										</div>
									</div>
									<hr>
									<div>
										<label for="form-field-mask-4">
											Eye Script <small class="text-info">~9.99 ~9.99 999</small>
										</label>
										<div>
											<input type="text" id="form-field-mask-4" class="form-control input-mask-eyescript">
										</div>
									</div>
									<hr>
									<div>
										<label for="form-field-mask-5">
											Mask Money <small class="text-success">0.00</small>
										</label>
										<div>
											<input type="text" id="form-field-mask-5" class="form-control currency">
										</div>
									</div>
								</div>
							</div>
							<!-- end: MASKED INPUT PANEL -->
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<!-- start: COLOR PICKER PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Color Picker
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
									<div class="form-group">
										<label>
											Default
										</label>
										<div>
											<input type="text" value="#8fff00" class="form-control color-picker">
										</div>
									</div>
									<div class="form-group">
										<label>
											RGBA
										</label>
										<div>
											<input type="text" value="rgb(0,194,255,0.78)" class="form-control color-picker-rgba">
										</div>
									</div>
									<div class="form-group">
										<label>
											As Component
										</label>
										<div class="input-group colorpicker-component" data-color="rgb(81, 145, 185)" data-color-format="rgb">
											<input type="text" value="" readonly class="form-control">
											<span class="input-group-addon"><i style="background-color: rgb(81, 145, 185)"></i></span>
										</div>
									</div>
									<div class="form-group">
										<label>
											Color Palette
										</label>
										<div class="input-group">
											<input type="text" value="" class="form-control" id="selected-color1">
											<span class="btn input-group-addon" data-toggle="dropdown">color</span>
											<ul class="dropdown-menu pull-right center">
												<li>
													<div class="color-palette"></div>
												</li>
											</ul>
										</div>

										
									</div>
								</div>
							</div>
							<!-- end: COLOR PICKER PANEL -->
						</div>
						<div class="col-sm-6">
							<!-- start: TAGS PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Tags
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
									<label>
										Defaults:
									</label>
									<input id="tags_1" type="text" class="tags" value="foo,bar,baz,roffle">
								</div>
							</div>
							<!-- end: TAGS PANEL -->
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<!-- start: FILE UPLOAD PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									File upload
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
									<form class="form-horizontal" action="#">
										<div class="form-group">
											<div class="col-sm-12">
												<label>
													Simple
												</label>
												<div data-provides="fileupload" class="fileupload fileupload-new">
													<span class="btn btn-file btn-light-grey"><i class="fa fa-folder-open-o"></i> <span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span>
														<input type="file">
													</span>
													<span class="fileupload-preview"></span>
													<a style="float: none" data-dismiss="fileupload" class="close fileupload-exists" href="#">
														&times;
													</a>
												</div>
												<p class="help-block">
													Example block-level help text here.
												</p>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-4">
												<label>
													Advanced
												</label>
												<div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="input-group">
														<div class="form-control uneditable-input">
															<i class="fa fa-file fileupload-exists"></i>
															<span class="fileupload-preview"></span>
														</div>
														<div class="input-group-btn">
															<div class="btn btn-light-grey btn-file">
																<span class="fileupload-new"><i class="fa fa-folder-open-o"></i> Select file</span>
																<span class="fileupload-exists"><i class="fa fa-folder-open-o"></i> Change</span>
																<input type="file" class="file-input">
															</div>
															<a href="#" class="btn btn-light-grey fileupload-exists" data-dismiss="fileupload">
																<i class="fa fa-times"></i> Remove
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-12">
												<label>
													Image Upload
												</label>
												<div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
													</div>
													<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
													<div>
														<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
															<input type="file">
														</span>
														<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
															<i class="fa fa-times"></i> Remove
														</a>
													</div>
												</div>
												<div class="alert alert-warning">
													<span class="label label-warning">NOTE!</span>
													<span> Image preview only works in IE10+, FF3.6+, Chrome6.0+ and Opera11.1+. In older browsers and Safari, the filename is shown instead. </span>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- end: FILE UPLOAD PANEL -->
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<!-- start: WYSIWYG EDITORS PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									WYSIWYG Editors
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
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">
													Summernote
												</label>
												<div class="summernote">
													Hello Summernote
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label">
													CKEditor
												</label>
												<textarea class="ckeditor form-control" cols="10" rows="10"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end: WYSIWYG EDITORS PANEL -->
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
		<script src="assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
		<script src="assets/plugins/select2/select2.min.js"></script>
		<script src="assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
		<script src="assets/plugins/jquery-maskmoney/jquery.maskMoney.js"></script>
		<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
		<script src="assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
		<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="assets/plugins/bootstrap-colorpicker/js/commits.js"></script>
		<script src="assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>
		<script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="assets/plugins/summernote/build/summernote.min.js"></script>
		<script src="assets/plugins/ckeditor/ckeditor.js"></script>
		<script src="assets/plugins/ckeditor/adapters/jquery.js"></script>
		<script src="assets/js/form-elements.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
	</body>
	<!-- end: BODY -->

</html>
