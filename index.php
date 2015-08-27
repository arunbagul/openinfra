<html>

<head>
<title>openinfra - Welcome to Cloud Dashboard</title>
 <link rel="shortcut icon" href="assets/th_login/openlsm.ico" type="image/ico">
<link rel="stylesheet" type="text/css" href="assets/th_login/login-admin.css" title="styles1" media="screen" />

</head>

<body>
	<div id='wrap'><div class='block'>
	<?php 
	if ($_GET['login'] == "missing") {
		echo "<div class='msg-warning'><img src='assets/th_login/msg_warning.png' alt=''/><p>Please fill in all of the fields!</p></div>";
	} elseif ($_GET['login'] == "failed") {
		echo "<div class='msg-warning'><img src='assets/th_login/msg_fail.png' alt=''/><p>Login failed, Please check Username/Password!</p></div>";
	} elseif ($_GET['login'] == "logout") {
		echo "<div class='msg-warning'><img src='assets/th_login/msg_warning.png' alt=''/><p>User logged out!</p></div>";
		session_start();  
		if(isset($_SESSION['username'])) { unset($_SESSION['username']); session_destroy(); }
	}
	?>
		
        <!-- <div class="msg-warning">
            <img src="assets/th_login/msg_warning.png" alt=""/>
            <p>Please fill in all of the fields!</p>
        </div>  -->
          
        <!-- <div class="msg-error">
            <img src="assets/th_login/msg_fail.png" alt=""/>
            <p>Wrong username or password!</p>
        </div> -->
        
            <form action="session.php" method="POST">
            <div class="left"></div>
            <div class="right">
                <div class="div-row">
                	<input type="text" id="username" name="username" />
                </div>
                <div class="div-row">
                     <input type="password" id="password" name="password" />
                </div>
                <div class="rm-row">
                    <input type="checkbox" value="c" name="rm" id="remember"/> <label for="remember">Remember me?</label>
                </div>
                <div class="send-row">
                    <button id="login" value="" type="submit" name="login"></button>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>

</html>
