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
vms = server.get_registered_vms()

MyDir = "/var/www/html/openinfra/vcenter"
File = open(MyDir + '/' + VChost + '.csv','w')
File.write("Name;ESXiHost;CPU;Mem(MB);OS;State;DataStore;DiskCount;Disks(GB);vLAN;IPAddr\n")
print "Name;ESXiHost;CPU;Mem(MB);OS;State;DataStore;DiskCount;Disks(GB);vLAN;IPAddr"
for myvm in vms:
  #print myvm
  vm_data = server.get_vm_by_path(myvm)
  myDict = dict()
  myDict['size'] = 0
  myDict['disk'] = 0
  myDisk = vm_data.get_property('disks')
  if myDisk:
	for Tmp_Disk in myDisk:
		DiskSize = Tmp_Disk['capacity'] / 1048576
		myDict['disk'] += 1
		myDict['size'] = myDict['size'] + DiskSize  
  myName = vm_data.get_property('name')
  myHostName = vm_data.get_property('hostname')
  myHost = vm_data.properties.runtime.host.name
  myIP = vm_data.get_property('ip_address')
  myOS = vm_data.get_property('guest_full_name')
  myCPU = vm_data.get_property('num_cpu')
  myMem = vm_data.get_property('memory_mb')
  myState = vm_data.get_status(basic_status=True)
  myPath = vm_data.get_property('path')
  match = re.search('\[(.*)\]\s+(.*)', myPath)
  myDS, VMPath =  match.group(1),  match.group(2)
  myNet = vm_data.get_property('net')
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
  print "%s;%s;%s;%s;%s;%s;%s;%s;%s;%s" % (myName,myHost,myCPU,myMem,myOS,myState,myDS,myDict['disk'],myDict['size'],VMdata)
  myOP = "%s;%s;%s;%s;%s;%s;%s;%s;%s;%s\n" % (myName,myHost,myCPU,myMem,myOS,myState,myDS,myDict['disk'],myDict['size'],VMdata)
  File.write(myOP)

File.close()

#disconnect
server.disconnect()

#end
