#!/usr/bin/python

import sys, getopt, re, time , getpass
from pysphere import *

#############################
def usage():
  print "\n * Usage: "+sys.argv[0]+" {--verbose|--host <vcenter host> | --user <user> | --pass <password> --myvm <vmname> --action [ON|OFF|RESET]}\n"

#####
def myArgument(opts):
 verbose = False
 mypass = None
 myaction = "STATUS"
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
        elif o in ("-a", "--action"):
               myaction = a
        else:
		assert False, "Unhandled option"
 if not mypass:
   #sys.stdout.write('Enter Password: ')
   #mypass = sys.stdin.readline().strip()
   mypass = getpass.getpass()
 return [verbose,host,user,mypass,myvm,myaction]
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
myopts, args = getopt.getopt(sys.argv[1:] ,"v:h:u:p:m:a:", ["verbose", "host=", "user=", "pass=", "myvm=", "action="])
if not myopts:
  usage()
  sys.exit()

[verbose,VChost,VCuser,VCpass,MyVM,MyAction] = myArgument(myopts);
#print ("Verbose: %s, Host: %s, User: %s, Pass: %s, Action: %s") % (verbose,VChost,VCuser,VCpass,MyAction)

#connect to vcenter
server = VIServer()
server.connect(VChost, VCuser, VCpass)

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

##Power Cycle
if MyAction == "ON":
  if myState == "POWERED ON":
     print "Name: %s  and  VM Current Status: %s" % (myName,myState)
     #print vm_data.is_powering_on()
     #print "VM is already ON"
  else:
     print "Name: %s and PowerCycle: %s" % (myName,"ON")
     vm_data.power_on()
     time.sleep(10)
     NewState = vm_data.get_status(basic_status=True)
     print "Name: %s and VM New Status: %s" % (myName,NewState)
elif MyAction == "OFF":
  if myState == "POWERED OFF":
     print "Name: %s  and  VM Current Status: %s" % (myName,myState)
     #print vm_data.is_powering_on()
     #print "VM is already OFF"
  else:
     print "Name: %s and PowerCycle: %s" % (myName,"OFF")
     vm_data.power_off()
     time.sleep(10)
     NewState = vm_data.get_status(basic_status=True)
     print "Name: %s and VM New Status: %s" % (myName,NewState)
elif MyAction == "RESET":
     print "Name: %s and PowerCycle: %s" % (myName,"RESET")
     vm_data.reset()
     time.sleep(10)
     NewState = vm_data.get_status(basic_status=True)
     print "Name: %s and VM New Status: %s" % (myName,NewState)
elif MyAction == "STATUS":
  print "Name;Hostname;IPAddr;CPU;Mem(MB);OS;State"
  print "%s;%s;%s;%s;%s;%s;%s" % (myName,myHost,myIP,myCPU,myMem,myOS,myState)
else:
  usage()

#disconnect
server.disconnect()

#end
