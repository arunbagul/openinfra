#!/usr/bin/perl

use strict;
use warnings;
use File::Slurp;
use POSIX qw(strftime);
use File::Path qw(make_path);
use File::Copy;
use Getopt::Long;
use File::Temp qw/tempfile/;

my @OutPut;
my $BASEPATH = "/sftp_home/home";
my $MyCatFile; my $MyEditFile ; my $MyUser; my $NewFile; my $OutPut;

######################
sub usage {
	print "\n * Usage: $0 { --user <username>  < --catfile | --editfile --newfile <newfilepath> > }\n\n"; exit 1;
}	
####
sub BkupKeyFile {
  my ($src, $dest) = @_; my $Result;
  #print "\n$src -> $dest";
  if (-f $src) {
    $Result = copy($src, $dest);
	if ($Result eq 1) { return "True"; } else { return "False"; }
  } else { return "False"; }
}
####
sub CopyKeyFile {
  my ($src, $dest) = @_; my $Result;
  #print "\n$src -> $dest";
  if (-f $src) {
    my @Data = read_file($src);
	$Result = write_file($dest, @Data);
	if ($Result eq 1) { return "True"; } 
  } else { return "False"; }
}
#######################
no warnings 'uninitialized';
####

usage() if (@ARGV < 2 or ! GetOptions('catfile' => \$MyCatFile, 'editfile' => \$MyEditFile, 'user=s' => \$MyUser , 'newfile=s' => \$NewFile));

if (($MyCatFile) && (!$MyEditFile)) {
	#print "MyUser=$MyUser\n";
	if ((getpwnam($MyUser)) && (getpwnam($MyUser) != 0)) {
		my $KeyFile = "$BASEPATH/$MyUser/.ssh/authorized_keys";
		if (-f $KeyFile) {
			# Read sshkey file
			$OutPut = read_file($KeyFile);
		} else { print "NOkeyFile"; }
	} else { print "InvalidUser"; }
	print "OutPut=$OutPut";
} elsif (($MyEditFile) && (!$MyCatFile)) {
	usage() if (!$NewFile);
	if (-f $NewFile) { 
		#print "MyUser=$MyUser and NewFile=$NewFile\n";
		if ((getpwnam($MyUser)) && (getpwnam($MyUser) != 0)) {
			my $KeyFile = "$BASEPATH/$MyUser/.ssh/authorized_keys";
			# Take backup of orig  sshkey file
			my ($Login,$Pass,$MyUID,$MyGID) = getpwnam($MyUser);
			make_path("${BASEPATH}/${MyUser}/.ssh/", { mode => 0700, owner => $MyUID, group => $MyGID}) if not -d "${BASEPATH}/${MyUser}/.ssh/";
			my $myDate = strftime "%d%m%Y-%H%M%S", localtime;
			my $BkupResult = BkupKeyFile($KeyFile , "${KeyFile}-${myDate}");
			my $Result = CopyKeyFile($NewFile, $KeyFile);
			chown $MyUID, $MyGID, $KeyFile;
			chmod 0600, $KeyFile;
			unlink($NewFile);
			print "OutPut=BkupResult=$BkupResult , Result=$Result";
		} else { print "ERROR=InvalidUser"; }		
	} else { print "ERROR=NotFound\n";}
} else  { usage(); }
#end