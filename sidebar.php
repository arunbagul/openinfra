<?php
	 //session 
	 if(!isset($_SESSION['username'])) { header('Location: /404.html'); exit;  }
?>

<div class="navbar-content">
<!-- start: SIDEBAR -->
<div class="main-navigation navbar-collapse collapse">
	<!-- start: MAIN MENU TOGGLER BUTTON -->
	<div class="navigation-toggler">
		<i class="clip-chevron-left"></i>
		<i class="clip-chevron-right"></i>
	</div>
	<!-- end: MAIN MENU TOGGLER BUTTON -->
	
	<!-- start: MAIN NAVIGATION MENU -->
	<ul class="main-navigation-menu">
		<?php if ($PAGE_NAME == "Dashboard") { echo "<li class='active open'>"; } else  { echo "<li>"; } ?>
			<a href="dashboard.php"><i class="clip-home-3"></i>
				<span class="title"> Dashboard </span><span class="selected"></span>
			</a>
		</li>
	
		<?php if ($PAGE_NAME == "vCenter") { echo "<li class='active open'>"; } else  { echo "<li>"; } ?>
			<a href="javascript:void(0)"><i class="clip-screen"></i>
				<span class="title"> vCenter Multisite </span><i class="icon-arrow"></i>
				<span class="selected"></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="vcenter.php?child=esxi">
						<span class="title"> Esxi Servers</span>
					</a>
				</li>
				<li>
					<a href="vcenter.php?child=ds">
						<span class="title"> DataStores</span>
					</a>
				</li>				
				<li>
					<a href="vcenter.php?child=vms">
						<span class="title">Virtual Machines(VMs)</span>
					</a>
				</li>
				<li>
					<a href="vcenter.php?child=cluster">
						<span class="title"> Clusters </span>
					</a>
				</li>
				<li>
					<a href="vcenter.php?child=deploy_vm">
						<span class="title"> Deplopy VM </span>
						<span class="badge badge-new">new</span>
					</a>
				</li>
				<li>
					<a href="vcenter.php?child=reporting">
						<span class="title"> Reporting </span>
					</a>
				</li>
			</ul>
		</li>
		
		<?php if ($PAGE_NAME == "HAproxy") { echo "<li class='active open'>"; } else  { echo "<li>"; } ?>
			<a href="javascript:void(0)"><i class="clip-cog-2"></i>
				<span class="title"> F5/HAproxy </span><i class="icon-arrow"></i>
				<span class="selected"></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="haproxy.php?child=cluster">
						<span class="title"> HA Cluster </span>
					</a>
				</li>
				<li>
					<a href="haproxy.php?&child=domain">
						<span class="title"> VIP Domains </span>
					</a>
				</li>
				<li>
					<a href="haproxy.php?child=backend">
						<span class="title"> Backend </span>
						<span class="badge badge-new">new</span>
					</a>
				</li>
				<li>
					<a href="haproxy.php?child=stats">
						<span class="title"> Stats </span>
					</a>
				</li>
			</ul>
		</li>
		
		<?php if ($PAGE_NAME == "HW") { echo "<li class='active open'>"; } else  { echo "<li>"; } ?>
			<a href="javascript:void(0)"><i class="clip-grid-6"></i>
				<span class="title"> Hardware Inventory </span><i class="icon-arrow"></i>
				<span class="selected"></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="hw.php?child=ipam">
						<span class="title">IPAM</span>
					</a>
				</li>
				<li>
					<a href="hw.php?child=phy">
						<span class="title">Physical Servers</span>
					</a>
				</li>
                                <li>
                                        <a href="hw.php?child=vm">
                                                <span class="title">Virtual Servers</span>
                                        </a>
                                </li>
				<li>
					<a href="hw.php?child=reports">
						<span class="title">Inventory Reports</span>
					</a>
				</li>
			</ul>
		</li>
		
		<?php if ($PAGE_NAME == "Servers") { echo "<li class='active open'>"; } else  { echo "<li>"; } ?>
			<a href="javascript:void(0)"><i class="clip-pencil"></i>
				<span class="title"> Servers </span><i class="icon-arrow"></i>
				<span class="selected"></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="dns.php">
						<span class="title">DNS Server</span>
					</a>
				</li>
				<li>
					<a href="sftp.php">
						<span class="title">SFTP Server</span>
					</a>
				</li>
				<li>
					<a href="ftp.php">
						<span class="title">FTP Server</span>
					</a>
				</li>
				<li>
					<a href="mail.php">
						<span class="title">Mail Server</span>
					</a>
				</li>
				<li>
					<a href="apache.php">
						<span class="title">Apache Server</span>
						<span class="badge badge-new">new</span>
					</a>
				</li>
				<li>
					<a href="mysql.php">
						<span class="title">MySQL DB</span>
						<span class="badge badge-new">new</span>
					</a>
				</li>				
			</ul>
		</li>
		
		<?php if ($PAGE_NAME == "GNOC") { echo "<li class='active open'>"; } else  { echo "<li>"; } ?>
			<a href="javascript:void(0)"><i class="clip-user-2"></i>
				<span class="title">GNOC Dashboard</span><i class="icon-arrow"></i>
				<span class="selected"></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="gnoc.php?child=infra">
						<span class="title">Infra View</span>
					</a>
				</li>
				<li>
					<a href="gnoc.php?child=apps">
						<span class="title">Application View</span>
					</a>
				</li>
			</ul>
		</li>

			<?php if ($PAGE_NAME == "Reports") { echo "<li class='active open'>"; } else  { echo "<li>"; } ?>
			<a href="javascript:void(0)"><i class="clip-bars"></i>
				<span class="title">Reports</span> 
				<span class="selected"></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="cp.php">
						<span class="title">Capacity Planning</span>
					</a>
				</li>
				<li>
					<a href="nagios-reporting.php">
						<span class="title">Nagios Reporting</span>
					</a>
				</li>
				<li>
					<a href="hs.php">
						<span class="title">Health Status</span>
					</a>
				</li>
				<li>
					<a href="uptime.php">
						<span class="title">Uptime</span>
					</a>
				</li>	
				<li>
					<a href="stats.php">
						<span class="title">Stats</span>
					</a>
				</li>
			</ul>
		</li>
		
	</ul>
	<!-- end: MAIN NAVIGATION MENU -->
</div>
<!-- end: SIDEBAR -->
</div>
