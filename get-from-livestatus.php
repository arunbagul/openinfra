<?php

////////////////////////////////
function getHost($option = "total") {
	##get data from nagios
	exec('echo -e "GET hosts \nColumns: name address state acknowledged downtimes contact_groups comments_with_info downtimes_with_info plugin_output" | nc localhost 6557', $out, $val);

	if ($val == 0) {
		//echo "<br>Total Host: " . sizeof($out);
		$Result = array();
		$total_host = sizeof($out);
		$total_up = 0;
		$total_down = 0;
		foreach ($out as $value) {
			$data = split(";", $value);
			if ($data[2] == 0) {
				$total_up++;
			} else {
				$total_down++;
				array_push($Result,"$value");
			} 
			//echo "<br>Line-".$value;
		}
		//loop end
		if ($option == "list") { return ($Result); } else { return array($total_host, $total_up, $total_down); }
	} else { 
		//echo "<br>No Data from Nagios";
		return array (0,0,0); //total host,up host,down host
	}
}

////////////////////////////////
function getServices($option = "total") {
	##get data from nagios
	exec('echo -e "GET services \nColumns: description host_name state acknowledged scheduled_downtime_depth contact_groups comments_with_info downtimes_with_info plugin_output" | nc localhost 6557', $out, $val);

	if ($val == 0) {
		//echo "<br>Total Services: " . sizeof($out);
		$Result = array();
		$total_services = sizeof($out);
		$services_ok = 0;
		$services_ack = 0;
		$services_downtime = 0;
		$services_failed = 0;
		foreach ($out as $value) {
			$data = split(";", $value);
			if ($data[2] == 0) {
				$services_ok++;
			} elseif ($data[3] == 1) {
				$services_ack++;
				array_push($Result,"$value");
			} elseif ($data[4] == 0) {
				$services_failed++;
				array_push($Result,"$value");
			} elseif ($data[4] == 1) {
				$services_downtime++;
				array_push($Result,"$value");
			} 
			//echo "<br>Line-".$value;
		}
		//loop end
		if ($option == "list") { return ($Result); } else { return array($total_services, $services_ok, $services_ack, $services_failed, $services_downtime); }
	} else { 
		//echo "<br>No Data from Nagios";
		return array (0,0,0); //total host,up host,down host
	}
}

//////////////////////////////// Foundation functions ////////////////////////////////
function getService_Mail($option = "total") {
	##get data from nagios
	exec('echo -e "GET services \nColumns: description host_name state acknowledged scheduled_downtime_depth contact_groups comments_with_info downtimes_with_info plugin_output \nFilter: description ~ Postfix  \nFilter: description ~ proc_postfix \nOr: 2 " | nc localhost 6557', $out, $val);

	if ($val == 0) {
		//echo "<br>Total Services: " . sizeof($out);
		$Result = array();
		$total_services = sizeof($out);
		$services_ok = 0;
		$services_ack = 0;
		$services_failed = 0;
		foreach ($out as $value) {
			$data = split(";", $value);
			if ($data[2] == 0) {
				$services_ok++;
			} elseif ($data[3] == 0) {
				$services_ack++;
				array_push($Result,"$value");
			} elseif ($data[4] == 0) {
				$services_failed++;
				array_push($Result,"$value");
			} 
			//echo "<br>Line-".$value;
		}
		//loop end
		if ($option == "list") { return ($Result); } else { return array($total_services, $services_ok, $services_ack, $services_failed); }
	} else { 
		//echo "<br>No Data from Nagios";
		return array (0,0,0); //total host,up host,down host
	}
}

////////////////////////////////
function getService_FS($option = "total") {
	##get data from nagios
	exec('echo -e "GET services \nColumns: description host_name state acknowledged scheduled_downtime_depth contact_groups comments_with_info downtimes_with_info plugin_output \nFilter: description ~ fs_  \nFilter: description ~ Mount options of \nOr: 2" | nc localhost 6557', $out, $val);

	if ($val == 0) {
		//echo "<br>Total Services: " . sizeof($out);
		$Result = array();
		$total_services = sizeof($out);
		$services_ok = 0;
		$services_ack = 0;
		$services_failed = 0;
		foreach ($out as $value) {
			$data = split(";", $value);
			if ($data[2] == 0) {
				$services_ok++;
			} elseif ($data[3] == 0) {
				$services_ack++;
				array_push($Result,"$value");
			} elseif ($data[4] == 0) {
				$services_failed++;
				array_push($Result,"$value");
			} 
			//echo "<br>Line-".$value;
		}
		//loop end
		if ($option == "list") { return ($Result); } else { return array($total_services, $services_ok, $services_ack, $services_failed); }
	} else { 
		//echo "<br>No Data from Nagios";
		return array (0,0,0); //total host,up host,down host
	}
}

////////////////////////////////
function getService_NFS($option = "total") {
	##get data from nagios
	exec('echo -e "GET services \nColumns: description host_name state acknowledged scheduled_downtime_depth contact_groups comments_with_info downtimes_with_info plugin_output \nFilter: description ~ nfs_ " | nc localhost 6557', $out, $val);

	if ($val == 0) {
		//echo "<br>Total Services: " . sizeof($out);
		$Result = array();
		$total_services = sizeof($out);
		$services_ok = 0;
		$services_ack = 0;
		$services_failed = 0;
		foreach ($out as $value) {
			$data = split(";", $value);
			if ($data[2] == 0) {
				$services_ok++;
			} elseif ($data[3] == 0) {
				$services_ack++;
				array_push($Result,"$value");
			} elseif ($data[4] == 0) {
				$services_failed++;
				array_push($Result,"$value");
			} 
			//echo "<br>Line-".$value;
		}
		//loop end
		if ($option == "list") { return ($Result); } else { return array($total_services, $services_ok, $services_ack, $services_failed); }
	} else { 
		//echo "<br>No Data from Nagios";
		return array (0,0,0); //total host,up host,down host
	}
}

////////////////////////////////
function getService_DB($option = "total") {
	##get data from nagios
	exec('echo -e "GET services \nColumns: description host_name state acknowledged scheduled_downtime_depth contact_groups comments_with_info downtimes_with_info plugin_output \nFilter: description ~ port_db2  \nFilter: description ~ proc_db2sysc \nOr: 2" | nc localhost 6557', $out, $val);

	if ($val == 0) {
		//echo "<br>Total Services: " . sizeof($out);
		$Result = array();
		$total_services = sizeof($out);
		$services_ok = 0;
		$services_ack = 0;
		$services_failed = 0;
		foreach ($out as $value) {
			$data = split(";", $value);
			if ($data[2] == 0) {
				$services_ok++;
			} elseif ($data[3] == 0) {
				$services_ack++;
				array_push($Result,"$value");
			} elseif ($data[4] == 0) {
				$services_failed++;
				array_push($Result,"$value");
			} 
			//echo "<br>Line-".$value;
		}
		//loop end
		if ($option == "list") { return ($Result); } else { return array($total_services, $services_ok, $services_ack, $services_failed); }
	} else { 
		//echo "<br>No Data from Nagios";
		return array (0,0,0); //total host,up host,down host
	}
}


////////////////////////////////
function getService_NTP($option = "total") {
	##get data from nagios
	exec('echo -e "GET services \nColumns: description host_name state acknowledged scheduled_downtime_depth contact_groups comments_with_info downtimes_with_info plugin_output \nFilter: description ~ NTP Time " | nc localhost 6557', $out, $val);

	if ($val == 0) {
		//echo "<br>Total Services: " . sizeof($out);
		$Result = array();
		$total_services = sizeof($out);
		$services_ok = 0;
		$services_ack = 0;
		$services_failed = 0;
		foreach ($out as $value) {
			$data = split(";", $value);
			if ($data[2] == 0) {
				$services_ok++;
			} elseif ($data[3] == 0) {
				$services_ack++;
				array_push($Result,"$value");
			} elseif ($data[4] == 0) {
				$services_failed++;
				array_push($Result,"$value");
			} 
			//echo "<br>Line-".$value;
		}
		//loop end
		if ($option == "list") { return ($Result); } else { return array($total_services, $services_ok, $services_ack, $services_failed); }
	} else { 
		//echo "<br>No Data from Nagios";
		return array (0,0,0); //total host,up host,down host
	}
}

////////////////////////////////

?>
