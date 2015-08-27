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
File = open(MyDir + '/' + VChost + '_ds.csv','w')
File.write("DatastoreName;DSType;DSSize;DSFree;DSStatus;isMultiHost\n")
print "DatastoreName;DSType;DSSize;DSFree;DSStatus;isMultiHost"

for ds_mor, name in server.get_datastores().items():
   props = VIProperty(server, ds_mor)
   DSName = name
   DSType = props.summary.type
   DSSize = props.summary.capacity
   DSFree = props.summary.freeSpace
   if hasattr(props.summary, "uncommitted"):
      DSUncomm = props.summary.uncommitted
   DSStatus = props.summary.accessible
   try:
      DSMultiHost = props.summary.multipleHostAccess
   except Exception:
      DSMultiHost = 'NA'
      pass
   DSURL = props.summary.url
   #calculate
   DSSize1 = DSSize / (1024 * 1024 * 1024)
   DSFree1 = DSFree / (1024 * 1024 * 1024)
   if DSMultiHost == True or  DSMultiHost == 'NA':
	print "%s;%s;%.0f;%.0f;%s;%s" % (DSName,DSType,DSSize1,DSFree1,DSStatus,DSMultiHost)
   	myOP = "%s;%s;%.0f;%.0f;%s;%s\n" % (DSName,DSType,DSSize1,DSFree1,DSStatus,DSMultiHost)
   	File.write(myOP)

File.close()

#disconnect
server.disconnect()

#end
