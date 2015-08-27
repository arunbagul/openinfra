<?php

// -----------------   VMs Functions -----------------
function LinuxVMs($myDC, $myVC) {
	$Result = array();
	foreach ($myVC as $vc_host => $vc_ref) {
		$DC_Name = $vc_ref['DC'];
		$DC_Desc = $myDC[$DC_Name]['NAME'];
		$Content = file("vcenter/".$vc_host.".csv");
		// delete header
		unset($Content[0]);
		foreach($Content as $line) {
			$Fields = explode(';',$line);
			if (preg_match('/centos|linux|redhat/i', $Fields[4])) { array_push($Result, $line); }
		}	
	}
	return($Result);
}

//////////////////////////
function WindowsVMs($myDC, $myVC) {
	$Result = array();
	foreach ($myVC as $vc_host => $vc_ref) {
		$DC_Name = $vc_ref['DC'];
		$DC_Desc = $myDC[$DC_Name]['NAME'];
		$Content = file("vcenter/".$vc_host.".csv");
		// delete header
		unset($Content[0]);
		foreach($Content as $line) {
			$Fields = explode(';',$line);
			if (preg_match('/windows/i', $Fields[4])) { array_push($Result, $line); }
		}	
	}
	return($Result);
}

//////////////////////////
function PowerOnVMs($myDC, $myVC) {
	$Result = array();
	foreach ($myVC as $vc_host => $vc_ref) {
		$DC_Name = $vc_ref['DC'];
		$DC_Desc = $myDC[$DC_Name]['NAME'];
		$Content = file("vcenter/".$vc_host.".csv");
		// delete header
		unset($Content[0]);
		foreach($Content as $line) {
			$Fields = explode(';',$line);
			if (preg_match('/POWERED ON/i', $Fields[5])) { array_push($Result, $line); }
		}	
	}
	return($Result);
}

//////////////////////////
function PowerOffVMs($myDC, $myVC) {
	$Result = array();
	foreach ($myVC as $vc_host => $vc_ref) {
		$DC_Name = $vc_ref['DC'];
		$DC_Desc = $myDC[$DC_Name]['NAME'];
		$Content = file("vcenter/".$vc_host.".csv");
		// delete header
		unset($Content[0]);
		foreach($Content as $line) {
			$Fields = explode(';',$line);
			if (preg_match('/POWERED OFF/i', $Fields[5])) { array_push($Result, $line); }
		}	
	}
	return($Result);
}

//////////////////////////
function VMsByDS($vc_host, $DSName) {
	$Result = array();
	$Content = file("vcenter/".$vc_host.".csv");
	// delete header
	unset($Content[0]);
	foreach($Content as $line) {
		$Fields = explode(';',$line);
		if ($DSName == $Fields[6]) { array_push($Result, $line); }
	}
	return($Result);
}

//////////////////////////
function VMsByHost($vc_host, $HostName) {
	$Result = array();
	$Content = file("vcenter/".$vc_host.".csv");
	// delete header
	unset($Content[0]);
	foreach($Content as $line) {
		$Fields = explode(';',$line);
		if ($HostName == $Fields[1]) { array_push($Result, $line); }
	}
	return($Result);
}

//////////////////////////
function VMCount($vc_host) {
	$ResultDC = array();
	$ResultHost = array();
	$Content = file("vcenter/".$vc_host.".csv");
	// delete header
	unset($Content[0]);
	//DC wise count
	$ResultDC['CPU'] = 0;
	$ResultDC['MEM'] = 0;
	$ResultDC['TOTAL_POWERON'] = 0;
	$ResultDC['TOTAL_POWEROFF'] = 0;
	$ResultDC['TOTAL_VMS'] = count($Content);
	foreach($Content as $line) {
		$Fields = explode(';',$line);
		$HostName = $Fields[1];
		$VmState = $Fields[5];
		$VmCPU = $Fields[2];
		$VmMEM1 = $Fields[3] / 1024;
		$VmMEM = round($VmMEM1,0);
		$ResultDC['CPU'] = $ResultDC['CPU'] +  $VmCPU;
		$ResultDC['MEM'] = $ResultDC['MEM'] +  $VmMEM;
		if (preg_match('/POWERED OFF/i', $VmState)) { $ResultDC['TOTAL_POWEROFF'] = $ResultDC['TOTAL_POWEROFF'] + 1; }
		elseif (preg_match('/POWERED ON/i', $VmState)) { $ResultDC['TOTAL_POWERON'] = $ResultDC['TOTAL_POWERON'] + 1; }
		//host wise
		if (array_key_exists($HostName, $ResultHost)) {
			$ResultHost[$HostName]['TOTAL_VMS'] =  $ResultHost[$HostName]['TOTAL_VMS'] + 1;
			$ResultHost[$HostName]['CPU'] =  $ResultHost[$HostName]['CPU'] + $VmCPU;
			$ResultHost[$HostName]['MEM'] =  $ResultHost[$HostName]['MEM'] + $VmMEM;
			if (preg_match('/POWERED OFF/i', $VmState)) { $ResultHost[$HostName]['TOTAL_POWEROFF'] =  $ResultHost[$HostName]['TOTAL_POWEROFF'] + 1; }
			elseif (preg_match('/POWERED ON/i', $VmState)) { $ResultHost[$HostName]['TOTAL_POWERON'] =  $ResultHost[$HostName]['TOTAL_POWERON'] + 1; }
		} else { 
			$ResultHost[$HostName]['TOTAL_VMS'] = 1;
			$ResultHost[$HostName]['CPU'] = $VmCPU;
			$ResultHost[$HostName]['MEM'] = $VmMEM;
			if (preg_match('/POWERED OFF/i', $VmState)) { $ResultHost[$HostName]['TOTAL_POWEROFF'] = 1; $ResultHost[$HostName]['TOTAL_POWERON'] = 0; }
			elseif (preg_match('/POWERED ON/i', $VmState)) { $ResultHost[$HostName]['TOTAL_POWEROFF'] = 0; $ResultHost[$HostName]['TOTAL_POWERON'] = 1; }
		}
	}
	return array($ResultDC, $ResultHost);
}

////////////
function ESXiList ($myDC, $myVC) {
	$Result = array();	
	foreach ($myVC as $vc_host => $vc_ref) {
			$DC_Name = $vc_ref['DC'];
			$myFile = "vcenter/".$vc_host."_esxi".".csv";
			if(file_exists($myFile)) {
			  $Content = file($myFile);
			  //remove whitespace and empty lines
			  $Content = array_map('trim', $Content);
			  $Content = array_filter($Content);
			  // delete header
			  unset($Content[0]);
			  foreach($Content as $line) {
				$Fields = explode(';',$line);
				$Fields[0] = $DC_Name;
				$myLine = join (';',$Fields);
				array_push($Result, $myLine);
			  } 	
			} else { echo "<br><font color='brown'>No Data, Please check backgroud job!</font><br><br>";}
	}
	return($Result);
}

////////////
function vClusterStats ($myDC, $myVC) {
	$ResultDC = array();
	$ResultCls = array();
	$myHash = array();
	foreach ($myVC as $vc_host => $vc_ref) {
			$DC_Name = $vc_ref['DC'];
			$Content = file("vcenter/".$vc_host."_esxi".".csv");
			// delete header
			unset($Content[0]);
			foreach($Content as $line) {
				$Fields = explode(';',$line);
				$Fields[0] = $DC_Name;
				$myLine = join (';',$Fields);
				array_push($myHash, $myLine);
			}
			//get vm counts
			list($DCArr[$DC_Name],$HostArr[$DC_Name]) = VMCount($vc_host);
			///DC Wise Host ///
			$ResultDC[$DC_Name]['VM_COUNT'] = $DCArr[$DC_Name]['TOTAL_VMS'];
			$ResultDC[$DC_Name]['VM_POWERON'] = $DCArr[$DC_Name]['TOTAL_POWERON'];
			$ResultDC[$DC_Name]['VM_POWEROFF'] = $DCArr[$DC_Name]['TOTAL_POWEROFF'];
			$ResultDC[$DC_Name]['VM_CPU'] = $DCArr[$DC_Name]['CPU'];
			$ResultDC[$DC_Name]['VM_MEM'] = $DCArr[$DC_Name]['MEM'];	
	}
	
	///DC and Cluster stats
	foreach($myHash as $data) {
		$Fields = explode(';',$data);
		$tmpDC = $Fields[0];
		$tmpCls = $Fields[1];
		$tmpHost = $Fields[2];
		$tmpCPU = $Fields[7];
		$tmpMem = $Fields[8];

		///Cluster Wise Host ///
		$ResultCls[$tmpDC][$tmpCls]['VM_COUNT'] = $ResultCls[$tmpDC][$tmpCls]['VM_COUNT'] + $HostArr[$tmpDC][$tmpHost]['TOTAL_VMS'];
		$ResultCls[$tmpDC][$tmpCls]['VM_POWERON'] =  $ResultCls[$tmpDC][$tmpCls]['VM_POWERON'] + $HostArr[$tmpDC][$tmpHost]['TOTAL_POWERON'];
		$ResultCls[$tmpDC][$tmpCls]['VM_POWEROFF'] = $ResultCls[$tmpDC][$tmpCls]['VM_POWEROFF'] + $HostArr[$tmpDC][$tmpHost]['TOTAL_POWEROFF'];
		$ResultCls[$tmpDC][$tmpCls]['VM_CPU'] = $ResultCls[$tmpDC][$tmpCls]['VM_CPU'] + $HostArr[$tmpDC][$tmpHost]['CPU'];
		$ResultCls[$tmpDC][$tmpCls]['VM_MEM'] = $ResultCls[$tmpDC][$tmpCls]['VM_MEM'] + $HostArr[$tmpDC][$tmpHost]['MEM'];
		
		if (array_key_exists($tmpDC, $ResultDC)) {
			$ResultDC[$tmpDC]['HOST'] =  $ResultDC[$tmpDC]['HOST'] + 1;
			$ResultDC[$tmpDC]['CPU'] =  $ResultDC[$tmpDC]['CPU'] + $tmpCPU;
			$ResultDC[$tmpDC]['MEM'] =  $ResultDC[$tmpDC]['MEM'] + $tmpMem;
		} else { 
			$ResultDC[$tmpDC]['HOST'] = 1;
			$ResultDC[$tmpDC]['CPU'] = $tmpCPU;
			$ResultDC[$tmpDC]['MEM'] = $tmpMem;
		}
				
		if (array_key_exists($tmpDC, $ResultCls)) {
			$ResultCls[$tmpDC][$tmpCls]['HOST'] =  $ResultCls[$tmpDC][$tmpCls]['HOST'] + 1;
			$ResultCls[$tmpDC][$tmpCls]['CPU'] =  $ResultCls[$tmpDC][$tmpCls]['CPU'] + $tmpCPU;
			$ResultCls[$tmpDC][$tmpCls]['MEM'] =  $ResultCls[$tmpDC][$tmpCls]['MEM'] + $tmpMem;
		} else { 
			$ResultCls[$tmpDC][$tmpCls]['HOST'] = 1;
			$ResultCls[$tmpDC][$tmpCls]['CPU'] = $tmpCPU;
			$ResultCls[$tmpDC][$tmpCls]['MEM'] = $tmpMem; 
		}
	}//if-end
	
	//// Additional vm capacity ////
	foreach($ResultDC as $key => $line) {
		$tmpDiff =  $line['MEM'] - $line['VM_MEM'];
		//VM RAM=10GB
		if($tmpDiff < 10) { $ResultDC[$key]['VM_CP'] = 5; } else { $myCP = $tmpDiff / 10; $ResultDC[$key]['VM_CP'] = round($myCP,0);}
	}
	///
	foreach($ResultCls as $key => $line) {
		foreach($line as $myCLS => $ClsData) {
			$tmpDiff =  $ClsData['MEM'] - $ClsData['VM_MEM'];
			//VM RAM=10GB
			if($tmpDiff < 10) { $ResultCls[$key][$myCLS]['VM_CP'] = 5; } else { $myCP = $tmpDiff / 10; $ResultCls[$key][$myCLS]['VM_CP'] = round($myCP,0);}
		}
	}	
	////////
	
	//return data
	return array($ResultDC, $ResultCls);
} 

////////////
function DSList ($myDC, $myVC) {
	$Result = array();	
	foreach ($myVC as $vc_host => $vc_ref) {
		$DC_Name = $vc_ref['DC'];
		$myFile = "vcenter/".$vc_host."_ds.csv";
		if(file_exists($myFile)) {
		   $Content = file($myFile);
		   //remove whitespace and empty lines
		   $Content = array_map('trim', $Content);
		   $Content = array_filter($Content);
		   // delete header
		   unset($Content[0]);
		   foreach($Content as $line) {
			$Fields = explode(';',$line);
			array_push($Fields,$DC_Name);
			$myLine = join (';',$Fields);
			array_push($Result, $myLine);
		   }
		} else { echo "<br><font color='brown'>No Data, Please check backgroud job!</font><br><br>";}	
	}
	return($Result);
}

////////////
function DSStats ($myDC, $myVC) {
	$ResultDS = array();
	foreach ($myVC as $vc_host => $vc_ref) {
		$DC_Name = $vc_ref['DC'];
		$myFile = "vcenter/".$vc_host."_ds.csv";
		if(file_exists($myFile)) {
		   $Content = file($myFile);
		   //remove whitespace and empty lines
		   $Content = array_map('trim', $Content);
		   $Content = array_filter($Content);
		   // delete header
		   unset($Content[0]);
		   foreach($Content as $line) {
			$Fields = explode(';',$line);
			if (array_key_exists($DC_Name,$ResultDS)) {
				$ResultDS[$DC_Name]['SIZE'] = $ResultDS[$DC_Name]['SIZE'] + $Fields[2];
				$ResultDS[$DC_Name]['FREE'] = $ResultDS[$DC_Name]['FREE'] + $Fields[3];
				$ResultDS[$DC_Name]['COUNT'] = $ResultDS[$DC_Name]['COUNT'] + 1;
			} else {
				$ResultDS[$DC_Name]['SIZE'] = $Fields[2];
				$ResultDS[$DC_Name]['FREE'] =  $Fields[3];
				$ResultDS[$DC_Name]['COUNT'] = 1;			
			}
		  }
	       } else { echo "<br><font color='brown'>No Data, Please check backgroud job!</font><br><br>";}
	}
	return array($ResultDS);
}

////////////////////////////////////////

	
?>
