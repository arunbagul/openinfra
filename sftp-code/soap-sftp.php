<?php

/// soap base function ///
function SoapFunction ($ipaddr, $login, $password, $funName, $myUser, $myOption, $PassORKey, $Cust, $Shell) {

	/// soap call ///
	$client = new SoapClient(null,
	  array( 'uri' => 'http://localhost:4050/MySFTP', 'location' => "http://".$ipaddr.":4050/mysoap/sftp.cgi",
	  'login' => $login , 'password' => $password,
	  'connection_timeout' => 10,
	  'trace' => 1,
	  )
	);
	///
	if ($funName == "User") {
	    //get User list
	    try { $UserList = $client->User('welcome','Arun'); return $UserList;  } catch (SoapFault $fault) { return "SOAP_ERROR"; }
	} elseif ($funName == "Logs-Secure") {
	    // get logs
	    try { $myLogs = $client->ServerLogs('secure','Arun'); return $myLogs; } catch (SoapFault $fault) { return "SOAP_ERROR"; }
    } elseif ($funName == "Logs-Messages") {
            // get logs
            try { $myLogs = $client->ServerLogs('messages','Arun');  return $myLogs; } catch (SoapFault $fault) { return "SOAP_ERROR"; }
    } elseif ($funName == "IPTables") {
            // get logs
            try { $myRules = $client->IPTables('--list','Arun');  return $myRules; } catch (SoapFault $fault) { return "SOAP_ERROR"; }
    } elseif ($funName == "SSH_Keys") {
            // get logs
            try { $myLogs = $client->SSH_Keys($myUser, $myOption, $PassORKey);  return $myLogs; } catch (SoapFault $fault) { return "SOAP_ERROR"; }
    } elseif ($funName == "Account") {
            // get logs
            try { $myLogs = $client->Account($myUser, $myOption, $PassORKey, $Cust, $Shell);  return $myLogs; } catch (SoapFault $fault) { return "SOAP_ERROR"; }
    } 
}
//

?>
