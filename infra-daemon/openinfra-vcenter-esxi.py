#!/usr/bin/python

import sys, getopt, re, time, getpass
from pysphere import *

#############################
def usage():
    print "\n * Usage: "+sys.argv[0]+" {--verbose|--host <vcenter host> | --user <vcenter user> | --pass <vcenter password>}\n"

#####
def myArgument(opts):
 verbose = False
 mypass = None
 for o, a in opts:
        #print "data: %s - %s " % (o,a)
        if o in ("-v", "--verbose"):
                verbose = True
        elif o in ("-h", "--host"):
                host = a
        elif o in ("-u", "--user"):
                user = a
        elif o in ("-p", "--pass"):
		mypass = a
        else:
		assert False, "Unhandled option"
 if not mypass:
   #sys.stdout.write('Enter Password: ')
   #mypass = sys.stdin.readline().strip()
   mypass = getpass.getpass()
 return [verbose,host,user,mypass]
 #

#####
def IPAddr(vmip):
  for myip in net['ip_addresses']:
    if re.match('\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}',myip) and myip != '127.0.0.1':
	#print('IPv4 address found: %s' % myip)
	return myip
    else:
	return None

#############################


############# main program ################
myopts, args = getopt.getopt(sys.argv[1:] ,"v:h:u:p:", ["verbose", "host=", "user=", "pass="])
if not myopts:
  usage()
  sys.exit()

[verbose,VChost,VCuser,VCpass] = myArgument(myopts);
#print ("Verbose: %s, Host: %s, User: %s, Pass: %s") % (verbose,VChost,VCuser,VCpass)

#connect to vcenter
server = VIServer()
server.connect(VChost, VCuser, VCpass)

MyDir = "/var/www/html/openinfra/vcenter"
File = open(MyDir + '/' + VChost + '_esxi.csv','w')
File.write("DataCenter;Cluster;HostName;Manufacture;Serial Number;ESXi Version;CPU Model;CPU Core;Memory(GB);NICs;CPUUsage;MemUsage(GB);Status\n")
print "DataCenter;Cluster;HostName;Manufacture;Serial Number;ESXi Version;CPU Model;CPU Core;Memory(GB);NICs;CPUUsage;MemUsage(GB);Status"

dcs = server.get_datacenters()
for dc_mor, dc_name in dcs.items():
  clusters = server.get_clusters(from_mor=dc_mor)
  for c_mor, c_name in clusters.items():
     hosts = server.get_hosts(from_mor=c_mor)
     for h_mor,h_name in hosts.items():
         props = VIProperty(server, h_mor)
         ESXiVer = props.summary.config.product.fullName
         numCpuCores = props.hardware.cpuInfo.numCpuCores
         numCpuPackages = props.hardware.cpuInfo.numCpuPackages
         TotalCPU = props.hardware.cpuInfo.numCpuThreads
         CPUModel = props.summary.hardware.cpuModel
         myMem = props.summary.hardware.memorySize
         MemUsage = props.summary.quickStats.overallMemoryUsage / 1024
         CPUUsage = props.summary.quickStats.overallCpuUsage
         TotalMem = myMem / (1024*1024*1024)
         MyStatus = props.summary.overallStatus
         myNICs = props.summary.hardware.numNics
         HostModel = props.hardware.systemInfo.model
         #print "\n  HW:", props.hardware.systemInfo.ServiceTag
	 #for k,v in props.summary.hardware.otherIdentifyingInfo.items():
	 #  print "%s;%s" % (k,v)
         print "%s;%s;%s;%s;%s;%s;%s (%s x %s);%s;%.0f;%s;%s;%.0f;%s" % (dc_name,c_name,h_name,HostModel,HostModel,ESXiVer,CPUModel,numCpuPackages,numCpuCores,TotalCPU,TotalMem,myNICs,CPUUsage, MemUsage,MyStatus)
         myOP = "%s;%s;%s;%s;%s;%s;%s (%s x %s);%s;%.0f;%s;%s;%.0f;%s\n" % (dc_name,c_name,h_name,HostModel,HostModel,ESXiVer,CPUModel,numCpuPackages,numCpuCores,TotalCPU,TotalMem,myNICs,CPUUsage, MemUsage,MyStatus)
	 File.write(myOP)

File.close()

#disconnect
server.disconnect()

#end
