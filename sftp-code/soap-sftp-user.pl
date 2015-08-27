#!/usr/bin/perl

use strict;
use warnings;
use File::Slurp;
use POSIX qw(strftime);
use File::Path qw(make_path);
use File::Copy;
use Getopt::Long;

my @OutPut;
my $BASEPATH = "/sftp_home/home";
my $MyAdd; my $MyEdit ; my $MyUser; my $MyDesc; my $MyPass; my $MyShell;  my $OutPut; my %STATUS;

no warnings 'uninitialized';
######################
sub trim($) {
	my $string = shift;
	$string =~ s/^\s+//;
	$string =~ s/\s+$//;
	return $string;
}
######
sub usage {
	print "\n * Usage: $0 { --user <username>  < --add | --edit --desc <description> --pass <password> --shell < /bin/bash|/sbin/nologin > }\n\n"; exit 1;
}	
####
sub BkupKeyFile {
  my ($src, $dest) = @_; my $Result;
  if (-f $src) {
    $Result = copy($src, $dest);
	if ($Result eq 1) { return "True"; } else { return "False"; }
  } else { return "False"; }
}
####
sub CopyKeyFile {
  my ($src, $dest) = @_; my $Result;
  if (-f $src) {
    my @Data = read_file($src);
	$Result = write_file($dest, @Data);
	if ($Result eq 1) { return "True"; } 
  } else { return "False"; }
}
#######################

usage() if (@ARGV < 4 or ! GetOptions('add' => \$MyAdd, 'edit' => \$MyEdit, 'user=s' => \$MyUser , 'desc=s' => \$MyDesc, 'pass=s' => \$MyPass, 'shell=s' => \$MyShell));

#Validation
if ($MyUser =~ m/(\/|;|`|>|<| |\^|\$|%|&|\(|\)|#)/) {	
	$STATUS{'ERROR'} = "Validation Failed";
    print "ERROR=$STATUS{'ERROR'}\n";
    exit 1;
}
if ($MyPass =~ m/(\/|;|`)/) {
	$STATUS{'ERROR'} = "Validation Failed";
    print "ERROR=$STATUS{'ERROR'}\n";
    exit 1;
}
if ($MyDesc =~ m/(\/|;|`|>|<|\^|\$|%|&|\(|\)|#)/) {	
	$STATUS{'ERROR'} = "Validation Failed";
    print "ERROR=$STATUS{'ERROR'}\n";
    exit 1;
}

if (($MyAdd) && (!$MyEdit)) {
	usage() if ((!$MyDesc) or (!$MyPass) or (!$MyShell) );
	usage() if ((trim($MyShell) ne "/sbin/nologin") and (trim($MyShell) ne "/bin/bash"));
	my ($name, $passwd, $uid, $gid, $quota,$comment, $gcos, $dir, $shell) = getpwnam($MyUser);
	if (($name eq undef) and ($name ne "root")) {
		#print "Adding User MyUser=$MyUser\n";
		my $UserName = lc(trim($MyUser));
		my $UserPass = trim($MyPass);
		my $HomeDir = "${BASEPATH}/${UserName}";
		my $Desc = trim($MyDesc);
		my $Shell = trim($MyShell);
		my $cmd = qq(useradd  --skel '' -m -d '$HomeDir' --comment '$Desc' --shell '$Shell' '$UserName');
		#print "$cmd --pass '$UserPass'\n";
		system($cmd);
		if ($? eq 0) { 
			$STATUS{'PASSWORD'} = "Done";
			open my $CH_PASS, '|/usr/sbin/chpasswd' or $STATUS{'PASSWORD'} = "Failed";
			print {$CH_PASS} "$UserName:$UserPass";
			close $CH_PASS;		
			$STATUS{'USERADD'} = "Done";
		} else { $STATUS{'USERADD'} = "Failed"; $STATUS{'PASSWORD'} = "Failed"; }
	} else { $STATUS{'ERROR'} = "User Exist";}
	print "USERADD=$STATUS{'USERADD'},PASSWORD=$STATUS{'PASSWORD'}, ERROR=$STATUS{'ERROR'}\n";
	
} elsif (($MyEdit) && (!$MyAdd)) {
	my ($name, $passwd, $uid, $gid, $quota,$comment, $get_gcos, $dir, $get_shell) = getpwnam($MyUser);
	#print "\nInfo= $name, $passwd, $uid, $gid, $quota,$comment, $get_gcos, $dir, $get_shell\n";
	if (($name) and ($name ne "root")) {
		my $UserName = lc(trim($MyUser));	
		if (($MyDesc) && ($get_gcos ne trim($MyDesc))) {
			my $Desc = trim($MyDesc);
			my $cmd = qq(usermod  --comment '$Desc' '$UserName');
			system($cmd);
			if ($? eq 0) { $STATUS{'DESC'} = "Done"; } else { $STATUS{'DESC'} = "Failed"; }
		} else { $STATUS{'DESC'} = "No Changes"; }
		if ($MyPass) {
			my $UserPass = trim($MyPass);
			$STATUS{'PASSWORD'} = "Done";
			open my $CH_PASS, '|/usr/sbin/chpasswd' or $STATUS{'PASSWORD'} = "Failed";
			print {$CH_PASS} "$UserName:$UserPass";
			close $CH_PASS;
		} else { $STATUS{'PASSWORD'} = "No Changes"; }
		if (($MyShell) && ($get_shell ne trim($MyShell))) {
			my $Shell = trim($MyShell);
			my $cmd = qq(usermod  --shell '$Shell' '$UserName');
			system($cmd);
			if ($? eq 0) { $STATUS{'SHELL'} = "Done";} else { $STATUS{'SHELL'} = "Failed"; }
		} else { $STATUS{'SHELL'} = "No Changes"; }
	} else { $STATUS{'ERROR'} = "User Exist";}
	print "PASSWORD=$STATUS{'PASSWORD'},DESC=$STATUS{'DESC'}, SHELL=$STATUS{'SHELL'}, ERROR=$STATUS{'ERROR'}\n";
	
} else  { usage(); }


#end
