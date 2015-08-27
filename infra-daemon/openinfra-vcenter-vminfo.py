#!/usr/bin/python

import sys, getopt, re, time, getpass
from pysphere import *

#############################
def usage():
    print "\n * Usage: "+sys.argv[0]+" {--verbose|--host <vcenter host> | --user <vcenter user> | --pass <vcenter password> --myvm <vmname>}\n"

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
        elif o in ("-m", "--myvm"):
                myvm = a
        else:
		assert False, "Unhandled option"
 if not mypass:
   #sys.stdout.write('Enter Password: ')
   #mypass = sys.stdin.readline().strip()
   mypass = getpass.getpass()
 return [verbose,host,user,mypass,myvm]
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
myopts, args = getopt.getopt(sys.argv[1:] ,"v:h:u:p:m:", ["verbose", "host=", "user=", "pass=", "myvm="])
if not myopts:
  usage()
  sys.exit()

[verbose,VChost,VCuser,VCpass,MyVM] = myArgument(myopts);
#print ("Verbose: %s, Host: %s, User: %s, Pass: %s") % (verbose,VChost,VCuser,VCpass)

#connect to vcenter
server = VIServer()
server.connect(VChost, VCuser, VCpass)

#print "Name;Hostname;IPAddr;CPU;Mem(MB);OS;State;DataStore;vLAN;IPAddr"
#print MyVM
vm_data = server.get_vm_by_name(MyVM)
myName = vm_data.get_property('name')
myHost = vm_data.get_property('hostname')
myIP = vm_data.get_property('ip_address')
myOS = vm_data.get_property('guest_full_name')
myCPU = vm_data.get_property('num_cpu')
myMem = vm_data.get_property('memory_mb')
myState = vm_data.get_status(basic_status=True)
myNet = vm_data.get_property('net')
myPath = vm_data.get_property('path')
myDS, VMPath = myPath.split();
MyVM_Host = vm_data.properties.runtime.host.name
#print "\nHost = %s" % (MyVM_Host)

#myFiles = vm_data.get_property('files')
#print myFiles

myDict = dict()
myDict['size'] = 0
myDict['disk'] = 0
myDisk = vm_data.get_property('disks')
#print myDisk
if myDisk:
	for Tmp_Disk in myDisk:
	  DiskSize = Tmp_Disk['capacity'] / 1048576
	  #print "Disk: %s ; Size(GB): %.0f" % (Tmp_Disk['descriptor'],DiskSize)
	  myDict['disk'] += 1
	  myDict['size'] = myDict['size'] + DiskSize
	  #for k,v in Tmp_Disk.items():
		 #print "\nItem(%s) = %s" % (k,v)

myStr = []
if myNet:
    for net in myNet:
      #print "Rec: %s:" %  (net)
      myvLAN = net['network'];
      myIP = IPAddr(net['ip_addresses']);
      if myvLAN == None:
	myvLAN = ""
      if myIP == None:
	myIP = ""
      myStr.extend([myvLAN, myIP])
VMdata = ';'.join(list(myStr))
print "Name: %s\nESXiHost: %s\nHostname: %s\nIPAddr: %s \nCPU: %s\nMem(MB): %s\nOS: %s\nState: %s\nDataStore: %s\nIPAddr: %s" % (myName,MyVM_Host,myHost,myIP,myCPU,myMem,myOS,myState,myDS,VMdata)
print "DiskSize(%s): %.0f" % (myDict['disk'],myDict['size'])

#disconnect
server.disconnect()

#end
