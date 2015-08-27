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
	<body class="lock-screen">
		<div class="main-ls">

			<div class="logo">
				<img width="25px" src="imgs/openlsm-icon.gif">OPENLSM
			</div>

			<div class="box-ls">
				<img alt="" src="assets/images/user-large.png"/>
				<div class="user-info">
					<h1><i class="fa fa-lock"></i> Arun Bagul</h1>
					<span>abagul@ops</span>
					<span><em>Please enter your password to un-lock.</em></span>
					<form action="session.php" method="POST">
						<div class="input-group">
							<input type="text" name="username" value="abagul" HIDDEN>
							<input type="text" name="password" class="form-control">
							<span class="input-group-btn">
								<button class="btn btn-blue" type="submit">
									<i class="fa fa-chevron-right"></i>
								</button> </span>
						</div>
						<div class="relogin">
							<a href="index.php">
								Not Arun Bagul</a>
						</div>
					</form>
				</div>
			</div>
			<div class="copyright">
				2014 &copy; openlsm
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
