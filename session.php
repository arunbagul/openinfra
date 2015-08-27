<?php

$username = trim($_POST['username']);
$password = trim($_POST['password']);

function checkLdapConnection($DNuser, $DNpass) {
        //ldap domain
        $basedn = 'DC=OPS,DC=TEST';
        $ldaphost = 'ldap://192.168.0.100';

        // Connecting to LDAP
        $ldapconn = ldap_connect($ldaphost);
        ldap_set_option($ldapconn, LDAP_OPT_NETWORK_TIMEOUT, 5);
        ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
        if ($ldapconn) {
          // bind with appropriate dn to give update access
          //$r=ldap_bind($ldapconn, $DNuser, $DNpass);
          $r=ldap_bind($ldapconn, $DNuser.'@OPS.TEST', $DNpass);
          if($r) {
            ldap_close($ldapconn); return ('PASS');
          } else { return ('BIND_FAILED'); }
        } else { return ('LDAP_FAILED'); }
}

if ((!empty($username)) && (!empty($password))) {
	if((isset($username)) && (isset($password))) {
	 //echo "<br>UserName- ".$username;
	 //echo "<br>Password- ".$password;
	 
	 //admin user
	 $Admin = "admin";
	 $mypass = md5($password);
	 $hashed_password = '21232f297a57a5a743894a0e4a801fc3';
	 if (($username == $Admin) && ($mypass == $hashed_password)) {
		//auth succesful, start session
		session_start();
		// store session data
		$_SESSION['username'] = $username;
		header('Location: dashboard.php'); exit;
	 } else {
		//ldap authentication function
	    $status = checkLdapConnection($username,$password);
		if ($status == "PASS") {
		  session_start();
		  // store session data
		  $_SESSION['username'] = $username;
		  header('Location: dashboard.php'); exit;
		} else { header('Location: index.php?login=failed'); exit;}
	}
  }	
} else { header('Location: index.php?login=missing'); exit;}

?>
